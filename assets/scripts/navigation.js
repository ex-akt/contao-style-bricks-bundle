var mainMenu = (function(){

    var boolSubMenusRegistered = false;

    function toggleSubMenu(event){
        event.preventDefault();

        var listElement = this.parentNode;
        if(listElement.classList.contains('submenu--active')){
            listElement.classList.add('submenu--invisible');
            listElement.classList.remove('submenu--active');
            this.classList.remove('trail');
        }
        else{
            listElement.classList.add('submenu--active');
            listElement.classList.remove('submenu--invisible');
            this.classList.add('trail');
        }
    }

    function toggleMainMenu(){
        var hamburgerIconClassList = document.getElementsByClassName("hamburger").item(0).classList;
        var mainMenuClassList = document.getElementsByClassName("nav-bricks").item(0).classList;

        if(hamburgerIconClassList.contains('is-active')){
            hamburgerIconClassList.remove('is-active');
            mainMenuClassList.add('invisible');
        }
        else{
            hamburgerIconClassList.add('is-active');
            mainMenuClassList.remove('invisible');

            //Register Submenus Click Event
            if(boolSubMenusRegistered === false){
                boolSubMenusRegistered = true;

                var subMenuLinks = document.querySelectorAll('.nav-bricks li.submenu');
                for (var link of subMenuLinks) {
                    link.classList.add('submenu--invisible');
                    link.firstElementChild.removeEventListener('click',toggleMainMenu);
                    link.firstElementChild.addEventListener('click', toggleSubMenu);
                }
            }
        }
    }

    //Hamburger Button
    document.getElementsByClassName('hamburger').item(0).addEventListener('click',toggleMainMenu);

    //Register click event for all links
    var menuLinks = document.querySelectorAll('.nav-bricks a');
    for (var link of menuLinks) {
        link.addEventListener('click', toggleMainMenu);
    }
})();



