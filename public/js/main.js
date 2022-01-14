// Header Scroll
let nav = document.querySelector('.navbar');
window.onscroll = function(){
    if(document.documentElement.scrollTop > 20)
    {
        nav.classList.add("header-scrolled");

    }
    else
    {
        nav.classList.remove("header-scrolled");
    }
}

//nav hide

let navBar = document.querySelectorAll('.nav-link');
let navCollapse = document.querySelector('.navbar-collapse.collapse');
console.log((navCollapse));
navBar.forEach(function(e){
    e.addEventListener('click', function(){
        navCollapse.classList.remove("show");
    });
});

