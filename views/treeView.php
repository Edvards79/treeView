<div class="container sign-up-mode">
    <div class="panels-container">
        <div class="left-panel"></div>
        <div class="panel right-panel">
            <div class="content log-out">
                <p>You can log out here</p>
                <form action="logout" method="post">
                    <input type="submit" class="button transparent" value="Log out">
                </form>
            </div>
        </div>
    </div>
    <div class="treeview js-treeview">
        <ul>
            <li>
                <div class="treeview__level" data-level="A">
                    <input value="" type="text" class="level-title" placeholder="Type your text here"></input>
                    <div class="treeview__level-btns">
                        <div class="btn btn-default btn-sm level-add"><span class="fa fa-plus"></span></div>
                        <div class="btn btn-default btn-sm level-remove"><span class="fa fa-trash text-danger"></span></div>
                        <div class="btn btn-default btn-sm level-same"><span>Add Same Level</span></div>
                        <div class="btn btn-default btn-sm level-sub"><span>Add Sub Level</span></div>
                    </div>
                </div>
                <ul>

                    <li>
                        <div class="treeview__level" data-level="B">
                            <input value="" type="text" class="level-title" placeholder="Type your text here"></input>
                            <div class="treeview__level-btns">
                                <div class="btn btn-default btn-sm level-add"><span class="fa fa-plus"></span></div>
                                <div class="btn btn-default btn-sm level-remove"><span class="fa fa-trash text-danger"></span></div>
                                <div class="btn btn-default btn-sm level-same"><span>Add Same Level</span></div>
                                <div class="btn btn-default btn-sm level-sub"><span>Add Sub Level</span></div>
                            </div>
                        </div>
                        <ul>

                            <li>
                                <div class="treeview__level" data-level="C">
                                    <input value="" type="text" class="level-title" placeholder="Type your text here"></input>
                                    <div class="treeview__level-btns">
                                        <div class="btn btn-default btn-sm level-add"><span class="fa fa-plus"></span></div>
                                        <div class="btn btn-default btn-sm level-remove"><span class="fa fa-trash text-danger"></span></div>
                                        <div class="btn btn-default btn-sm level-same"><span>Add Same Level</span></div>
                                        <div class="btn btn-default btn-sm level-sub"><span>Add Sub Level</span></div>
                                    </div>
                                </div>
                                <ul>

                                    <li>
                                        <div class="treeview__level" data-level="D">
                                            <input value="" type="text" class="level-title" placeholder="Type your text here"></input>
                                            <div class="treeview__level-btns">
                                                <div class="btn btn-default btn-sm level-add"><span class="fa fa-plus"></span></div>
                                                <div class="btn btn-default btn-sm level-remove"><span class="fa fa-trash text-danger"></span></div>
                                                <div class="btn btn-default btn-sm level-same"><span>Add Same Level</span></div>
                                                <div class="btn btn-default btn-sm level-sub"><span>Add Sub Level</span></div>
                                            </div>
                                        </div>
                                        <ul>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <div class="treeview__level" data-level="C">
                                    <input value="" type="text" class="level-title" placeholder="Type your text here"></input>
                                    <div class="treeview__level-btns">
                                        <div class="btn btn-default btn-sm level-add"><span class="fa fa-plus"></span></div>
                                        <div class="btn btn-default btn-sm level-remove"><span class="fa fa-trash text-danger"></span></div>
                                        <div class="btn btn-default btn-sm level-same"><span>Add Same Level</span></div>
                                        <div class="btn btn-default btn-sm level-sub"><span>Add Sub Level</span></div>
                                    </div>
                                </div>
                                <ul>
                                </ul>
                            </li>

                            <li>
                                <div class="treeview__level" data-level="C">
                                    <input value="" type="text" class="level-title" placeholder="Type your text here"></input>
                                    <div class="treeview__level-btns">
                                        <div class="btn btn-default btn-sm level-add"><span class="fa fa-plus"></span></div>
                                        <div class="btn btn-default btn-sm level-remove"><span class="fa fa-trash text-danger"></span></div>
                                        <div class="btn btn-default btn-sm level-same"><span>Add Same Level</span></div>
                                        <div class="btn btn-default btn-sm level-sub"><span>Add Sub Level</span></div>
                                    </div>
                                </div>
                                <ul>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <div class="treeview__level" data-level="B">
                            <input value="" type="text" class="level-title" placeholder="Type your text here"></input>
                            <div class="treeview__level-btns">
                                <div class="btn btn-default btn-sm level-add"><span class="fa fa-plus"></span></div>
                                <div class="btn btn-default btn-sm level-remove"><span class="fa fa-trash text-danger"></span></div>
                                <div class="btn btn-default btn-sm level-same"><span>Add Same Level</span></div>
                                <div class="btn btn-default btn-sm level-sub"><span>Add Sub Level</span></div>
                            </div>
                        </div>
                        <ul>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>

<template id="levelMarkup">
    <li>
        <div class="treeview__level" data-level="A">
            <input value="" type="text" class="level-title" placeholder="Type your text here"></input>
            <div class="treeview__level-btns">
                <div class="btn btn-default btn-sm level-add"><span class="fa fa-plus"></span></div>
                <div class="btn btn-default btn-sm level-remove"><span class="fa fa-trash text-danger"></span></div>
                <div class="btn btn-default btn-sm level-same"><span>Add Same Level</span></div>
                <div class="btn btn-default btn-sm level-sub"><span>Add Sub Level</span></div>
            </div>
        </div>
        <ul>
        </ul>
    </li>
</template>
</div>