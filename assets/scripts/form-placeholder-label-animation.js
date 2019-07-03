var inputs = document.querySelectorAll("footer .widget input, footer .widget textarea");

for(i = 0; i < inputs.length; i++){

    inputs[i].addEventListener("focus",function(){
        this.parentElement.classList.add('focused');
    });
    inputs[i].addEventListener("blur", function(){
        var value = this.value.trim();
        if(value == ""){
            this.classList.remove('filled');
            this.parentElement.classList.remove('focused');
        }
        else{
            this.classList.add('filled');
        }
    })
}


// Form field focus
/*
window.addEventListener('load', function() {

    var el = document.querySelectorAll('footer .widget');
    if (el[0]) {
        let coords = getCoords(el[0]);
        console.log(coords.top + ' - '+window.pageYOffset);
        if (coords.top > window.pageYOffset) {
            console.log('scroll');
            window.scrollTo(0, coords.top - 120);
        }
    }
});


function getCoords(elem) {
    let box = elem.getBoundingClientRect();

    return {
        top: box.top + pageYOffset,
        left: box.left + pageXOffset
    };
}*/
