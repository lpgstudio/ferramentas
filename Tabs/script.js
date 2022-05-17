var iconBox = document.querySelectorAll('.iconBox');
var contentBox = document.querySelectorAll('.contentBox');

for(var i = 0; i <iconBox.length; i++){
    iconBox[i].addEventListener('click', function() {
        for(var i=0; i < contentBox.length; i++){
            
            contentBox[i].className = 'contentBox';
        }
        document.getElementById(this.dataset.id).className = 'contentBox active'

        for(var i=0; i < iconBox.length; i++){
            iconBox[i].className = 'iconBox';
        }

        this.className = "iconBox active";
    })
}