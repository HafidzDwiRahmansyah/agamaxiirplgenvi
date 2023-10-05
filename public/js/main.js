
// audio 
$(document).ready(function(){

    const pause = `<svg xmlns="http://www.w3.org/2000/svg" width="28" height="32" viewBox="0 0 24 24">
                        <path d="M8 5v14l11-7z"/>
                    </svg>`;
    const bar = $('#alquran-audio .audio-content .progress .progress-bar');
    const timer = $('#alquran-audio .audio-content .timer');
    let second = 0;
    let interval;

    $('#alquran-audio .card-footer button').html(pause)

    $('#alquran-audio .card-footer button').on('click', function(){
        const ayat = $('#alquran-audio .audio-content #audio-alIsra')[0];
        
        if(ayat.paused){
            $('#alquran-audio .card-footer button').html(`
            <svg width="30" height="32" fill="currentColor">
                <rect x="6" y="4" width="4" height="24" rx="2" />
                <rect x="20" y="4" width="4" height="24" rx="2" />
            </svg>
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
                $('#alquran-audio .card-footer button').html(pause)
                bar.removeClass('animate')
                clearInterval(interval);
                timer.html('00')  
            });      
        }else{
            $('#alquran-audio .card-footer button').html(pause)
            bar.removeClass('animate')
            clearInterval(interval);
            ayat.pause()
            timer.html('00')
        }
    })

})


// end audio 