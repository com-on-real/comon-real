import $ from 'jquery'

addSubd()

// IF NBR SUB DOMAINE CHANGE -> MAJ NBR INPUT AND ADD TEXT INNER
$('#nombreSubd').change(function()
{
	redirectAddSub()
})

$('#plusSub').click( function()
{
	var caca = parseInt($('#nombreSubd').val())
	caca++
	$('#nombreSubd').val(caca)
	redirectAddSub()
})
// ON CLICK CARTE HEADER -> MAJ FORM
$('.card-header').click( function()
{
	var ndd = $(this).html()
	// Add NDD to Form
	$('#ndd').val(ndd)
	var sublist = subList(ndd);
	console.log(sublist)

	$('#nombreSubd').val(sublist.length)
	addSubd(ndd, sublist)
})

// CLEAR ALL FORM
$('#newDomaine').click( function ()
{
	$('#ndd').val('');
	$('#nombreSubd').val('1');
	addSubd()
})

function redirectAddSub()
{
	if($('#ndd').val())
	{
		var ndd = $('#ndd').val()
		
		var sublist = subList(ndd)
		addSubd(ndd, sublist)
	}
	else
		addSubd()
}

// GET SUBDOMAINE LIST FROM NDD
function subList(ndd)
{
	console.log(ndd)
	// Seperate ndd in base + ext
	var ext = ndd.split('.').pop()
	var site = ndd.split('.'+ext).join('')
	  
	var sublist = $("#" + site + "\\."+ ext +" .list-group-item").map(function() {
		return $(this).html()
	  });
	  console.table(sublist)
	  return sublist
}

// ADD INPUT SUB DOMAINE
function addSubd(ndd, sublist = false)
{
	var nombreSubd = $('#nombreSubd').val()
	$("#nameSubd").empty()

	for(var i = 0; i < nombreSubd; i++)
	{
		if (!sublist || sublist[i] === undefined)
			$( "#nameSubd" ).append( '<input type="text" name="nameSubd'+ i + '" class="form-control" id="sd'+ i + '" placeholder="sous domaine">' )
		else{
			$( "#nameSubd" ).append( '<input type="text" name="nameSubd'+ i + '" class="form-control" id="sd'+ i + '" placeholder="sous domaine" value="'+ sublist[i].replace('.' + ndd, '') +'">' )
		}
	}
}

