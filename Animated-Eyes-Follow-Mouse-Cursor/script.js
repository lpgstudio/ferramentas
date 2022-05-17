document.querySelector('body').addEventListener('mousemove',eyeball);

function eyeball(){
    const eyes = document.querySelectorAll('.eyes');
    eyes.forEach(function(eyes){
        let x = (eyes.getBoundingClientRect().left) + (eyes.clientWidth / 2);
        let y = (eyes.getBoundingClientRect().top) + (eyes.clientHeight / 2);

        let radian = Math.atan2(event.pageX - x, event.pageY - y);
        let rotation = (radian * (180 / Math.PI) * -1 ) + 270;
        eyes.style.transform = 'rotate(' +rotation+ 'deg)';
    })
}