import Swiper from "swiper/bundle";
import 'swiper/css/bundle';
import 'flowbite';
import 'bootstrap-icons/font/bootstrap-icons.css';
import '../app.js';
import '../../css/recruit/recruit.css';

let swiper = new Swiper("#stories", {
    slidesPerView: "auto",
    spaceBetween: 15,
    freeMode: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
})

