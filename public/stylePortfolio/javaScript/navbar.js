

// document.querySelector('.body').classList.add('bodyNavOpen'); 
// document.querySelector('.navbar').classList.add('NavOpen');

// document.querySelector('.body').classList.remove('bodyNavOpen'); 
// document.querySelector('.navbar').classList.remove('NavOpen');

var body = document.querySelector('.body').classList
var navbar = document.querySelector('.navbar').classList

document.querySelector('.logoNav').onclick = function(){
    if(body.contains('bodyNavOpen')){  
        body.remove('bodyNavOpen'); 
        navbar.remove('NavOpen');
    }
    else{
        body.add('bodyNavOpen'); 
        navbar.add('NavOpen');
        //document.querySelector('.navbar').style.display = "initial"
    }
        
};