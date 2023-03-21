<?php
    $file = $_FILES['photourl'];
    // var_dump($file);
    move_uploaded_file($file['tmp_name'], "../images/{$file['name']}");
    $conn= mysqli_connect("localhost","hanyoko","gks2060!","hanyoko");
    $imgurl= $file['tmp_name']==''? "/playlist/images/album/default.jpg": "/playlist/images/album/{$file['name']}";

    $date = substr($_POST['date'], 0, 4 );
    $sql = "insert into musiclists(title,name,date,kinds,contents,photourl)
    values('{$_POST['title']}','{$_POST['artist']}',{$date},'{$_POST['kinds']}','{$_POST['contents']}','{$imgurl}')"; 
    $result = mysqli_query($conn, $sql);
    // header("Location:../music_list.php");
    if($result){
        echo "성공";
        header("Location:../music_list.php");
    }else {
        echo $sql;
    }
?>