
(function(){

    var vertScroll = document.querySelector('.vertScroll')
    var positionOld = vertScroll.getBoundingClientRect().top
    var position
    var starter = 600

    var i = 30
    var facteur = 0.05
    var pourcent = ''
    var onScroll = function(){
        position = vertScroll.getBoundingClientRect().top
        
        if(position<starter){
            if(position<positionOld){
                console.log('down')
                i = i+facteur
            }else{
                console.log('up')
                i = i-facteur
            }

            pourcent = i + '%'
            console.log(position)
            vertScroll.style.backgroundPosition = pourcent
        }
        positionOld = position
    }


    window.addEventListener('scroll', onScroll)
})()