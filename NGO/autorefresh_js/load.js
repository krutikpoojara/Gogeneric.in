


function show_data()
{	
	$('#show').load('fetch_table.php').hide().fadeIn(000);
}

abc=setInterval('show_data()', 15000);

