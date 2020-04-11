import $ from 'jquery'
// import 'img/logo.png'


function init() {
	$('#card-nav h3').wrap('<span class="overlay"></span>')
	$('<hr><p>En savoir plus</p>').insertAfter('#card-nav h3')

	scroll()
}

var topHeader = $('header h1')[0].offsetTop - 30 // Top of title on header
var topNav = $('header')[0].offsetHeight - 200


document.addEventListener("scroll", scroll)


function scroll() {
	let top = document.documentElement.scrollTop
	let timeScrollHeader = 100 - (top / topNav * 100)
	console.log(timeScrollHeader)
	$("header").css("height", timeScrollHeader + 'vh')

	let header = $('.header')

	if (top >= topHeader){
		header.addClass("fixed")

		if (top >= topNav)
		{
			// header.removeClass("fixed")
			header.addClass("navtop")
		}	
		else
			header.removeClass("navtop")
		
	} else {
		header.removeClass("fixed")
	}
		

  }


init()