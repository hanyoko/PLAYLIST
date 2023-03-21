<div id="wrap">
  <div id="musicList">
    <h2>MUSIC LIST</h2>
  <div class="nav">
      <ul>
				<li><a href="./adminmusicList.php">ALL</a></li>
				<?php
					$list2="";
					$liststr="";
					foreach ($arr as $value) {
						$liststr="./adminmusic_nav.php?title='${value}'";
						$list2.="<li><a href=$liststr>$value</a></li>";
					}
				?>
				<?=$list2?>
			</ul>
	</div>
		
	<div class="total">
		<p>총계: <?=$total?></p>	
		<p>추가</p>
	</div>
  <div class="albums">
		<ul class="musicList adminlist">
      <!-- php에서 내용만 출력하고 싶을 때 -->
			<?=$list?>
    </ul>
	</div>
</div>
        
