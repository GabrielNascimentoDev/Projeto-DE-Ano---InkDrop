document.addEventListener('DOMContentLoaded', () => {

  
    let current = 0;                  
    const total = 3;                    
    const track = document.getElementById('track');
    const dots  = document.querySelectorAll('.dot');
    let timer;                         
    function goTo(i) {
        dots[current].classList.remove('active');

        current = (i + total) % total;

        track.style.transform = `translateX(-${current * 100}%)`;

        dots[current].classList.add('active');

        dots[current].offsetWidth; 

     
        clearInterval(timer);
        timer = setInterval(() => move(1), 5000);
    }


    function move(dir) {
        goTo(current + dir);
    }


    let touchStartX = 0;

    track.addEventListener('touchstart', (e) => {
        touchStartX = e.touches[0].clientX;
    });

    track.addEventListener('touchend', (e) => {
        const touchEndX = e.changedTouches[0].clientX;
        const diff = touchStartX - touchEndX;

        if (diff > 50)  move(1); 
        if (diff < -50) move(-1); 
    });
    document.addEventListener('keydown', (e) => {
        if (e.key === 'ArrowLeft')  move(-1);
        if (e.key === 'ArrowRight') move(1);
    });

    timer = setInterval(() => move(1), 5000);

    window.goTo = goTo;
    window.move = move;

});