<!-- Модальные окна -->
<div class="modals-sec">

	<div id="modal-consult" class="modal">
		<p class="h4 modal__title"><span class="blue">Оставьте заявку</span> на&nbsp;бесплатную консультацию</p>
		<form class="ajax-form">
			<input type="hidden" value="Новая заявка на консультацию" name="form_subject">
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
