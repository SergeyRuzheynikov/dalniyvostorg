<!DOCTYPE html>
<html class="no-js" lang="ru">

<head>
<script src="https://yastatic.net/share2/share.js" async="async"></script>

<script src="https://yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
<script src="https://yastatic.net/share2/share.js" async="async"></script>
	<meta charset="utf-8">

	<title>Дальний Восторг</title>
	<meta name="description" content="">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<meta property="og:image" content="path/to/image.jpg">

	<link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" href="img/favicon/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-touch-icon-114x114.png">

	<!-- Bootstrap v3.3.4 Grid Styles -->


	<!-- Header CSS (First Sections of Website: paste after release from header.min.css here) -->
<!-- 	<link rel="stylesheet" href="css/bootstrap.css">
 -->

	<link rel="stylesheet" href="css/bootstrap-theme.css">
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>

<link rel="stylesheet" href="../libs/magnific-popup/dist/magnific-popup.css">




<!-- <script src="../libs/magnific-popup/dist/jquery.magnific-popup.js"></script>
 -->


		<link rel="stylesheet" href="css/menu.css">
		<link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="fonts/fonts.css">
		<link rel="stylesheet" href="css/main.min.css?ver=125">


  <link rel="stylesheet" type="text/css" href="libs/slick/slick-theme.css"/>
<link rel="stylesheet" href="libs/slick/slick.css">


<link href="https://fonts.googleapis.com/css?family=Noto+Serif" rel="stylesheet">


<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">

<link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
	
 <link href="http://allfont.ru/allfont.css?fonts=ds-eraser-cyr" rel="stylesheet" type="text/css" />
	  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

<script src='js/jquery.fancybox.js'></script>


<link rel="stylesheet" href="css/jquery.fancybox.css">
	<script type="text/javascript">


		/*
		* Author: Ryan Sutana
		* Author URI: http://www.sutanaryan.com/
		* Description: This snippet add more site functionality.
		*/

		var _rys = jQuery.noConflict();
		_rys("document").ready(function(){

	$(".navbar .yakor").on("click", function (event) {
		//отменяем стандартную обработку нажатия по ссылке
		event.preventDefault();

		//забираем идентификатор бока с атрибута href
		var id  = $(this).attr('href'),

		//узнаем высоту от начала страницы до блока на который ссылается якорь
			top = $(id).offset().top-100;
		
		//анимируем переход на расстояние - top за 1500 мс
		$('body,html').animate({scrollTop: top}, 1000);
	});



		
			_rys(window).scroll(function () {
				if (_rys(this).scrollTop() > 136) {
					_rys('.xx').addClass("fixed");
				} else {
					_rys('.xx').removeClass("fixed");
				}
			});




	});



  // _rys('.fancybox-wrap').addClass("popup");



		});















	</script>

</head>

<body>


<div class="hidden">
    
                
    <div class="clform2" id="sendform" >
            <h4>
                Заполните форму!
            </h4>
            <form action="#" class="buyform2">
        <!-- Hidden Required Fields -->
        <input type="hidden" name="project_name" value="">
        <input type="hidden" name="admin_email" value="">
        <input type="hidden" name="form_subject" value="Новая заявка">
        <!-- END Hidden Required Fields -->

  
                <ul>
                    <li>
                        <span>
                            Имя
                        </span>
                        <input type="text" name="Name" />
                    </li>
                    <li>
                        <span>
                            Номер
                            <br>
                                телефона
                            
                        </span>
                        <input type="text" id="phone" name="Phone"  />
                    </li>
                    <li>
                        <span>
                            email
                        </span>
                        <input type="text" name="E-mail" />
                    </li>
                </ul>
                <button class="sender">
                    Отправить!
                </button>
            </form>
        </div>
</div>






 <nav class="navbar navbar-default xx" role="navigation">
  <div class="navbar-header">
	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
  <!--     <span class="icon-bar"></span>
	  <span class="icon-bar"></span>
	  <span class="icon-bar"></span> -->

	  <span>Menu</span>
	</button>    
	<a class="navbar-brand" href="#"><img class="l1" src="img/logo2.png" alt="">
<img class="l2" src="img/logo3.png" alt="">
	</a>
  </div>
  <div class="navbar-collapse collapse">
	<ul class="nav navbar-nav navbar-left xl">
		<li><a href="index.php#main">Главная</a></li>
		<li><a href="index.php#about">О нас</a></li>
		 <li><a href="index.php#menu-production">Перечень продукции</a></li>
	</ul>
	<ul class="nav navbar-nav navbar-right">
	  <li><a href="index.php#recept">Рецепты</a></li>
	  <li><a href="index.php#news">Новости</a></li>
	   <li><a href="index.php#contacts">Контакты</a></li>
	</ul>
  </div>
</nav>  



<header>

<!--  <div class="container1">

<div class="container example-7">
  <nav class="navbar navbar-default col-md-12 col-sm-12 col-xs-12 ">
	<div class="container-fluid">
	  <div class="navbar-header">
		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar7">
		  <span class="sr-only">Toggle navigation</span>
		  <span class="icon-bar"></span>
		  <span class="icon-bar"></span>
		  <span class="icon-bar"></span>
		</button>
			  <a class="navbar-brand logo" href=""><img  src="img/logo.png" alt="Dispute Bills">
	  </a>
	  </div>
	  

	  
	  <div id="navbar7" class="navbar-collapse collapse ">
		<ul class="nav navbar-nav navbar-left offset-left  ">
		  <li class="active1"><a href="http://disputebills.com">Главная</a></li>
		  <li><a href="#">О нас</a></li>
			<li><a href="#">Меню продукции</a></li>
		</ul>
		<ul class="nav navbar-nav navbar-right offset-right">
		  <li class="active1"><a href="http://disputebills.com">Рецепты</a></li>
		  <li><a href="#">Новости</a></li>
		  <li><a href="#">Контакты</a></li>
		</ul>
	  </div>
	
	</div>
   
  </nav>
</div>

</div> -->


<div class="main" id="main">


	<div class="container ">
		<div class="row ">
					<div class="col-md-12 col-sm-12 col-xs-12 dv">
<!-- 			<div class="lt">
			<div class="lb"></div>
				</div>

			<div class="rt">
			<div class="rb"></div>
				</div> -->


				<div class="title-block">
					<h1>Торговый дом</h1>
					<h2>Дальний Восторг</h2>
				<!-- 	<h3>Укр</h3>
					<h4>Легендарный дикий
					лосось и ikra</h4> -->

					<hr>

<!-- 					<a title="WhatsApp" href="whatsapp://send?phone=+7">WhatsApp</a>
 
//Для приложения Viber на ПК
<a title="Viber" href="viber://chat?number=+120345678910">Viber</a>
 
//Для приложения Viber на мобильных
<a title="Viber" href="viber://add?number=120345678910">Viber</a>
 
<a title="Telegram" href="tg://resolve?domain=nikname">Telegram</a> -->

				</div>
			
		</div>

	</div>




<div class="row">
	<div class="col-md-2 col-md-offset-3 col-sm-4 col-xs-4 par">
		<img src="img/main1.png" alt="">

		<span>Добыча</span>
	</div>
	<div class="col-md-2 col-sm-4 col-xs-4 par">
		<img src="img/main2.png" alt="">
<span>Переработка</span>
	</div>
	<div class="col-md-2 col-sm-4 col-xs-4 par">
		<img src="img/main3.png" alt="">
		<span>Сбыт</span>
		</div>
</div>
	</div>
</div>



<video class="video" muted autoplay="autoplay" loop="loop">
		
  <source src="img/video/about-us.mp4" type="video/mp4"><!-- MP4 для Safari, IE9, iPhone, iPad, Android, и Windows Phone 7 -->
  <source src="img/video/about-us.mp4" type="video/webm"><!-- WebM/VP8 для Firefox4, Opera, и Chrome -->
  <source src="img/video/about-us.mp4" type="video/ogg"><!-- Ogg/Vorbis для старых версий браузеров Firefox и Opera -->
  <object data="video.swf" type="application/x-shockwave-flash"><!-- добавляем видеоконтент для устаревших браузеров, в которых нет поддержки элемента video -->
	<param name="movie" value="video.swf">
  </object>



</video>



</header>





<div class="section-about">
    
    <div class="container">
        
        <div class="row col-md-12 col-sm-12 col-xs-12">

            <p>
                ООО «Торговой дом «Дальний Восторг» является московским представительством
известного предприятия <a target="_blank" href="http://устькамчатрыба.рф"> ООО «Устькамчатрыба»</a>  с многолетней историей.


Мы успешно ведём свою деятельность в Москве на протяжение двух лет и сотрудничаем
с торговыми сетями премиум класса и ресторанами с высокой кухней.
Наша миссия поставлять напрямую, без посредников рыбу и рыбную продукцию,
сохранившую всё лучшее чем её наделила природа, в центральные регионы России по
хорошей цене. Мы сокращаем путь от места вылова до прилавков магазинов, чтобы
конечный потребитель мог наслаждаться свежей, экологически чистой рыбой круглый
год.



<!-- 

Свою трудовую деятельность ООО «Устькамчатрыба» ведёт с 1997 г. Предприятие по праву считается преемником РКЗ-66, история которого восходит к заводу, построенному в устье реки Камчатки в 1927 году, который являлся одним из крупнейших на полуострове. ООО «Устькамчатрыба» — единственная в Усть-Камчатском районе фирма, где есть консервный цех.

Сегодня же ООО «Устькамчатрыба» — это успешное и динамически развивающееся предприятие, которое знают в России и за границей. -->
            </p>
            


        </div>
    </div>
</div>




<div class="full-cycle">
    <div class="container">
        
        <div class="row ">
     <h1>Полный цикл производства</h1>
        </div>

      <div class="row ">
     
<video class="video1 col-md-8  col-sm-12 col-xs-12" muted autoplay="autoplay" loop="loop">
        
  <source src="img/video/my-film.mp4" type="video/mp4"><!-- MP4 для Safari, IE9, iPhone, iPad, Android, и Windows Phone 7 -->
  <source  src="img/video/my-film.mp4" type="video/webm"><!-- WebM/VP8 для Firefox4, Opera, и Chrome -->
  <source  src="img/video/my-film.mp4"  type="video/ogg"><!-- Ogg/Vorbis для старых версий браузеров Firefox и Opera -->
  <object data="video.swf" type="application/x-shockwave-flash"><!-- добавляем видеоконтент для устаревших браузеров, в которых нет поддержки элемента video -->
    <param name="movie" value="video.swf">
  </object>



</video>


<p class="col-md-4"> Предприятие имеет шесть рыбопромысловых участков для осуществления
промышленного рыболовства тихоокеанских лососей, а так же морскую (собственный
флот из добывающих, транспортных и маломерных судов) и береговую базы
переработки, поэтому оно имеет замкнутый технологический цикл: рыбу ловят,
перерабатывают и отправляют готовую продукцию, как по всей России, так и в страны
дальнего зарубежья (Япония, Корея, КНР). Береговая обработка включает в себя
консервный, кулинарный, икорный, жиромучной и засольный цеха.</p>



        </div>




    </div>

</div>






<div class="conserv-department">
    <div class="container">
        
        <div class="row ">
     <h1>Консервный цех</h1>
        </div>

      <div class="row ">
        <p class="col-md-4"> Береговая обработка включает в себя консервный, кулинарный, икорный, жиромучной
и засольный цеха. ООО «Устькамчатрыба» — единственная в Усть — Камчатском районе
фирма, где есть консервный цех. Консервы с маркой «Устькамчатрыба» знают в России и
за рубежом.</p>

     
<video class="video1 col-md-8 col-sm-12 col-xs-12" muted autoplay="autoplay" loop="loop">
        
  <source src="img/video/conservs.mp4" type="video/mp4"><!-- MP4 для Safari, IE9, iPhone, iPad, Android, и Windows Phone 7 -->
  <source src="img/video/conservs.mp4" type="video/webm"><!-- WebM/VP8 для Firefox4, Opera, и Chrome -->
  <source src="img/video/conservs.mp4" type="video/ogg"><!-- Ogg/Vorbis для старых версий браузеров Firefox и Opera -->
  <object data="video.swf" type="application/x-shockwave-flash"><!-- добавляем видеоконтент для устаревших браузеров, в которых нет поддержки элемента video -->
    <param name="movie" value="video.swf">
  </object>



</video>





        </div>




    </div>

</div>





<div class="ikra-department">
    <div class="container">
        
        <div class="row ">
     <h1>Икорный цех</h1>
        </div>

      <div class="row ">
     
<video class="video1 col-md-8 col-sm-12 col-xs-12" muted autoplay="autoplay" loop="loop">
        
  <source src="../img/video/ikra.mp4" type="video/mp4"><!-- MP4 для Safari, IE9, iPhone, iPad, Android, и Windows Phone 7 -->
  <source src="../img/video/ikra.mp4" type="video/webm"><!-- WebM/VP8 для Firefox4, Opera, и Chrome -->
  <source src="../img/video/ikra.mp4" type="video/ogg"><!-- Ogg/Vorbis для старых версий браузеров Firefox и Opera -->
  <object data="video.swf" type="application/x-shockwave-flash"><!-- добавляем видеоконтент для устаревших браузеров, в которых нет поддержки элемента video -->
    <param name="movie" value="video.swf">
  </object>



</video>


<p class="col-md-4"> Коллектив икорного цеха имеет дело с самой деликатесной продукцией, выпускаемой
предприятием, — лососёвой икрой. Каждая партия тщательно проверяется, чтобы в
готовом продукте не было посторонних включений.</p>



        </div>




    </div>

</div>



<div class="footer" id="contacts">
<img class="kanat" src="img/kanat.png" alt="">

				<div class="container">


				<div class="row col-md-12 col-sm-12 col-xs-12">



<div class="col-md-4 col-sm-6 col-xs-12">
	
<fieldset>
	<legend align="center">Контакты</legend>
<h1>Торговый дом "Дальний Восторг"</h1>

<span class="address">Адрес склада: г. Одинцово, Транспортный проезд, 1</span>



<span class="email">email: DVostorgFish@mail.ru <!-- dalniy.vostorg@mail.ru --></span>




<div class="row">
<span class="ukr">

<a target="_blank" href="http://устькамчатрыба.рф/">
<img  class="img-nohover" src="img/logo-ukr-chrome-h.png" alt="">

<img class="img-hover" src="img/logo-ukr-chrome-h2.png" alt="">

</a>  </span>

<span class="facebook">

<a target="_blank" href="https://m.facebook.com/ustkamchatfish/">

	<!-- <img src="img/facebook.png" alt=""> -->  <i class="fa fa-facebook" aria-hidden="true"></i></a>  </span>



<span class="instagram">

<a target="_blank" href="https://www.instagram.com/kamfish_ukr/">

 <i class="fa fa-instagram" aria-hidden="true"></i><!-- <img src="img/Instagram_icon.png" alt="" > --></a> 

 </span>




<span class="youtube">

<a target="_blank" href="https://www.youtube.com/channel/UCw3y3tQyT6-85loj_1g6F6w/videos?view_as=subscriber">

 <i class="fa fa-youtube" aria-hidden="true"></i><!-- <img src="img/Instagram_icon.png" alt="" > --></a> 

 </span>
</div>







<span class="phone"> <i class="fa fa-phone" aria-hidden="true"></i> 8 (916) 257-22-40 </span>
<span class="phone" style="margin-top: 10px;">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8 (915) 229-47-97</span>




<a class="btn call-btn" href="#sendform" >Заказать звонок</a>





  </fieldset>






</div>













				</div>

  <span class="studio">Сделано в <a href="http://lpagent.ru" target="_blank">LPagent.ru</a></span>

					<div class="conservs">	<img class="ragu" src="img/ragu.png" alt="">

	<img class="nerka" src="img/nerka.png" alt=""></div>

			</div>




</div>

 





	<!-- ...здесь пишем код <-->

	<!--[if lt IE 9]>
	<script src="libs/html5shiv/es5-shim.min.js"></script>
	<script src="libs/html5shiv/html5shiv.min.js"></script>
	<script src="libs/html5shiv/html5shiv-printshiv.min.js"></script>
	<script src="libs/respond/respond.min.js"></script>
	<![endif]-->

	<!-- Load Scripts Start -->
<!-- 	<script>var scr = {"scripts":[
		{"src" : "js/libs.js", "async" : false},
		{"src" : "js/common.js", "async" : false}
		]};!function(t,n,r){"use strict";var c=function(t){if("[object Array]"!==Object.prototype.toString.call(t))return!1;for(var r=0;r<t.length;r++){var c=n.createElement("script"),e=t[r];c.src=e.src,c.async=e.async,n.body.appendChild(c)}return!0};t.addEventListener?t.addEventListener("load",function(){c(r.scripts);},!1):t.attachEvent?t.attachEvent("onload",function(){c(r.scripts)}):t.onload=function(){c(r.scripts)}}(window,document,scr);
	</script> -->
	<!-- Load Scripts End -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script>

<script> 




 $(document).ready(function()
{
	  $('.menu-trigger').click(function() {
		  $('nav ul').slideToggle(500);
		
  });//end slide toggle




});
	



</script>












<script src="../libs/magnific-popup/dist/jquery.magnific-popup.js"></script>
<script src="../js/jquery.maskedinput.js" type="text/javascript"></script>


<script> 




$(".call-btn").magnificPopup();



  jQuery(function($){
   $("#phone").mask("+7 (999) 999 99 99");
   });

	

</script>



</body>
</html>
