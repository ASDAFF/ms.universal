$(document).ready(function(){
	// WINDOW WIDTH
	function windowW(){
		if($(window).width() < 1024 && $('#container').hasClass('background-image')){
			$('#container').addClass('w1000');
		}
		else{
			$('#container').removeClass('w1000');
		}
	}
	windowW();
	
	//IF ADMIN
	if($('#bx-panel').length){
		$('#container').css('position','relative');
	}
	
	// TEXT GALLERY
	$('#jcarousel-1').jcarousel({
		scroll:1,
		visible:4,
		auto:0,
		animation:500,
		wrap:'both'
	});
	
	// TEXT GALLERY
	$('#jcarousel-2').jcarousel({
		scroll:1,
		visible:5,
		auto:0,
		animation:500,
		wrap:'both'
	});
	
	// TREE
	$('#left-menu-tree .left-menu > li > ul > li').each(function(){
		if($(this).find('ul').length){
			$(this).addClass('has-sub').find('>a').wrap('<div>').before('<span/>');
		}
		if($(this).find('.item-selected').length){
			$(this).addClass('active');
		}
	});
	
	var $treeRootAct = $('#left-menu-tree .left-menu > li > ul > li.active');
	$treeRootAct.find('> div span').addClass('open');
	$treeRootAct.find('ul').show();
	
	$('#left-menu-tree .left-menu > li > ul > li.has-sub div span').click(function(){
		var $sib = $(this).parents('li').siblings('li.has-sub');
		$(this).toggleClass('open');
		$(this).parent().next().slideToggle(function(){
			LFixed();
		});
		$sib.find('> div span').removeClass('open');
		$sib.find('> ul').slideUp(function(){
			LFixed();
		});
	});
	
	// LEFT FIXED
	function LFixed(){
		if($(window).width() > 1000 && $(window).height() > $('.left-fixed').outerHeight(true)+$('footer').outerHeight(true)){
			var cl_OffsetTop = $('#column-l').offset().top,
				topLimit =  cl_OffsetTop + $('#left-menu-tree').outerHeight(true) + $('#left-menu-wrap').outerHeight(true) + $('.left-news').outerHeight(true);
		
			if($.browser.webkit) bodyelem = $("body")
			else bodyelem = $("html")
		
			function setCond(){
				if($(bodyelem).scrollTop() > topLimit) $('.left-fixed').addClass('fixed');
				else $('.left-fixed').removeClass('fixed');
			}
			setCond();
			$(window).scroll(function(){
				if($(window).width() > 1000 && $(window).height() > $('.left-fixed').height()+$('footer').height()) setCond();
			});
		}
		else $('.left-fixed').removeClass('fixed');
	}
	setTimeout(LFixed, 1000);
	$(window).resize(function(){
		LFixed();
		windowW();
	});
	
	// FORMS
	function forms(target){
		var $target = $(target);
		$target.find('input[type="text"], input[type="password"], textarea').each(function(){
			if(!$(this).parent().hasClass('text-field')){
				$(this).wrap('<div class="text-field"/>');
			}
		});
		
		$target.find('input[type="submit"], input[type="button"], button').each(function(){
			if(!$(this).parent().hasClass('btn')){
				$(this).wrap('<div class="btn"/>');
			}
		});
	}
	
	forms('#container section');
	
	
	// PRINT
	$('input.print-price').click(function(){
		var prt_window = window.open('', '', 'width=880');
		prt_window.document.write('<html><head><title>'+priceListTitle+'</title>');
		prt_window.document.write('<link href="'+tplUrl+'/template_styles.css" rel="stylesheet" type="text/css"/>');
		prt_window.document.write('</head><body id="body-print"><div id="print-container"><a id="print-logo" href="'+$('#logo').attr('href')+'"><img src="'+$('#logo img').attr('src')+'"/></a><br/><br/><br/><h1>Прайс-лист</h1>');
		prt_window.document.write($('.price-table').html());
		prt_window.document.write('</div></body></html>');

		prt_window.print();
		
		return false;
	});
	
	// ACCORDION
	$('.accordion .title').click(function(){
		$(this).parent().toggleClass('active');
		$(this).next().slideToggle();
		return false;
	});

	//Order form
	var OF_TA_sel = orderChoose+$('#content h1').text()+'\n'+orderInformationTitle+'\n';
	
	$('.fancybox').fancybox({
		nextEffect:'fade',
		prevEffect:'fade',
		tpl:{
			closeBtn:'<a class="fancybox-item fancybox-close" href="javascript:;"></a>',
			next:'<a class="fancybox-nav fancybox-next" href="javascript:;"><span></span></a>',
			prev:'<a class="fancybox-nav fancybox-prev" href="javascript:;"><span></span></a>'
		},
		helpers:{
			title:{type:'inside'}
		}
	});
	
	$('.btn.popup-form a').fancybox({
		nextEffect:'fade',
		prevEffect:'fade',
		beforeLoad:function(){
			$('#order-form form textarea').val($('#order-form form textarea').val().replace(OF_TA_sel,''));
			$('#order-form form textarea').val(OF_TA_sel+$('#order-form form textarea').val());
		}
	});
	
	if($('#order-form .errortext').length || $('#order-form .mf-ok-text').length){
		$('.btn.popup-form a').fancybox({
			afterClose:function(){
				window.location = window.location.href.split('?')[0];
			}
		});
		$('.btn.popup-form a').click();
	}
});
