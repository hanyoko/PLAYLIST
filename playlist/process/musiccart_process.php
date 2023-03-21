<?php
    $conn = mysqli_connect("localhost","hanyoko","gks2060!","hanyoko");
		session_start();
    $sql = "insert into musiccart(c_no,memberid)
    values('{$_POST['no']}','{$_SESSION['id']}')"; 
    $result = mysqli_query($conn, $sql);
    if($result){
				?>
				<script>
					alert("음악을 My Music에 담았습니다.");
					history.back();
				</script>
				<?php
    }elseif($_SESSION['id']==''){
				?>
				<script>
					alert("로그인 후에 이용하실 수 있는 기능입니다.");
					location.href="../index.php";
				</script>
				<?php
		}else {
        echo $sql;
    }
?>