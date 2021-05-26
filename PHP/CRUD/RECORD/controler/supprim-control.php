<?php
if(isset($_POST['supprim'])){
    $disc_id = $_POST['id'];
    try {
        $delete = $db->prepare("DELETE FROM disc WHERE disc_id = :disc_id");
        $delete->bindparam(":disc_id" , $disc_id);
        $delete->execute();
        header("Location:../");
    } catch (PDOException $e) {
        // echo $e->getMessage();
    }
}