// wait until DOM is ready
document.addEventListener("DOMContentLoaded", function (event) {
  console.log("DOM loaded");

  //wait until images, links, fonts, stylesheets, and js is loaded
  window.addEventListener(
    "load",
    function (e) {
      //custom GSAP code goes here
      // This tween will rotate an element with a class of .my-element

      //Smoother Scroll
      ScrollSmoother.create({
        wrapper: ".smot",
        content: ".smother_scroll",
        smooth: 1.5,
        effects: true,
      });

      //////////// HOME PAGE ANIMATIONS

      //WELCOME HERO
      gsap.to(".testegsap", {
        y: -130,
        x: 20,
        delay: 0.2,
      });

      gsap.to(".testegsap2", {
        y: 200,
        x: 20,
        delay: 0.2,
      });

      //INTRODUCTION
      gsap.to(".h1_intro", {
        scrollTrigger: {
          trigger: ".text_intro",
          markers: false,
          start: "top bottom",
          end: "bottom top",
          scrub: 1,
        },
        y: 120,
      });

      //OUR WORKS
      gsap.to(".h1_our_works", {
        scrollTrigger: {
          trigger: ".text_our_works",
          markers: false,
          start: "top bottom",
          end: "bottom top",
          scrub: 1,
        },
        y: 120,
      });

      //DEVELOPMENT
      gsap.to(".text_development", {
        scrollTrigger: {
          trigger: ".group_development",
          markers: false,
          start: "top bottom",
          end: "bottom top",
          scrub: 1,
        },
        y: 120,
      });

      //ABOUT
      gsap.to(".img_about", {
        scrollTrigger: {
          trigger: ".img_about",
          markers: false,
          start: "top bottom",
          end: "bottom top",
          scrub: 1,
        },
        x: 200,
      });

      gsap.to(".text_about", {
        scrollTrigger: {
          trigger: ".text_about",
          markers: false,
          start: "top bottom",
          end: "bottom top",
          scrub: 1,
        },
        x: -200,
      });

      //////////// NEWS PAGE ANIMATIONS

      //NEWS
      gsap.to(".group_news", {
        scrollTrigger: {
          trigger: ".group_news",
          markers: false,
          start: "top bottom",
          end: "bottom top",
          scrub: 1,
        },
        y: -300,
      });

      //HEADING
      gsap.to(".h1_news", {
        scrollTrigger: {
          trigger: ".group_news",
          markers: false,
          start: "top bottom",
          end: "bottom top",
          scrub: 1,
        },
        scale: 1.5,
      });
      //////////// NEWS PAGE ANIMATIONS
      gsap.to(".text_404", {
        scrollTrigger: {
          trigger: ".text_404",
          markers: true,
          start: "top bottom",
          end: "bottom top",
          scrub: 1,
        },
        scale: 1.2,
      });

      console.log("window loaded");
    },
    false
  );
});
