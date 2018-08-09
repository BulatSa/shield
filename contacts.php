<?php include('header.php'); ?>

<section class="big-head-sec big-head-sec--contacts" style="background-image: url('../img/contacts/head-bg.jpg')">
	<div class="container">
		<div class="big-head">
			<div class="big-head__info">
				<h1>Контакты</h1>
				<p>Казань, ул.&nbsp;Островского, д.&nbsp;87, оф.&nbsp;519 | <nobr><strong>Работаем: 9:00-18:00 Пн-Пт</strong></nobr></p>
			</div>
			<div class="uptext">Звоните:</div>
			<div class="contacts-phones">
				<div class="contacts-item">
					<a href="tel:8(800)6001617" class="h3">8 (800) 600 16 17</a>
					<div class="text-small">Бесплатный номер по всей России</div>
				</div>
				<div class="contacts-item">
					<a href="tel:8(800)6001617" class="h3">8 (800) 600 16 17</a>
					<div class="text-small">Cтранам СНГ, Прибалтики, Средней Азии, жителям ближнего и дальнего зарубежья</div>
				</div>
			</div>
			<div class="contacts-item">
				<div class="uptext">Пишите:</div>
				<a href="mailto:info@chargebacker.ru">info@chargebacker.ru</a>
			</div>
			<div class="big-head__bottom">
				<a href="https://yandex.ru/map-widget/v1/-/CBuD6BczhB" class="btn btn--orange fancy-map">Смотреть на карте</a>
			</div>
		</div>
	</div>
</section>


<section class="s-requisites def-sec">
	<div class="container">
		<div class="user-content">
			<h3 class="h3">Реквизиты</h3>
			<p>
				<span class="uptext">ООО «ЮК «Щит и Меч»</span><br>
				ИНН / КПП 1658151459 / 770501001<br>
				ОГРН 1131690081522
			</p>
			<p>
				<span class="uptext">Юридический адрес:</span><br>
				420107, Россия, г. Казань, ул. Островского, д. 87, оф. 519
			</p>
			<p>
				<span class="uptext">Фактический адрес:</span><br>
				420107, Россия, г. Казань, ул. Островского, д. 87, оф. 519
			</p>
			<p>
				<span class="uptext">Реквизиты банка:</span><br>
				ТОЧКА ПАО БАНКА "ФК ОТКРЫТИЕ"<br>
				Р/счет № 40702810207500001411<br>
				К/счет № 30101810845250000999<br>
				БИК 044525999
			</p>
			<p>
				E-mail: info@chargebacker.ru
			</p>
			<p>
				<span class="uptext">Генеральный директор ООО «ЮК «Щит и Меч»</span><br>
				Валиахметов И. И.
			</p>
		</div>
	</div>
</section>


<section class="s-big-form def-sec">
	<div class="container">

		<div class="big-form-block">
			<div class="h4 big-form-block__title">Задайте вопрос и <span class="blue">получите ответ в течение 2 минут</span></div>
			<div class="text-big big-form-block__descr">Позвоните или заполните форму — юрист свяжется с вами, чтобы проконсультировать по вашему делу.</div>
			<form class="ajax-form big-form">
				<input type="hidden" value="Оставили вопрос" name="form_subject">
				<div class="row">
					<div class="grid-4 grid-12_m">
						<input type="text" class="input-text" name="user_name" placeholder="Ваше имя" data-label="Имя пользователя">
					</div>
					<div class="grid-4 grid-12_m">
						<input type="tel" class="input-text" name="user_tel" placeholder="Телефон | Для оценки дела*" data-label="Телефон"  data-req="true">
					</div>
					<div class="grid-4 grid-12_m">
						<input type="email" class="input-text" name="user_email" placeholder="E-mail | Для отправки документов*" data-label="Email" data-req="true">
					</div>
				</div>
				<textarea name="user_comment" class="input-textarea" placeholder="Ваш вопрос" data-label="Комментарий"></textarea>
				<footer class="big-form__footer">
					<label class="style-check-ios">
						<input type="checkbox" name="user_policy" data-label="Согласен с условиями" value="yes" data-req="true" checked="">
						<span>Нажимая кнопку, я даю согласие на&nbsp;обработку персональных данных и&nbsp;соглашаюсь с&nbsp;<a href="#">условиями политики конфиденциальности</a></span>
					</label>
					<button type="submit" class="btn">Отправить</button>
				</footer>
			</form>
		</div>

	</div>
</section>


<?php include('footer.php'); ?>
