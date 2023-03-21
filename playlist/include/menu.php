<section>
	<div class="Lp">
	</div>
</section>
<section>
	<div class="menu">
				<p class="menu_close">X</p>
		<ul>
			<li>
				<p><a href="./main.php"> MAIN</a></p>
			</li>
				<?php
				session_start();
				if($_SESSION['id']){
					echo "<li>
					<p><a href='./mymusic_list.php?id='{$_SESSION['id']}'>
						{$_SESSION['id']}의 MUSIC
					</a></p>
					</li>
					";
				}
				?>
			
			<li>
				<p><a href="./music_write.php">UPLODAD MUSIC</a></p>
			</li>
			<li>
				<p><a href="./music_list.php">MUSIC LIST</a></p>
			</li>
		</ul>
		<?php
		if(isset($_SESSION['id'])){
		?>
		<form action="./process/logout_process.php" method="post" class="btns">
			<button type="submit">로그아웃</button>
		</form>
		<?php
		}else{
			?>
			<form action="./index.php"class="btns">
				<button type="submit">로그인</button>
			</form>
			<?php	
		}
		if($_SESSION['id']=="admin"){
			echo "<li>
			<p><a href='./adminmusicList.php'>
				음악 관리
			</a></p>
			</li>
			";
		}
		?>
		
	</div>
</section>


<script src="./js/menu.js"></script>
