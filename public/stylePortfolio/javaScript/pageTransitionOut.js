let divTransition = document.createElement('div')
let divTransition2 = document.createElement('div')
let divTransition3 = document.createElement('div')
document.body.appendChild(divTransition);
document.body.appendChild(divTransition2);
document.body.appendChild(divTransition3);

var pageBack = document.referrer
var pageNew = window.location.href
var isRefresh = performance.navigation.type;

if((pageBack != pageNew) && (isRefresh==0)){
    divTransition.classList.add("transitionOutStart", "transitionOutEnd")
    divTransition2.classList.add("transition_Layer2_Out_Start", "transition_Layer2_Out_End")
    divTransition3.classList.add("transition_Layer3_Out_Start", "transition_Layer3_Out_End")
    
    setTimeout(function(){
        divTransition.classList.remove("transitionOutEnd")
        divTransition2.classList.remove("transition_Layer2_Out_End")
        divTransition3.classList.remove("transition_Layer3_Out_End")
    }, 200)
}
