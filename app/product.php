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
	<a class="navbar-brand" href="#"><img class="l1" src="img/logo2.png" alt="">
<img class="l2" src="img/logo3.png" alt="">
	</a>
  </div>
  <div class="navbar-collapse collapse">
    <ul class="nav navbar-nav navbar-left xl">
        <li><a class=""  href="index.php">Главная</a></li>
        <li><a target="" href="about-us.php">О нас</a></li>
         <li><a class=""  href="index.php#menu-production">Перечень продукции</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a  class=""  href="index.php#recept">Рецепты</a></li>
      <li><a class=""  href="index.php#news">Новости</a></li>
       <li><a  class="" href="#contacts">Контакты</a></li>
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

 <div class="process about-product" id="pr1">
                        
                        <span>Кета</span>
                        <p>Кета (лат. Oncorhynchus keta) — один из наиболее широко распространенных представителей тихоокеанских лососей.
<br><br>
Размер: Достигает длины 102 см и массы 15 кг.
<br><br>
Особенности: В море имеет серебристую окраску без мелких темных пятен и полос на теле. В реках, тело, небо и основание жаберных дуг чернеют, зубы увеличиваются в размерах.
</p>

                    </div> 

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


<div class="process about-product" id="pr3">
                        
                        <span>Нерка</span>
                        <p>Нерка (лат. Oncorhynchusnerka) — рыба семейства лососёвых.
<br><br>
Размер: В длину достигают 80 см, вес до 3 кг.
<br><br>
Особенности: Нерка размерами и формой тела напоминает кету, различить эти виды проще всего по числу жаберных тычинок на первой жаберной дуге: у кеты их бывает от 18 до 28, а у нерки — всегда больше 30. Брачный наряд нерки ярко-красного цвета (только голова зеленая). Мясо не розовое, как у других лососевых, а интенсивно-красного цвета.
</p>

                    </div> 


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




<div class="process about-product" id="pr5">
                        
                        <span>Камбала</span>
    <p>Морская камбала — морская рыба семейства камбаловых (Pleuronectidae). Отличается сильно сплющенным телом и расположением глаз на одной стороне. Обращённая кверху сторона более ярко окрашена. Обладает способностью к мимикрии. В процессе развития от икринки до молоди плавает как все обычные рыбы.

     Однако при достижении определённого размера происходит метаморфоз и её глаз сдвигается на другой бок.
<br>
      Максимальная длина тела 1 м, обычно в уловах встречаются рыбы длиной 50—60 см, максимальная известная масса 7 кг.
     Плодовитость до 500 тыс. икринок.

</p>

                    </div> 




<div class="process about-product" id="pr6">
                        
                        <span>Треска</span>
                        <p>Треска — род лучеперых рыб отряда трескообразные, семейства тресковые (лат. Gadidae).
                            Рыба треска растет в течение всей своей жизни, и большинство рыб к 3 годам вырастают в длину в среднем до 40-50 см. Размеры зрелых особей трески зависят от ареала, самые крупные представители вида атлантической трески достигают 1,8-2 м в длину, при этом вес трески может составлять около 96 кг.
</p>

                    </div> 

        
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



                <div class="process about-product" id="pr8">
                        
                        <span>Консервы рыбные "Рагу из тихоокеанских лососевых рыб"</span>
        
        <br>                <p>Рагу из тихоокеанских лососевых рыб
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



<div class="process about-product" id="pr9">
   <span>Икра горбуши</span>

    <p>



<br>
Икра горбуши имеет наиболее крупный размер — до 7 мм.
<br>
Она богата легко усваиваемыми белками,  содержит комплекс  аминокислот, и жирные кислоты Омега-3 и Омега-6. Также в ней присутствуют витамины А, Е, Д, К, группы В, и следующие минеральные вещества: железо, натрий,  калий, магний, фосфор и кальций. Икра горбуши также имеет в своем составе йод и липиды, в достаточном количестве.
<br><br>

</p>                     


                    </div> 



<div class="process about-product" id="pr10">
 <span>Икра кеты</span>

    <p>



<br>
Икра кеты имеет наиболее крупный размер — до 7 мм.
<br>
Икринки имеют ярко-оранжевые цвет, за что такую икру часто называют «королевской». Её вкусовая ценность заключается в мягком «сливочном» вкусе, который обусловлен большим содержанием жира.
<br><br>

</p>

                    </div> 





                    <div class="process about-product" id="pr11">
                        
                        <span>Икра нерки</span>
                        <p>


<br>
Икра нерки имеет сравнительно небольшой размер икринок — до 3 мм.
<br>
Икра нерки отличается насыщенным или темным красным оттенком и пикантным вкусом с легкой горчинкой. Это самая ценная красная икра из всех, которые добываются в нашей стране.<br>
</p>

                    </div> 

<? 

$product=$_GET['product'];



if ($product==1): ?>
     <div class="products"   id="products">
<img src="img/menu/pages/soul.png" alt="" class="ovs soul">


<img src="img/menu/pages/salat-left.png" alt="" class="ovs salat-l">
<img src="img/menu/pages/kroshki2.png" alt="" class="ovs kroshki2">
<img src="img/menu/perec.png" alt="" class="ovs perec">
<img src="img/menu/hvoy.png" alt="" class="ovs hvoy">
<img src="img/menu/hvoy.png" alt="" class="ovs hvoy2">
	<div class="container ">
		<div class="row col-md-12 col-sm-12 col-xs-12">
			
			<div class="col-md-12 col-md-offset-0 col-sm-6 col-sm-offset-3  col-xs-8  col-xs-offset-2 ">
				
				<div class="title-block">
					<h1>Кета потрошенная без головы</h1>
					<!-- <h2>Продукция</h2> -->


				</div>
			</div>   

		</div>

       




		<div class="row " >
			 <div class="col-md-6 col-md-offset-0  col-sm-6 col-sm-offset-2 col-xs-10 col-xs-offset-1  lb">
             <img src="img/menu/pages/salat2.png" alt="" class=" salat2"> 
			<img src="img/menu/pages/keta.png">

            


			 	</div>

			 <div class="col-md-5 col-md-offset-0  col-sm-6 col-sm-offset-2 col-xs-10 col-xs-offset-1 "> 
<div class="info">			 	
<table>
    <tr class="td-w1">
        <td colspan="2">размеры рыбы</td>
        <td colspan="2">цена</td>
    </tr>
    <tr>
        <td colspan="2">                <div class="more">
                    
<a class="fancybox" caption="" href="#pr1"> Подробнее</a>
                </div></td>
        <td  class="td-w2">опт</td>
        <td  class="td-w2">кр. опт</td>
    </tr>
    <tr>
        <td class="td-w2">s</td>
        <td>до 1.5</td>
        <td>по звонку</td>
        <td>по звонку</td>
    </tr>
    <tr>
        <td class="td-w2">m</td>
        <td>1.5-2</td>
        <td>по звонку</td>
        <td>по звонку</td>
    </tr>
    <tr>
        <td class="td-w2">l</td>
        <td>2+</td>
        <td>по звонку</td>
        <td>по звонку</td>
    </tr>
    <tr class="td-w1">
        <td colspan="2">упаковка/штучная</td>
        <td colspan="2">Вид упаковки</td>
    </tr>
    <tr>
        <td colspan="2">23 кг/ коробка</td>
        <td colspan="2">коробка 74*37*20</td>
    </tr>
</table>
</div>
			 	</div>

	

	</div>








	</div>
</div>







<? elseif ($product==2): ?>

      <div class="products"   id="products">


<img src="img/menu/pages/salat-left.png" alt="" class="ovs salat-l">


<img src="img/menu/kroshki21.png" alt="" class="ovs kroshki2">

<img src="img/page-product/knife.png" alt="" class="ovs knife2">
<img src="img/menu/perec.png" alt="" class="ovs perec2">

<img src="img/menu/perec.png" alt="" class="ovs perec3">
<img src="img/menu/hvoy.png" alt="" class="ovs hvoy3">
	<div class="container ">
		<div class="row col-md-12 col-sm-12 col-xs-12">
			
			<div class="col-md-12 col-md-offset-0 col-sm-6 col-sm-offset-3  col-xs-8  col-xs-offset-2 ">
				
				<div class="title-block">
					<h1>Кижуч потрошенный без головы</h1>
					<!-- <h2>Продукция</h2> -->


				</div>
			</div>

		</div>



		<div class="row " >
			 <div class="col-md-6 col-md-offset-0  col-sm-6 col-sm-offset-2 col-xs-10 col-xs-offset-1 "> 
			<img src="img/menu/pages/kizhuch.png">
			 	</div>
			 <div class="col-md-5 col-md-offset-0  col-sm-6 col-sm-offset-2 col-xs-10 col-xs-offset-1 "> 
<div class="info">			 	
<table>
    <tr class="td-w1">
        <td colspan="2">размеры рыбы</td>
        <td colspan="2">цена</td>
    </tr>
    <tr>
        <td colspan="2">                <div class="more">
                    
<a class="fancybox" caption="" href="#pr2"> Подробнее</a>
                </div>
</td>
        <td  class="td-w2">опт</td>
        <td  class="td-w2">кр. опт</td>
    </tr>
    <tr>
        <td colspan="2" class="td-w2">s</td>
        <<!-- td></td> -->
        <td>По звонку</td>
        <td>По звонку</td>
    </tr>
    <tr>
        <td colspan="2" class="td-w2">m</td>
        <!-- <td></td> -->
        <td>По звонку</td>
        <td>По звонку</td>
    </tr>
    <tr>
        <td colspan="2" class="td-w2">l</td>
        <!-- <td></td> -->
        <td>По звонку</td>
        <td>По звонку</td>
    </tr>
    <tr class="td-w1">
        <td colspan="2">упаковка/штучная</td>
        <td colspan="2">Вид упаковки</td>
    </tr>
    <tr>
        <td colspan="2">23 кг/ коробка</td>
        <td colspan="2">x*y*z</td>
    </tr>
</table>
</div>
			 	</div>

	

	</div>


		<div class="row  pr2" >

			 <div class="col-md-6 col-md-offset-0  col-sm-6 col-sm-offset-2 col-xs-10 col-xs-offset-1 "> 
<div class="info left">	
				<div class="title-block">
					<h1>Кижуч блочный</h1>
					<!-- <h2>Продукция</h2> -->


				</div>

<table>
    <tr class="td-w1">
        <td colspan="2">размеры рыбы</td>
        <td colspan="2">цена</td>
    </tr>
    <tr>
        <td colspan="2"></td>
        <td  class="td-w2">опт</td>
        <td  class="td-w2">кр. опт</td>
    </tr>
    <tr>
        <td colspan="2" class="td-w2">s</td>
       <!--  <td>до 1.5</td> -->
        <td>По звонку</td>
        <td>По звонку</td>
    </tr>
    <tr>
        <td colspan="2" class="td-w2">m</td>
  <!--       <td>1.5-2</td> -->
        <td>По звонку</td>
        <td>По звонку</td>
    </tr>
    <tr>
        <td colspan="2" class="td-w2">l</td>
    <!--     <td>2+</td> -->
        <td>По звонку</td>
        <td>По звонку</td>
    </tr>
    <tr class="td-w1">
        <td colspan="2">упаковка/штучная</td>
        <td colspan="2">Вид упаковки</td>
    </tr>
    <tr>
        <td colspan="2"></td>
        <td colspan="2">коробка 97*37*20</td>
    </tr>
</table>
</div>
			 	</div>

				 <div class="col-md-6 col-md-offset-0  col-sm-6 col-sm-offset-2 col-xs-10 col-xs-offset-1 "> 
			 <img   src="img/menu/pages/kizhuch22.png"> 
			 	</div>

	</div>





	</div>
</div>
<? elseif ($product==3): ?>





      <div class="products"   id="products">


<img src="img/menu/pages/salat-left.png" alt="" class="ovs salat-l">
<img src="img/menu/kroshki21.png" alt="" class="ovs kroshki2">


<img src="img/menu/perec.png" alt="" class="ovs perec31">
<img src="img/menu/hvoy.png" alt="" class="ovs hvoy31">
<img src="img/menu/knife.png" alt="" class="ovs knife31">


	<div class="container ">
		<div class="row col-md-12 col-sm-12 col-xs-12">
			
			<div class="col-md-12 col-md-offset-0 col-sm-6 col-sm-offset-3  col-xs-8  col-xs-offset-2 ">
				
				<div class="title-block">
					<h1>Нерка С/М без головы</h1>
					<!-- <h2>Продукция</h2> -->


				</div>
			</div>

		</div>



		<div class="row " >
			 <div class="col-md-6 col-md-offset-0  col-sm-6 col-sm-offset-2 col-xs-10 col-xs-offset-1 "> 
			<img src="img/menu/pages/nerka.png">
			 	</div>
			 <div class="col-md-5 col-md-offset-0  col-sm-6 col-sm-offset-2 col-xs-10 col-xs-offset-1 "> 
<div class="info">			 	
<table>
    <tr class="td-w1">
        <td colspan="2">размеры рыбы</td>
        <td colspan="2">цена</td>
    </tr>
    <tr>
        <td colspan="2">                            
                <div class="more">
                    
<a class="fancybox" caption="" href="#pr3"> Подробнее</a>
                </div></td>
        <td  class="td-w2">опт</td>
        <td  class="td-w2">кр. опт</td>
    </tr>
    <tr>
        <td class="td-w2">s</td>
        <td>до 1.5</td>
        <td>По звонку</td>
        <td>По звонку</td>
    </tr>
    <tr>
        <td class="td-w2">m</td>
        <td>1.5-2</td>
        <td>По звонку</td>
        <td>По звонку</td>
    </tr>
    <tr>
        <td class="td-w2">l</td>
        <td>2+</td>
        <td>По звонку</td>
        <td>По звонку</td>
    </tr>
    <tr class="td-w1">
        <td colspan="2">упаковка/штучная</td>
        <td colspan="2">Вид упаковки</td>
    </tr>
    <tr>
        <td colspan="2">23 кг/ коробка</td>
        <td colspan="2">74*37*20</td>
    </tr>
</table>
</div>
			 	</div>

	

	</div>


		<div class="row  pr2" >

			 <div class="col-md-6 col-md-offset-0  col-sm-6 col-sm-offset-2 col-xs-10 col-xs-offset-1 "> 
<div class="info left">	
				<div class="title-block">
					<h1>Нерка С/М ПБГ блочная</h1>
					<!-- <h2>Продукция</h2> -->


				</div>

<table>
    <tr class="td-w1">
        <td colspan="2">размеры рыбы</td>
        <td colspan="2">цена</td>
    </tr>
    <tr>
        <td colspan="2"></td>
        <td  class="td-w2">опт</td>
        <td  class="td-w2">кр. опт</td>
    </tr>
    <tr>
        <td colspan="2" class="td-w2">s</td>
    <!--     <td>до 1.5</td> -->
        <td>По звонку</td>
        <td>По звонку</td>
    </tr>
    <tr>
        <td colspan="2" class="td-w2">m</td>
     <!--    <td>1.5-2</td> -->
        <td>По звонку</td>
        <td>По звонку</td>
    </tr>
    <tr>
        <td  colspan="2" class="td-w2">l</td>
    <!--     <td>2+</td> -->
        <td>По звонку</td>
        <td>По звонку</td>
    </tr>
    <tr class="td-w1">
        <td colspan="2">упаковка/штучная</td>
        <td colspan="2">Вид упаковки</td>
    </tr>
    <tr>
        <td colspan="2">20кг</td>
        <td colspan="2">коробка x*y*z</td>
    </tr>
</table>
</div>
			 	</div>

				 <div class="col-md-6 col-md-offset-0  col-sm-6 col-sm-offset-2 col-xs-10 col-xs-offset-1 "> 
			<img  src="img/menu/pages/nerka2.png">
			 	</div>

	</div>





	</div>
</div>



<? elseif ($product==4): ?>

      <div class="products"   id="products">


<img src="img/menu/pages/salat-left.png" alt="" class="ovs salat-l">
<img src="img/menu/pages/kroshki2.png" alt="" class="ovs kroshki2">



<img src="img/menu/perec.png" alt="" class="ovs perec41">
<img src="img/menu/hvoy.png" alt="" class="ovs hvoy41">
<img src="img/menu/hvoy.png" alt="" class="ovs hvoy42">
<img src="img/menu/pages/soul.png" alt="" class="ovs soul41">


	<div class="container ">
		<div class="row col-md-12 col-sm-12 col-xs-12">
			
			<div class="col-md-12 col-md-offset-0 col-sm-6 col-sm-offset-3  col-xs-8  col-xs-offset-2 ">
				
				<div class="title-block">
					<h1>Чавыча С/М ПБГ</h1>
					<!-- <h2>Продукция</h2> -->


				</div>
			</div>

		</div>



		<div class="row " >
			 <div class="col-md-6 col-md-offset-0  col-sm-6 col-sm-offset-2 col-xs-10 col-xs-offset-1 "> 
			<img src="img/menu/pages/chavicha.png">
			 	</div>
			 <div class="col-md-5 col-md-offset-0  col-sm-6 col-sm-offset-2 col-xs-10 col-xs-offset-1 "> 
<div class="info">			 	
<table>
    <tr class="td-w1">
        <td colspan="2">размеры рыбы</td>
        <td colspan="2">цена</td>
    </tr>
    <tr>
        <td colspan="2">                            
                <div class="more">
                    
<a class="fancybox" caption="" href="#pr4"> Подробнее</a>
                </div></td>
        <td  class="td-w2">опт</td>
        <td  class="td-w2">кр. опт</td>
    </tr>
    <tr>
        <td  colspan="2"  class="td-w2">s</td>
       <!--  <td>до 1.5</td> -->
        <td>по звонку</td>
        <td>по звонку</td>
    </tr>
    <tr>
        <td colspan="2"  class="td-w2">m</td>
      <!--   <td>1.5-2</td> -->
        <td>по звонку</td>
        <td>по звонку</td>
    </tr>
    <tr>
        <td  colspan="2" class="td-w2">l</td>
       <!--  <td>2+</td> -->
        <td>по звонку</td>
        <td>по звонку</td>
    </tr>
    <tr class="td-w1">
        <td colspan="2">упаковка/штучная</td>
        <td colspan="2">Вид упаковки</td>
    </tr>
    <tr>
        <td colspan="2">23 кг/ коробка</td>
        <td colspan="2">коробка 74*37*20</td>
    </tr>
</table>
</div>
			 	</div>

	

	</div>








	</div>
</div>











<? elseif ($product==5): ?>

      <div class="products"   id="products">


<img src="img/menu/pages/salat-left.png" alt="" class="ovs salat-l">
<img src="img/menu/pages/kroshki2.png" alt="" class="ovs kroshki2">



<img src="img/menu/green-list.png" alt="" class="ovs greenlist51">
<img src="img/menu/hvoy.png" alt="" class="ovs hvoy51">
<img src="img/menu/hvoy.png" alt="" class="ovs hvoy52">
<img src="img/menu/pages/soul.png" alt="" class="ovs soul51">





	<div class="container ">
		<div class="row col-md-12 col-sm-12 col-xs-12">
			
			<div class="col-md-12 col-md-offset-0 col-sm-6 col-sm-offset-3  col-xs-8  col-xs-offset-2 ">
				
				<div class="title-block">
					<h1>Камбала Н/Р белобрюш. С/М</h1>
					<!-- <h2>Продукция</h2> -->


				</div>
			</div>

		</div>



		<div class="row " >
			 <div class="col-md-6 col-md-offset-0  col-sm-6 col-sm-offset-2 col-xs-10 col-xs-offset-1 "> 
			<img src="img/menu/pages/kambala.png">
			 	</div>
			 <div class="col-md-5 col-md-offset-0  col-sm-6 col-sm-offset-2 col-xs-10 col-xs-offset-1 "> 
<div class="info">			 	
<table>
    <tr class="td-w1">
        <td colspan="2">размеры рыбы</td>
        <td colspan="2">цена</td>
    </tr>
    <tr>
        <td colspan="2">                            
                <div class="more">
                    
<a class="fancybox" caption="" href="#pr5"> Подробнее</a>
                </div></td>
        <td  class="td-w2">опт</td>
        <td  class="td-w2">кр. опт</td>
    </tr>
<!--     <tr>
        <td class="td-w2">s</td>
        <td>до 1.5</td>
        <td>по звонку</td>
        <td>по звонку</td>
    </tr> -->
    <tr>
        <td  colspan="2" class="td-w2">m</td>
      <!--   <td>1.5-2</td> -->
        <td>по звонку</td>
        <td>по звонку</td>
    </tr>
    <tr>
        <td colspan="2"  class="td-w2">l</td>
     <!--    <td>2+</td> -->
        <td>по звонку</td>
        <td>по звонку</td>
    </tr>
    <tr class="td-w1">
        <td colspan="2">упаковка/штучная</td>
        <td colspan="2">Вид упаковки</td>
    </tr>
    <tr>
        <td colspan="2">23 кг/ коробка</td>
        <td colspan="2">x*y*z</td>
    </tr>
</table>
</div>
			 	</div>

	

	</div>








	</div>
</div>









<? elseif ($product==6): ?>

      <div class="products"   id="products">


<img src="img/menu/pages/salat-left.png" alt="" class="ovs salat-l">
<img src="img/menu/pages/kroshki2.png" alt="" class="ovs kroshki2">


<img src="img/page-product/ukrop.png" alt="" class="ovs ukrop61">
<img src="img/menu/perec.png" alt="" class="ovs perec61">
<img src="img/menu/hvoy.png" alt="" class="ovs hvoy61">
<img src="img/menu/knife.png" alt="" class="ovs knife61">

	<div class="container ">
		<div class="row col-md-12 col-sm-12 col-xs-12">
			
			<div class="col-md-12 col-md-offset-0 col-sm-6 col-sm-offset-3  col-xs-8  col-xs-offset-2 ">
				
				<div class="title-block">
					<h1>Треска ПБГ блочная</h1>
					<!-- <h2>Продукция</h2> -->


				</div>
			</div>

		</div>



		<div class="row " >
			 <div class="col-md-6 col-md-offset-0  col-sm-6 col-sm-offset-2 col-xs-10 col-xs-offset-1 "> 
			<img src="img/menu/pages/treska.png">
			 	</div>
			 <div class="col-md-5 col-md-offset-0  col-sm-6 col-sm-offset-2 col-xs-10 col-xs-offset-1 "> 
<div class="info">			 	
<table>
    <tr class="td-w1">
        <td colspan="2">размеры рыбы</td>
        <td colspan="2">цена</td>
    </tr>
    <tr>
        <td colspan="2">                            
                <div class="more">
                    
<a class="fancybox" caption="" href="#pr6"> Подробнее</a>
                </div></td>
        <td  class="td-w2">опт</td>
        <td  class="td-w2">кр. опт</td>
    </tr>
    <tr>
        <td colspan="2"  class="td-w2">s</td>
        <!-- <td>до 1.5</td> -->
        <td>по звонку</td>
        <td>по звонку</td>
    </tr>
    <tr>
        <td  colspan="2" class="td-w2">m</td>
        <!-- <td>1.5-2</td> -->
        <td>по звонку</td>
        <td>по звонку</td>
    </tr>
    <tr>
        <td colspan="2"  class="td-w2">l</td>
        <!-- <td>2+</td> -->
        <td>по звонку</td>
        <td>по звонку</td>
    </tr>
    <tr class="td-w1">
        <td colspan="2">упаковка/штучная</td>
        <td colspan="2">Вид упаковки</td>
    </tr>
    <tr>
        <td colspan="2"><!-- 23 кг/ коробка --></td>
        <td colspan="2">x*y*z</td>
    </tr>
</table>
</div>
			 	</div>

	

	</div>








	</div>
</div>












<? elseif ($product==7): ?>

      <div class="products"   id="products">


<img src="img/menu/pages/salat-left.png" alt="" class="ovs salat-l">
<img src="img/menu/pages/kroshki2.png" alt="" class="ovs kroshki2">


<img src="img/menu/pages/soul.png" alt="" class="ovs soul51">
<img src="img/menu/perec.png" alt="" class="ovs perec71">
<img src="img/menu/hvoy.png" alt="" class="ovs hvoy71">
	<div class="container ">
		<div class="row col-md-12 col-sm-12 col-xs-12">
			
			<div class="col-md-12 col-md-offset-0 col-sm-6 col-sm-offset-3  col-xs-8  col-xs-offset-2 ">
				
				<div class="title-block">
					<h1>Консервы рыбные нерка натуральная в с/соку</h1>
					<!-- <h2>Продукция</h2> -->


				</div>
			</div>

		</div>



		<div class="row " >
			 <div class="col-md-6 col-md-offset-0  col-sm-6 col-sm-offset-2 col-xs-10 col-xs-offset-1 "> 
			<img src="img/menu/pages/nerka-conservs.png">
			 	</div>
			 <div class="col-md-5 col-md-offset-0  col-sm-6 col-sm-offset-2 col-xs-10 col-xs-offset-1 "> 
<div class="info">			 	
<table>
    <tr class="td-w1">
        <td colspan="2">Вес банки</td>
        <td colspan="2">цена</td>
    </tr>
    <tr>
        <td colspan="2">                            
                <div class="more">
                    
<a class="fancybox" caption="" href="#pr7"> Подробнее</a>
                </div></td>
        <td  class="td-w2">опт</td>
        <td  class="td-w2">кр. опт</td>
    </tr>

    <tr>
       
        <td colspan="2">227г.</td>
        <td>по звонку</td>
        <td>по звонку</td>
    </tr>
    

    <tr class="td-w1">
        <td colspan="2">упаковка/штучная</td>
        <td colspan="2">Вид упаковки</td>
    </tr>
    <tr>
        <td colspan="2">60 банок</td>
        <td colspan="2">коробка x*y*z</td>
    </tr>
</table>

<p> * Лучшие в соотношении "цена - качество" по 
независимой оценке телепередачи "Доверяй, 
но проверяй" телеканала <img src="img/menu/pages/moscow24.png" alt=""></p>
</div>
			 	</div>

	

	</div>








	</div>
</div>












<? elseif ($product==8): ?>

      <div class="products"   id="products">


<img src="img/menu/pages/salat-left.png" alt="" class="ovs salat-l">
<img src="img/menu/pages/kroshki2.png" alt="" class="ovs kroshki2">


<img src="img/menu/pages/soul.png" alt="" class="ovs soul51">
<img src="img/menu/perec.png" alt="" class="ovs perec81">
<img src="img/menu/hvoy.png" alt="" class="ovs hvoy81">

	<div class="container ">
		<div class="row col-md-12 col-sm-12 col-xs-12">
			
			<div class="col-md-12 col-md-offset-0 col-sm-6 col-sm-offset-3  col-xs-8  col-xs-offset-2 ">
				
				<div class="title-block">
					<h1>Консервы рыбные рагу из тихоокеанских лососевых рыб</h1>
					<!-- <h2>Продукция</h2> -->


				</div>
			</div>

		</div>



		<div class="row " >
			 <div class="col-md-6 col-md-offset-0  col-sm-6 col-sm-offset-2 col-xs-10 col-xs-offset-1 "> 
			<img src="img/menu/pages/ragu.png">
			 	</div>
			 <div class="col-md-5 col-md-offset-0  col-sm-6 col-sm-offset-2 col-xs-10 col-xs-offset-1 "> 
<div class="info">			 	
<table>
    <tr class="td-w1">
        <td colspan="2">Вес банки</td>
        <td colspan="2">цена</td>
    </tr>
    <tr>
        <td colspan="2">                            
                <div class="more">
                    
<a class="fancybox" caption="" href="#pr8"> Подробнее</a>
                </div></td>
        <td  class="td-w2">опт</td>
        <td  class="td-w2">кр. опт</td>
    </tr>
    <tr>
       
        <td colspan="2">227г.</td>
        <td>по звонку</td>
        <td>по звонку</td>
    </tr>
    

    <tr>
        <td colspan="2">упаковка/штучная</td>
        <td colspan="2">Вид упаковки</td>
    </tr>
    <tr>
        <td colspan="2">Коробка 60 банок</td>
        <td colspan="2">коробка x*y*z</td>
    </tr>
</table>



</div>
			 	</div>

	

	</div>








	</div>
</div>






<? elseif ($product==9): ?>

      <div class="products"   id="products">


<img src="img/menu/pages/salat-left.png" alt="" class="ovs salat-l">
<img src="img/menu/pages/kroshki2.png" alt="" class="ovs kroshki2">

<img src="img/page-product/ukrop.png" alt="" class="ovs ukrop">
<img src="img/page-product/perec.png" alt="" class="ovs perec">
	<div class="container ">
		<div class="row col-md-12 col-sm-12 col-xs-12">
			
			<div class="col-md-12 col-md-offset-0 col-sm-6 col-sm-offset-3  col-xs-8  col-xs-offset-2 ">
				
				<div class="title-block">
					<h1>Икра лососевая</h1>
					<!-- <h2>Продукция</h2> -->


				</div>
			</div>

		</div>



		<div class="row " >
			 <div class="col-md-6 col-md-offset-0  col-sm-6 col-sm-offset-2 col-xs-10 col-xs-offset-1 "> 
			<img src="img/menu/pages/ikra.png">
			 	</div>
			 <div class="col-md-5 col-md-offset-0  col-sm-6 col-sm-offset-2 col-xs-10 col-xs-offset-1 "> 
<div class="info">			 	
<table>
    <tr class="td-w1">
        <td colspan="2">Объем</td>
        <td colspan="2">цена</td>
    </tr>
    <tr>
        <td colspan="2">  

               </td>
        <td  class="td-w2">опт</td>
        <td  class="td-w2">кр. опт</td>
    </tr>
    <tr>
        <td class="td-w2"> <div class="more">
                    
<a class="fancybox" caption="" href="#pr9"> Горбуши...</a>
                </div></td>
        <td>25кг</td>
        <td>по звонку</td>
        <td>по звонку</td>
    </tr>
    <tr>
        <td class="td-w2"> <div class="more">
                    
<a class="fancybox" caption="" href="#pr10"> Кеты...</a>
                </div></td>
        <td>25кг.</td>
        <td>по звонку</td>
        <td>по звонку</td>
    </tr>
    <tr>
        <td class="td-w2"> <div class="more">
                    
<a class="fancybox" caption="" href="#pr11"> Нерки...</a>
                </div></td>
        <td>25кг.</td>
        <td>по звонку</td>
        <td>по звонку</td>
    </tr>
    <tr>
        <td colspan="2"></td>
        <td colspan="2"></td>
    </tr>
  <!--   <tr>
        <td colspan="2">23 кг/ коробка</td>
        <td colspan="2">x*y*z</td>
    </tr> -->
</table>
</div>
			 	</div>

	

	</div>








	</div>
</div>






<? else: ?>
  <p>Default Content</p>
<? endif; ?>
























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


<a class="call-btn btn" href="#sendform">Заказать звонок</a>





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
