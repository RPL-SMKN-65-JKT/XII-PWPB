$(".menu-toggler").click(function(){
    $(".navbar-nav").toggleClass("active");
});

$(window).scroll(function(){
    if($(this).scrollTop() > 0) {
        $(".navbar").addClass("scrolled");
    } else {
        $(".navbar").removeClass("scrolled");
    }
});

$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    items:1,
})
