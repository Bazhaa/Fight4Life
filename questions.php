<?php
include_once("config.php");


function getQuestionsById($id) {
    $connection = getConnection();
    $sql = "SELECT * FROM Questions WHERE CategoryId = $id";
    $result = select($connection, $sql);
    closeConnection($connection);
    $questions = array();
    while($item = mysqli_fetch_array($result)) {
        $questions[] = $item;
    }
    return $questions;
}

?>