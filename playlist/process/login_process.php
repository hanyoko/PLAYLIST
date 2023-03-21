<?php
$conn= mysqli_connect("localhost","hanyoko","gks2060!","hanyoko");
$sql= "select * from member where id='{$_POST['id']}'";
$result= mysqli_query($conn,$sql);
if(mysqli_num_rows($result)==1){
	$row = mysqli_fetch_array($result);
	if($row['pw']==$_POST['pw']){
		session_start();
		$_SESSION['id']=$_POST['id'];
	}else{
	?>
	<script>
		alert("아이디 또는 비밀번호가 틀렸습니다.");
		history.back();
	</script>
	<?php	
	}
	if(isset($_SESSION['id'])){
	?>
	<script>
		alert("로그인 되었습니다.");
		location.href="/playlist/main.php"
	</script>

	<?php
		echo "로그인 되었습니다.";
	}
}else{
	?>
	<script>
		alert("비밀번호를 틀렸습니다.");
		history.back();
	</script>
	<?php	
}

?>
