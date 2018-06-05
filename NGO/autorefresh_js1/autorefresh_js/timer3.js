var weatherRefresh = (function() {
  var count = 10;
  var timerRef;
  return {
    start: function() {

      // If already running, leave it running
      if (timerRef){
	  	count = 10; 
	  	return;
	  }

      timerRef = setInterval(function() {
        // Display count
		var remainingSeconds = count % 10;

		if (remainingSeconds < 10) {

			remainingSeconds = '0' + remainingSeconds;
		}
        document.getElementById('countdown').innerHTML = '00:' +remainingSeconds;

        if (!count--) {
          // count is zero, refresh weather info
          // and start again
          count = 0;
        }
      }, 1000);
    },
    stop: function() {
      timerRef && clearInterval(timerRef);
      timerRef = null;
	  count = 10;
    },
	over: function() {
      timerRef && clearInterval(timerRef);
      timerRef = null;
	  document.getElementById('countdown').innerHTML = " ";
    }
   };
}());