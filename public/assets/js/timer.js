
    let time = 900
    let seconde = 0
    let minute = parseInt(time/60)
    let Dminute = document.querySelector('#minutes')
    let Dsecond = document.querySelector('#seconds')
    let timeInput = document.querySelector('#form_time')

    Dminute.innerHTML = minute
    Dsecond.innerHTML = seconde
    
    


    let timer = setInterval(() => {
        seconde--
        time--
    Dsecond.innerHTML = seconde
      timeInput.value = time
        
        if (time == 0) {
                clearInterval(timer)
                document.requestFullscreen();
                window.location = 'http://fakeupdate.net/win10u/'

        } 
        if (seconde < 0) {
            seconde = 59
            Dsecond.innerHTML = seconde

            minute--
            Dminute.innerHTML = minute
            
            
        }
            
    }, 1000);  
   




