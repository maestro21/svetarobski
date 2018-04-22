<div class="countdown">
    <div class="days">
        <p>00</p>
        <?=T('days');?>
    </div>
    <div class="hours">
        <p>00</p>
        <?=T('hours');?>
    </div>
    <div class="minutes">
        <p>00</p>
        <?=T('minutes');?>
    </div>
    <div class="seconds">
        <p>00</p>
        <?=T('seconds');?>
    </div>
</div>


<script>
$( document ).ready(function() {
    var minutes = 15;    
    var seconds = 0;
    
    var time = minutes * 60 + seconds;
    function timer() {       
        if(time < 0) return;
        time--;
        minutes = parseInt(time / 60, 10);
        seconds = parseInt(time % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        $('.countdown .minutes p').text(minutes);
        $('.countdown .seconds p').text(seconds);
        
        setTimeout(timer, 1000);
    }
    timer();
    
});
</script>