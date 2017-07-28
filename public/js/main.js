const basicLocation = window.location.origin;
console.log(basicLocation);
const app = new Vue({
    el: '#app',
    data: {
        msg: "MateBlog"
    },
    methods: {
        changePage: function(e){
            e.preventDefault();
            //window.location = basicLocation + $(this).attr('href'); 
        }
    }
})



$(function(){
    if(window.innerWidth <= 414)$('ul.menu__items').slideUp(0);
        const randomHeader = function(){
            let number = Math.floor(Math.random() * (4 - 1)+ 1);
            console.log(Number(number));
            let header = document.querySelector('header.header').style;
                if(window.innerWidth <= 500){
                    header.setProperty('--headerBg', `url("../img/mob_header-bg-${number}.jpg")`);
                }
                else if(window.innerWidth >= 768 && window.innerWidth <= 1024){
                    header.setProperty('--headerBg', `url("../img/header-bg-${number}.jpg")`);
                }
                else if(window.innerWidth >= 1025 && window.innerWidth <= 1366){
                    header.setProperty('--headerBg', `url("../img/med_header-bg-${number}.jpg")`);
                }
                else if(window.innerWidth >= 1367 && window.innerWidth <= 1920){
                    header.setProperty('--headerBg', `url("../img/big_header-bg-${number}.jpg")`);
                }
        }
        const randomPreviewBg = (e) => {
            let colors = ['#ff9900', '#00f2ff', '#ffc700'];
            let posts = document.querySelectorAll('.post__preview');
            console.log(posts[1]);
        }
    randomHeader();
        const menu = function(e){
            e.preventDefault();
            document.querySelector('ul.menu__items').classList.toggle('menu-extended');
        }
        const logPop = (e) => {
            e.preventDefault();
            document.querySelector('section.log').fadeIn();
        } 
    //Events
    document.querySelector('a.icon-login').addEventListener('click', logPop, true);
    document.querySelector('button.menu__icon').addEventListener('click', menu, true);
    window.addEventListener('resize', randomHeader, true);
    (function(e){                                                               //Hiding Loader
        $('section.loader').fadeOut(1000);
    })();
    
});