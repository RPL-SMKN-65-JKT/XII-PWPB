// Menu Bar 

const menuBar = document.querySelector(".menu-bar");
const menuNav = document.querySelector(".menu");

menuBar.addEventListener("click", () =>{
    menuNav.classList.toggle("menu-active")
});


// Scrolling

const navBar = document.querySelector(".navbar");

window.addEventListener("scroll", () => {
    const positionWindow = window.scrollY > 0;
    navBar.classList.toggle('scrolling-active', positionWindow);
});

// Overlay Image

const elementClose = document.getElementsByClassName('overlay');

for (let i = 0; i< elementClose.length; i++){
    elementClose[i].addEventListener('click', function(){
        let url = window.location.href.substring(0, window.location.href.indexOf('#'))
        window.location = url;
    });
}