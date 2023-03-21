<?php
  include_once "./include/header.php";
  include_once "./include/menu.php"
?>
<?php
$conn = mysqli_connect("localhost","hanyoko","gks2060!","hanyoko");
$sql= "select * from musiclists where kinds={$_GET['title']}";
$result = mysqli_query($conn, $sql);
$total= mysqli_num_rows($result)? mysqli_num_rows($result): 0;
$list = "";

while($row=(mysqli_fetch_array($result))) {
    $list = $list."
    <li>
        <img class='album' src='{$row['photourl']}'>
        <h4>{$row['title']}</h4>
        <div class='subtitle'>
            <p>{$row['name']}</p>
            <p>{$row['kinds']}</p>
            <p>{$row['date']}</p>
        </div>
        <p class='light'>{$row['contents']}</p>
        <form action='./process/musiccart_process.php' method='post' class='btns'>
            <input type='hidden' name='no' value='{$row['m_no']}'>
            <button type='button'><i class='fas fa-heart'></i></button>
            <button type='submit'><i class='fas fa-cart-arrow-down'></i></button>
        </a></form>
    </li>
    ";
}
if(mysqli_num_rows($result)==0){
	$list= "<h5>검색 결과가 존재하지 않습니다.</h5>";
}
?>

<?php
	include_once "./include/music.php";
    include_once "./include/footer.php";
?>     