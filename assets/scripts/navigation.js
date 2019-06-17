var mainMenu = (function(){
    function toggleMenu(){
        var hamburgerIconClassList = document.getElementsByClassName("hamburger").item(0).classList;
        var mainMenuClassList = document.getElementsByClassName("nav-head").item(0).classList;

        if(hamburgerIconClassList.contains('is-active')){
            hamburgerIconClassList.remove('is-active');
            mainMenuClassList.add('invisible');
        }
        else{
            hamburgerIconClassList.add('is-active');
            mainMenuClassList.remove('invisible');
        }
    }

    document.getElementsByClassName('hamburger').item(0).addEventListener('click',toggleMenu);

    var menuLinks = document.querySelectorAll('.nav-head a');
    for (var link of menuLinks) {
        link.addEventListener('click', toggleMenu);
    }
})();



