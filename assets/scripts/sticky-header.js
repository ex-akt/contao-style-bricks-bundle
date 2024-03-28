//Sticky Header
function scrollFunction(topPosition = 80) {
    if (document.documentElement.scrollTop > topPosition) {     
        document.getElementById("header").classList.add('sticky--active')
    } 
    else{
        document.getElementById("header").classList.remove('sticky--active')
    }
}    

window.onscroll = function() {scrollFunction()};