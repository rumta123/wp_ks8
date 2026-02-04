<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-7 col-md-4">
					<div class="footer-name">
						<div class="footer-name-container">
					
							<span>Психологическое консультирование,</span> 
							индивидуальные и групповые сессии, <br />
							корпоративные тренинги.
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-5 col-md-8">
					<div class="row">
						<div class="col-xs-6 col-sm-12 col-md-6">
							<div class="footer-contact">
								<div class="footer-contact-container">
									<p><a class="popup-modal" href="#user-modal">Политика конфиденциальности</a></p>
								</div>
							</div>
						</div>
						<div class="col-xs-6 col-sm-12 col-md-6">
							<div class="footer-call">
								<div class="footer-call-container">
								<div class="footer-social-buttons  shadowed rounded">
									<div class="footer-social-fb"><a href="https://vk.com/" target="_blank"><i class="fa fa-vk"></i></a></div>
									<div class="footer-social-i"><a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram"></i></a></div>
									<div class="footer-social-vk"><a href="https://t.me/" target="_blank"><i class="fa fa-telegram""></i></a></div>
								</div>
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	
	<div id="form-modal" class="form-modal sentence-modal white-popup-block mfp-hide  no-padding">
		<div class="close-modal"><i class="fa fa-close"></i></div>
		<div class="modal-container no-padding">
			<div class="row position-relative align-center">
				<div class="col-xs-12">
					<span class="modal-header-caption mt-40">Заказать звонок</span>
					<p>Оставьте контактные данные и я перезвоню вам в ближайшее время</p>
					<div class="mt-40"></div>
					<?php echo do_shortcode( '[contact-form-7 id="c2a5551" title="Заказать звонок"]' ); ?>
					<p class="mb-30">Сначала мы просто поговорим. Это вас ни к чему не обязывает</p>
				</div>
			</div>
		</div>
	</div>
	
	<div id="course-modal" class="sentence-modal white-popup-block mfp-hide  no-padding">
		<div class="close-modal"><i class="fa fa-close"></i></div>
		<div class="modal-container">
			<div class="row position-relative align-center">
				<div class="col-xs-12">
					<span class="modal-header-caption mt-20">Есть вопросы по курсам?<span>Напишите нам</span></span>
					<p class="sentence-modal-text mt-40 mb-20">Через мессенджеры быстрее:</p>
					<p class="mb-20 mb-20">
						<a class="button-eidth-auto button-gray button-whatsapp" href="https://wa.me/" target="_blank">Whatsapp</a>
					</p>
					<p>Сначала мы просто поговорим. Это вас ни к чему не обязывает</p>
				</div>
			</div>
		</div>
	</div>
	
	<div id="contact-modal" class="sentence-modal white-popup-block mfp-hide  no-padding">
		<div class="close-modal"><i class="fa fa-close"></i></div>
		<div class="modal-container">
			<div class="row position-relative align-center">
				<div class="col-xs-12">
					<span class="modal-header-caption mt-20">Есть вопрос или проблема?<span>Напишите напрямую</span></span>
					<p class="sentence-modal-text mt-40 mb-20">Через мессенджеры быстрее:</p>
					<p class="mb-20 mb-20">
<!-- 						<a class="button-eidth-auto button-gray button-telegram" href="https://teleg.run/Nika_Ovsyannikova" target="_blank">Telegram</a> -->
						<a class="button-eidth-auto button-gray button-whatsapp" href="https://wa.me/" target="_blank">Whatsapp</a>
					</p>
					<p>Сначала мы просто поговорим. Это вас ни к чему не обязывает</p>
				</div>
			</div>
		</div>
	</div>

	<div id="sentence-modal" class="sentence-modal white-popup-block mfp-hide  no-padding">
		<div class="close-modal"><i class="fa fa-close"></i></div>
		<div class="modal-container">
			<div class="row position-relative modal-picture">
				<div class="col-xs-7">
					<span class="modal-header-caption modal-header-caption-left">Есть предложение о сотрудничестве?</span>
					<p class="sentence-modal-text mt-60 mb-30">Через мессенджеры быстрее:</p>
<!-- 					<p class="mb-0">
						<a class="button-eidth-auto button-gray button-telegram" href="https://teleg.run/Nika_Ovsyannikova" target="_blank">Telegram</a> -->
						<a class="button-eidth-auto button-gray button-whatsapp" href="https://wa.me/" target="_blank">Whatsapp</a>
					</p>
				</div>
				<div class="col-xs-5 full-height">
					<div class="modal-right-content modal-photo">
						
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div id="user-modal" class="white-popup-block mfp-hide no-padding">
		<div class="close-modal"><i class="fa fa-close"></i></div>
		<div class="modal-header">
			<div class="row">
				<div class="col-xs-12"><span class="modal-header-caption">Политика конфиденциальности</span></div>
			</div>
		</div>
			<div class="modal-container modal-container-user">
			<div class="modal-contant">
				<p><strong>Согласие на обработку персональных данных клиентов-физических лиц</strong></p>
				<p>Пользователь, оставляя заявку на интернет-сайте ovsyannikova.pro, в том числе на поддоменах ***. ovsyannikova.pro, настоящее Согласие на обработку персональных данных (далее – Согласие). Действуя свободно, своей волей и в своем интересе, а также подтверждая свою дееспособность, Пользователь дает свое согласие ООО "Коммерц-Проект" (ИНН 9721060524), которое расположено по адресу 109518, Москва, Волжский бульвар,д.3 корп. 2 помещение XI, на обработку своих персональных данных со следующими условиями:</p>
				<p>1. Данное Согласие дается на обработку персональных данных, как без использования средств автоматизации, так и с их использованием.</p>
				<p>2. Согласие дается на обработку следующих моих персональных данных:</p>
				<p>A. Персональные данные, не являющиеся специальными или биометрическими: номера контактных телефонов; адреса электронной̆ почты; место работы и занимаемая должность; пользовательские данные (сведения о местоположении; тип и версия ОС; тип и версия Браузера; тип устройства и разрешение его экрана; источник откуда пришел на сайт пользователь; с какого сайта или по какой рекламе; язык ОС и Браузера; какие страницы открывает, и на какие кнопки нажимает пользователь; ip-адрес.</p>
				<p>3. Персональные данные не являются общедоступными.</p>
				<p>4. Цель обработки персональных данных: обработка входящих запросов физических лиц с целью оказания консультирования; аналитики действий физического лица на веб-сайте и функционирования веб-сайта; проведение рекламных и новостных рассылок.</p>
				<p>5. Основанием для обработки персональных данных является: ст. 24 Конституции Российской Федерации; ст.6 Федерального закона №152-ФЗ «О персональных данных»; Устав ООО "Коммерц-Проект"; настоящее согласие на обработку персональных данных.</p>
				<p>6. В ходе обработки с персональными данными будут совершены следующие действия: сбор; запись; систематизация; накопление; хранение; уточнение (обновление, изменение); извлечение; использование; передача (распространение, предоставление, доступ); блокирование; удаление; уничтожение.</p>
				<p>7. Персональные данные обрабатываются до отписки физического лица от рекламных и новостных рассылок. Также обработка персональных данных может быть прекращена по запросу субъекта персональных данных. Хранение персональных данных, зафиксированных на бумажных носителях, осуществляется согласно Федеральному закону №125-ФЗ «Об архивном деле в Российской Федерации» и иным нормативно правовым актам в области архивного дела и архивного хранения.</p>
				<p>8. Согласие может быть отозвано субъектом персональных данных или его представителем путем направления письменного заявления ООО "Коммерц-Проект"; или его представителю по адресу, указанному в начале данного Согласия.</p>
				<p>9. В случае отзыва субъектом персональных данных или его представителем согласия на обработку персональных данных ООО "Коммерц-Проект"; вправе продолжить обработку персональных данных без согласия субъекта персональных данных при наличии оснований, указанных в пунктах 2 – 11 части 1 статьи 6, части 2 статьи 10 и части 2 статьи11 Федерального закона №152-ФЗ «О персональных данных» от 27.07.2006 г.</p>
				<p>10. Настоящее согласие действует все время до момента прекращения обработки персональных данных, указанных в п.7 и п.8 данного Согласия.</p>
			</div>
			<p class="popup-modal-dismiss-container mt-30 mb-40"><a class="button-brown button-eidth-auto popup-modal-dismiss" href="#">Принимаю</a></p>
		</div>
	</div>
	
	<div class="footer-social-buttons footer-social-buttons-fixed shadowed rounded">
		<div class="footer-social-fb"><a href="https://vk.com/" target="_blank"><i class="fa fa-vk"></i></a></div>
		<div class="footer-social-i"><a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram"></i></a></div>
		<div class="footer-social-vk"><a href="https://t.me/ target="_blank"><i class="fa fa-telegram""></i></a></div>
	</div>

	<script src="<?= get_template_directory_uri(); ?>/js/jquery.js"></script>
	<script src="<?= get_template_directory_uri(); ?>/js/owl.carousel.min.js"></script>
	<script src="<?= get_template_directory_uri(); ?>/js/jquery.magnific-popup.min.js"></script>
	<script src="<?= get_template_directory_uri(); ?>/js/custom.js?11"></script>
	
	<?php wp_footer(); ?>
</body>
</html>

