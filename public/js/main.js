
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the body of the page. From here, you may begin adding components to
 * the application, or feel free to tweak this setup for your needs.
 */

//Vue.component('example', require('./components/Example.vue'));

const basicLocation = window.location.origin;
console.log(basicLocation);
const app = new Vue({
    el: 'body',
    data: {
        msg: "Sup brain, how ya doin?"
    },
    methods: {
        changePage: function(e){
            e.preventDefault();
            //window.location = basicLocation + $(this).attr('href'); 
        }
    }
})



$(function(){
    $('ul.menu__items').slideUp(0);
    (function(){
    let number = Math.floor(Math.random() * (4 - 1)+ 1);
    let header = document.querySelector('header.header').style;
        if(window.innerWidth < 500){
            header.setProperty('--headerBg', `url("../img/mob_header-bg-${number}.jpg")`);
        }
        else{header.setProperty('--headerBg', `url("../img/header-bg-${number}.jpg")`);}

    /*if(number === 1){ones++}
    else if(number === 2){twos++}
    else if(number === 3){threes++}
    else{console.log('4 apeared');}*/
    })();
    console.log("It's alive")
    const basicLocation = window.location;
    const menu = function(e){
        e.preventDefault();
        document.querySelector('ul.menu__items').classList.toggle('menu-extended');
    }
    //Events
    document.querySelector('button.menu__icon').addEventListener('click', menu, true);
    (function(e){
        $('section.loader').fadeOut(1000);
    })();
    
});
/*let ones = 0;
let twos = 0;
let threes = 0;*/
 
/*for(i=0; i<=50;i++){
    randomHeaderBg();
    if(i === 50){console.log(`1: ${ones} 2:${twos} 3: ${threes}`);}
}*/
/*let liczba = 6;
liczba = Number(liczba);

function licznik(){
    let timeout = setTimeout(licznik, 1000);
    if(liczba<0){
        document.write("Koniec odliczania");
        clearTimeout(timeout);
    }
    else{
        console.log(liczba);
        liczba -= 1;
    }
    
}
licznik();
*/

