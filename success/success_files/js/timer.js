document.addEventListener('DOMContentLoaded', function(){
    let i = 91;
    if ( i > 0 ) {
    	document.getElementById('sec').innerHTML = "секунд";
	    setInterval(() => {
	        i--;
	        document.getElementById('timer').innerHTML = i;

	        if (i == 1) {
	            window.location.href = "https://yandex.ru";
	        }
	    }, 1000);  
    }   
    // break;
});