<?php
	include_once "./include/header.php" ;
?>
		<form action="./process/join_process.php" class="main" method="post" onsubmit="return joinUsCh()">
			<p class="idcheck">
				<input type="text" name="id" id="userid" placeholder="ID">
				<button onclick="idCh()" type="button">아이디 중복체크</button>
				<p id="idtext"></p>
			</p>
			<p>
				<input type="password" name="pw" id="userPw" placeholder="PASSWORD">
				<p id="pwError"></p>
			</p>
			<p>
				<input type="password" name="pwCh" id="userPwCh"placeholder="PASSWORD CHECK">
				<p id="pwChError" class="error"></p>
			</p>
			<p>
				<input type="text" name="name" id="userName" placeholder="NAME">
				<p id="nameText" class="error"></p>
			</p>
			<p>
				<input type="text" name="phonenumber" id="userPhone" placeholder="PHONE NUMBER">
				<p id="phoneText" class="error"></p>
			</p>
			<p>
				<input type="text" name="address" id="userAddress" placeholder="ADDRESS">
				<p id="addressText" class="error"></p>
			</p>
			<button type="submit">SUBMIT</button>
		</form>
		<script>
		let idChecking = false;
			async function idCh(){
				let useridInput = document.querySelector("#userid");
				try{
					const res = await fetch(`http://hanyoko.dothome.co.kr/playlist/process/idcheck_process.php?id=${useridInput.value}`);
					console.log(res);
					const result = await res.text();
					console.log(result);
					if(result=="yes"){
                        document.querySelector("#idtext").innerHTML = "이미 등록된 아이디입니다.";
                    }else {
                        document.querySelector("#idtext").innerHTML = "사용가능한 아이디입니다.";
                    }
					idChecking = true;
				}
				catch(e){
					console.log(e);
				}
			}
			//회원가입 체크
			let success = 0;
			function joinUsCh(){

				//비밀번호 체크
				let pw = document.getElementById("userPw").value;
				let pwCh = document.getElementById("userPwCh").value;

				if(pw !== pwCh){
					document.getElementById("pwError").innerHTML="";
					document.getElementById("pwChError").innerHTML="비밀번호가 동일하지 않습니다.";
					if(pw.search(/[0-9]/g) < 0 || pw.search(/[a-z]/g) < 0 || pw.search(/[A-Z]/g) < 0 || pw.search(/[!@#$%^&*]/g) < 0){
						document.getElementById("pwError").innerHTML="8자 이상으로 영대소문자, 숫자, 특수문자를 조합하여 입력해주세요.";
						return false;
					}else if(pw.search(/\s/) > 0) {
						document.getElementById("pwError").innerHTML="공백 없이 입력해주세요.";
						return false;
					}else {
						document.getElementById("pwError").innerHTML="확인되었습니다.";
						success += 1;
						successCh();
					}
					return false;
				}else{
					document.getElementById("pwError").innerHTML="";
					document.getElementById("pwChError").innerHTML="";
					if(pw.length < 8 || pw.search(/[0-9]/g) < 0 || pw.search(/[a-z]/g) < 0 || pw.search(/[A-Z]/g) < 0 || pw.search(/[!@#$%^&*]/g) < 0) {
						document.getElementById("pwError").innerHTML="8자 이상으로 영대소문자, 숫자, 특수문자를 조합하여 입력해주세요.";
						return false;
					}else if(pw.search(/\s/) > 0) {
						document.getElementById("pwError").innerHTML="공백 없이 입력해주세요.";
						return false;
					}else {
						document.getElementById("pwError").innerHTML="확인되었습니다.";
						document.getElementById("pwChError").innerHTML="확인되었습니다.";
						success += 1;
						successCh();
					}
				}

				//이름 체크
				let name = document.getElementById("userName").value;
				
				if(name.length <= 0){
					document.getElementById("nameText").innerHTML="이름을 입력해주세요.";
					if(name.search(/\s/) > 0){
						document.getElementById("nameText").innerHTML="공백 없이 입력해주세요.";
						return false;
					}
					return false;
				}else{
					document.getElementById("nameText").innerHTML="확인되었습니다.";
					success += 1;
					successCh();
				}

				//휴대폰 번호 체크
				let phone = document.getElementById("userPhone").value;

				if(phone.length < 11){
					document.getElementById("phoneText").innerHTML="휴대폰 번호를 다시 확인해주세요.(ex: 01012345678)";
					return false;
				}else if(phone.search(/\s/) > 0){
					document.getElementById("phoneText").innerHTML="공백 없이 입력해주세요.";
					return false;
				}else{
					document.getElementById("phoneText").innerHTML="확인되었습니다.";
					success += 1;
					successCh();
				}

				//주소체크
				let address = document.getElementById("userAddress").value;

				if(address.length <= 0){
					document.getElementById("addressText").innerHTML="주소를 다시 확인해주세요.";
					return false;
				}else if(address.search(/\s/) > 0){
					document.getElementById("addressText").innerHTML="공백 없이 입력해주세요.";
					return false;
				}else {
					document.getElementById("addressText").innerHTML="확인되었습니다.";
					success += 1;
					successCh();
				}
			
			}

			function successCh(){
				if(success == 5 && idChecking == true){
					return true;
				}
			}

		
			

		
		</script>
<?php
	include_once "./include/footer.php" ;
?>
			