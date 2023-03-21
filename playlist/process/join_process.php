<?php
$conn= mysqli_connect("localhost","hanyoko","gks2060!","hanyoko");

$sql= "insert into member(id, pw, name, phonenumber, address)
values('{$_POST['id']}','{$_POST['pw']}','{$_POST['name']}','{$_POST['phonenumber']}','{$_POST['address']}')";

if($_POST['pw']==$_POST['pwCh']){
	$result= mysqli_query($conn,$sql);

	if($result){
		?>
		<script>
			alert("환영합니다.");
			location.replace("../index.php");
		</script>
	<?php
	}else {
		?>
	<script>
		alert("사용할 수 없는 ID입니다.");
		history.back();
	</script>
		<?php
	}

}else {
	?>
	<script>
		alert("비밀번호를 확인해주세요");
		history.back();
	</script>
	<?php
}
?>