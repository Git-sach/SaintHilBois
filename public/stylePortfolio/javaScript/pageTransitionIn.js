const liensSide = document.querySelectorAll('.navbar a')
const liensTop = document.querySelectorAll('body nav a')

const transitionInStart = document.querySelector('.transitionInStart')
var body = document.querySelector('.body').classList
var navbar = document.querySelector('.navbar').classList

let hrefIn = window.location.href

for(i=0; i< liensSide.length; i++){
    let lien = liensSide[i]

    lien.addEventListener('click' , function(event){
        event.preventDefault();
        lienclic = event.target.href

        if(hrefIn != lienclic){
            transitionInStart.classList.add('transitionInEnd')
            body.remove('bodyNavOpen'); 
            navbar.remove('NavOpen');
            setTimeout(function(){
                window.location.href = lienclic
            }, 1000)
        }
        else{
            body.remove('bodyNavOpen'); 
            navbar.remove('NavOpen');
            setTimeout(function(){
                window.location.href = lienclic
            }, 800)
        }
    })
}

for(i=0; i< liensTop.length; i++){
    let lien = liensTop[i]

    lien.addEventListener('click' , function(event){
        event.preventDefault();
        lienclic = event.target.href

        if(hrefIn != lienclic){
            transitionInStart.classList.add('transitionInEnd')
            body.remove('bodyNavOpen'); 
            navbar.remove('NavOpen');
            setTimeout(function(){
                window.location.href = lienclic
            }, 1000)
        }
        else(window.location.href = lienclic)
    })
}