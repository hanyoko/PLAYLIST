<?php
	$conn= mysqli_connect("localhost","hanyoko","gks2060!","hanyoko");
	$sql= "delete from musiclists where m_no={$_POST['no']}";
	$result = mysqli_query($conn, $sql);

	if($result){
	?>
	<script>
		alert("삭제 되었습니다.");
		history.back();
	</script>
	<?php
	}else{
		echo $sql;
	}
?>