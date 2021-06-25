<?php

use app\Help;
use core\HTML\Form;
use core\auth\DBAuth;

$category = App::getInstance()->getTable('Category');
if(!empty($_POST)){
    $result = $category->delete($_POST['id']);
    header('Location: admin.php?p=categories.index');
}
