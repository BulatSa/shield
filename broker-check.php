<?php include('header.php'); ?>

<div class="s-head-simple s-head-check">
	<div class="container">
		<div class="row">

			<div class="grid-6 grid-12_m">
				<h1 class="h1">Насколько надежен ваш брокер?</h1>
				<div class="h3">Проверьте его в нашем сервисе</div>
				<div class="user-content">
					<p class="text-big">Защищая интересы своих клиентов, мы собрали большую базу недобросовестных брокеров.</p>
					<p class="text-big">Если у вас есть сомнения в честности вашего финансового посредника, проверьте его с помощью нашего сервиса. Это не займет много времени.</p>

					<div class="broker-check">
						<div class="broker-check__title">Введите название компании Брокера</div>
						<form class="broker-check__form">
							<input type="text" class="input-text" placeholder="Брокер" required>
							<button type="submit" class="btn">Проверить</button>
						</form>
					</div>
				</div>
			</div>

			<div class="grid-5 grid-off-1 grid-6_l grid-off-0_l grid-12_m">
				<!--<div class="broker-check-result broker-check-result--good">
					<div class="h3">Все норм</div>
					<div class="text-big"><strong>Этот брокер НОРМ.</strong><br><br>Свяжитесь с нами, чтобы оценить возможные риски и&nbsp;получить конкретный план действий.</div>
					<button class="btn btn--white fancy-modal" data-src="#modal-consult">Бесплатная консультация</button>
				</div>-->
				<div class="broker-check-result broker-check-result--error">
					<div class="h3">Будьте осторожны!<br>Ваш брокер — мошенник.</div>
					<div class="text-big"><strong>Этот брокер попал в наш черный список.</strong><br><br>Свяжитесь с нами, чтобы оценить риски и&nbsp;получить конкретный план действий.</div>
					<button class="btn btn--white fancy-modal" data-src="#modal-consult">Бесплатная консультация</button>
				</div>
			</div>

		</div>
	</div>
</div>

<?php include('footer.php'); ?>
