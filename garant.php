﻿<?php include('header.php'); ?>

<section class="big-head-sec big-head-sec--garant" style="background-image: url('../img/garant/bg-head.jpg')">
	<div class="container">
		<div class="big-head">
			<div class="big-head__info">
				<h1>Слова не расходятся с делом</h1>
				<p>Вы платите, если нам удалось совершить возврат средств. Поэтому мы прилагаем все усилия, чтобы вернуть деньги законным владельцам и продолжаем процесс, когда банк предварительно отказал в опротестовании транзакций.</p>
			</div>
			<div class="big-head__bottom">
				<div class="big-head__pay">
					<span>Официальные партнеры</span>
					<img src="img/big-head/pay-head-short.png" alt="">
				</div>
			</div>
		</div>
	</div>
</section>


<section class="s-panel-section">
	<div class="container">
		<div class="panel-row panel-row--3">
			<div class="panel-wrap">
				<div class="panel">
					<img src="/img/home/panel-1.jpg" alt="1" class="panel__img">
					<div class="panel__content">
						<div class="h2"><small>Гарантия возврата средств</small>100%</div>
						<p class="panel__text">Мы полностью вернем деньги, если не сможем запустить процедуру в банке</p>
					</div>
				</div>
			</div>
			<div class="panel-wrap">
				<div class="panel">
					<img src="/img/home/panel-8.jpg" alt="1" class="panel__img">
					<div class="panel__content">
						<div class="h2"><small>Гарантия наказания брокера</small>100%</div>
						<p class="panel__text">Каждое уголовное дело доводим до уголовного преследования мошенников.</p>
					</div>
				</div>
			</div>
			<div class="panel-wrap">
				<div class="panel">
					<img src="/img/home/panel-9.jpg" alt="1" class="panel__img">
					<div class="panel__content">
						<div class="h2"><small>Гарантия спокойствия</small>100%</div>
						<p class="panel__text">Снимем с вас лишние заботы и оградим от угроз со стороны брокеров.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="garant-charge-sec def-sec">
	<div class="garant-charge container">
		<div class="garant-charge__info">
			<p class="h1">Первые в России</p>
			<img src="img/garant/charge-back.png" alt="">
			<span>Мы более 5 лет совершенствуем собственную уникальную систему по возврату денежных средств с&nbsp;оффшорных зон.</span>
		</div>
	</div>
</section>


<section class="check-bro-sec def-sec">
	<div class="check-bro container">
		<div class="check-bro__info">
			<p class="h1">Не нашли своего брокера?</p>
			<span class="h4">— Проверьте его в нашем сервисе</span>
			<a href="broker-check.php" class="btn btn--orange">Проверить брокера</a>
		</div>
	</div>
</section>


<section class="s-order def-sec" id="order">
	<div class="container">
		<div class="row">

			<div class="grid-6  grid-12_m s-order__left">
				<div class="sec-title">
					<div class="h1">Оцените сервис и&nbsp;экспертность <small>Закажите бесплатную консультацию</small></div>
				</div>
				<img src="/img/home/books.png" alt="books" class="s-order__books">
			</div>

			<div class="grid-6 grid-12_m">
				<div class="s-order__right">
					<div class="order-block">
						<p class="h4 order-block__title"><span class="blue">Время — деньги <br></span>Начните возврат своих денег прямо сейчас!</p>
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
					<div class="order-triggers">
						<img src="/img/home/letter.png" alt="letter" class="order-triggers__letter">
						<div class="order-triggers__content">
							<div class="uptext">Оставьте заявку и&nbsp;вы получите:</div>
							<div class="order-trigger">
								<i class="icon-percent"></i>
								Оценку дела юристом с опытом оспаривания денежных переводов.
							</div>
							<div class="order-trigger">
								<i class="icon-comment"></i>
								Рекомендации по возврату денежных средств для вашего случая.
							</div>
							<div class="order-trigger">
								<i class="icon-doc"></i>
								Первичные документы для запуска процедуры Chargeback.
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>


<?php include('footer.php'); ?>