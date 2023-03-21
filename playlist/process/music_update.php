<?php
	$conn= mysqli_connect("localhost","hanyoko","gks2060!","hanyoko");
	$sql= "update musiclists
		set title='{$_POST['title']}', name='{$_POST['name']}', date='{$_POST['date']}',contents='{$_POST['contents']}', kinds='{$_POST['kinds']}'
		where m_no={$_POST['no']}";
	$result = mysqli_query($conn, $sql);

	if($result){
	?>
	<script>
		alert("수정 되었습니다.");
		history.back();
	</script>
	<?php
	}else{
		echo $sql;
	}
?>