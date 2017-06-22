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
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-93362921-3', 'auto');
  ga('send', 'pageview');
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '796032190561711',
      xfbml      : true,
      version    : 'v2.9'
    });
    FB.AppEvents.logPageView();
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
