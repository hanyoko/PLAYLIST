const kindDiv=document.querySelector(".kinds");
let arr=['K-POP','POP','CLASSIC','ROCK','JAZZ','HIP HOP'];
let str="";

arr.forEach( (kind,i) => {
	str+=`<div class="kind">
	<p>${kind}</p>
	<img src="./images/notice${i+1}.jpg" alt="" class="noticeimg">
	</div>`
});

kindDiv.innerHTML=str;

const kinds=document.querySelectorAll(".kinds .kind");
for (let i = 0; i < kinds.length; i++) {
	kinds[i].addEventListener("click",function(){
	kinds[i].classList.toggle("on");
	document.cookie= 'kinds=""';
	document.cookie= 'kinds='+arr[i]; 
	});
}

