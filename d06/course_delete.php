<?php
if (isset($_REQUEST["id"])) {
    include_once "course.php";
    $id = $_REQUEST["id"];
    if (courseDAO::remove($id)) {
        header("location:course_view.php");
    }
}