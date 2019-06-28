var inputs = document.querySelectorAll("footer .widget input, footer .widget textarea");

for(i = 0; i < inputs.length; i++){

    inputs[i].addEventListener("focus",function(){
        this.parentElement.classList.add('focused');
    });
    inputs[i].addEventListener("blur", function(){
        var value = this.value.trim();
        if(value == ""){
            this.classList.remove('filled');
            this.parentElement.classList.remove('focused');
        }
        else{
            this.classList.add('filled');
        }
    })
}
