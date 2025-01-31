// import $ from "jquery";
import gsap from "gsap";
import Swiper from "swiper";
import LocomotiveScroll from "locomotive-scroll";
import { Navigation, Pagination } from "swiper/modules";

import "../../node_modules/swiper/swiper.min.css";
import "@/shared/ui/assets/css/locomotive-scroll.min.css";

import "@/shared/ui/styles/scss/index.scss";

document.addEventListener("DOMContentLoaded", function (event) {

 const scroll = new LocomotiveScroll({
  el: document.querySelector("[data-scroll-container]") as HTMLElement,
  smooth: true
 });

 const swiper = new Swiper(".js-sb-swiper", {
  slidesPerView: 3,
  centeredSlides: false,
  spaceBetween: 18,
  loop: true,
  modules: [Navigation, Pagination],

  pagination: {
   el: ".js-shape-swipe-pagination"
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
   },
   100: {
    slidesPerView: 1
   }
  }
 });

 document.querySelectorAll("a").forEach((it: HTMLElement) =>
  it.addEventListener("click", function (e) {
   e.preventDefault();
  })
 );

 const burger = document.querySelector(".js-burger") as HTMLElement;
 const menuMob = document.querySelector(".js-mob-menu") as HTMLElement;
 const menuItMob = document.querySelectorAll(".nav__li");

 const menuMobTimeline = gsap.timeline({
  repeat: 0,
  repeatDelay: 0,
  delay: 0,
  onComplete: () => {}
 });

 // https://codepen.io/akapowl/pen/ExydwWX/33e6a0fe190774293edcdd1533f776ad

 /* burger toggle */
 burger?.addEventListener("click", function (e) {
  const $this = this;
  const isOpen = !$this.classList.contains("opened");
  /* prettier-ignore */
  if (isOpen === true) {
   // menuMobTimeline
   //  .to(menuMob,     { x: 0, duration: 0.5, ease: "expo.out" })
   //  .from(menuItMob, { x: 13, opacity: 0, duration: 0.2,   stagger: 0.1 });
  } else if (isOpen === false) {
   // menuMobTimeline.reverse()
  }
  $this.classList.toggle("opened");
  $this.setAttribute("aria-expanded", String(!isOpen));
 });
});

console.log("object");

const swiper = new Swiper(".js-s-8-swiper", {
 slidesPerView: 1,
 centeredSlides: false,
 spaceBetween: 18,
 loop: true,
 modules: [Pagination],
 pagination: {
  el: ".swiper-pagination"
 },

 breakpoints: {
  320: {
   slidesPerView: 1
  },

  480: {
   slidesPerView: 2
  },

  640: {
   slidesPerView: 3
  }
 }

 // modules: [Navigation],

 // pagination: {
 //  el: ".js-shape-swipe-pagination"
 // },

 // navigation: {
 //  nextEl: ".swiper-button-next",
 //  prevEl: ".swiper-button-prev"
 // },

 // breakpoints: {
 //  600: {
 //   slidesPerView: 3
 //  },
 //  500: {
 //   slidesPerView: 1
 //  },
 //  100: {
 //   slidesPerView: 1
 //  }
 // }
});
