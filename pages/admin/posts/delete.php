<?php

use app\Help;
use core\HTML\Form;
use core\auth\DBAuth;

$postTable = App::getInstance()->getTable('Post');
if(!empty($_POST)){
    $result = $postTable->delete($_POST['id']);
    header('Location: admin.php');
}
