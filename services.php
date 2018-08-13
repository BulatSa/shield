<?php include('header.php'); ?>

<section class="big-head-sec big-head-sec--services" style="background-image: url('../img/services/head-bg.jpg')">
	<div class="container">
		<div class="big-head">
			<div class="big-head__info">
				<h1>Наш опыт<small>работает на вас</small></h1>
				<p>Более 5-ти лет мы помогаем нашим клиентам возвращать свои деньги благодаря процедуре chargeback. Накопленный опыт позволил нам разработать собственные сервисы, которые упрощают подготовку к самому процессу возврата денежных средств.</p>
				<div class="big-head__actions">
					<a href="/broker-check.php" class="btn btn--orange">Проверка брокера</a>
					<a href="#calc" class="link scrollto">Калькулятор возврата</a>
					<a href="#tariffs" class="link scrollto">Тарифы</a>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="s-services-about def-sec">
	<div class="container">
		<div class="sec-title sec-title--line">
			<div class="sec-title__left">
				<div class="h1">Как мы проводим Сhargeback?</div>
			</div>
			<div class="sec-title__right">
				<img src="/img/services/label.png" alt="chargeback">
			</div>
		</div>
		<div class="text-big">Следить за ходом дела и соблюдением сроков вы сможете в своем личном кабинете. Также о каждом этапе вы будете проинформированы через СМС и электронную почту.</div>

		<div class="steps">
			<div class="step">
				<header>
					<span>01</span>
					<img src="/img/services/step-1.png" alt="1">
				</header>
				<main>После обращения в нашу компанию мы закрепим за вами команду из старшего и младшего юристов. Они будут подобраны только из профессионалов, которые уже работали с вашим брокером и успешно вернули средства другим клиентам. Свои вопросы вы можете адресовать им в любое время и любым удобным способом: по телефону, почтой, в мессенджерах и социальных сетях.</main>
			</div>
			<div class="step">
				<header>
					<span>02</span>
					<img src="/img/services/step-2.png" alt="2">
				</header>
				<main>Юристы подготовят необходимые первичные документы на русском и английском языках и отправят по нужным адресам: уведомление о расторжении договора — вашему брокеру,  заявление на опротестование транзакций — банку. Также они составят и направят заявления в надзорные органы брокера: финансовому регулятору брокера, финансовому омбудсмену, а также в банк, где мошенник открывал расчетный счет. </main>
			</div>
			<div class="step">
				<header>
					<span>03</span>
					<img src="/img/services/step-3.png" alt="3">
				</header>
				<main>Наши специалисты найдут вашего брокера, чтобы возбудить против него уголовное дело. Они самостоятельно составят и подадут заявление, чтобы правоохранительные органы начали проверку в отношении его действий. Все издержки наша компания возьмет на себя..</main>
			</div>
			<div class="step">
				<header>
					<span>04</span>
					<img src="/img/services/step-4.png" alt="4">
				</header>
				<main>Если решение банка оказывается отрицательным, юристы подготовят и подадут повторное заявление в банк, а также направят жалобу в Visa и Mastercard. Они сообщат платежной системе о мошенничестве вашего брокера, а также подадут заявление финансовому омбудсмену страны, в которой был лицензирован посредник.</main>
			</div>
			<div class="step">
				<header>
					<span>05</span>
					<img src="/img/services/step-5.png" alt="5">
				</header>
				<main>Мы всегда работаем только по договору с гарантией возврата средств. Если вас не устроит качество наших услуг, в течение 10 дней после обращения в нашу компанию вы можете расторгнуть договор и забрать свои деньги назад в полном объеме.</main>
			</div>
		</div>
	</div>
</section>


<section class="s-calc def-sec" id="calc">
	<div class="container">
		<div class="row">

			<div class="grid-6 grid-12_m">
				<div class="sec-title sec-title--bigmargin">
					<div class="uptext">Калькулятор chargeback</div>
					<div class="h1">Узнайте вероятность <small>возврата ваших денег</small></div>
				</div>

				<div class="calc-step">
					<strong>01. Ваш брокер</strong>
					<input type="text" class="input-text" placeholder="Название брокера">
				</div>
				<div class="calc-step">
					<strong>02. Сумма потерянного депозита, <span class="rub">c</span></strong>
					<input type="text" class="calc-range-1" name="calc_1">
				</div>
				<div class="calc-step">
					<strong>03. Время с момента перевода денег на счет, дней</strong>
					<input type="text" class="calc-range-2" name="calc_2">
				</div>
			</div>

			<div class="grid-6 grid-12_m calc-right">
				<div class="column column--1">
					<div class="column__head">
						<strong><span id="percent1">0</span>%</strong>
						<small>Самостоятельно</small>
					</div>
					<div class="column__body"></div>
				</div>
				<div class="column column--2">
					<div class="column__head">
						<strong><span id="percent2">0</span>%</strong>
						<small>С помощью нас</small>
					</div>
					<div class="column__body"></div>
				</div>
			</div>

		</div>

		<div class="s-calc__bottom">
			<button class="btn btn--orange fancy-modal" data-src="#modal-consult">Получите детальную консультацию</button>
		</div>

	</div>
</section>


<section class="s-tariff-list def-sec" id="tariffs">
	<div class="container">
		<div class="sec-title sec-title--bigmargin">
			<div class="h1">Наши тарифы</div>
		</div>

		<div class="row-big">
			<div class="grid-4 grid-12_m">
				<div class="tariff">
					<main>
						<div class="h2">Минимальный</div>
						<div class="text-big">Сумма ущерба от 100.000 <span class="rub">a</span></div>
						<div class="tariff__item">
							<img src="/img/tariffs/1.svg" alt="1">
							Бесплатная первичная консультация
						</div>
						<div class="tariff__item">
							<img src="/img/tariffs/2.svg" alt="1">
							Персональный юрист
						</div>
						<div class="tariff__item">
							<img src="/img/tariffs/3.svg" alt="1">
							Персональный менеджер
						</div>
						<div class="tariff__item">
							<img src="/img/tariffs/4.svg" alt="1">
							Полное сопровождение дела
						</div>
						<div class="tariff__item">
							<img src="/img/tariffs/5.svg" alt="1">
							Бесплатная часовая круглосуточная поддержка и&nbsp;консультация юриста
						</div>
						<div class="tariff__actions">
							<button class="btn fancy-modal" data-src="#modal-order">Выбрать</button>
							<a href="/tarif-1.php" class="link">Узнать подробнее</a>
						</div>
					</main>
					<footer>
						<img src="/img/tariffs/lock.svg" alt="1">
						Если Сhargeback не запустится, мы вернем вам деньги.
					</footer>
				</div>
			</div>
			<div class="grid-4 grid-12_m">
				<div class="tariff">
					<main>
						<div class="h2">Оптимальный</div>
						<div class="text-big">Сумма ущерба от 500.000 <span class="rub">a</span></div>
						<div class="tariff__item">
							<img src="/img/tariffs/1.svg" alt="1">
							Бесплатная первичная консультация
						</div>
						<div class="tariff__item">
							<img src="/img/tariffs/2.svg" alt="1">
							Персональный юрист
						</div>
						<div class="tariff__item">
							<img src="/img/tariffs/3.svg" alt="1">
							Персональный менеджер
						</div>
						<div class="tariff__item">
							<img src="/img/tariffs/4.svg" alt="1">
							Полное сопровождение дела
						</div>
						<div class="tariff__item">
							<img src="/img/tariffs/5.svg" alt="1">
							Круглосуточная безлимитная поддержка и&nbsp;консультация юриста
						</div>
						<div class="tariff__item">
							<img src="/img/tariffs/8.svg" alt="1">
							72 часа на&nbsp;сбор и&nbsp;отправку документов в&nbsp;банк после подписания договора и&nbsp;оплаты услуг
						</div>
						<div class="tariff__actions">
							<button class="btn fancy-modal" data-src="#modal-order">Выбрать</button>
							<a href="/tarif-2.php" class="link">Узнать подробнее</a>
						</div>
					</main>
					<footer>
						<img src="/img/tariffs/lock.svg" alt="1">
						Если Сhargeback не запустится, мы вернем вам деньги.
					</footer>
				</div>
			</div>
			<div class="grid-4 grid-12_m">
				<div class="tariff">
					<main>
						<div class="h2">Идеальный</div>
						<div class="text-big">Сумма ущерба от 1.000.000 <span class="rub">a</span></div>
						<div class="tariff__item">
							<img src="/img/tariffs/1.svg" alt="1">
							Бесплатная первичная консультация
						</div>
						<div class="tariff__item">
							<img src="/img/tariffs/2.svg" alt="1">
							Персональный юрист
						</div>
						<div class="tariff__item">
							<img src="/img/tariffs/3.svg" alt="1">
							Персональный менеджер
						</div>
						<div class="tariff__item">
							<img src="/img/tariffs/4.svg" alt="1">
							Полное сопровождение дела
						</div>
						<div class="tariff__item">
							<img src="/img/tariffs/5.svg" alt="1">
							Круглосуточная безлимитная поддержка и&nbsp;консультация юриста
						</div>
						<div class="tariff__item">
							<img src="/img/tariffs/6.svg" alt="1">
							Приоритет в составлении и&nbsp;отправке документов для&nbsp;опротестования транзакций
						</div>
						<div class="tariff__item">
							<img src="/img/tariffs/7.svg" alt="1">
							Заявления на&nbsp;chargeback от&nbsp;генерального директора компании
						</div>
						<div class="tariff__item">
							<img src="/img/tariffs/8.svg" alt="1">
							72 часа на&nbsp;сбор и&nbsp;отправку документов в&nbsp;банк после подписания договора и&nbsp;оплаты услуг
						</div>
						<div class="tariff__actions">
							<button class="btn fancy-modal" data-src="#modal-order">Выбрать</button>
							<a href="/tarif-3.php" class="link">Узнать подробнее</a>
						</div>
					</main>
					<footer>
						<img src="/img/tariffs/lock.svg" alt="1">
						Если Сhargeback не запустится, мы вернем вам деньги.
					</footer>
				</div>
			</div>
		</div>

	</div>
</section>


<?php include('footer.php'); ?>
