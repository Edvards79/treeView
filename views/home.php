<?php
use app\models\User;
use app\models\LoginForm;
?>    
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">

                <?php $form = app\core\form\Form::signinBegin("login", "post"); ?>
                <h2 class="title">Sign in</h2>
                <?php echo $form->inputField($loginModel ?? new LoginForm(), "username")->placeholder("Username"); ?>
                <?php echo $form->inputField($loginModel ?? new LoginForm(), "password")->passwordField()->placeholder("Password"); ?>
                <input type="submit" value="Submit" class="button solid">
                <?php app\core\form\Form::end(); ?>

                <?php $form = app\core\form\Form::signupBegin("register", "post"); ?>
                <h2 class="title">Sign up</h2>
                <?php echo $form->inputField($registerModel ?? new User(), "username")->placeholder("Username"); ?>
                <?php echo $form->inputField($registerModel ?? new User(), "password")->passwordField()->placeholder("Password"); ?>
                <input type="submit" value="Submit" class="button solid">
                <?php app\core\form\Form::end(); ?>

            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>New here ?</h3>
                    <p>
                        You can sign up here
                    </p>
                    <button class="button transparent" id="sign-up-btn">
                        Sign up
                    </button>
                </div>
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>One of us ?</h3>
                    <p>
                        You can login here
                    </p>
                    <button class="button transparent" id="sign-in-btn">
                        Sign in
                    </button>
                </div>
            </div>
        </div>
    </div>