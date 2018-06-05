// JavaScript Document
function countdown() {
    var count = 10;
	
    var timerId = setInterval(function() {
        count--;
		
		var remainingSeconds = count % 10;

		if (remainingSeconds < 10) {

			remainingSeconds = '0' + remainingSeconds;	

		}
       document.getElementById('countdown').innerHTML = '00:' +remainingSeconds;
        
        if(count == 0) {
            count = 10;
        }
    }, 1000);
	
	var Pause = function() {
		clearInterval(timerId);
    };
	
	
}

countdown();