import $ from 'jquery'

$('#competence h1').after('<div class="triangle"></div>')
$('#formation h1').after('<div class="triangle"></div>')
$('#experience h1').after('<div class="triangle"></div>')

$('#startModal').modal('show')

// Click On El CV
$('li').click(function () {
	$('#page').attr('class', 'Left')
	$('#timeline').addClass("target")
})

$('#competence').click(function () {
	$('#page').attr('class', 'Right')
})