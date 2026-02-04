<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<style>
.div_img {
/*     display: flex;
    justify-content: center; /* Выравнивание изображений по горизонтали по центру */ */
}

.div_img img {
    width: 200px; /* Ширина изображений */
    height: auto; /* Автоматическая высота для сохранения пропорций */
    margin: 10px; /* Отступы между изображениями */
    border-radius: 10px; /* Скругление углов изображений */
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1); /* Тень для изображений */
}
.methods-history-description {
    font-size: 14px;
    padding-bottom: 30px!important;
}
.academy-item{
	height: 100%;
}
.academy-img-item {
   
    height: 375px!important;
   
}

.blabla{
	display:flex ;
	align-items: center;
}
 .click {
    cursor: pointer;
    background-color: white;
    transition: background-color 0.3s;
  }

  .click .solve-block-item.rounded .solve-block-img:hover {

	 transform: scale(1.2);
  }	
	
	.click .solve-block-item.rounded .solve-block-item-caption:hover{
		 text-decoration: underline;
  color: black;
	}
@media (max-width:1039px) {
	.blabla{
		display:block ;
	}

}
</style>

<section class="top-block">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-6 top-main">
				<h1>Вероника Овсянникова</h1>
			
				<h2><span class="psiholog" style=" font-family: RobotoSlabBold;   font-size: larger;">Психолог. Педагог-психолог. Перинатальный психолог.</span>	<br/>
				
Член Ассоциации Когнетивно-поведенческой психотерапии.<br> 
			
				
				Специалист по психсоматике и эмоционально-образной терапии.
				<br/>
					Председатель комиссии по фрилансу и частной практике московского отделения Опоры России.
				</h2>
				<div class="header-contact-container xs-visible">
					<p><i class="fa fa-map-marker"></i><strong>Очно</strong> - г. Москва</p>
					<p><i class="fa fa-desktop"></i><strong>Онлайн</strong> - whatsapp, zoom</p>
				</div>
				<div class="row mt-60">
					<div class="col-xs-12 col-sm-12 col-md-6"><a class="button-brown popup-modal" href="#contact-modal">Задать вопрос</a></div>
					<div class="col-xs-12 col-sm-12 col-md-6"><a class="button-no-button popup-modal" href="#sentence-modal">Пригласить спикером</a></div>
				</div>
			</div>
		</div>
		<div class="row sm-hidden">
			<div class="col-md-9 col-lg-7 mt-60 mb-40">
				<div class="rounded shadowed white-bg achievements">
					<div class="row">
						<div class="col-xs-12">
							<p class="achievements-header">Уже на первой встрече</p>
							<p class="achievements-text">Вы продвинитесь к решению <br /> </p>
						</div>
					</div>
					<? /* <div class="row">
						<div class="col-xs-4">
							<div class="achievements-counter">
								1500+ 
							</div>
							<div class="achievements-caption">
								человек
							</div>
							<div class="achievements-text">
								решили свои проблемы
							</div>
						</div>
						<div class="col-xs-4">
							<div class="achievements-counter">
								200+
							</div>
							<div class="achievements-caption">
								бизнесменов
							</div>
							<div class="achievements-text">
								запустили успешный стартап
							</div>
						</div>
						<div class="col-xs-4">
							<div class="achievements-counter">
								40+ 
							</div>
							<div class="achievements-caption">
								компаний
							</div>
							<div class="achievements-text">
								улучшили эффективность работы
							</div>
						</div>
					</div>
				</div> */ ?>
			</div>
		</div>
	</div>
</section>
<section class="sm-visible">
	<div class="container">
		<div class="row">
			<div class="col-md-9 col-lg-8 mt-60 mb-40">
				<div class="rounded shadowed white-bg achievements">
					<div class="row">
						<div class="col-xs-12">
							<p class="achievements-header">Уже на первой встрече</p>
							<p class="achievements-text">Вы продвинитесь <br />к решению Вашего запроса</p>
						</div>
					</div>
					<? /* <div class="row">
						<div class="col-xs-4">
							<div class="achievements-counter">
								1500+ 
							</div>
							<div class="achievements-caption">
								человек
							</div>
							<div class="achievements-text">
								решили свои проблемы
							</div>
						</div>
						<div class="col-xs-4">
							<div class="achievements-counter">
								200+
							</div>
							<div class="achievements-caption">
								бизнесменов
							</div>
							<div class="achievements-text">
								запустили успешный стартап
							</div>
						</div>
						<div class="col-xs-4">
							<div class="achievements-counter">
								40+ 
							</div>
							<div class="achievements-caption">
								компаний
							</div>
							<div class="achievements-text">
								улучшили эффективность работы
							</div>
						</div>
					</div> */ ?>
				</div>
			</div>
		</div>
	</div>
</section>
	
<section class="methods-block  sm-hidden">
	<div class="methods-block-left-bg"></div>
	<div class="methods-block-right-bg"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h3 class="mt-60">Мои методы<br /> научно обоснованы</h3>
				<p>В основе — профильное образование, аккредитации и многолетний практический опыт</p>
				<p>Моя миссия: повышение ценности профессии психолога и психологической грамотности в современном обществе.</p>
				<div class="row">
					<div class="col-xs-12 col-md-8">
						<a class="button-brown mt-60 popup-modal" href="#contact-modal">Узнать о методе</a>
					</div>
				</div>
				<p class="methods-caption mt-20 mb-60"><i class="fa fa-check-circle"></i>Вместе с вами раскроем ваш внутренний потенциал</p>
			</div>
			<div class="col-md-6 popup-gallery">
				
				<div class="row methods-year-container mt-60">
					<div class="col-xs-4">
						<div class="methods-year">01</div>
					</div>
					<div class="col-xs-8">
						<div class="methods-history-description">
							Московский государственный социальный университет. 2003 год. Специальность психолог
<!-- 						тут фото диплома	 -->
							<a href="<?= get_template_directory_uri(); ?>/images/diploms/d1.jpg" class="image-gallery" title="">Посмотреть диплом ></a>
						</div>
					</div>
				</div>
				
			
				
				<div class="row methods-year-container">
					<div class="col-xs-4">
						<div class="methods-year">02</div>
					</div>
					<div class="col-xs-8">
						<div class="methods-history-description">
							Московский государственный психолого-педагогический университет. Специальность психолог-педагог. 2023 год (магистратура)
							<a href="<?= get_template_directory_uri(); ?>/images/diploms/d2.jpeg" class="image-gallery" title="">Посмотреть диплом ></a>
						</div>
					</div>
				</div>
				
				<div class="row methods-year-container">
					<div class="col-xs-4">
						<div class="methods-year">03</div>
					</div>
					<div class="col-xs-8">
						<div class="methods-history-description">
							Ассоциация когнетивно-поведенческих психотерапевтов. КПТ-терапевт.
							<a href="<?= get_template_directory_uri(); ?>/images/diploms/d2.jpeg" class="image-gallery" title="">Посмотреть диплом ></a>
						</div>
					</div>
				</div>
				
			
				
				
				<div class="row methods-year-container">
					<div class="col-xs-4">
						<div class="methods-year">04</div>
					</div>
					<div class="col-xs-8">
						<div class="methods-history-description">
							Высшее юридическое образование НГУ Натальи Нестеровой
							<a href="<?= get_template_directory_uri(); ?>/images/diploms/d1.jpg" class="image-gallery" title="">Посмотреть диплом ></a>
						</div>
					</div>
				</div>
				
				
				
				
				<div class="row methods-year-container">
					<div class="col-xs-4">
						<div class="methods-year">05</div>
					</div>
					<div class="col-xs-8">
						<div class="methods-history-description">
							Психологический факультет МГУ им. Ломоносова
							<a href="<?= get_template_directory_uri(); ?>/images/diploms/d2.jpeg" class="image-gallery" title="">Посмотреть диплом ></a>
						</div>
					</div>
				</div>
				<div class="row methods-year-container">
					<div class="col-xs-4">
						<div class="methods-year">06</div>
					</div>
					<div class="col-xs-8">
						<div class="methods-history-description">
							МУПИ Психологическое консультирование и психодиагностика (профессиональная переподготовка)
							<a href="<?= get_template_directory_uri(); ?>/images/diploms/d3.jpeg" class="image-gallery" title="">Посмотреть диплом ></a>
							<a href="<?= get_template_directory_uri(); ?>/images/diploms/d3_.jpeg" class="image-gallery" title=""></a>
						</div>
					</div>
				</div>
				<div class="row methods-year-container">
					<div class="col-xs-4">
						<div class="methods-year">07</div>
					</div>
					<div class="col-xs-8">
						<div class="methods-history-description">
							МГУ им Ломоносова. Психология измененных состояний сознания (повышение квалификации)
							<a href="<?= get_template_directory_uri(); ?>/images/diploms/d4.jpeg" class="image-gallery" title="">Посмотреть диплом ></a>
						</div>
					</div>
				</div>
				<div class="row methods-year-container">
					<div class="col-xs-4">
						<div class="methods-year">08</div>
					</div>
					<div class="col-xs-8">
						<div class="methods-history-description">
							Международный Эриксоновский Университет Коучинга. Сертифицированный коуч ICF 
							<a href="<?= get_template_directory_uri(); ?>/images/diploms/d5.jpeg" class="image-gallery" title="">Посмотреть диплом ></a>
						</div>
					</div>
				</div>
				<!--Это десктоп-->
				<div class="row methods-year-container">
					<div class="col-xs-4">
						<div class="methods-year">09</div>
					</div>
					<div class="col-xs-8">
						<div class="methods-history-description">
						Сертификат Профессиональной психотерапевтической лиги. Эмоционально-образная терапия.
							<a href="<?= get_template_directory_uri(); ?>/images/diploms/d6.jpeg" class="image-gallery" title="">Посмотреть диплом ></a> 
						</div>
					</div>
				</div>
				<div class="row methods-year-container mb-60">
					<div class="col-xs-4">
						<div class="methods-year">10</div>
					</div>
					<div class="col-xs-8">
						<div class="methods-history-description">
						Сертификат Профессиональной психотерапевтической лиги. Курс психосоматика.
							<a href="<?= get_template_directory_uri(); ?>/images/diploms/d7.jpeg" class="image-gallery" title="">Посмотреть диплом ></a> 
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="methods-block mt-60 sm-visible">
	<div class="methods-block-left-bg"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h3 class="mt-60">Мои методы<br /> научно обоснованы <br /> И подтверждены практикой</h3>
				<p>В основе - профильное образование, аккредитации и многолетний практический опыт</p>
				<p>Моя миссия: повышение ценности профессии психолога и психологической грамотности в современном обществе.</p>
				<div class="row">
					<div class="col-xs-12 col-md-8">
						<a class="button-brown mt-60 popup-modal" href="#contact-modal">Узнать о методе</a>
					</div>
				</div>
				<p class="methods-caption mt-20 mb-60"><i class="fa fa-check-circle"></i>Вместе с вами раскроем ваш внутренний потенциал</p>
			</div>
		</div>
	</div>
</section>
<section class="methods-block sm-visible">
	<div class="methods-block-right-bg"></div>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 popup-gallery">
				<div class="row methods-year-container mt-60">
					<div class="col-xs-4">
						<div class="methods-year">01</div>
					</div>
					<div class="col-xs-8">
						<div class="methods-history-description">
							Московский государственный университет. 2003 год. Специальность психолог
<!-- 						тут фото диплома	 -->
							<a href="<?= get_template_directory_uri(); ?>/images/diploms/d1.jpg" class="image-gallery" title="">Посмотреть диплом ></a>
						</div>
					</div>
				</div>
				
			
				
				<div class="row methods-year-container">
					<div class="col-xs-4">
						<div class="methods-year">02</div>
					</div>
					<div class="col-xs-8">
						<div class="methods-history-description">
							Московский государственный психолого-педагогический университет. Специальность психолог-педагог. 2023 год (магистратура)
							<a href="<?= get_template_directory_uri(); ?>/images/diploms/d2.jpeg" class="image-gallery" title="">Посмотреть диплом ></a>
						</div>
					</div>
				</div>
				
				<div class="row methods-year-container">
					<div class="col-xs-4">
						<div class="methods-year">03</div>
					</div>
					<div class="col-xs-8">
						<div class="methods-history-description">
							Ассоциация когнетивно-поведенческих психотерапевтов. КПТ-терапевт.
							<a href="<?= get_template_directory_uri(); ?>/images/diploms/d2.jpeg" class="image-gallery" title="">Посмотреть диплом ></a>
						</div>
					</div>
				</div>
				
			
				
				
				<div class="row methods-year-container">
					<div class="col-xs-4">
						<div class="methods-year">04</div>
					</div>
					<div class="col-xs-8">
						<div class="methods-history-description">
							Высшее юридическое образование НГУ Натальи Нестеровой
							<a href="<?= get_template_directory_uri(); ?>/images/diploms/d1.jpg" class="image-gallery" title="">Посмотреть диплом ></a>
						</div>
					</div>
				</div>
				
				
				
				
				<div class="row methods-year-container">
					<div class="col-xs-4">
						<div class="methods-year">05</div>
					</div>
					<div class="col-xs-8">
						<div class="methods-history-description">
							Психологический факультет МГУ им. Ломоносова
							<a href="<?= get_template_directory_uri(); ?>/images/diploms/d2.jpeg" class="image-gallery" title="">Посмотреть диплом ></a>
						</div>
					</div>
				</div>
				<div class="row methods-year-container">
					<div class="col-xs-4">
						<div class="methods-year">06</div>
					</div>
					<div class="col-xs-8">
						<div class="methods-history-description">
							МУПИ Психологическое консультирование и психодиагностика (профессиональная переподготовка)
							<a href="<?= get_template_directory_uri(); ?>/images/diploms/d3.jpeg" class="image-gallery" title="">Посмотреть диплом ></a>
							<a href="<?= get_template_directory_uri(); ?>/images/diploms/d3_.jpeg" class="image-gallery" title=""></a>
						</div>
					</div>
				</div>
				<div class="row methods-year-container">
					<div class="col-xs-4">
						<div class="methods-year">07</div>
					</div>
					<div class="col-xs-8">
						<div class="methods-history-description">
							МГУ им Ломоносова. Психология измененных состояний сознания (повышение квалификации)
							<a href="<?= get_template_directory_uri(); ?>/images/diploms/d4.jpeg" class="image-gallery" title="">Посмотреть диплом ></a>
						</div>
					</div>
				</div>
				<div class="row methods-year-container">
					<div class="col-xs-4">
						<div class="methods-year">08</div>
					</div>
					<div class="col-xs-8">
						<div class="methods-history-description">
							Международный Эриксоновский Университет Коучинга. Сертифицированный коуч ICF 
							<a href="<?= get_template_directory_uri(); ?>/images/diploms/d5.jpeg" class="image-gallery" title="">Посмотреть диплом ></a>
						</div>
					</div>
				</div>
				<!--Это десктоп-->
				<div class="row methods-year-container">
					<div class="col-xs-4">
						<div class="methods-year">09</div>
					</div>
					<div class="col-xs-8">
						<div class="methods-history-description">
						Сертификат Профессиональной психотерапевтической лиги. Эмоционально-образная терапия.
							<a href="<?= get_template_directory_uri(); ?>/images/diploms/d6.jpeg" class="image-gallery" title="">Посмотреть диплом ></a> 
						</div>
					</div>
				</div>
				<div class="row methods-year-container mb-60">
					<div class="col-xs-4">
						<div class="methods-year">10</div>
					</div>
					<div class="col-xs-8">
						<div class="methods-history-description">
						Сертификат Профессиональной психотерапевтической лиги. Курс психосоматика.
							<a href="<?= get_template_directory_uri(); ?>/images/diploms/d7.jpeg" class="image-gallery" title="">Посмотреть диплом ></a> 
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>	
<section class="questions-block mt-60">
    <div class="container">
        <div class="row"> 
			<h3 class="">Встречи и анонсы</h3>
			<p class="subheader mt-40">Сентябрь:</p>
			
   
              
                <ul class="questions-bad-result">
					 <div class="div_img">
<!--                     <li class="li1">
					<span> Бизнес завтрак комитета по развитию женского бизнеса Опоры России в Москве
</span> 
					</li> -->
<!-- 					<img height="100px" src="<?= get_template_directory_uri(); ?>/images/solve/swupervizio.jpg" alt="Фото 1"> -->
					</div>
					                    <li class="li2">
					<span> Встреча мастер-майнд комиссии по фрилансу и частной практике , Опоры России в Москве.
											</span> </li>
<!--                     <li class="li3">
					<span> Презентация книги «Как мы создавали свое дело с нуля»</span> 
					</li> -->
                </ul>
      
      
              
				 <ul class="questions-bad-result">
					 <div class="div_img">

					</li>
<!-- 					<img height="100px" src="<?= get_template_directory_uri(); ?>/images/solve/swupervizio.jpg" alt="Фото 1"> -->
					</div>
				</ul>
              
 
			
	
              
				 <ul class="questions-bad-result">
					 <div class="div_img">
                   
<!-- 					<img height="100px" src="<?= get_template_directory_uri(); ?>/images/solve/swupervizio.jpg" alt="Фото 1"> -->
					</div>
				</ul>
              
      
        </div>
    </div>
</section>
<section class="solve-block mt-60">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<h3>Ваша жизнь изменится к лучшему, а бизнес станет эффективнее 
					<span>с помощью моих авторских техник и инструментов</span></h3>
			</div>
			<div class="col-xs-12 col-md-4 col-lg-3">
				<div class="row">
					<div class="col-xs-12">
						<div class="solve-block-item-header">
							<div class="solve-block-item-caption-container-header">
								<div class="solve-block-item-caption-container-header-content">
									Личные консультации
								</div>
							</div>
							<div class="solve-block-item-caption-container">
								<div class="solve-block-item-caption">
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-8 col-lg-9 solve-block-images-part">
				<div class="row">
					<div class="col-xs-6 col-md-6 col-lg-4">
						<div class="solve-block-item rounded">
							<div class="solve-block-img" style="background-image: url(<?= get_template_directory_uri(); ?>/images/solve/1.jpg);"></div>
							<div class="solve-block-item-caption-container">
								<div class="solve-block-item-caption">
									Семейная психология, психология отношений.
								</div>
							</div>
						</div>
					</div>
					<div class="col-xs-6 col-md-6 col-lg-4">
						<div class="solve-block-item rounded">
							<div class="solve-block-img" style="background-image: url(<?= get_template_directory_uri(); ?>/images/solve/7.jpg);"></div>
							<div class="solve-block-item-caption-container">
								<div class="solve-block-item-caption">
									Работа с подростками, самоопределение, профориентация
								</div>
							</div>
						</div>
					</div>
					<div class="col-xs-6 col-md-6 col-lg-4">
						<div class="solve-block-item rounded">
							<div class="solve-block-img" style="background-image: url(<?= get_template_directory_uri(); ?>/images/solve/nls.png);"></div>
							<div class="solve-block-item-caption-container">
								<div class="solve-block-item-caption">
									Негативные жизненные сценарии, родовые установки
								</div>
							</div>
						</div>
					</div>
			
					<div class="col-xs-6 col-md-6 col-lg-4">
						<div class="solve-block-item rounded">
							<div class="solve-block-img" style="background-image: url(<?= get_template_directory_uri(); ?>/images/solve/mb.png);"></div>
							<div class="solve-block-item-caption-container">
								<div class="solve-block-item-caption">
									Ограничивающие убеждения, денежные блоки
								</div>
							</div>
						</div>
					</div>
					<div class="col-xs-6 col-md-6 col-lg-4">
						<div class="solve-block-item rounded">
							<div class="solve-block-img" style="background-image: url(<?= get_template_directory_uri(); ?>/images/solve/pg.png);"></div>
							<div class="solve-block-item-caption-container">
								<div class="solve-block-item-caption">
									Личностный рост
								</div>
							</div>
						</div>
					</div>
					<div class="col-xs-6 col-md-6 col-lg-4">
						<div class="solve-block-item rounded">
							<div class="solve-block-img" style="background-image: url(<?= get_template_directory_uri(); ?>/images/solve/rs.png);"></div>
							<div class="solve-block-item-caption-container">
								<div class="solve-block-item-caption">
									Ресурсное состояние
								</div>
							</div>
						</div>
					</div>
					
<!-- 	начало				 -->
					
		<div class="col-xs-6 col-md-6 col-lg-6 click"  onclick="redirectToGoogle()">
						<div class="solve-block-item rounded">
							<div class="solve-block-img" style="background-image: url(<?= get_template_directory_uri(); ?>/images/solve/grups.jpg);"></div>
							<div class="solve-block-item-caption-container">
								<div class="solve-block-item-caption">
									Групповая терапия
								</div>
							</div>
						</div>
					</div>
					
			<div class="col-xs-6 col-md-6 col-lg-6 click"  onclick="redirectToGoogle()">
						<div class="solve-block-item rounded">
							<div class="solve-block-img" style="background-image: url(<?= get_template_directory_uri(); ?>/images/solve/swupervizio.jpg);"></div>
							<div class="solve-block-item-caption-container">
								<div class="solve-block-item-caption">
									Супервизии/Интервизии
								</div>
							</div>
						</div>
					</div>
								
					
<!-- конец 					 -->
				</div>
			</div>
			

			
			
			<div class="col-xs-12 col-md-4 col-lg-3">
				<div class="row">
					<div class="col-xs-12">
						<div class="solve-block-item-header">
							<div class="solve-block-item-caption-container-header">
								<div class="solve-block-item-caption-container-header-content">
									Для бизнеса
								</div>
							</div>
							<div class="solve-block-item-caption-container">
								<div class="solve-block-item-caption">
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			
			
			
			
			
			<div class="col-xs-12 col-md-8 col-lg-9 solve-block-images-part">
				<div class="row">
					<div class="col-xs-6 col-md-6 col-lg-4">
						<div class="solve-block-item rounded">
							<div class="solve-block-img" style="background-image: url(<?= get_template_directory_uri(); ?>/images/solve/4.jpg);"></div>
							<div class="solve-block-item-caption-container">
								<div class="solve-block-item-caption">
									Коучинг руководителей, топ-менеджеров и бизнесменов
								</div>
							</div>
						</div>
					</div>
					<div class="col-xs-6 col-md-6 col-lg-4">
						<div class="solve-block-item rounded">
							<div class="solve-block-img" style="background-image: url(<?= get_template_directory_uri(); ?>/images/solve/cc.png);"></div>
							<div class="solve-block-item-caption-container">
								<div class="solve-block-item-caption">
									Корпоративный коучинг для рабочих коллективов
								</div>
							</div>
						</div>
					</div>
					<div class="col-xs-6 col-md-6 col-lg-4">
						<div class="solve-block-item rounded">
							<div class="solve-block-img" style="background-image: url(<?= get_template_directory_uri(); ?>/images/solve/gmm.png);"></div>
							<div class="solve-block-item-caption-container">
								<div class="solve-block-item-caption">
									Расширение масштаба мышления
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>



<!-- <section class="questions-block mt-60">
	<div class="container">
		<div class="row">
			<div class="col-md-5">
				<h3 class="mt-60">К сожалению</h3>
				<p>В России нет обязательного лицензирования психологов и законов, регулирующих их работу.</p>
				<p>Никто не проверяет образование специалиста, безопасность и результативность его методик.</p>
				<p class="subheader mt-40">В результате:</p>
				<ul class="questions-bad-result">
					<li><span>Общественные стереотипы</span></li>
					<li><span>Предвзятое отношение</span></li>
					<li><span>Отсутствие результата и разочарования</span></li>
				</ul>
			</div>
			<div class="col-md-7">
			</div>
		</div>
	</div>
</section> -->

<section class="speaker-block mt-60">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<h3 class="h3-center mt-60">Работаю как методист и приглашенный спикер</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-7 sm-visible">
				<div class="speaker-img-container speaker-img-right">
					<div class="speaker-img" style="background-image: url(<?= get_template_directory_uri(); ?>/images/speaker/speak3.jpg);"></div>
				</div>
			</div>
			<div class="col-sm-5">
				<p class="speaker-header">С 2012 года</p>
				<p>Бизнес тренер с 2012 года. Более 500 студентов с успешными бизнес-кейсами. </p>
				<p>Тренер программы «Бизнес Уикенд» для подростков от департамента предпринимательства г. Москвы.</p>
				<p>Партнер компании Experum <br />
					в качестве бизнес-ментора.</p>
				<p>Спикер ЦДП (Цифровое деловое пространство) г. Москвы</p>
				<p>
					Председатель комиссии по фрилансу и чакстной практике Опоры России
				</p>
				<p>
					Спиер и тренер в центрах занятости населения "Моя работа" г. Москва; 
				</p>
				<p>
					Приглашенный психолог на ТВ и радио
				</p>
			</div>
			<div class="col-sm-7 sm-hidden">
				<div class="speaker-img-container speaker-img-right" style="height: 70vh;">
					<div class="speaker-img" style="background-image: url(<?= get_template_directory_uri(); ?>/images/speaker/speak3.jpg);"></div>
				</div>
			</div>
		</div>
		<div class="row mt-40">
			<div class="col-sm-7">
				<div class="speaker-img-container speaker-img-left">
					<div class="speaker-img" style="background-image: url(<?= get_template_directory_uri(); ?>/images/speaker/speaker-2.jpg);"></div>
				</div>
			</div>
			<div class="col-sm-5">
				<p class="speaker-header">С 2018 года</p>				
				<p class="strong">Вхожу в совет Московского клуба <br />
					предпринимателей</p>
				<p>Провожу Мастер Майнды. Открытые встречи предпринимателей, где участники, работая в группах, обмениваются опытом и коллективно решают бизнес-задачи</p>
			</div>
		</div>
	</div>
</section>

<section class="speaker-block mt-60 mb-60">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<h3 class="h3-center mt-60">Основатель «Центра инновационных систем здоровья личности»</h3>
			</div>
		</div>
		<div class="row blabla" >
			<div class="col-md-4">
				<div class="academy-item academy-left-item">
					<div>
						<p><span>Автор курсов</span> «Жертва или Мастер», «Цель», «Мастер жизни», «Осознанное мышление»</p>
					</div>
				</div>
				<div class="academy-item academy-left-item">
					<div>
						<p><span>Автор марафонов</span> «Сила мысли», «Путь к осознанному мышлению»</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="academy-item academy-left-item">
					<div>
						<p><span>Автор и ведущая курса:</span>
						"Психика. Инструкция по эксплуатации", Это курс для всех, кто интересуется психологией, хочет лучше понимать себя и других и намерен менять свою жизнь к лучшему.</p>
					</div>
				</div>
				<div class="academy-item academy-left-item">
					<div>
						<p><span>Автор серии открытых семинаров:</span>
							«Работа с негативными повторяющимися сценариями и родовыми установками», «Как выявить и убрать блокирующие убеждения и вредные страхи»</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="academy-item academy-item academy-img-item"></div>
			</div>
		</div>
		<div class="row mt-40">
			<div class="col-xs-12 align-center">
				<a class="button-brown button-eidth-auto popup-modal" href="#course-modal">Узнать о курсах</a>
			</div>
		</div>
	</div>
</section>

<section class="ecology-block mt-60">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<h3 class="h3-center mt-60">Экологично решаем проблему и закрепляем результат
					<span>Мои принципы</span></h3>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 mb-40">
				<div class="row">
					<div class="col-xs-2"><div class="ecology-block-img ecology-block-1"></div></div>
					<div class="col-xs-10">
						<p class="ecology-header">Мой девиз - не навреди</p>
						<p>Работаю деликатно и экологично. «Порвать шаблон» несложно, куда важнее помочь выстроить новую картину мира</p>
					</div>
				</div>
			</div>
			<div class="col-md-6 mb-40">
				<div class="row">
					<div class="col-xs-2"><div class="ecology-block-img ecology-block-2"></div></div>
					<div class="col-xs-10">
						<p class="ecology-header">Не даю нереальных обещаний и не навязываю лишние услуги</p>
						<p>Уже после первой консультации вы поймете сколько времени понадобится для решения проблемы. Иногда достаточно 1 встречи</p>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 mb-40">
				<div class="row">
					<div class="col-xs-2"><div class="ecology-block-img ecology-block-3"></div></div>
					<div class="col-xs-10">
						<p class="ecology-header">Каждая сессия - конфиденциальна. Время сессии регламентировано, но мы не прерываемся резко и неожиданно</p>
						<p>Общение непрерывное, без отвлечений. Я направляю нашу встречу чтобы мы успели все проработать. У каждого человека внутри есть все ресурсы для наилучшего результата</p>
					</div>
				</div>
			</div>
			<div class="col-md-6 mb-40">
				<div class="row">
					<div class="col-xs-2"><div class="ecology-block-img ecology-block-4"></div></div>
					<div class="col-xs-10">
						<p class="ecology-header">Не работаю «на поток», несу ответственность за каждого клиента</p>
						<p>Я всегда на связи. Между сессиями или после вы не остаетесь наедине со своими проблемами. Это снижает риск «отката».</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="rewies-block mt-60">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<h3>Что говорят обо мне клиенты
					<span>Каждый случай в моей практике - конфиденциален по умолчанию. <br />
					Отзывы добровольны и опубликованы с согласия клиентов</span></h3>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 popup-gallery">
				<div class="owl-carousel owl-theme owl-three">
					<div class="item" style="background-image: url(<?= get_template_directory_uri(); ?>/images/rewies/video_picture_3.png);">
						<p class="intro">
							<a href="<?= get_template_directory_uri(); ?>/images/rewies/rewie_12.mp4" title="" class="popup-vimeo">
								<span class="intro-text"></span>
							</a>
						</p>
					</div>
					<div class="item" style="background-image: url(<?= get_template_directory_uri(); ?>/images/rewies/rewie_2.jpeg);">
						<p class="intro">
							<a href="<?= get_template_directory_uri(); ?>/images/rewies/rewie_2.jpeg" title="" class="image image-gallery">
								<span class="intro-text"></span>
							</a>
						</p>
					</div>
					<div class="item" style="background-image: url(<?= get_template_directory_uri(); ?>/images/rewies/video_picture_1.png);">
						<p class="intro">
							<a href="<?= get_template_directory_uri(); ?>/images/rewies/rewie_11.mp4" title="" class="popup-vimeo">
								<span class="intro-text"></span>
							</a>
						</p>
					</div>
					<div class="item" style="background-image: url(<?= get_template_directory_uri(); ?>/images/rewies/rewie_1.jpeg);">
						<p class="intro">
							<a href="<?= get_template_directory_uri(); ?>/images/rewies/rewie_1.jpeg" title="" class="image image-gallery">
								<span class="intro-text"></span>
							</a>
						</p>
					</div>
					<div class="item" style="background-image: url(<?= get_template_directory_uri(); ?>/images/rewies/rewie_3.jpeg);">
						<p class="intro">
							<a href="<?= get_template_directory_uri(); ?>/images/rewies/rewie_3.jpeg" title="" class="image image-gallery">
								<span class="intro-text"></span>
							</a>
						</p>
					</div>
					<div class="item" style="background-image: url(<?= get_template_directory_uri(); ?>/images/rewies/video_picture_2.png);">
						<p class="intro">
							<a href="<?= get_template_directory_uri(); ?>/images/rewies/rewie_10.MP4" title="" class="popup-vimeo">
								<span class="intro-text"></span>
							</a>
						</p>
					</div>
					<div class="item" style="background-image: url(<?= get_template_directory_uri(); ?>/images/rewies/rewie_4.jpeg);">
						<p class="intro">
							<a href="<?= get_template_directory_uri(); ?>/images/rewies/rewie_4.jpeg" title="" class="image image-gallery">
								<span class="intro-text"></span>
							</a>
						</p>
					</div>
					<div class="item" style="background-image: url(<?= get_template_directory_uri(); ?>/images/rewies/rewie_5.jpeg);">
						<p class="intro">
							<a href="<?= get_template_directory_uri(); ?>/images/rewies/rewie_5.jpeg" title="" class="image image-gallery">
								<span class="intro-text"></span>
							</a>
						</p>
					</div>
					<div class="item" style="background-image: url(<?= get_template_directory_uri(); ?>/images/rewies/rewie_6.jpeg);">
						<p class="intro">
							<a href="<?= get_template_directory_uri(); ?>/images/rewies/rewie_6.jpeg" title="" class="image image-gallery">
								<span class="intro-text"></span>
							</a>
						</p>
					</div>
					<div class="item" style="background-image: url(<?= get_template_directory_uri(); ?>/images/rewies/rewie_7.jpeg);">
						<p class="intro">
							<a href="<?= get_template_directory_uri(); ?>/images/rewies/rewie_7.jpeg" title="" class="image image-gallery">
								<span class="intro-text"></span>
							</a>
						</p>
					</div>
					<div class="item" style="background-image: url(<?= get_template_directory_uri(); ?>/images/rewies/rewie_8.jpeg);">
						<p class="intro">
							<a href="<?= get_template_directory_uri(); ?>/images/rewies/rewie_8.jpeg" title="" class="image image-gallery">
								<span class="intro-text"></span>
							</a>
						</p>
					</div>
					<div class="item" style="background-image: url(<?= get_template_directory_uri(); ?>/images/rewies/rewie_9.jpeg);">
						<p class="intro">
							<a href="<?= get_template_directory_uri(); ?>/images/rewies/rewie_9.jpeg" title="" class="image image-gallery">
								<span class="intro-text"></span>
							</a>
						</p>
					</div>
			    </div>
			</div>
		</div>
	</div>
</section>

<section class="instagram-block mt-60">
	<div class="container">
		<div class="row">
			<div class="col-xs-6 col-md-3">
				<div class="instagram-block-item-text">
					<div class="instagram-block-item-text-inner">
						<p>Больше отзывов и моей жизни 
						в профиле Instagram:</p>
						<a href="https://www.instagram.com/" target="_blank"></a>
							<p>Телеграм:</p>
						<a href="https://t.me/" target="_blank"></a>
							<p>Вконтакте:</p>
						<a href="https://vk.com/" target="_blank">vk.com/</a>
					</div>
				
				</div>
			</div>
<!-- 			<div class="col-xs-6 col-md-3">
				<div class="instagram-block-item" style="background-image: url(<?= get_template_directory_uri(); ?>/images/photo-1.jpg);"></div>
			</div> -->
			<div class="col-xs-6 col-md-3">
				<div class="instagram-block-item" style="background-image: url(<?= get_template_directory_uri(); ?>/images/photo-2.jpg);"></div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="instagram-block-item" style="background-image: url(<?= get_template_directory_uri(); ?>/images/photo-3.jpg);"></div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="instagram-block-item" style="background-image: url(<?= get_template_directory_uri(); ?>/images/photo-4.jpg);"></div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="instagram-block-item" style="background-image: url(<?= get_template_directory_uri(); ?>/images/photo-5.jpg);"></div>
			</div>
<!-- 			<div class="col-xs-6 col-md-3">
				<div class="instagram-block-item" style="background-image: url(<?= get_template_directory_uri(); ?>/images/photo-6.jpg);"></div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="instagram-block-item" style="background-image: url(<?= get_template_directory_uri(); ?>/images/photo-7.jpg);"></div>
			</div> -->
		</div>
	</div>
</section>

<section class="messenger-block mt-60 mb-60">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<h3 class="h3-center mt-60">Есть вопрос или проблема?
					<span>Напишите мне напрямую</span></h3>
				<p>Через мессенджеры быстрее:</p>
				<p class="mt-40 mb-40">
<!-- 					<a class="button-eidth-auto button-gray button-telegram" href="https://teleg.run/Nika_Ovsyannikova" target="_blank">Telegram</a> -->
					<a class="button-eidth-auto button-gray button-whatsapp" href="https://wa.me/79852757788" target="_blank">Whatsapp</a>
				</p>
				<p>Сначала мы просто поговорим. Это вас ни к чему не обязывает</p>
			</div>
		</div>
	</div>
</section>



<script>

  function redirectToGoogle() {
    window.location.href = "#";
  }
</script>	







<?php
get_footer();
