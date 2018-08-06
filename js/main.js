/***********************
 отправка формы в php BEGIN
 ***********************/
$(function () {
	$(".ajax-form").on("submit", function (event) {
		var form = $(this);
		var send = true;
		var captcha = form.find('.g-recaptcha');
		event.preventDefault();

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

		$("[data-label]").each(function () {
			var input_name = $(this).attr('name');
			var input_label__name = input_name + '_label';
			var input_label__value = $(this).data('label').toString();
			form_data.append(input_label__name, input_label__value)
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
					if (result.indexOf("empty recaptcha") !== -1) {
						captcha.addClass('error');
						setTimeout(function () {
							captcha.removeClass('error');
						},2000);
						return;
					}
					if (result.indexOf("fail recaptcha") !== -1) {
						captcha.addClass('error');
						setTimeout(function () {
							captcha.removeClass('error');
						},2000);
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
});
/***********************
Sliders END
***********************/