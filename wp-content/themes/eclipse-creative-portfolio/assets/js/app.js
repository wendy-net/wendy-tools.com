// wait until DOM is ready
document.addEventListener("DOMContentLoaded", function (event) {
  //console.log("DOM loaded");

  //wait until images, links, fonts, stylesheets, and js is loaded
  window.addEventListener(
    "load",
    function (e) {
      // Custom GSAP code goes here

      //Smoother Scroll
        // ScrollSmoother.create({
        //   wrapper: ".smot",
        //   content: ".smother_scroll",
        //   smooth: 1.5,
        //   effects: true,
        // });

      if (window.innerWidth > 768) {

      const elements = {
        testegsap: document.querySelector(".testegsap"),
        testegsap2: document.querySelector(".testegsap2"),
        h1_intro: document.querySelector(".h1_intro"),
        h1_our_works: document.querySelector(".h1_our_works"),
        text_development: document.querySelector(".text_development"),
        img_about: document.querySelector(".img_about"),
        text_about: document.querySelector(".text_about"),
        group_news: document.querySelector(".group_news"),
        h1_news: document.querySelector(".h1_news"),
        text_404: document.querySelector(".text_404"),
      };

      //////////// HOME PAGE ANIMATIONS

      Object.keys(elements).forEach((key) => {
        if (elements[key]) {
          switch (key) {
            case "testegsap":
              gsap.to(elements.testegsap, {
                x: 40,
                delay: 0.5,
                
              });
              break;
            case "testegsap2":
              gsap.to(elements.testegsap2, {
                x: 40,
                delay: 0.5,
                
              });
              break;
            case "h1_intro":
              gsap.to(elements.h1_intro, {
                scrollTrigger: {
                  trigger: ".text_intro",
                  markers: false,
                  start: "top bottom",
                  end: "bottom top",
                  scrub: 1,
                },
                y: 120,
              });
              break;
            case "h1_our_works":
              gsap.to(elements.h1_our_works, {
                scrollTrigger: {
                  trigger: ".text_our_works",
                  markers: false,
                  start: "top bottom",
                  end: "bottom top",
                  scrub: 1,
                },
                y: 120,
              });
              break;
            case "text_development":
              gsap.to(elements.text_development, {
                scrollTrigger: {
                  trigger: ".group_development",
                  markers: false,
                  start: "top bottom",
                  end: "bottom top",
                  scrub: 1,
                },
                y: 120,
              });
              break;
            case "img_about":
              gsap.to(elements.img_about, {
                scrollTrigger: {
                  trigger: ".img_about",
                  markers: false,
                  start: "top bottom",
                  end: "bottom top",
                  scrub: 1,
                },
                x: 200,
              });
              break;
            case "text_about":
              gsap.to(elements.text_about, {
                scrollTrigger: {
                  trigger: ".text_about",
                  markers: false,
                  start: "top bottom",
                  end: "bottom top",
                  scrub: 1,
                },
                x: -200,
              });
              break;
            case "group_news":
              gsap.to(elements.group_news, {
                scrollTrigger: {
                  trigger: ".group_news",
                  markers: false,
                  start: "top bottom",
                  end: "bottom top",
                  scrub: 1,
                },
                y: -300,
              });
              break;
            case "h1_news":
              gsap.to(elements.h1_news, {
                scrollTrigger: {
                  trigger: ".h1_news",
                  markers: false,
                  start: "top bottom",
                  end: "bottom top",
                  scrub: 1,
                },
                scale: 1.5,
              });
              break;
            case "text_404":
              gsap.to(elements.text_404, {
                scrollTrigger: {
                  trigger: ".text_404",
                  markers: false,
                  start: "top bottom",
                  end: "bottom top",
                  scrub: 1,
                },
                scale: 1.5,
                y: 60
              });
              break;
            default:
              break;
          }
        }
      });
    }

      //console.log("window loaded");
    },
    false
  );
});
