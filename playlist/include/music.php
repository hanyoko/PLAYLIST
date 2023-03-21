<div id="wrap">
  <div id="musicList">
    <h2>MUSIC LIST</h2>
    <div class=search>
    <form action="./search.php" method="post">
			<input type="text" name="search" id="search">
			<button type="submit"><i class='fas fa-search'></i></button>
    </form>
  </div>
  <div class="nav">
      <ul>
				<li><a href="./music_list.php">ALL</a></li>
				<?php
					$list2="";
					$liststr="";
					foreach ($arr as $value) {
						$liststr="./music_nav.php?title='${value}'";
						$list2.="<li><a href=$liststr>$value</a></li>";
					}
				?>
				<?=$list2?>
			</ul>
	</div>
	<div class="total">
		<p>총계: <?=$total?></p>	
	</div>
  <div class="albums">
		<ul class="musicList">
      <!-- php에서 내용만 출력하고 싶을 때 -->
			<?=$list?>
    </ul>
	</div>
</div>
        
