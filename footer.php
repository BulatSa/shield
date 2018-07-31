<!-- Модальные окна -->
<div class="modals-sec">

	<div id="modal-order" class="modal">
		<p class="h4 modal__title">Оставить заявку</p>
		<p class="modal__descr">Оставьте заявку и&nbsp;наш администратор свяжется с&nbsp;Вами в&nbsp;течение 10&nbsp;минут</p>
		<form class="ajax-form">
			<input type="hidden" value="Новая заявка" name="form_subject">
			<input type="text" class="input-text" name="user_name" placeholder="Введите имя" data-label="Имя пользователя">
			<input type="email" class="input-text" name="user_email" placeholder="Введите e-mail*" data-label="Email" data-req="true">
			<input type="tel" class="input-text" name="user_tel" placeholder="Введите телефон*" data-label="Телефон"  data-req="true">
			<textarea class="input-textarea" name="user_comment" placeholder="Введите комментарий" data-label="Комментарий"></textarea>
			<button type="submit" class="btn">Отправить</button>
			<label class="style-check-ios">
				<input type="checkbox" name="user_policy" data-label="Согласен с условиями" value="yes" data-req="true" checked="">
				<span>Нажимая кнопку, я даю согласие на&nbsp;обработку персональных данных и&nbsp;соглашаюсь с&nbsp;<a href="#">условиями политики конфиденциальности</a></span>
			</label>
		</form>
	</div>

	<div id="modal-thanks" class="modal">
		<p>Спасибо за заявку!</p>
	</div>

	<div id="modal-error" class="modal">
		<p>Что-то пошло не так.</p>
		<p>Попробуйте еще раз.</p>
		<p>Если постоянно видите эту ошибку, пожалуйста, обратитесь к администратору сайта. Мы будем очень благодарны.</p>
	</div>

</div>
<!-- Модальные окна -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="js/assets.js" type="text/javascript" ></script>
<script src="js/main.js" type="text/javascript" ></script>

	</body>
</html>
