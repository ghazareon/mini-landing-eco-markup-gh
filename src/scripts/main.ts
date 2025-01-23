import $ from "jquery";
import Swiper from "swiper";
import LocomotiveScroll from "locomotive-scroll";
import { Navigation } from "swiper/modules";

import "../../node_modules/swiper/swiper.min.css";
import "../shared/ui/assets/css/locomotive-scroll.min.css";

const scroll = new LocomotiveScroll({
 el: document.querySelector("[data-scroll-container]") as HTMLElement,
 smooth: true
});

var swiper = new Swiper(".js-sb-swiper", {
 slidesPerView: 3,
 centeredSlides: false,
 spaceBetween: 18,
 loop: true,
 modules: [Navigation],
 pagination: {
  el: ".swiper-pagination",
  clickable: true
 },

 navigation: {
  nextEl: ".swiper-button-next",
  prevEl: ".swiper-button-prev"
 },

 breakpoints: {
  600: {
   slidesPerView: 3
  },
  500: {
   slidesPerView: 1
  }
 }
});

/* const prev = document.querySelector(".js-arr--prev") as HTMLElement;
const next = document.querySelector(".js-arr--next") as HTMLElement;

prev.addEventListener("click", (e) => {
 console.log("e- ", e);
});

next.addEventListener("click", (e) => {
 console.log("e- ", e);
});
 */
