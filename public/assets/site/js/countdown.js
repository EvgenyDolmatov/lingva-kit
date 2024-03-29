$(document).ready(function (){
    function countdown(){
        const countdown = $('#countdown');
        const startTimer = countdown.attr('data-timer');

        if (startTimer > 60) {
            countdown.html((Math.floor(startTimer/60)%60) + ':' + (startTimer%60) + ':00');
        } else {
            countdown.html(startTimer + ':00');
        }

        let time = (startTimer * 60) - 1;

        let interval = setInterval(function () {
            let hours = Math.floor((time/60)/60);
            let minutes = Math.floor(time / 60)%60;
            let seconds = time % 60;

            if (minutes < 10) {
                minutes = '0' + minutes;
            }
            if (seconds < 10) {
                seconds = '0' + seconds;
            }

            if (time > 3600) {
                countdown.html(hours + ':' + minutes + ':' + seconds);
            } else {
                countdown.html(minutes + ':' + seconds);
            }

            time--;

            if (hours == 0 && minutes == 0 && seconds == 0) {
                clearInterval(interval);
                $('form').submit();
            }
        }, 1000);
    }
    countdown();
});
