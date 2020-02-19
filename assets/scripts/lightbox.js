import GLightbox from 'glightbox/src/js/glightbox';
//Hack: Renamed css file to scss file because otherwise it will not get interpreted as sass
import 'glightbox/src/postcss/_glightbox.scss';

var lightbox = (function(){

    //TODO: ADD ELEMENTS IF THEY ARE LOADED EG VIA AJAX
    function addElements(elements = []){
        console.log(elements);
    }

    var lightboxes = {};
    var elements = {};

    var boxes = document.querySelectorAll("a[data-lightbox]");
    boxes.forEach(function(element,key){

        element.addEventListener("click", function(event){
            event.preventDefault();
        });

        //GLightbox needs a class to set the event handler
        element.classList.add('glightbox');

        let lightboxId = element.getAttribute('data-lightbox');

        //create element array for gallery
        if(!(lightboxId in elements)){
            elements[lightboxId] = [];
        }

        //Determine Element Type
        let type;
        if(element.parentElement.classList.contains('image_container')){
            type = 'image'
        }
        else if(element.parentElement.classList.contains('image_container')){
            type = 'video'
        }
        else{
            type = 'external';

        }

        elements[lightboxId].push({
            href: element.getAttribute('href'),
            type: type
        });

        //Initialize Glightbox
        lightboxes[lightboxId] = GLightbox({
            loop: false,
            closeOnOutsideClick: true
        });

    });

    for(var id in elements){
        lightboxes[id].setElements(elements[id]);
    }

})();

