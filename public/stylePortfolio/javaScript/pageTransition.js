const liens = document.querySelectorAll('.navbar a')
const transitionInStart = document.querySelector('.transitionInStart')
var body = document.querySelector('.body').classList
var navbar = document.querySelector('.navbar').classList

const transitionOutStart = document.querySelector(".transitionOutStart")
const transition_Layer2_Out_Start = document.querySelector(".transition_Layer2_Out_Start")
const transition_Layer3_Out_Start = document.querySelector(".transition_Layer3_Out_Start")
setTimeout(function(){
    transitionOutStart.classList.remove("transitionOutEnd")
    transition_Layer2_Out_Start.classList.remove("transition_Layer2_Out_End")
    transition_Layer3_Out_Start.classList.remove("transition_Layer3_Out_End")
}, 200)

for(i=0; i< liens.length; i++){
    let lien = liens[i]

    lien.addEventListener('click' , function(event){
        event.preventDefault();

        transitionInStart.classList.add('transitionInEnd')
        body.remove('bodyNavOpen'); 
        navbar.remove('NavOpen');
    
        lienclic = event.target.href
        setTimeout(function(){
            window.location.href = lienclic
        }, 1000)
    })
}