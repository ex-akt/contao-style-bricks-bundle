import '../scss/forms/_forms.scss';

function brick_getCoords(elem) {
    var box = elem.getBoundingClientRect();

    return {
        top: box.top + pageYOffset,
        left: box.left + pageXOffset
    };
}

document.addEventListener("DOMContentLoaded", function(event) {
    var widget = document.querySelector(".widget.error");

    if (widget !== null) {
        //Error Handling (Scroll to form)
        let coords = brick_getCoords(widget);
        if (coords.top > window.pageYOffset) {
            window.scrollTo(0, coords.top - 120);
        }

        var errorExplanationWidget = document.getElementsByClassName('error-message');
        errorExplanationWidget.item(0).classList.remove('hidden');
    }
});
