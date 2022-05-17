const popup = document.querySelector('.popup');
const close = document.querySelector('.close');

window.onload = function() {
    setTimeout(function() {
        popup.style.display = 'block';

        //add some time deley to show the popup
    }, 2000)
}

close.addEventListener('click', function() {
    popup.style.display = 'none';
})