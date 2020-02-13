import '../../../../../assets/swipe/css/swipe.css';
var Swipe = require('../../../../../assets/swipe/js/swipe');
import '../scss/components/_slider.scss';

(function() {
    var e = document.querySelectorAll('.content-slider, .slider-control'), c, i;
    for (i=0; i<e.length; i+=2) {
        c = e[i].getAttribute('data-config').split(',');
        new Swipe(e[i], {
            // Put custom options here
            'auto': parseInt(c[0]),
            'speed': parseInt(c[1]),
            'startSlide': parseInt(c[2]),
            'continuous': parseInt(c[3]),
            'menu': e[i+1]
        });
    }
})();

