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

    }
});
