
var body = document.querySelector('.body').classList
var navbar = document.querySelector('.navbar').classList
var firstBar = document.querySelector('.firstBar').classList
var secondBar = document.querySelector('.secondBar').classList
var thirdBar = document.querySelector('.thirdBar').classList

document.querySelector('.logoNav').onclick = function(){
    if(body.contains('bodyNavOpen')){  
        body.remove('bodyNavOpen'); 
        navbar.remove('NavOpen');
        firstBar.remove('rotFirstBar');
        secondBar.remove('removeSecondBar');
        thirdBar.remove('rotThirdBar');
    }
    else{
        body.add('bodyNavOpen'); 
        navbar.add('NavOpen');
        firstBar.add('rotFirstBar');
        secondBar.add('removeSecondBar');
        thirdBar.add('rotThirdBar');
    }    
};