
// audio 
$(document).ready(function(){

    const pause = `<svg xmlns="http://www.w3.org/2000/svg" width="28" height="32" viewBox="0 0 24 24">
                        <path d="M8 5v14l11-7z"/>
                    </svg>`;
    const bar = $('#alquran .audio-content .progress .progress-bar');
    const timer = $('#alquran .audio-content .timer');
    let second = 0;
    let interval;

    $('#alquran button').html(pause)

    $('#alquran button').on('click', function(){
        const ayat = $('#alquran .audio-content #audio-alIsra')[0];
        
        if(ayat.paused){
            $('#alquran button').html(`
            <svg xmlns="http://www.w3.org/2000/svg" width="28" class="ionicon" viewBox="0 0 512 512"><path d="M392 432H120a40 40 0 01-40-40V120a40 40 0 0140-40h272a40 40 0 0140 40v272a40 40 0 01-40 40z"/></svg>
            `)
            bar.addClass('animate')

            second = 0
            interval = setInterval(function(){
                second++
                let formattedAngka = second < 10 ? '0' + second : second;
                timer.text(formattedAngka)
            }, 1000)
            
            ayat.currentTime = 0;
            ayat.play()
            
            ayat.addEventListener('ended', function() {
                $('#alquran button').html(pause)
                bar.removeClass('animate')
                clearInterval(interval);
                timer.html('00')  
            });      
        }else{
            $('#alquran button').html(pause)
            bar.removeClass('animate')
            clearInterval(interval);
            ayat.pause()
            timer.html('00')
        }
    })

})


// end audio 