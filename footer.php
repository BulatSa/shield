<section class="s-footer">
	<div class="container">

		<div class="row">
			<div class="grid-9 grid-12_l">
				<div class="footer-row">
					<div class="footer-logo">
						<a href="/">
							<img src="/img/footer-logo.png" alt="Логотип">
						</a>
					</div>
					<a href="#">Главная</a>
					<a href="#">О компании</a>
					<a href="#" class="active">Сервисы</a>
					<a href="#">Гарантии</a>
					<a href="#">Отзывы</a>
					<a href="#">Блог</a>
					<a href="#">Контакты</a>
				</div>
				<div class="footer-row">
					<a href="/simple-page.php">Правила и условия оказания юридических услуг</a>
					<a href="/simple-page.php">Политика конфиденциальности</a>
					<a href="/simple-page.php">Возврат денежных средств</a>
				</div>
			</div>
			<div class="grid-3 grid-12_l clearfix">
				<div class="footer-right">
					<div class="footer-phone">
						<a href="tel:8(800)6001617">8 (800) 600 16 17</a>
						<span>Бесплатная горячая линия</span>
					</div>
					<div class="footer-phone">
						<a href="tel:8(905)0387367">8 (905) 038 73 67</a>
						<span>Cтранам СНГ, Прибалтики, Средней Азии, ближнего и&nbsp;дальнего зарубежья</span>
					</div>
					<div class="footer-social">
						<div class="social-list">
							<a href="#"><i class="icon-soc-fb"></i></a>
							<a href="#"><i class="icon-soc-insta"></i></a>
							<a href="#"><i class="icon-soc-you"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row footer-bottom">
			<div class="grid-4 grid-12_s">
				Все права защищены<br>
				ООО "Юридическая компания "Щит&nbsp;и&nbsp;Меч"<br>
				Дата учреждения: 26.11.2013г
			</div>
			<div class="grid-4 grid-12_s footer-bottom__center">
				ИНН/КПП: 1658151459/165501001<br>
				ОГРН: 1131690081522
			</div>
			<div class="grid-4 grid-12_s footer-bottom__right">
				<a href="https://penbrain.ru" target="_blank">Дизайн сайта — Pen&Brain</a>
			</div>
		</div>

	</div>
</section>


<!-- Модальные окна -->
<div class="modals-sec">

	<div id="modal-consult" class="modal">
		<p class="h4 modal__title"><span class="blue">Оставьте заявку</span> на&nbsp;бесплатную консультацию</p>
		<form class="ajax-form">
			<input type="hidden" value="Заявка на консультацию" name="form_subject">
			<input type="text" class="input-text" name="user_name" placeholder="Ваше имя" data-label="Имя пользователя">
			<input type="tel" class="input-text" name="user_tel" placeholder="Телефон | Для оценки дела*" data-label="Телефон"  data-req="true">
			<input type="email" class="input-text" name="user_email" placeholder="E-mail | Для отправки документов*" data-label="Email" data-req="true">
			<label class="style-check-ios">
				<input type="checkbox" name="user_policy" data-label="Согласен с условиями" value="yes" data-req="true" checked="">
				<span>Нажимая кнопку, я даю согласие на&nbsp;обработку персональных данных и&nbsp;соглашаюсь с&nbsp;<a href="#">условиями политики конфиденциальности</a></span>
			</label>
			<button type="submit" class="btn">Отправить</button>
		</form>
	</div>

	<div id="modal-callback" class="modal">
		<p class="h4 modal__title"><span class="blue">Обратный звонок</span></p>
		<form class="ajax-form">
			<input type="hidden" value="Обратный звонок" name="form_subject">
			<input type="text" class="input-text" name="user_name" placeholder="Ваше имя" data-label="Имя пользователя">
			<input type="tel" class="input-text" name="user_tel" placeholder="Телефон | Для оценки дела*" data-label="Телефон"  data-req="true">
			<label class="style-check-ios">
				<input type="checkbox" name="user_policy" data-label="Согласен с условиями" value="yes" data-req="true" checked="">
				<span>Нажимая кнопку, я даю согласие на&nbsp;обработку персональных данных и&nbsp;соглашаюсь с&nbsp;<a href="#">условиями политики конфиденциальности</a></span>
			</label>
			<button type="submit" class="btn">Отправить</button>
		</form>
	</div>

	<div id="modal-charity" class="modal">
		<p class="h4 modal__title"><span class="blue">Стать волонтером</span></p>
		<form class="ajax-form">
			<input type="hidden" value="Благотворительность" name="form_subject">
			<input type="text" class="input-text" name="user_name" placeholder="Ваше имя" data-label="Имя пользователя">
			<input type="tel" class="input-text" name="user_tel" placeholder="Ваш телефон" data-label="Телефон"  data-req="true">
			<label class="style-check-ios">
				<input type="checkbox" name="user_policy" data-label="Согласен с условиями" value="yes" data-req="true" checked="">
				<span>Нажимая кнопку, я даю согласие на&nbsp;обработку персональных данных и&nbsp;соглашаюсь с&nbsp;<a href="#">условиями политики конфиденциальности</a></span>
			</label>
			<button type="submit" class="btn">Отправить</button>
		</form>
	</div>

	<div id="modal-order" class="modal">
		<p class="h4 modal__title">Начните возврат своих денег <span class="blue">прямо сейчас</span></p>
		<form class="ajax-form">
			<input type="hidden" value="Новая заявка" name="form_subject">
			<input type="text" class="input-text" name="user_name" placeholder="Ваше имя" data-label="Имя пользователя">
			<input type="tel" class="input-text" name="user_tel" placeholder="Телефон | Для оценки дела*" data-label="Телефон"  data-req="true">
			<input type="email" class="input-text" name="user_email" placeholder="E-mail | Для отправки документов*" data-label="Email" data-req="true">
			<label class="style-check-ios">
				<input type="checkbox" name="user_policy" data-label="Согласен с условиями" value="yes" data-req="true" checked="">
				<span>Нажимая кнопку, я даю согласие на&nbsp;обработку персональных данных и&nbsp;соглашаюсь с&nbsp;<a href="#">условиями политики конфиденциальности</a></span>
			</label>
			<button type="submit" class="btn">Отправить</button>
		</form>
	</div>

	<div id="modal-thanks" class="modal">
		<p class="h4 modal__thanks">Спасибо за&nbsp;заявку!</p>
	</div>

	<div id="modal-error" class="modal">
		<p class="h4">Что-то пошло не так.</p>
		<p>Попробуйте перезагрузить страницу и отправить форму заново.</p>
		<p>Если постоянно видите эту ошибку, пожалуйста, обратитесь к администратору сайта. Мы будем очень благодарны.</p>
	</div>

</div>
<!-- Модальные окна -->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="js/assets.js" type="text/javascript" ></script>
<script src='https://www.google.com/recaptcha/api.js?render=6LdxvGgUAAAAAPgRwPtMm1yE2VjBka-o6kwGY54l'></script>
<script src="js/main.js" type="text/javascript" ></script>

	</body>
</html>
