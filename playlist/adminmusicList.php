<?php
  include_once "./include/header.php";
	include_once "./include/menu.php"
?>

<?php
	session_start();
  $conn = mysqli_connect("localhost","hanyoko","gks2060!","hanyoko");
  $sql = "select * from musiclists order by musiclists.m_no desc LIMIT 30 ";
  $result = mysqli_query($conn, $sql);
  $list = "";
  $total= mysqli_num_rows($result);
  while($row=(mysqli_fetch_array($result))) {
    $list2 = "";
    $result2=mysqli_query($conn,$sql);
    foreach ($arr as $value) {
        if($row['kinds']=='$value'){
            $list2=$list2;
        }else{
            $list2.="<option value='{$value}'>{$value}</option>";
        };
    };
    $list = $list."
    <li class='adminli'>
        <form action='./process/music_update.php' method='post'>
            <input type='hidden' name='no' value='{$row['m_no']}'>
            <img class='album' src='{$row['photourl']}'>
            <h4><input type='text' name='title' value='{$row['title']}'></h4>
            <div class='subtitle'>
                <p><input type='text' name='name' value='{$row['name']}'></p>
                <select name='kinds'>
                    <option value='{$row['kinds']}'>{$row['kinds']}</option>
                    <?=$list2?>
                </select>
                <p><input type='number' name='date' value='{$row['date']}'></p>
            </div>
            <p class='light'><textarea name='contents' cols='150' rows='3'>{$row['contents']}</textarea></p>
            <button type='submit'>M</button>
        </form>
        
        <form action='./process/music_delete.php' method='post'>
            <input type='hidden' name='no' value='{$row['m_no']}'>
            <button type='submit'>X</button>
        </form>

    </li>
    ";
  }
	if(mysqli_num_rows($result)==0){
		$list= "<h5>검색 결과가 존재하지 않습니다.</h5>";
	}
?>

<?php
	include_once "./include/adminMusic.php";
  include_once "./include/footer.php";
?>     