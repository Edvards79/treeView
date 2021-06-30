<?php

namespace app\core;

abstract class DbModel extends Model
{
	abstract static public function tableName(): string;

	abstract public function attributes(): array;

	abstract public static function primaryKey(): string;

	public function save()
	{
		$tableName = $this->tableName();
		$attributes = $this->attributes();
		$params = array_map(fn($attr) => ":$attr", $attributes);
		$statement = self::prepare("INSERT INTO $tableName (".implode(',', $attributes).")
			VALUES(".implode(',', $params).");");
		foreach ($attributes as $attribute) {
			$statement->bindValue(":$attribute", $this->{$attribute});
		}
		$statement->execute();
		return true;
	}

	public static function findOne($where)
	{
		$tableName = static::tableName();
		$attributes = array_keys($where);
		$sql = implode("AND ", array_map(fn($attr) => "$attr = :$attr", $attributes));
		$statement = self::prepare("SELECT * FROM $tableName WHERE $sql;");
		foreach ($where as $key => $value) {
			$statement->bindValue(":$key", $value);
		}
		$statement->execute();
		return $statement->fetchObject(static::class);
	}

	public static function update($set, $where)
	{
		$tableName = static::tableName();
		$toSet = implode(", ", array_map(fn($attr) => "$attr = :$attr", array_keys($set)));
		$inWhere = implode("AND ", array_map(fn($attr) => "$attr = :$attr", array_keys($where)));
		$sql = "UPDATE $tableName SET $toSet WHERE $inWhere;";
		foreach ($set as $key => $value) {
			$sql = str_replace(":$key", "'$value'", $sql);
		}

		$statement = self::prepare($sql);
		foreach ($where as $key => $value) {
			$statement->bindValue(":$key", $value);
		}
		$statement->execute();
		return true;
	}

	public static function deleteWhere($where)
	{
		$tableName = static::tableName();
		$inWhere = implode("AND ", array_map(fn($attr) => "$attr = :$attr", array_keys($where)));
		$statement = self::prepare("DELETE FROM $tableName WHERE $inWhere;");
		foreach ($where as $key => $value) {
			$statement->bindValue(":$key", $value);
		}
		$statement->execute();
		return true;
	}

	public static function findAllWhere(array $where)
	{
		$tableName = static::tableName();
		$attributes = array_keys($where);
		$sql = implode("AND ", array_map(fn($attr) => "$attr = :$attr", $attributes));
		$statement = self::prepare("SELECT * FROM $tableName WHERE $sql");
		foreach ($where as $key => $value) {
			$statement->bindValue(":$key", $value);
		}
		$statement->execute();
		return $statement->fetchAll();
	}

	public static function findALl()
	{
		$tableName = static::tableName();
		$statement = self::prepare("SELECT * FROM $tableName");
		$statement->execute();
		return $statement->fetchAll();
	}

	public static function prepare($sql)
	{
		return Application::$app->db->pdo->prepare($sql);
	}
}