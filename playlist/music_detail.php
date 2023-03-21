<?php
    include_once "./include/header.php";
?>
<?php
	include_once "./include/menu.php";
?>

<?php
 $conn = mysqli_connect("localhost","hanyoko","gks2060!","hanyoko");
 $sql = "select * from musiclists where m_no = {$_GET['m_no']};";
 $result = mysqli_query($conn, $sql);
 $row = mysqli_fetch_array($result);

?>
    <div id="musicDetail">
        <h4>곡 정보</h4>
        <div class="box">
            <div class="left">
            <img src="<?="{$row['photourl']}"?>">
            </div>
            <div class="right">
                <p>노래 제목 : <span><?="{$row['title']}"?></span></p>
                <p>가수명 : <span><?="{$row['name']}"?></span></p>
                <p>발매일 : <span><?="{$row['date']}"?></span></p>
                <p>장르 : <span><?="{$row['kinds']}"?></span></p>
                <p>내용 : <br/><br/><span><?="{$row['contents']}"?></span></p>
            </div>
        </div>
        
        <div class="lyrics">
            <h4>가사</h4>
            <p><?="{$row['lyrics']}"?></p>
        </div>
    </div>


<?php
	include_once "./include/music.php";
    include_once "./include/footer.php";
?>  