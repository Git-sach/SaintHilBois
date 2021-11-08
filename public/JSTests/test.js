(function(){
 
    var scrollY = function(){
        return window.scrollY
    }

    var menu = document.querySelector('.navBar')
    var rect = menu.getBoundingClientRect()
    var top = rect.top + scrollY()
    var fake = document.createElement('div')
    fake.style.width = rect.width + "px"
    fake.style.height = rect.height + "px"
    var onScroll = function() {
        var hasScrollClass = menu.classList.contains('fixed')
        if(scrollY()>top){
            menu.classList.add('fixed')
            menu.style.width = rect.width + "px"
            menu.parentNode.insertBefore(fake, menu)
        }
        else if (scrollY() < top && hasScrollClass){
            menu.classList.remove('fixed')
            menu.parentNode.removeChild(fake)
        }
    }
    window.addEventListener('scroll', onScroll)

})()