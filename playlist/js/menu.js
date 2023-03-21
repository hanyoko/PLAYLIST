const menu= document.querySelector(".menu");
const Lp= document.querySelector(".Lp");
Lp.addEventListener("click",function(){
	menu.classList.add("on");
})


const menuClose = document.querySelector(".menu_close");
menuClose.addEventListener("click",function(){
	menu.classList.remove("on");
	console.log("heeoeiei");
})