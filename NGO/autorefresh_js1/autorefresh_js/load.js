


function show_data()
{	
	$('.show_content').load('fetch_question.php').hide().fadeIn(3000);
}
function clear_data()
{	
	clearInterval(abc);
	abc=setInterval('show_data()', 10000);
}
function clear_data2()
{	
	clearInterval(abc);
//	abc=setInterval('show_data()', 10000);
}

abc=setInterval('show_data()', 10000);

