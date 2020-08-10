import GLightbox from 'glightbox/src/js/glightbox';
//Hack: Renamed css file to scss file because otherwise it will not get interpreted as sass
import 'glightbox/src/postcss/_glightbox.scss';

var lightbox = (function(){

    document.querySelectorAll("a[data-lightbox]").forEach(function(element,key){

        element.addEventListener("click", function(event){
            event.preventDefault();

            let current = element,
                gallery = [],
                slides = document.querySelectorAll('[data-lightbox="' + current.dataset.lightbox + '"]'),
                index = [].slice.call(slides).indexOf(current),
                startAt = index > -1 ? index : 0;

            for (let i = 0; i < slides.length; i++) {

                let link = slides[i],
                    element = {
                        'href': link.href,
                        'type': 'image'
                    };

                if (null !== link.closest('figure') && null !== link.closest('figure').querySelector('figcaption')) {
                    element.description = link.closest('figure').querySelector('figcaption').innerHTML;
                }

                if ('undefined' !== typeof link.title && link.title !== '') {
                    element.title = link.title;
                }

                gallery.push(element);
            }

            let myLightbox = GLightbox({'startAt': startAt});

            myLightbox.setElements(gallery);
            myLightbox.open();
        });


        //Determine Element Type
        /*let type;
        if(element.parentElement.classList.contains('image_container')){
            type = 'image'
        }
        else if(element.parentElement.classList.contains('image_container')){
            type = 'video'
        }
        else{
            type = 'external';

        }*/

    });



})();

