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



  


		_rys(".fancybox")
	.attr('rel', 'gallery')
	.fancybox({
		beforeLoad: function() {
			this.title = _rys(this.element).attr('caption');


		}



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
	<a class="navbar-brand" href="#">
		<img class="l1" src="img/logo2.png" alt="">

<img class="l2" src="img/logo3.png" alt="">
	</a>
  </div>
  <div class="navbar-collapse collapse">
	<ul class="nav navbar-nav navbar-left xl">
		<li><a class="yakor"  href="index.php">Главная</a></li>
		<li><a target="_blank" href="about-us.php">О нас</a></li>
		 <li><a class="yakor"  href="#menu-production">Перечень продукции</a></li>
	</ul>
	<ul class="nav navbar-nav navbar-right">
	  <li><a  class="yakor"  href="#recept">Рецепты</a></li>
	  <li><a class="yakor"  href="#news">Новости</a></li>
	   <li><a  class="yakor" href="#contacts">Контакты</a></li>
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
					лосось и икра</h4> -->

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
		
  <source src="../img/video/main.mp4" type="video/mp4"><!-- MP4 для Safari, IE9, iPhone, iPad, Android, и Windows Phone 7 -->
  <source src="../img/video/main.mp4" type="video/webm"><!-- WebM/VP8 для Firefox4, Opera, и Chrome -->
  <source src="video.ogv" type="video/ogg"><!-- Ogg/Vorbis для старых версий браузеров Firefox и Opera -->
  <object data="video.swf" type="application/x-shockwave-flash"><!-- добавляем видеоконтент для устаревших браузеров, в которых нет поддержки элемента video -->
	<param name="movie" value="video.swf">
  </object>



</video>



</header>


<!-- <div class="menu-production" id="menu-production">
	<div class="container ">
		<div class="row col-md-12 col-sm-12 col-xs-12">
			<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3  col-xs-8  col-xs-offset-2 ">
				
				<div class="title-block">
					<h1>Меню</h1>
					<h2>Продукция</h2>


				</div>
			</div>

		</div>



		<div class="row " >
			<div class="col-md-4 col-md-offset-1 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1 ">

				<div class="  product">
					<h4>Рыба с/м всех видов разделки</h4>
					<div class="row">
						

						<div class="list">
							<ul>
							<li>Чавыча</li>
							<li>Нерка</li>
							<li>Кета</li>
							<li>Кижуч</li>
							<li>Горбуша</li>
							<li>Минтай</li>

							<li>Треска</li>
						
						</ul>


						</div>

						<div class="card">
							<ul>			
							<li>Блочная 1/20 кг</li>
							<li>Штучная 1/23 кг</li>
							<li>Срок годности 12 месяцев</li>
							<li> Режим хранения - 18 C</li>
						
						</ul>
						</div>
					</div>

					<div class="row">
						
<a class="call-btn" href="#">Узнать о наличии</a>
<a class="viber-btn" href="viber://add?number=79099791969" id="viber"><img src="img/viber.png" alt=""></a>
<a class="whatsapp-btn" href="https://api.whatsapp.com/send?phone=79099791969" id="whatsapp"><img src="img/whatsapp.png" alt=""></a>

 <a class="about-btn" href="#">Подробнее</a>

					</div>


				</div>					

				



			</div>


			<div class="col-md-4 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1  ">
				<div class="rm product">
					<h4>Lorem ipsum dolor sit amet.</h4>
					<div class="row">
						

						<div class="list">
							<ul>
							<li>Lorem.</li>
							<li>Sequi.</li>
							<li>Labore.</li>
							<li>Consectetur.</li>
							<li>Laudantium.</li>
							<li>Provident.</li>

							<li>Consectetur.</li>
							<li>Laudantium.</li>
							<li>Provident.</li>
						</ul>


						</div>

						<div class="card">
							<ul>			
							<li>Lorem.</li>
							<li>Sequi.</li>
							<li>Labore.</li>
							<li>Consectetur.</li>
						
						</ul>
						</div>
					</div>

					<div class="row">
						
<a class="call-btn" href="#">Узнать о наличии</a>
<a target="_blank" class="viber-btn" href="viber://add?number=79099791969" id="viber"><img src="img/viber.png" alt=""></a>
<a target="_blank" class="whatsapp-btn" href="https://api.whatsapp.com/send?phone=79099791969" id="whatsapp"><img src="img/whatsapp.png" alt=""></a>
 <a class="about-btn" href="#">Подробнее</a>

					</div>


				</div>		


			</div>


			
		</div>
		<div class="row " >
			<div class="col-md-4 col-md-offset-1 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1  ">

				<div class="  product">
					<h4>Lorem ipsum dolor sit amet.</h4>
					<div class="row">
						

						<div class="list">
							<ul>
							<li>Lorem.</li>
							<li>Sequi.</li>
							<li>Labore.</li>
							<li>Consectetur.</li>
							<li>Laudantium.</li>
							<li>Provident.</li>

							<li>Consectetur.</li>
							<li>Laudantium.</li>
							<li>Provident.</li>
						</ul>


						</div>

						<div class="card">
							<ul>			
							<li>Lorem.</li>
							<li>Sequi.</li>
							<li>Labore.</li>
							<li>Consectetur.</li>
						
						</ul>
						</div>
					</div>

					<div class="row">
						
<a class="call-btn" href="#">Узнать о наличии</a>
<a target="_blank" class="viber-btn" href="viber://add?number=79099791969" id="viber"><img src="img/viber.png" alt=""></a>
<a target="_blank" class="whatsapp-btn" href="https://api.whatsapp.com/send?phone=79099791969" id="whatsapp"><img src="img/whatsapp.png" alt=""></a>

 <a class="about-btn" href="#">Подробнее</a>

					</div>


				</div>					

				



			</div>


			<div class="col-md-4 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1  ">
				<div class="rm product">
					<h4>Lorem ipsum dolor sit amet.</h4>
					<div class="row">
						

						<div class="list">
							<ul>
							<li>Lorem.</li>
							<li>Sequi.</li>
							<li>Labore.</li>
							<li>Consectetur.</li>
							<li>Laudantium.</li>
							<li>Provident.</li>

							<li>Consectetur.</li>
							<li>Laudantium.</li>
							<li>Provident.</li>
						</ul>


						</div>

						<div class="card">
							<ul>			
							<li>Lorem.</li>
							<li>Sequi.</li>
							<li>Labore.</li>
							<li>Consectetur.</li>
						
						</ul>
						</div>
					</div>

					<div class="row">
						
<a class="call-btn" href="#">Узнать о наличии</a>
<a target="_blank" class="viber-btn" href="viber://add?number=79099791969" id="viber"><img src="img/viber.png" alt=""></a>
<a target="_blank" class="whatsapp-btn" href="https://api.whatsapp.com/send?phone=79099791969" id="whatsapp"><img src="img/whatsapp.png" alt=""></a>

 <a class="about-btn" href="#">Подробнее</a>

					</div>


				</div>		


			</div>


			
		</div>
		<div class="row " >
			<div class="col-md-4 col-md-offset-1 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1   ">

				<div class="  product">
					<h4>Lorem ipsum dolor sit amet.</h4>
					<div class="row">
						

						<div class="list">
							<ul>
							<li>Lorem.</li>
							<li>Sequi.</li>
							<li>Labore.</li>
			
						</ul>


						</div>

						<div class="card">
							<ul>			
							<li>Lorem.</li>
							<li>Sequi.</li>
							<li>Labore.</li>
							<li>Consectetur.</li>
						
						</ul>
						</div>
					</div>

					<div class="row">
						
<a class="call-btn" href="#">Узнать о наличии</a>

<a target="_blank" class="viber-btn" href="viber://add?number=79099791969" id="viber"><img src="img/viber.png" alt=""></a>
<a target="_blank" class="whatsapp-btn" href="https://api.whatsapp.com/send?phone=79099791969" id="whatsapp"><img src="img/whatsapp.png" alt=""></a>


 <a class="about-btn" href="#">Подробнее</a>

					</div>


				</div>					

				



			</div>


			<div class="col-md-4 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1  ">
				<div class="rm product">
					<h4>Lorem ipsum dolor sit amet.</h4>
					<div class="row">
						

						<div class="list">
							<ul>
							<li>Lorem.</li>
							<li>Sequi.</li>
							<li>Labore.</li>
					
						</ul>


						</div>

						<div class="card">
							<ul>			
							<li>Lorem.</li>
							<li>Sequi.</li>
							<li>Labore.</li>
							<li>Consectetur.</li>
						
						</ul>
						</div>
					</div>

					<div class="row">
						
<a class="call-btn" href="#">Узнать о наличии</a>
<a target="_blank" class="viber-btn" href="viber://add?number=79099791969" id="viber"><img src="img/viber.png" alt=""></a>
<a  target="_blank" class="whatsapp-btn" href="https://api.whatsapp.com/send?phone=79099791969" id="whatsapp"><img src="img/whatsapp.png" alt=""></a>



 <a class="about-btn" href="#">Подробнее</a>

					</div>


				</div>		


			</div>


			
		</div>


	</div>
</div>
 -->






<div class="menu-production" id="menu-production">

<img src="img/menu/fish3.png" alt="" class="ovs fish3">
<img src="img/menu/fish2.png" alt="" class="ovs fish2">
<img src="img/menu/fish.png" alt="" class="ovs fish">
<img src="img/menu/knife.png" alt="" class="ovs knife">
<img src="img/menu/knife.png" alt="" class="ovs knife2">
<img src="img/menu/ikra-b-r.png" alt="" class="ovs ikra">
<img src="img/menu/kroshki.png" alt="" class="ovs kroshki">
<img src="img/menu/3lists.png" alt="" class="ovs list3">
<img src="img/menu/4lists.png" alt="" class="ovs list4">
<img src="img/menu/hvoy.png" alt="" class="ovs hvoy">
<img src="img/menu/perec.png" alt="" class="ovs perec">
	<div class="container ">
		<div class="row col-md-12 col-sm-12 col-xs-12">
			<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3  col-xs-8  col-xs-offset-2 ">
				
				<div class="title-block">
					<h1>Перечень</h1>
					<h2>Продукции</h2>


				</div>
			</div>

		</div>



		<div class="row " >
			<!-- <div class="col-md-3  col-sm-6 col-sm-offset-2 col-xs-10 col-xs-offset-1 "> -->
	<div class="col-md-4 col-md-offset-0  col-sm-4  col-xs-10 col-xs-offset-1">
				<div class="product">
					<a href="product.php?product=1">
				<img src="img/menu/1.png" alt="">
				<span>Кета</span>
				</a>

					<div class="process about-product" id="pr1">
						
						<span>Кета</span>
						<p>Кета (лат. Oncorhynchus keta) — один из наиболее широко распространенных представителей тихоокеанских лососей.
<br><br>
Размер: Достигает длины 102 см и массы 15 кг.
<br><br>
Особенности: В море имеет серебристую окраску без мелких темных пятен и полос на теле. В реках, тело, небо и основание жаберных дуг чернеют, зубы увеличиваются в размерах.
</p>

					</div> 

			<!-- 				
				<div class="more">
					
<a class="fancybox" caption="" href="#pr1"> Подробнее</a>
				</div> -->

				</div>		


			</div>
				<div class="col-md-4 col-md-offset-0   col-sm-4 col-xs-10 col-xs-offset-1 ">
				<div class="product">
					<a href="product.php?product=2">
				<img src="img/menu/2.png" alt="">
				<span>Кижуч</span>
				
</a>

					<div class="process about-product" id="pr2">
						
						<span>Кижуч</span>
						<p>Кижуч
Кижуч (лат. Oncorhynchus kisutch) — относится к семейству лососевых, роду тихоокеанских лососей.
<br><br>
Размер: Крупная рыба, достигает длины 98 см, массы 14 кг.
<br><br>
Особенности: Кижуч хорошо отличается ярко-серебристым цветом чешуи. Во время нереста и самцы и самки становятся темно-малиновыми.
</p>

					</div> 

							
			<!-- 	<div class="more">
					
<a class="fancybox" caption="" href="#pr2"> Подробнее</a>
				</div>
 -->

				</div>					
			</div>
					<div class="col-md-4 col-md-offset-0  col-sm-4 col-xs-10 col-xs-offset-1">
				<div class="product">
					<a href="product.php?product=3">
				<img src="img/menu/3.png" alt="">
				<span>Нерка</span>
				
</a>

<div class="process about-product" id="pr3">
						
						<span>Нерка</span>
						<p>Нерка (лат. Oncorhynchusnerka) — рыба семейства лососёвых.
<br><br>
Размер: В длину достигают 80 см, вес до 3 кг.
<br><br>
Особенности: Нерка размерами и формой тела напоминает кету, различить эти виды проще всего по числу жаберных тычинок на первой жаберной дуге: у кеты их бывает от 18 до 28, а у нерки — всегда больше 30. Брачный наряд нерки ярко-красного цвета (только голова зеленая). Мясо не розовое, как у других лососевых, а интенсивно-красного цвета.
</p>

					</div> 

		<!-- 					
				<div class="more">
					
<a class="fancybox" caption="" href="#pr3"> Подробнее</a>
				</div> -->
				</div>					
			</div>
	<div class="col-md-4 col-md-offset-0  col-sm-4  col-xs-10 col-xs-offset-1">
				<div class="product">
					<a href="product.php?product=4">
				<img src="img/menu/4.png" alt="">
				<span>Чавыча</span>
				
</a>



<div class="process about-product" id="pr4">
						
						<span>Чавыча</span>
						<p>Чавыча (лат. Oncorhynchus tshawytscha) — самый крупный из тихоокеанских лососей, kingsalmon — «король-лосось».
<br><br>
Размер: Достигает длины 78-103 см и массы 5-36 кг и даже более.
<br><br>
Особенности: Спина, спинной и хвостовой плавники покрыты мелкими кругловатыми чёрными пятнами.

<br><br>
Состав чавычи
Мясо чавычи содержит в себе витамины: РР, Е, D, С, В12, В9 и другие.
<br><br>
Минеральные вещества: никель, молибден, фтор, хром, селен, медь, железо, сера, хлор, фосфор, калий, натрий, магний, кальций.
<br><br>
Полезные свойства чавычи
В мясе рыбы содержатся вещества, которые обеспечивают нормальную деятельность мозга, работу сердечно-сосудистой системы, тем самым предупреждая развитие таких болезней как атеросклероз сосудов, инсульты, инфаркты, слабоумие.
</p>

					</div> 

							
		<!-- 		<div class="more">
					
<a class="fancybox" caption="" href="#pr4"> Подробнее</a>
				</div> -->
				</div>					
			</div>
				<div class="col-md-4 col-md-offset-0   col-sm-4 col-xs-10 col-xs-offset-1 ">
				<div class="product">
					<a href="product.php?product=5">
				<img src="img/menu/5.png" alt="">
				<span>Камбала</span>
				</a>
<div class="process about-product" id="pr5">
						
						<span>Камбала</span>
	<p>Морская камбала — морская рыба семейства камбаловых (Pleuronectidae). Отличается сильно сплющенным телом и расположением глаз на одной стороне. Обращённая кверху сторона более ярко окрашена. Обладает способностью к мимикрии. В процессе развития от икринки до молоди плавает как все обычные рыбы.

	 Однако при достижении определённого размера происходит метаморфоз и её глаз сдвигается на другой бок.
<br>
	  Максимальная длина тела 1 м, обычно в уловах встречаются рыбы длиной 50—60 см, максимальная известная масса 7 кг.
	 Плодовитость до 500 тыс. икринок.

</p>

					</div> 

							
<!-- 				<div class="more">
					
<a class="fancybox" caption="" href="#pr5"> Подробнее</a>
				</div> -->
				</div>					
			</div>
					<div class="col-md-4 col-md-offset-0  col-sm-4 col-xs-10 col-xs-offset-1">

				<div class="product">
					<a href="product.php?product=6">
				<img src="img/menu/6.png" alt="">
				<span>Треска</span>
				
</a>


<div class="process about-product" id="pr6">
						
						<span>Треска</span>
						<p>Треска — род лучеперых рыб отряда трескообразные, семейства тресковые (лат. Gadidae).
							Рыба треска растет в течение всей своей жизни, и большинство рыб к 3 годам вырастают в длину в среднем до 40-50 см. Размеры зрелых особей трески зависят от ареала, самые крупные представители вида атлантической трески достигают 1,8-2 м в длину, при этом вес трески может составлять около 96 кг.
</p>

					</div> 

							
<!-- 				<div class="more">
					
<a class="fancybox" caption="" href="#pr6"> Подробнее</a>
				</div> -->
				</div>					
			</div>
	<div class="col-md-4 col-md-offset-0  col-sm-4  col-xs-10 col-xs-offset-1">
				<div class="product">
					<a href="product.php?product=7">
				<img src="img/menu/7.png" alt="">
				<span>Консервы <br> рыбные <br> "НЕРКА"</span>
				</a>


<div class="process about-product" id="pr7">
						
						<span>Нерка натуральная</span>
						<p>

Нерка натуральная — рыбные консервы в натуральном соку. В состав не входят вредные вещества и опасные для здоровья консерванты. Продукт готов к употреблению без дополнительной обработки.
<br><br>
Состав: Рыба, соль.
<br>
Масса НЕТТО:  227 г.
<br>
Калорийность: 166 ккал
<br>
Пищевая ценность на 100 г продукта:
<br>
Белок — 19 г.
<br>
Жир — 10 г.
<br>
Углеводы — 0,0 г.
<br>
Витамины:
<br>
В1 -0,07 мг.
<br>
В2 — 0,05 мг.<br>
</p>

					</div> 

							
<!-- 				<div class="more">
					
<a class="fancybox" caption="" href="#pr7"> Подробнее</a>
				</div> -->

				</div>					
			</div>
				<div class="col-md-4 col-md-offset-0   col-sm-4 col-xs-10 col-xs-offset-1 ">
				<div class="product">
					<a href="product.php?product=8">
				<img src="img/menu/8.png" alt="">
				<span>Консервы <br> рыбные<br> "Рагу"</span>
				</a>


				<div class="process about-product" id="pr8">
						
						<span>Консервы рыбные "Рагу из тихоокеанских лососевых рыб"</span>
		
		<br>				<p>Рагу из тихоокеанских лососевых рыб
<br>
Рагу из тихоокеанских лососевых рыб — рыбные консервы в натуральном соку. В состав не входят вредные вещества и опасные для здоровья консерванты. Продукт готов к употреблению без дополнительной обработки.
<br>
<br>
Состав: Головы дальневосточных лососевых  рыб, рыба, соль.
<br>
Масса НЕТТО: 227 г.
<br>
Калорийность: 171 Ккал
<br>
Пищевая ценность в 100 г продукта:
<br>
Белок — 18 г.
<br>
Жир — 11 г.
<br>
Углеводы — 0,0 г.
<br>
Витамины:
<br>
В1 — 0,04мг.
<br>
В2 — 0,10 мг.
<br>
РР — 1,4 мг.
</p>

					</div> 

							
<!-- 				<div class="more">
					
<a class="fancybox" caption="" href="#pr8"> Подробнее</a>
				</div> -->

				</div>					
			</div>
					<div class="col-md-4 col-md-offset-0  col-sm-4 col-xs-10 col-xs-offset-1">
				<div class="product">
					<a href="product.php?product=9">
				<img src="img/menu/9.png" alt="">
				<span>Икра<br> лососевая</span>
				
</a>


<div class="process about-product" id="pr9">
						
						<span>Икра</span>
						<p>



<br>
Икра кеты имеет наиболее крупный размер — до 7 мм.
<br>
Икринки имеют ярко-оранжевые цвет, за что такую икру часто называют «королевской». Её вкусовая ценность заключается в мягком «сливочном» вкусе, который обусловлен большим содержанием жира.
<br><br>


Икра кижуча среди других видов лососевых рыб имеет средней размер икринок — 3-4 мм.
<br>
Она характеризуется глубоким бордовым цветом икринок, а также насыщенным горьковатым вкусом.
<br><br>

Икра чавычи относится к наиболее крупным видам икры, размер икринок достигает 6-7 мм.
<br>
Икра чавычи имеет насыщенный красный оттенок. Вкус икры отличается сочетанием несильной горечи и остроты.
<br><br>

Икра нерки имеет сравнительно небольшой размер икринок — до 3 мм.
<br>
Икра нерки отличается насыщенным или темным красным оттенком и пикантным вкусом с легкой горчинкой. Это самая ценная красная икра из всех, которые добываются в нашей стране.<br>
</p>

					</div> 

							
<!-- 				<div class="more">
					
<a class="fancybox" caption="" href="#pr9"> Подробнее</a>
				</div> -->
				</div>					
			</div>

	

	</div>




<!-- 
	<div class="row">
		<div class="questions">
		<h3>У вас остались вопросы? <br>Напишите нам в мессенджеры <br>или заполните форму и мы Вам перезвоним</h3>

		<a class="call-btn" href="#sendform">Заказать звонок</a>
<a target="_blank" class="viber-btn" href="viber://add?number=79099791969" id="viber"><img src="img/viber.png" alt=""></a>
<a  target="_blank" class="whatsapp-btn" href="https://api.whatsapp.com/send?phone=79099791969" id="whatsapp"><img src="img/whatsapp.png" alt=""></a>




	


		</div>


	</div> -->



	</div>
</div>



<div class="q">
	

	<div class="container">
		

		<div class="row">
			
		<div class="questions col-md-6 col-md-offset-3  col-sm-10 col-sm-offset-1 col-xs-12 col-xs-offset-0 ">
		<h3>У вас остались вопросы? <br>Напишите нам в мессенджеры <br>или заполните форму и мы Вам перезвоним</h3>

		<a class="call-btn" href="#sendform">Заказать звонок</a>
<a target="_blank" class="viber-btn" href="viber://add?number=79099791969" id="viber"><img src="img/viber.png" alt=""></a>
<a  target="_blank" class="whatsapp-btn" href="https://api.whatsapp.com/send?phone=79099791969" id="whatsapp"><img src="img/whatsapp.png" alt=""></a>




	


		</div>


		</div>
	</div>
</div>






















<div class="why-we" id="about">
		<div class="container ">
		<div class="row col-md-12 col-sm-12 col-xs-12">
		<h1>Почему выбирают нас</h1>
		<div class="col-md-6 col-sm-6 col-xs-12">
		<div class="block">
			<div class="circle">
					<img src="img/why/1.png" alt="">
		</div>
				<div class="textblock">
			<h3>Гибкие условия по сотрудничеству</h3>
				<p>Мы предлагаем наш товар как большими партиями для оптовиков и производителей, так и малыми партиями розничным магазинам и ресторанам по конкурентным, привлекательным ценам</p>


	

			</div>
		</div>
		</div>
		<div class="col-md-6 col-sm-6 col-xs-12">

		<div class="block">
			<div class="circle">
					<img src="img/why/4.png" alt="">
		</div>
				<div class="textblock">

	<h3>Контроль качества на производстве</h3>
				<p>Контроль качества продукции осуществляется на каждом этапе производства в собственной сертифицированной лаборатории</p>


			</div>
		</div>
		</div>
		</div>




		<div class="row col-md-12 col-sm-12 col-xs-12">
		<div class="col-md-6 col-sm-6 col-xs-12">
		<div class="block">
			<div class="circle">
					<img src="img/why/2.png" alt="">
		</div>
				<div class="textblock">
		
				<h3>Строго соблюдаем сроки поставок</h3>
				<p>Для нас важна наша репутация, поэтому мы строго придерживаемся условиям договора</p>


		

			</div>
		</div>
		</div>

		<div class="col-md-6 col-sm-6 col-xs-12">
		<div class="block">
			<div class="circle">
					<img src="img/why/5.png" alt="">
		</div>
				<div class="textblock">
				<h3>Соответствие высоким стандартам</h3>
				<p>Наша продукция признанный "Товар года" и соответствует международным и российским стандартам качества. Мы имеем множества наград и сертификатов</p>

			</div>
		</div>
				</div>
				</div>	

				<div class="row col-md-12 col-sm-12 col-xs-12">


				<div class="col-md-6 col-sm-6 col-xs-12">

				<div class="block">
					<div class="circle">
							<img src="img/why/3.png" alt="">
				</div>
						<div class="textblock">
						<h3>Широкий ассортимент</h3>
						<p>Мы готовы предложить разнообразную продукцию, как деликатесы, так и продукты повседневного потребления</p>

					</div>


				</div>
				

			</div>


			<div class="col-md-6 col-sm-6 col-xs-12">

				<div class="block">
					<div class="circle">
							<img src="img/why/6.png" alt="">
				</div>
						<div class="textblock">
						<h3>Отправляем пробные партии</h3>
						<p>Мы на 100 процентов уверены в исключительном качестве нашей продукции и считаем, что в нем должны убедиться наши потенциальные клиенты</p>

					</div>

					
				</div>

			</div>



			</div>


			</div>
</div>



<div class="book"  id="recept">
			<div class="container">
				<div class="row col-md-12 col-sm-12 col-xs-12">
					

					<h1>Рецепты</h1>

					<div class="book-slider">



			<div id='magazine'>
<div></div>

					<div>
				<img src="img/bluda/blins.jpg" alt="">
				

				


					<div class="process" id="rec1">
						
					<span>Приготовление</span>
					<p></p>

1.	Приготовить блины. <br>
2.	Смешать яйцо, соль; добавить молоко, сахар, муку и венчиком взбить, чтобы не оставалось комочков. <br>
3.	Испечь блинчики. 	<br>
4.	Подавать блины с красной икрой, украсив кресс салатом и сливочным маслом и толчеными фисташками. 



					</div> 

			</div>



<div>
<h2>Блины с красной икрой</h2>
	<div class="ingr">
					<span>Продукты</span>
					<ul>
						<p>	
<li>Красная  икра – 200гр  </li>
<li>Блины</li>
<li>Молоко - 500гр.</li>
<li>Яйцо куриное - 200шт</li>
<li>Мука 300гр.</li>
<li>Сахар - 1ст. л</li>
<li>Соль 5гр.</li>
<li>Масло сливочное 10 гр</li>
<li>Масло растительное 50 гр.</li>
<li>Кресс салат - 1 гр</li>
<li>Фисташки - 20 гр.</li>
						
						
						
						
						
						
						
						
						
						
						
					</p>
					</ul>
				</div>	


				<div class="more">
					
<a class="fancybox" caption="" href="#rec1"> Приготовление</a>
				</div>


</div>




			<div>
					<img src="img/bluda/draniki.jpg" alt="">




					<div class="process" id="rec2">
						
						<span>Приготовление</span>
						<p>	1. Сливки желательно остудить в морозилке -10 минут , чтоб хорошо взбились , берем миску из под блендера и заливаем сливки , сыр , соль и взбиваем до густого крема , позже добавляем резаный лук , можно еще добавить тертый мускат <br>
						2. Натереть цукина на терке мелкой , желательно соломкой , взбить белок до густой пены с солью , взять миску, отжать лишний сок из цукини , выложить в миску , затем белок, мука , мускат , соду лучше гасить с лимонным соком ,все смешиваем лопаткой , далее формируем ложкой дранник и обжариваем на растительном масле , и ставим в духовку на 5-7 минут  170 градусов. <br>
3.Выкладываем на тарелку: дранник  затем крем сливочный , и сверху выкладываем нерку украшаем порезанным слайсами редис и каперсы. 
</p>



					</div> 




			</div>



<div>					<h2>Дранники из цукини <!-- с кремом и копченой неркой. --> </h2>

					<div class="ingr">
						<span>Продукты</span>
						<ul>

<li>Для крема: </li>
<li> Лук резанец- 2гр</li>
<li>  
Сливочный сыр- 100 гр </li>
<li>  Сливки -50 гр </li>
<li> Соль- 2 гр.  </li>
<li> Для дранников из цукини:  </li>
<li> Цукини - 250-300 гр  </li>
<li>  Яйцо - 2 шт </li>
<li>   Соль - 5 гр</li>
<li>  Мускатный орех - 2 гр </li>
<li> Мука - 1 ст ложка ( просеять )  </li>
<li> Сода пищевая щепотка  </li>
<li>  Украшения:  </li>
<li>   Редис- 10 гр</li>
<li>Карепсы- 5 гр   </li>									
<li>Нерка солено-мороженная – 100 гр</li>		
						
















						</ul>
					</div>	

				<div class="more">
					
<a class="fancybox" caption="" href="#rec2"> Приготовление</a>
				</div>
				
</div>












			<div>
					<img src="img/bluda/buters-skand.jpg" alt="">
					


					<div class="process" id="rec3">
						
						<span>Приготовление</span>
						<p>	
							1.	Хлеб поджарить на сливочном масле. <br>
2.	Сыр смешиваем с соусом песто. <br>
3.	Нижнюю часть хлеба намазать сырным-песто соусом. <br>
4.	Выкладываем кружочки помидор, кусочки  нерки, посыпаем мелко порезанным красным луком,  украшаем орехами, зеленью, подаем с лаймом. <br>

</p>



					</div> 

		


		

			</div>


<div><h2>Сэндвич Скандинавия</h2>

					<div class="ingr">
						<span>Продукты</span>
						<ul>

<li> Хлеб злаковый – 1 шт   </li>
<li>  Сыр рикотта – 80 гр </li>
<li> Грецкий орех -50 гр   </li>
<li> Семечки тыквы -20 гр   </li>
<li>  Зелень (руккола , родич, крес зелень )  </li>
<li>  Нерка нарезка – 80 гр  </li>
<li> Лайм – 1 шт   </li>
<li>  Масло сливочное – 60 гр  </li>
<li> Соус песто -10 гр  </li>













				
						</ul>
					</div>	

				<div class="more">
					
<a class="fancybox" caption="" href="#rec3"> Приготовление</a>
				</div>


				
</div>


			<div>
					<img src="img/bluda/nerka.jpg" alt="">
					


					<div class="process" id="rec4">
						
						<span>Приготовление</span>
						<p>
1.	Делаем роллы и суши с неркой по классическому рецепту. <br>
2.	Украсить блюдо кресс салатом. <br>
3.	Подавать на бамбуковом листе с дайконом и дольками лайма. <br>

</p>



					</div> 



					</div>









<div><h2>Ассорти</h2>

					<div class="ingr">
						<span>Продукты</span>
						<ul>
							
<li> Суши рис   </li>
<li>Нори   </li>
<li>  Нерка c/м  </li>
<li> Сыр сливочный филадельфия или аналогия  </li>
<li> Авокадо  </li>
<li>  Огурцы </li>
<li> Дайкон -50 гр  </li>
<li> Черная тобико- 5 гр  </li>
<li>   Лайм- 1 шт</li>
<li>  Васаби- 10 гр </li>
<li> Маринованный имбирь-30 гр  </li>
<li>  Лист бамбука-3 шт </li>
<li>  
Кресс салат -1 шт </li>
<li> Лук красный-5 гр  </li>
<li> Помидоры черри-30 гр  </li>



 















						
					</ul>
				</div>	



				<div class="more">
					
<a class="fancybox" caption="" href="#rec4"> Приготовление</a>
				</div>


				
</div>












					<div>
							<img src="img/bluda/hot-keta.jpg" alt="">
						



					<div class="process" id="rec5">
						
						<span>Приготовление</span>
						<p>

							1.	Спагетти варим в бульоне. <br>
2.	Кету режем на кубики 2х2 см.  Обжариваем на гриле до готовности. <br>
3.	Бобы варим до полу готовности <br>
4.	Томаты режем на пополам, <br>
5.	Кукурузу режем вдоль, обжариваем на гриле. <br>
6.	Петрушку мелко порубить. <br>
7.	Подаем с петрушкой и тертым сыром. <br>
</p>



					</div> 


					</div>















<div>	<h2>Черная паста с кетой и стручковым горошком</h2>

							<div class="ingr">
								<span>Продукты</span>
								<ul>
								
<li>  Cпагетти черные – 110 гр   </li>
<li>   Масло оливковое – 30 гр  </li>
<li>   Кета с/м – 180 гр ( режем на кубики )  </li>
<li>  Японские бобы – 100 гр   </li>
<li>  Перец чили – 1 шт   </li>
<li>  Петрушка – 10 гр   </li>
<li>  Бульон рыбный _ 100 гр   </li>
<li>  Сыр твердый – 60 гр   </li>
<li>   Мини кукуруза-70 гр. </li>
<li>  Вяленые томаты- 30 гр.  </li>












								</ul>
							</div>	

		
				<div class="more">
					
<a class="fancybox" caption="" href="#rec5"> Приготовление</a>
				</div>

				
</div>












					<div>
							<img src="img/bluda/smurebrods.jpg" alt="">
							



					<div class="process" id="rec6">
						
						<span>Приготовление</span>
						<p>	1.	Хлеб обжариваем. <br>
2.	Рагу немного размять вилкой и выложить на хлеб.  <br>
3.	На рагу выкладываем  разные начинки, и украшения по вкусу. <br>
</p>



					</div> 


					</div>






<div><h2>Смуреброды с рыбой</h2>

							<div class="ingr">
								<span>Продукты</span>
								<ul>

<li>Хлеб черный  300 гр  
<li> Хлеб злаковый – 1 шт  </li>





	<li>	Булочки серые – 5 шт  </li>
<li>		Салат микс ( родич , руккола , кресс салат , листья свеклы , фризе ) – 100 гр  </li>
	<li>	Красный лук – 100 гр  </li>
		<li>Яйцо перепел – 10 шт  </li>
		<li>Рагу – 2 б. </li>
		<li>Лимон -1 шт  </li>
		<li>Огурец св – 100 гр  </li>
		<li>Перец болгарский- 2 шт. </li>
		<li>Спаржа свежая -100 гр  </li>
		<li>Авокадо – 2 шт  </li>
		<li>Моцарелла шарики – 100 гр.  </li>
		<li>Томат черри разные – 200 гр  </li>
		<li>Гранат – 1 шт  </li>
<li>		Маринованный дайкон- 100 гр. </li>
		<li>Маслины- 150 гр. </li>
		<li>Каперсы-100 гр. </li>
		<li>Тыквенные семечки-30 гр. </li>
		<li>Зелень ( кинза , укроп , петрушка , лук сибулет )  </li>

								
								</ul>
							</div>	

						
				<div class="more">
					
<a class="fancybox" caption="" href="#rec6"> Приготовление</a>
				</div>

				
</div>








					<div>
							<img src="img/bluda/IMG_0371.JPG" alt="">
							



					<div class="process" id="rec7">
						
						<span>Приготовление</span>
						<p>	1.	Очистить и по отдельности на мелкой терке потереть морковь и картофель.
<br>
2.	Выложить половину картофеля первым слоем, смазать майонезом.
<br>
3.	Нерку размять, выложить на картофель вторым слоем, смазать майонезом.
<br>
4.	Следующий слой салата – мелко нарезанный репчатый лук (если используется салатный лук, то ошпаривать кипятком его не нужно, если обычный – обязательно ошпарьте, иначе он будет перебивать вкус остальных продуктов).
<br>
5.	Полить луковый слой ложкой бульона из рыбной консервы, смазать майонезом.
<br>
6.	Следующий слой – оставшийся картофель, майонез, далее – морковь, майонез, тертые яичные белки, майонез, тертые яичные желтки.
<br>
7.	Оформить салат мимоза зеленью и красной икрой, дать настояться перед подачей несколько часов в холодильнике.
<br>
</p>



					</div> 


					</div>












<div><h2>Салат мимоза с неркой и красной икрой </h2>







							<div class="ingr">
								<span>Продукты</span>
								<ul>
									<li>Нерка натуральная – 1 консервная банка</li>


									<li>Икра красная – 1 банка</li>
									<li>Яйца вареные – 4 шт.</li>
									<li>Картофель отварной – 3-4 шт.</li>
									<li>Морковь варенная – 3 шт.</li>

									<li>	Луковица – 1 шт. </li>
									<li>		Майонез</li>
									<li>		Зелень</li>
									<li>		Соль</li>
								</ul>
							</div>	

							
				<div class="more">
					
<a class="fancybox" caption="" href="#rec7"> Приготовление</a>
				</div>
				
</div>


































































































					 </div>




						</div>
					</div>

				</div>
</div>








<div class="clients">	
				<div class="container">
				<div class="row col-md-12 col-sm-12 col-xs-12">
					<h1>Наши клиенты</h1>


				</div>

				<div class="row col-md-12 col-sm-12 col-xs-12">
				
				<div class="col-md-3 col-sm-6 col-xs-12">

				<div class="block">
				<img src="img/cl1.png" alt="">
				<h4>Производители продуктов</h4>
				<hr>
				<p>
					Рыбоперерабатывающие предприятия, производители качественной рыбной продукции и морепродуктов



				</p>

				</div>

				</div>



			<div class="col-md-3 col-sm-6 col-xs-12">

				<div class="block">
				<img src="img/cl2.png" alt="">
				<h4>Розничные магазины</h4>
				<hr>
				<p>
					Как специализированные рыбные магазины, так и крупные торговые сети


				</p>

				</div>

				</div>







							<div class="col-md-3 col-sm-6 col-xs-12">

				<div class="block">
				<img src="img/cl3.png" alt="">
				<h4>Общественное питание</h4>
				<hr>
				<p>
					Как рыбные и японские рестораны, так и рестораны с высокой кухней



				</p>

				</div>

				</div>






							<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="block">
				<img src="img/cl4.png" alt="">
				<h4>Оптовые дилеры</h4>
				<hr>
				<p>
					Крупные оптовые базы, которые производят поставки продукции по России и за рубеж



				</p>

				</div>

				</div>






		
				</div>

					</div>
</div>















<div class="partners">	
				<div class="container">

				<div class="row col-md-12 col-sm-12 col-xs-12">
					<h1>Нам доверяют</h1>


				</div>
			


<!-- 				<div class="row col-md-12 col-sm-12 col-xs-12">
					<div class="col-md-4">
						<div class="block">
							<img src="img/p1.png" alt="">

						</div>
					

					</div>
					<div class="col-md-4">
						<div class="block">
							<img src="img/p2.png" alt="">
							
						</div>
					

					</div>

						<div class="col-md-4">
						<div class="block">
							<img src="img/p1.png" alt="">
							
						</div>
					

					</div>
				</div> -->




<div class="row">

<div class="prtn">
	<a href="http://novikovgroup.ru" target="_blank">
		
	<img class="img1" src="img/partners/p/novikov-hrom.png" alt="">
	<img class="img2" src="img/partners/p/novikov.png" alt="">
	</a>


</div>

<div class="prtn">
	<a href="http://boston-restaurant.ru/" target="_blank">
		<img class="img1" src="img/partners/p/boston_red-hrom.png" alt="">
	<img class="img2" src="img/partners/p/boston_red.png" alt="">
	</a>


</div>



<div class="prtn">
	<a href="http://www.torrogrill.ru/" target="_blank">
		<img class="img1" src="img/partners/p/torro-hrom.png" alt="">
	<img class="img2" src="img/partners/p/torro.png" alt="">
		</a>


</div>


<div class="prtn">
	<a href="https://av.ru/" target="_blank">
	<img class="img1" src="img/partners/p/azbuka-hrom.png" alt="">
	<img class="img2" src="img/partners/p/azbuka.png" alt="">
		</a>
</div>


<div class="prtn">
<!-- 	<a href="https://www.xn--90ae6agck5d.xn--p1ai/" target="_blank"> -->
		<a href="https://www.facebook.com/rybtorgmoscow/" target="_blank">
	<img class="img1" src="img/partners/p/ryibtorg-hrom.png" alt="">
	<img class="img2" src="img/partners/p/ryibtorg.png" alt="">

		</a>
</div>


<div class="prtn">
	<a href="https://yakitoriya.ru/" target="_blank">
	<img class="img1" src="img/partners/p/1-hrom.png" alt="">
	<img class="img2" src="img/partners/p/1.png" alt="">

		</a>
</div>


<div class="prtn">
	<a href="http://palich.ru/" target="_blank">
	<img class="img1" src="img/partners/p/palyich-hrom.png" alt="">
	<img class="img2" src="img/partners/p/palyich.png" alt="">
		</a>
</div>

<div class="prtn">
	<a href="http://ecomorye.com/" target="_blank">
	<img class="img1" src="img/partners/p/ekomore.png" alt="">
	<img class="img2" src="img/partners/p/ekomore2.png" alt="">
</div>

<div class="prtn">
	<a href="http://www.chefkuznetsov.ru/" target="_blank">
	<img class="img1" src="img/partners/p/sk1.png" alt="">
	<img class="img2" src="img/partners/p/sk2.png" alt="">
		</a>
</div>


</div>








					</div>
</div>



<div class="cert">	
				<div class="container">
			
				<div class="row col-md-12 col-sm-12 col-xs-12">
					<h1>Сертификаты</h1>


				</div>

				<div class="row col-md-12 col-sm-12 col-xs-12">


 <div class="slider111 ">


<!-- 
		<div>
<a class="fancybox" caption="" href="img/serts/001.png"><img src="img/serts/001.png" alt=""> </a>
				
	</div> -->

<div><a href="img/serts/001.png" class="fancybox"><img src="img/serts/001.png" alt=""></a></div>
<div><a href="img/serts/002.png" class="fancybox"><img src="img/serts/002.png" alt=""></a></div>
<div><a href="img/serts/003.png" class="fancybox"><img src="img/serts/003.png" alt=""></a></div>
<div><a href="img/serts/004.png" class="fancybox"><img src="img/serts/004.png" alt=""></a></div>
<div><a href="img/serts/005.png" class="fancybox"><img src="img/serts/005.png" alt=""></a></div>

<div><a href="img/serts/007.png" class="fancybox"><img src="img/serts/007.png" alt=""></a></div>
<div><a href="img/serts/008.png" class="fancybox"><img src="img/serts/008.png" alt=""></a></div>
<div><a href="img/serts/009.png" class="fancybox"><img src="img/serts/009.png" alt=""></a></div>
<div><a href="img/serts/010.png" class="fancybox"><img src="img/serts/010.png" alt=""></a></div>
<div><a href="img/serts/011.png" class="fancybox"><img src="img/serts/011.png" alt=""></a></div>
<div><a href="img/serts/012.png" class="fancybox"><img src="img/serts/012.png" alt=""></a></div>
<div><a href="img/serts/013.png" class="fancybox"><img src="img/serts/013.png" alt=""></a></div>
<div><a href="img/serts/014.png" class="fancybox"><img src="img/serts/014.png" alt=""></a></div>
<div><a href="img/serts/015.png" class="fancybox"><img src="img/serts/015.png" alt=""></a></div>
<div><a href="img/serts/016.png" class="fancybox"><img src="img/serts/016.png" alt=""></a></div>
<div><a href="img/serts/017.png" class="fancybox"><img src="img/serts/017.png" alt=""></a></div>
<div><a href="img/serts/018.png" class="fancybox"><img src="img/serts/018.png" alt=""></a></div>

<div><a href="img/serts/006.png" class="fancybox"><img src="img/serts/006.png" alt=""></a></div>








	<!-- 	<div><img src="img/serts/002.png" alt=""></div>
		<div><img src="img/serts/003.png" alt=""></div>
		<div><img src="img/serts/004.png" alt=""></div>
		<div><img src="img/serts/005.png" alt=""></div>
		
		<div><img src="img/serts/007.png" alt=""></div>
		<div><img src="img/serts/008.png" alt=""></div>
		<div><img src="img/serts/009.png" alt=""></div>
		<div><img src="img/serts/010.png" alt=""></div>
		<div><img src="img/serts/011.png" alt=""></div>
		<div><img src="img/serts/012.png" alt=""></div>
		<div><img src="img/serts/013.png" alt=""></div>
		<div><img src="img/serts/014.png" alt=""></div>
		<div><img src="img/serts/015.png" alt=""></div>
		<div><img src="img/serts/016.png" alt=""></div>
		<div><img src="img/serts/017.png" alt=""></div>
		
		<div><img src="img/serts/019.png" alt=""></div>


		<div><img src="img/serts/006.png" alt=""></div>
		<div><img src="img/serts/018.png" alt=""></div> -->


  </div>

			


				</div>

			</div>
</div>













<div class="news" id="news">	


				<div class="container">
				<div class="row col-md-12 col-sm-12 col-xs-12">
					<h1>Новости</h1>


				</div>

				<div class="row col-md-12 col-sm-12 col-xs-12 ">

<div class="slider112">
	





					<div  class="col-md-4"   >
						<div class="block">
							<img src="img/news/1.png" alt="">
<p>Семга, нерка и горбуша – это далеко не полный список представителей семейства лососевых. На наши столы они зачастую попадают в самом доступном виде – в консервах. Однако в консервной банке вместо дорогой рыбы могут оказаться одни плавники и кости. 
</p>

<a target="_blank" href="https://www.m24.ru/videos/%D0%BF%D1%80%D0%BE%D0%B4%D1%83%D0%BA%D1%82%D1%8B/11072017/149547">Подробнее</a>

<div class="ya-share2" data-services="vkontakte,facebook,odnoklassniki,gplus,twitter,viber,whatsapp,telegram"   data-url="https://www.m24.ru/videos/%D0%BF%D1%80%D0%BE%D0%B4%D1%83%D0%BA%D1%82%D1%8B/11072017/149547"></div>


						</div>
					

					</div>
									<div class="col-md-4">
						<div class="block">
							<img src="img/news/2.jpg" alt="">

<p>Настоящий праздник жителям Усть-Камчатска подарило предприятие «Устькамчатрыба» в честь 20-летия компании. Народные гуляния в поселке Усть-Камчатск 15 сентября продолжались весь день.

</p>

<a target="_blank" href="https://www.kamchatinfo.com/news/economics_and_business/detail/21766/">Подробнее</a>
<div class="ya-share2" data-services="vkontakte,facebook,odnoklassniki,gplus,twitter,viber,whatsapp,telegram"   data-url="https://www.kamchatinfo.com/news/economics_and_business/detail/21766/"></div>
						</div>
					

					</div>




										<div class="col-md-4">
						<div class="block">
							<img src="img/news/3.jpg" alt="">
<p>EastRussia разбирается, как соединить рыбу Камчатки и зарубежные рынки

Инвестор ТОР «Камчатка» «Город 415» планирует построить комплекс по производству консервов из местной рыбы. Почему рыбы на Камчатке много, а проект, столь обреченный на успех, несмотря на имеющиеся сложности — пока всего один, выясняет EastRussia.
</p>

<a target="_blank" href="https://www.eastrussia.ru/material/konservy-s-administrativnoy-podderzhkoy/">Подробнее</a>

<div class="ya-share2" data-services="vkontakte,facebook,odnoklassniki,gplus,twitter,viber,whatsapp,telegram"   data-url="https://www.eastrussia.ru/material/konservy-s-administrativnoy-podderzhkoy/"></div>
						</div>
					

					</div>
										<div class="col-md-4">
						<div class="block">
							<img src="img/news/5.jpg" alt="">
<p>Камчатский край на рыбном рынке на фестивале «Улица Дальнего Востока» привлек внимание к своей витрине великолепной чавычей штучной заморозки и ИКРАматом. По данным РАИ «КАМЧАТКА-ИНФОРМ», к ИКРАмату сразу же выстроилась очередь.

</p>

<a target="_blank" href="https://www.kamchatinfo.com/news/economics_and_business/detail/21536/">Подробнее</a>

<div class="ya-share2" data-services="vkontakte,facebook,odnoklassniki,gplus,twitter,viber,whatsapp,telegram"   data-url="https://www.kamchatinfo.com/news/economics_and_business/detail/21536/"></div>
						</div>
					

					</div>



										


										<div class="col-md-4">
						<div class="block">
							<img src="img/news/6.jpg" alt="">
<p>Дегустация дальневосточных блюд, в том числе из морепродуктов, прошла на рыбном рынке на фестивале «Улица Дальнего Востока», проходящего в рамках третьего Восточного экономического форума.

</p>

<a target="_blank" href="https://minvr.ru/press-center/news/7637/">Подробнее</a>
<div class="ya-share2" data-services="vkontakte,facebook,odnoklassniki,gplus,twitter,viber,whatsapp,telegram"   data-url="https://minvr.ru/press-center/news/7637/"></div>

						</div>
					

					</div>

















				</div>
				</div>

					</div>
</div>


<!-- 

<div class="border111" >	


	


<img src="img/kanat.png" alt="">

</div> -->

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

  <span class="studio">Сделано в <a href="http://lpagent.ru" target="_blank">LPagent.ru</a>

<br>	
тел. 
+79371521278
  </span>

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





<!-- <script type="text/javascript" src="../libs/modernizr/modernizr.js"></script>

<script type="text/javascript" src="../lib/hash.js"></script> -->











<script type="text/javascript" src="libs/slick/slick.min.js"></script>

<script src="../libs/magnific-popup/dist/jquery.magnific-popup.js"></script>
<script src="../js/jquery.maskedinput.js" type="text/javascript"></script>

 <script type="text/javascript" src="js/common.js"></script>
<script> 
		//var _rys1 = jQuery.noConflict();

	$('#magazine').turn({page: 2});

$("#magazine").bind("turning", function(event, page, view) {
  if (page==1) {
	event.preventDefault();
  }
});

$(".call-btn").magnificPopup();



  jQuery(function($){
   $("#phone").mask("+7 (999) 999 99 99");
   });







    //E-mail Ajax Send
    $("form").submit(function() { //Change
        

        var th = $(this);
        $.ajax({

            type: "POST",
            url: "mail.php", //Change
            data: th.serialize()
        }).done(function() {
            alert("СПАСИБО! ВАШИ ДАННЫЕ ОТПРАВЛЕНЫ! ОЖИДАЙТЕ ЗВОНКА!");
            setTimeout(function() {
                // Done Functions
                th.trigger("reset");
            }, 1000);
        });
        return false;
    });

	//$(window).resize($('#magazine').turn());

</script>



</body>
</html>
