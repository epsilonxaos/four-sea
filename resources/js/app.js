require('./bootstrap');

var mySwiper = new Swiper ('.slider-principal', {
    speed: 1500,
    allowTouchMove: false,
    pagination: {
        el: '.swiper-pagination',
    },
    autoplay: true,
    loop: true
});

document.getElementById('btn-menu').addEventListener('click', function() {
    this.classList.toggle('active');
    document.querySelector('.menu--list').classList.toggle('active');
    document.querySelector('body').classList.toggle('active-menu');
});

$(window).scroll(function() {
    var scroll = $(window).scrollTop();

    if (scroll >= 500) {
        $(".menu").addClass("bg-color");
    }else {
        $(".menu").removeClass("bg-color");
    }
});

if(document.querySelector('.move-animation')){
    document.querySelectorAll('.move-animation a').forEach(element => {
        element.addEventListener('click', () => {

            document.querySelectorAll('.move-animation').forEach(items => {
                items.classList.remove('active');
            });

            let id = element.dataset.id;
            let space = element.dataset.space;
            let speed = element.dataset.speed;

            document.querySelector('[data-id="'+id+'"]').parentNode.classList.add('active');

            console.log(id, space, speed);

            var body = $('html, body');
            var target = $(id);

            console.log(target);

            body.animate({
                scrollTop: target.offset().top - space
            }, speed);
        });
    });
}
