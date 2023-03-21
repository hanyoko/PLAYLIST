<?php
	include_once "./include/header.php" ;
	include_once "./include/menu.php"
?>
	<div id="wrap" class="sections">
		<section class="mainSec">
			<div class="color">
			</div>
			<div class="logo">
				<div class="pade">
					<h1>YZA</h1>
				</div>
			</div>
		</section>
		
		<section class="mainSec">
			<div class="grayDiv" >
				<div class="inner neverstop">
					<img src="./images/image3.jpg" alt="">
					<h2>NEVER stop listening</h2>
					<p>YZA is available on everywhere</p>
				</div>
			</div>
			<div class="orangeDiv">
				<h1>Lets Enjoy Your Music</h1>
				<script src="//cdnjs.cloudflare.com/ajax/libs/wavesurfer.js/1.4.0/wavesurfer.min.js"></script>
				<div id="waveform"></div>
				<script>
					var wavesurfer = WaveSurfer.create({
						container: '#waveform',
						waveColor: '#fff',
						progressColor: `orange`,
						barWidth: 3
					});
					wavesurfer.load('audio/audio1.mp3');
				</script>
				<div class="icons">
					<i class="material-icons" onclick="wavesurfer.play()">play_circle_filled</i>		
					<i class="material-icons" onclick="wavesurfer.pause()">pause_circle_filled</i>
				</div>
			</div>
			
	
		</section>	

		<section class="mainSec">
			<div class="rightDiv">
				<h1>Why We Use YZA</h1>
				<ul>
					<li>
						<div class="img"></div>
						<p>나만의 음악 즐기기</p>
					</li>
					<li>
						<div class="img"></div>
						<p>장르별로 찾아듣기</p>
					</li>
					<li>
						<div class="img"></div>
						<p>오프라인에서 감상</p>
					</li>
					<li>
						<div class="img"></div>
						<p>여러 기기에서 스트리밍</p>
					</li>
				</ul>
			</div>
			<div class="leftDiv">
			</div>
		</section>
		<?php
					
		?>
		<?php
			$str="";
			foreach ($arr as $value) {
				$str0="";
				$sql= "select * from musiclists where kinds='{$value}' LIMIT 2 ";	
				$result= mysqli_query($conn, $sql);
							
				while($row=mysqli_fetch_array($result)){
					$str0.="<li>
						<div class='album'>
							<img src='{$row['photourl']}'>
						</div>
						<div class='content'>
							<h4>{$row['title']}</h4>
							<p>{$row['name']}</p>
							<p>{$row['date']}</p>
							<p class='light'>{$row['contents']}</p>
						</div>
					</li>";
				}

				$str.="<div class='kind off'>
				<p>{$value}</p>
					<div class='kindBg'>
						<div class='kindDesc'>
							<ul>".$str0."</ul>
						</div>
					</div>
				</div>";
			}		
		?>
		

		<section class="mainSec">
			<div class="purplediv">
				<h1>What's your favorite?</h1>
			</div>
			<div class="kinds">
				<?=$str?>
			</div>


			<script>
				const kinds=document.querySelectorAll(".kinds .kind");
				for (let i = 0; i < kinds.length; i++) {
					kinds[i].addEventListener("click",function(){
					kinds[i].classList.toggle("off");
					kinds[i].classList.toggle("on");
				});
				}

			</script>





		</section>		

	</div>

<?php
	include_once "./include/footer.php" ;
?>
<!-- scroll Evnet -->
<script src="./js/jquery-3.4.1.min.js"></script>
<script src="./js/jquery.easing.1.3.js"></script>
<script src="./js/jquery.mousewheel.js"></script>
<script>
	window.onload= function(){
		var elm= ".mainSec";
		$(elm).each(function(index){
			// wheel 이벤트
			$(this).on("mousewheel",function(e){
				e.preventDefault();
				var delta= 0;
				if(!event) event= window.event;
				if(event.wheelDelta){
					delta= event.wheelDelta/120;
					if(window.opera) delta=-delta;
				}
				else if(event.detail)
				delta= -event.detail/3;
				var moveTop= $(window).scrollTop();
				var elmSelecter= $(elm).eq(index);
				// 마우스 휠 다운
				if(delta<0){
					if($(elmSelecter).next() != undefined){
						try{
							moveTop= $(elmSelecter).next().offset().top;
						}catch(e){}
					}
					// 마우스 휠 업
				}else {
					if($(elmSelecter).prev() != undefined){
						try{
							moveTop= $(elmSelecter).prev().offset().top;
						}catch(e){}
					}
				}
				//  화면 이동 .3초
				$("html,body").stop().animate({
					scrollTop: moveTop+'px'
				},{
					duration: 300, complete:function(){

					}
				});
			});
		});
	};
</script>