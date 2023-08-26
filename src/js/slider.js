import Swiper from 'swiper';
import 'swiper/css';
import 'swiper/css/navigation';

document.querySelector('DOMContentLoaded', function () {
    if (document.querySelector('.slider')) {
        const opciones = {
            slidesPerView: 1,
            spaceBetween: 15,
            freeMode: true,
            navigation: {
                nextEL: '.swiper-button-next',
                prevEL: '.swiper-button-prev'

            },
            breakPoints: {
                768: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                },
                1200: {
                    slidesPerView: 4,
                }
            }

        }
        Swiper.use([Navigation])
        new Swiper('.slider', opciones)
    }
});