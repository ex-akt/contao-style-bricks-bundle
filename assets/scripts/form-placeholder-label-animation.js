import '../scss/forms/_forms.scss'; 

function brick_checkForFilledWidget(element){
    var value = element.value.trim();
    if(value == ""){
        element.classList.remove('filled');
        element.parentElement.classList.remove('focused');
    }
    else{
        element.classList.add('filled');
        element.parentElement.classList.add('focused');
    }
}

function brick_getCoords(elem) {
    let box = elem.getBoundingClientRect();

    return {
        top: box.top + pageYOffset,
        left: box.left + pageXOffset
    };
}

document.addEventListener("DOMContentLoaded", function(event) {
    var inputs = document.querySelectorAll("footer .widget input, footer .widget textarea");

    for (var i = 0; i < inputs.length; i++) {
        var widget = inputs[i];

        brick_checkForFilledWidget(widget);

        //Label Events-Handling
        widget.addEventListener("focus", function () {
            this.parentElement.classList.add('focused');
        });
        widget.addEventListener("blur", function (event) {
            brick_checkForFilledWidget(this);
        });

        //Error Handling (Scroll to form)
        if(widget.classList.contains('error')){
            let coords = brick_getCoords(widget)
            if (coords.top > window.pageYOffset) {
                window.scrollTo(0, coords.top - 120);
            }
            let errorExplanationWidget =  document.getElementsByClassName('error-message');
            errorExplanationWidget.item(0).classList.remove('hidden');
        }
    }
});
