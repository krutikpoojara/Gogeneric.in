
var seconds = 10;
function secondPassed() {
	
	var minutes = Math.round((seconds - 5)/10);

	var remainingSeconds = seconds % 10;

	if (remainingSeconds < 10) {

		remainingSeconds = '0' + remainingSeconds;	

	}

	document.getElementById('countdown').innerHTML = '00:' + remainingSeconds;

	if (seconds == 0) {
		
		clearInterval(countdownTimer);
		//secondPassed();
		document.getElementById('countdown').innerHTML ='Buzz Buzz';		

	} else {

		seconds--;

	}
	
}
/*
function time_count()
{
	//var seconds = 10;
	//var countdownTimer = setInterval(secondPassed(), 1000);
	 countdownTimer = setInterval('secondPassed()', 1000);
}
*/

function clear_count()
{	
		
	countdownTimer1 = setInterval('secondPassed()', 1000);
}
/*
function time_Count2()
{
	var countdownTimer1 = setInterval('time_count()', 10000);
}*/
countdownTimer = setInterval('secondPassed()', 1000);
