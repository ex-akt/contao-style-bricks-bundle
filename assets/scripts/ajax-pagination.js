var ajaxpagination = (function(){

    var call = function(element){
        let requestURL = element.getAttribute('href')
        let searchSelector = ".pagination-ajax";

        let replaceElement = element.closest(searchSelector);

        if(replaceElement.id !== "") {
            searchSelector = '#'+replaceElement.id;
        }

        replaceElement.classList.add('ajax-loading');

        var xhr = new XMLHttpRequest();
        xhr.open('GET', requestURL);
        xhr.onload = function() {
            if (xhr.status === 200) {

                const parser = new DOMParser();
                let dom = parser.parseFromString(xhr.responseText, "text/html");
                replaceElement.outerHTML = dom.querySelectorAll(searchSelector)[0].outerHTML;

                document.querySelectorAll(searchSelector+" .pagination a").forEach(registerAjax);

                //TODO: Register Lightbox if they have a lightbox Tag
                //document.lightbox.addElements(document.querySelectorAll(searchSelector+" a[data-lightbox]"));
            }
            else {
                location.href = requestURL;
            }
        };
        xhr.send();
    };

    var registerAjax = function(element,key){

        element.addEventListener("click", function(event){
            event.preventDefault();
            call(element);
        });
    };

    let links = document.querySelectorAll(".pagination-ajax .pagination a");

    links.forEach(registerAjax);

})();
