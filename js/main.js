/***********************
 отправка формы в php BEGIN
 ***********************/
// captcha
var captchaString = "";
try {
	grecaptcha.ready(function() {
		grecaptcha.execute('6LdxvGgUAAAAAPgRwPtMm1yE2VjBka-o6kwGY54l')
			.then(function(token) {
				captchaString = token;
			});
	});
} catch (e) { }
// captcha

$(function () {
	$(".ajax-form").on("submit", function (event) {
		var form = $(this);
		var send = true;
		event.preventDefault();
		grecaptcha.execute('6LdxvGgUAAAAAPgRwPtMm1yE2VjBka-o6kwGY54l')
			.then(function(token) {
				// console.log(token);
				captchaString = token;
			});

		$(this).find("[data-req='true']").each(function () {
			if ($(this).val() === "") {
				$(this).addClass('error');
				send = false;
			}
			if ($(this).is('select')) {
				if ($(this).val() === null) {
					$(this).addClass('error');
					send = false;
				}
			}
			if ($(this).is('input[type="checkbox"]')) {
				if ($(this).prop('checked') !== true) {
					$(this).addClass('error');
					send = false;
				}
			}
		});

		$(this).find("[data-req='true']").on('focus click', function () {
			$(this).removeClass('error');
		});

		var form_data = new FormData(this);
		if (captchaString.length > 0){
			form_data.append("g-recaptcha-response", captchaString);
		}

		$("[data-label]").each(function () {
			var input_name = $(this).attr('name');
			var input_label__name = input_name + '_label';
			var input_label__value = $(this).data('label').toString();
			form_data.append(input_label__name, input_label__value);
		});

		if (send === true) {
			$.ajax({
				type: "POST",
				async: true,
				url: "/send.php",
				cache: false,
				contentType: false,
				processData: false,
				data: form_data,
				success: (function (result) {
					console.log(result);
					if (result.indexOf("recaptcha") !== -1) {
						$.fancybox.open({src: '#modal-error'});
						return;
					}
					if (result.indexOf("Mail FAIL") !== -1) {
						$.fancybox.close();
						$.fancybox.open({src: '#modal-error'});
					} else {
						$.fancybox.close();
						$.fancybox.open({src: '#modal-thanks'});
						setTimeout(function () {
							$.fancybox.close();
						}, 4500);
						form[0].reset();
					}
				})
			});
		}
	});
});
/***********************
 отправка формы в php END
 ***********************/


/***********************
 Input mask BEGIN
 ***********************/
$(function () {
	$("input[type='tel']").mask("+7 (999) 999-99-99");
});

/***********************
 Input mask END
 ***********************/


/***********************
 fancybox BEGIN
 ***********************/
function init_fancy() {
	$().fancybox({
		selector: '.fancy',
		buttons: ['close'],
		backFocus: false,
		lang : 'ru',
		i18n : {
			'ru' : {
				CLOSE       : 'Закрыть',
				NEXT        : 'Дальше',
				PREV        : 'Назад',
				ERROR       : 'Не удается загрузить. <br/> Попробуйте позднее.',
				PLAY_START  : 'Начать слайдшоу',
				PLAY_STOP   : 'Остановить слайдшоу',
				FULL_SCREEN : 'На весь экран',
				THUMBS      : 'Превью'
			}
		}
	});
	$().fancybox({
		selector: '.fancy-modal',
		backFocus: false,
		touch: false,
		lang : 'ru',
		i18n : {
			'ru' : {
				CLOSE       : 'Закрыть',
				NEXT        : 'Дальше',
				PREV        : 'Назад',
				ERROR       : 'Не удается загрузить. <br/> Попробуйте позднее.',
				PLAY_START  : 'Начать слайдшоу',
				PLAY_STOP   : 'Остановить слайдшоу',
				FULL_SCREEN : 'На весь экран',
				THUMBS      : 'Превью'
			}
		}
	});
	$().fancybox({
		selector: '.fancy-map',
		toolbar: false,
		smallBtn: true,
		backFocus: false,
		defaultType: "iframe",
		lang : 'ru',
		i18n : {
			'ru' : {
				CLOSE       : 'Закрыть',
				NEXT        : 'Дальше',
				PREV        : 'Назад',
				ERROR       : 'Не удается загрузить. <br/> Попробуйте позднее.',
				PLAY_START  : 'Начать слайдшоу',
				PLAY_STOP   : 'Остановить слайдшоу',
				FULL_SCREEN : 'На весь экран',
				THUMBS      : 'Превью'
			}
		}
	});
}

function init_fancy__video() {
	$().fancybox({
		selector: '.fancy-video',
		toolbar: false,
		smallBtn: true,
		backFocus: false,
		youtube: {
			controls: 1,
			showinfo: 0,
			autoplay: 1
		},
		lang : 'ru',
		i18n : {
			'ru' : {
				CLOSE       : 'Закрыть',
				NEXT        : 'Дальше',
				PREV        : 'Назад',
				ERROR       : 'Не удается загрузить. <br/> Попробуйте позднее.',
				PLAY_START  : 'Начать слайдшоу',
				PLAY_STOP   : 'Остановить слайдшоу',
				FULL_SCREEN : 'На весь экран',
				THUMBS      : 'Превью'
			}
		}
	});
}

$(function () {
	init_fancy();
	init_fancy__video();
});
/***********************
 fancybox END
 ***********************/


/***********************
 Прокрутка к секциям BEGIN
 ***********************/
$(function () {
	$('.scrollto').on('click', function () {
		var elementClick = $(this).attr("href");
		var destination = $(elementClick).offset().top;
		$('html,body').stop().animate({scrollTop: destination}, 1000);
		return false;
	});
});
/***********************
 Прокрутка к секциям END
 ***********************/


/***********************
 Waypoints BEGIN
 ***********************/
$(function () {
	$('.anim').waypoint(function () {
		$(this.element).toggleClass('animated');
	}, {
		offset: '85%'
	});
});
/***********************
 Waypoints END
 ***********************/


/***********************
 Mob menu BEGIN
 ***********************/
$(function(){
	$('.burger').on('click',function () {
		$(this).toggleClass('active');
		$('.mob-panel').toggleClass('active');
		$('body').toggleClass('stopped');
	});

	$(document).on('click touchstart',function (e){
		var div = $(".burger,.mob-panel");
		if (!div.is(e.target) && div.has(e.target).length === 0){
			$('.burger').removeClass('active');
			$('.mob-panel').removeClass('active');
			$('body').removeClass('stopped');
		}
	});
});
/***********************
 Mob menu END
 ***********************/


/***********************
Tabs BEGIN
***********************/
$(function($){
	$('.tabs button').on('click',function (e) {
		e.preventDefault();
		var thisBtn = $(this);
		var thisTabs = thisBtn.parents('.tabs');
		var index = thisBtn.index();
		selectTab(thisTabs,index);
	});

	function selectTab(tabs,index) {
		tabs.find('.tabs__links button').removeClass('active').eq(index).addClass('active');
		tabs.find('.tabs__content').removeClass('active').eq(index).addClass('active');
	}

	$('.tabs').each(function () {
		selectTab($(this),0);
	})
});
/***********************
Tabs END
***********************/


/***********************
Sliders BEGIN
***********************/
$(function($){
	$('.review-slider').flickity({
		cellSelector: '.review-slide',
		cellAlign: 'left',
		contain: true,
		imagesLoaded: true,
		pageDots: false,
		wrapAround: true,
		arrowShape: {
			x0: 10,
			x1: 60, y1: 50,
			x2: 65, y2: 45,
			x3: 20
		}
	});

	$('.partner-slider').flickity({
		cellSelector: '.partner-slide',
		cellAlign: 'left',
		contain: true,
		imagesLoaded: true,
		pageDots: false,
		wrapAround: true,
		arrowShape: {
			x0: 10,
			x1: 60, y1: 50,
			x2: 65, y2: 45,
			x3: 20
		}
	});

	$('.charity__slider').flickity({
		cellSelector: '.charity__slide',
		cellAlign: 'center',
		contain: true,
		imagesLoaded: true,
		pageDots: false,
		wrapAround: true,
		arrowShape: {
			x0: 10,
			x1: 60, y1: 50,
			x2: 65, y2: 45,
			x3: 20
		}
	});
});
/***********************
Sliders END
***********************/


/***********************
Poll BEGIN
***********************/
$(function($){
	var pollQuestion = $('.poll__q');
	var pollDescr = $('.poll__d');
	var count = pollDescr.length;

	function selectPollStep(index) {
		pollQuestion.removeClass('active').eq(index).addClass('active');
		pollDescr.removeClass('active').eq(index).addClass('active');
	}

	function selectPollForm(){
		$('.poll__content').addClass('hide');
		$('.poll__form').addClass('active');
		$('.poll-yes,.poll-no').addClass('hide');
	}

	selectPollStep(0);

	$('.poll-yes').on('click',function (e) {
		e.preventDefault();
		var index = $('.poll__q.active').index();
		if (index+1 > count-1){
			selectPollForm();
		} else {
			selectPollStep(index+1);
		}
	});

	$('.poll-no').on('click',function (e) {
		e.preventDefault();
		selectPollForm();
	});
});
/***********************
Poll END
***********************/


/***********************
 User-content BEGIN
 ***********************/
$(function($){
	$('.user-content img').each(function () {
		var self = $(this);
		var selfAlt = self.attr('title');
		if (selfAlt !== undefined){
			$('<div class="img-descr">'+selfAlt+'</div>').insertAfter(self);
		}
	});
});
/***********************
 User-content END
 ***********************/


/***********************
Calc BEGIN
***********************/
function animateValue(id, start, end, duration) {
	var obj = id;
	var range = end - start;
	var minTimer = 50;
	var stepTime = Math.abs(Math.floor(duration / range));
	stepTime = Math.max(stepTime, minTimer);
	var startTime = new Date().getTime();
	var endTime = startTime + duration;
	var timer;
	function run() {
		var now = new Date().getTime();
		var remaining = Math.max((endTime - now) / duration, 0);
		var value = Math.round(end - (remaining * range));
		obj.innerHTML = value;
		if (value == end) {
			clearInterval(timer);
		}
	}
	timer = setInterval(run, stepTime);
	run();
}

$(function($){
	$(".calc-range-1").ionRangeSlider({
		min: 0,
		max: 10000000,
		prettify_separator: ".",
		step: 10000,
		prettify: function (num) {
			if (num > 1000000){
				return num / 1000000 + " млн.";
			} else {
				return num;
			}
		},
		onFinish: function (data) {
			console.log(data);
			calc(data);
		}
	});
	$(".calc-range-2").ionRangeSlider({
		min: 0,
		max: 540,
		step: 1
	});

	var column1 = $('.column--1 .column__body');
	var column2 = $('.column--2 .column__body');
	var percent1 = document.getElementById('percent1');
	var percent2 = document.getElementById('percent2');

	function calc(data) {
		var percent1From = percent1.innerText;
		var percent2From = percent2.innerText;
		animateValue(percent1, percent1From, Math.round(data.from_percent / 2), 600);
		animateValue(percent2, percent2From, Math.round(data.from_percent), 600);

		var column1Height = 360 / 100 * data.from_percent / 2;
		var column2Height = 360 / 100 * data.from_percent;
		column1.height(column1Height);
		column2.height(column2Height);
	}
});
/***********************
Calc END
***********************/


/***********************
 Garant Base BEGIN
 ***********************/
$(function($){
	if($('.garant-base__more').length) {
		$('.garant-base__more-wrap').slideUp();

		var caseBtnText = $('.garant-base__more a').text();
		$('.garant-base__more a').on('click', function (e) {
			e.preventDefault();
			$('.garant-base__more-wrap').slideToggle();
			$(this).toggleClass('open');
			if($(this).hasClass('open')) {
				$(this).text('Скрыть брокеров');
			} else {
				$(this).text(caseBtnText);
			}
		})
	}
});
/***********************
 Garant Base END
 ***********************/