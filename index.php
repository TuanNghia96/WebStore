<?php
include "Controller/Controller.php";

$Controller = new Controller ();
if (isset($_GET['laptop'])){
    $Controller->show($_GET['laptop']);
} elseif (isset($_GET['create'])){
    $Controller->create();
} elseif (isset($_POST['name']) && isset($_GET['id'])){
    $Controller->update();
} elseif (isset($_POST['name'])){
    $Controller->store();
} elseif (isset($_GET['edit'])){
    $Controller->edit($_GET['edit']);
} elseif (isset($_GET['delete'])){
    $Controller->delete($_GET['id']);
}
else
$Controller->index();

?>