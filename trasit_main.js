let animElems = document.querySelectorAll('._anim-elem');
if(animElems.length>0){
    window.addEventListener('scroll', animOnScroll);
    function animOnScroll(){
        for (let i = 0; i<animElems.length; i++){
            const animElem = animElems[i];
            const animElemHeight = animElem.offsetHeight;
            const animElemOffset = offset(animElem).top;//получаем значение сверху
            const animStart = 4;

            let animElemPoint = window.innerHeight-animElemHeight/animStart;

            if(animElemHeight>window.innerHeight){
                animElemPoint = window.innerHeight - window.innerHeight/animStart;
            }
            if((scrollY>animElemOffset-animElemPoint)&&scrollY<(animElemOffset+animElemHeight)){
                animElem.classList.add('active_p')
            }else{
                if(!animElem.classList.contains('_anim-no-hide')){
                    animElem.classList.remove('active_p')
                }

            }
        }

    }
    animOnScroll();
    function offset(elem){
        const rect = elem.getBoundingClientRect(),
            scrollTop = window.scrollY || document.documentElement.scrollTop;
        return{top: rect.top+scrollTop}
    }

}
/*
const scrollDiv = document.querySelector('.scroll');
// отслеживаем событие скроллинга
window.addEventListener('scroll', () => {
    // если скроллинг происходит вниз
    if (window.scrollY > scrollDiv.offsetTop - window.innerHeight && window.scrollY < scrollDiv.offsetTop + scrollDiv.offsetHeight) {
        document.getElementById("main_page").classList.add("scroll_d") // показываем второй div
    } else {
        document.getElementById("main_page").classList.remove("scroll_d") // скрываем второй div
    }
});
window.addEventListener('scroll', function() {
    var top = window.scrollY || document.documentElement.scrollTop;
    if (top > 0) {
        document.getElementById('main_page').style.height = '100%';
        document.getElementById('main_page').style.transform = 'translate(0px, 0px)';
        document.getElementById('main_page').style.opacity = '1';
        document.getElementById('content_main_page').style.height = '0px';
    } else {
        document.getElementById('main_page').style.height = '0px';
        document.getElementById('main_page').style.transform = 'translate(0px, 1000%)';
        document.getElementById('main_page').style.opacity = '0';
        document.getElementById('content_main_page').style.height = '100%';
    }
});
*/

