// JavaScript Document
//Scripted by : Vishnu Prakash
//Date:01 June 2017
//Company: Klivolks India Pvt Ltd
$(function(){
	"use strict";
	$(window).scroll(function(){
		
		var y = $(this).scrollTop();
		  if(y===0){
			 $(".about").css("top",window.innerHeight);
			  $(".join").css("top",window.innerHeight); 
			  $(".about").css("display","none");
			  $(".join-popup").fadeOut(500);
		  }
		  else if (y > 300 && y< 800) {
			  $(".about").css("display","block");
			$(".about").animate({"top":"0px"},500);
			$(".join").css("display","none"); 
			  $(".join").css("top",window.innerHeight);
			  write_about();
			  
		  }
		  else if (y > 800) {
			  $(".join").css("display","block"); 
			$(".join").animate({"top":"0px"},500);
			  write_join();
			$(".i-hide").delay(2000).fadeOut(500);
			$(".i-rot").delay(2000).fadeIn(500);
		  }
	});
});
function write_about(){
	"use strict";
	$(".about").css("background-image","url(/images/lion2.png)");
	$(".about-title").animate({"font-size":"42px","margin-top":"0px"},1000);
	$(".about-hide").delay(1500).hide(0);
	$(".about-intro").delay(2000).fadeIn(500);
}
function write_join(){
	"use strict";
	$(".join").css("background-image","url(/images/lion3.png)");
}
function show_join(){
	"use strict";
	$(".join-popup").fadeIn(500);
}