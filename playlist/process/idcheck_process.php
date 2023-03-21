<?php
    $userid = $_GET['id'];
    $conn= mysqli_connect("localhost","hanyoko","gks2060!","hanyoko");
    $sql = "select * from member where id = '{$userid}'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result)>0){
        echo "yes";
    }else {
        echo "no";
    }
?>