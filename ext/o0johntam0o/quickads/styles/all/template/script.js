let tmp;

$(document).ready(function()
{
	quickAds_Scroll('#quick_ads_l', 'left');
	quickAds_Scroll('#quick_ads_r', 'right');
	quickAds_Scroll('#quick_ads_t', 'top');
	quickAds_Scroll('#quick_ads_b', 'bottom');
	quickAds_SetPos();
	quickAds_Scroll_Marquee('#quick_ads_ts' + ' > div > table');
	quickAds_Scroll_Marquee('#quick_ads_bs' + ' > div > table');
});

function quickAds_Scroll_Marquee(el)
{
	if ($(el).length > 0)
	{
		tmp = $(el).width() - $(el).parent().width();
		if (tmp > 0)
		{
				$(el).animate({left:-tmp+10+'px'}, tmp*25, function (keyframes, options){
							$(el).animate({left: '0px'}, tmp * 25, quickAds_Scroll_Marquee(el));
				});
			
		}
	}
}

function quickAds_SetPos()
{
	let marginT = 0, marginB = 0;
	tmp = $(window).width();
	
	if ($('#quick_ads_l').length > 0)
	{
		tmp = tmp - $('#quick_ads_l').width();
	}
	if ($('#quick_ads_r').length > 0)
	{
		tmp = tmp - $('#quick_ads_r').width();
	}
	
	tmp = tmp - 20;
	
	if ($('#quick_ads_t').length > 0)
	{
		$('#quick_ads_t').css({'max-width':tmp + 'px'});
		marginT = Math.round((tmp - $('#quick_ads_t').width()) / 2);
	}
	if ($('#quick_ads_b').length > 0)
	{
		$('#quick_ads_b').css({'max-width':tmp + 'px'});
		marginB = Math.round((tmp - $('#quick_ads_b').width()) / 2);
	}
	
	if ($('#quick_ads_l').length > 0)
	{
		tmp = $('#quick_ads_l').width() + $(window).scrollLeft() + 10;
	}
	else
	{
		tmp = $(window).scrollLeft() + 10;
	}
	
	if ($('#quick_ads_t').length > 0)
	{
		$('#quick_ads_t').css({'left':tmp + marginT + 'px'});
	}
	if ($('#quick_ads_b').length > 0)
	{
		$('#quick_ads_b').css({'left':tmp + marginB + 'px'});
	}
}

function quickAds_Scroll(el, pos)
{
	if ($(el).length > 0)
	{
		let selfHeight, windowHeight, scrollTop, scrollLeft;

		$(el).css({'display':'block'});
		
		$(window).scroll(function()
		{
			if ($(el).width() !== 0)
			{
				selfHeight = $(el).height();
				windowHeight = $(window).height();
				scrollTop = $(window).scrollTop();
				scrollLeft = $(window).scrollLeft();
				if (pos === 'left' || pos === 'right')
				{
					if (selfHeight <= windowHeight)
					{
						$(el).animate({top:scrollTop+5}, {duration:800,queue:false});
					}
					else
					{
						if (selfHeight <= windowHeight + scrollTop)
						{
							tmp = windowHeight - selfHeight + scrollTop;
							$(el).animate({top:tmp}, {duration:800,queue:false});
						}
						else
						{
							$(el).animate({top:5}, {duration:800,queue:false});
						}
					}
					if (pos === 'left')
					{
						$(el).css({'left':5+scrollLeft});
					}
					else
					{
						$(el).css({'right':5-scrollLeft});
					}
				}
				else if (pos === 'top' || pos === 'bottom')
				{
					quickAds_SetPos();
					
					if (pos === 'top')
					{
						$(el).animate({top:scrollTop+5}, {duration:800,queue:false});
					}
					else
					{
						$(el).animate({bottom:5-scrollTop}, {duration:800,queue:false});
					}
				}
			}
		});
	
		$(window).resize(function()
		{
			scrollLeft = $(window).scrollLeft();
			
			if (pos === 'left' || pos === 'right')
			{
				if (pos === 'left')
				{
					$(el).css({'left':5+scrollLeft});
				}
				else
				{
					$(el).css({'right':5-scrollLeft});
				}
			}
			else if (pos === 'top' || pos === 'bottom')
			{
				quickAds_SetPos();
			}
		});
	}
	else
	{
		$(el).css({'display':'none'});
	}
}
		
function quickAds_Close(id, el, time)
{
	if ($(el).length > 0)
	{
		if (time > 0)
		{
			const exdate = new Date();
			exdate.setMinutes(exdate.getMinutes() + time);
			const c_value = escape(id) + ((time == null) ? "" : "; expires=" + exdate.toUTCString());
			document.cookie = id + "=" + c_value;
		}
		$(el).remove();
		quickAds_SetPos();
	}
	else
	{
		// alert("Error!");
	}
}

function quickAds_CheckDimension(el, wmin, hmin)
{
	if ($(el).length > 0)
	{
		if ($(window).width() < wmin || $(window).height() < hmin)
		{
			$(el).css({'display':'none'});
		}
		else
		{
			$(el).css({'display':'block'});
		}
	
		$(window).resize(function()
		{
			if ($(window).width() < wmin || $(window).height() < hmin)
			{
				$(el).css({'display':'none'});
			}
			else
			{
				$(el).css({'display':'block'});
			}
		});
	}
	else
	{
		$(el).css({'display':'none'});
	}
}

function quickAds_CheckCookie(id, el)
{
	let i, x, y, ARRcookies = document.cookie.split(";");
	for (i=0; i<ARRcookies.length; i++)
	{
		x = ARRcookies[i].substr(0,ARRcookies[i].indexOf("="));
		y = ARRcookies[i].substr(ARRcookies[i].indexOf("=")+1);
		x = x.replace(/^\s+|\s+$/g,"");
		
		if (x === id && $(el).length > 0)
		{
			$(el).remove();
		}
	}
}