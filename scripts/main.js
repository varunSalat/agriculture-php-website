gsap.registerPlugin("ScrollTrigger");
// !BURGER TOGGLE
const burgerBtn = document.querySelector(".burger_container"),
  navLinkContainer = document.querySelector(".nav_link_container");
burgerBtn.addEventListener("click", () => {
  burgerBtn.classList.toggle("active");
  navLinkContainer.classList.toggle("active");
});

window.addEventListener("scroll", () => {
  if (burgerBtn.classList.contains("active")) {
    burgerBtn.classList.remove("active");
    navLinkContainer.classList.remove("active");
  }
});

const loaderSection = document.getElementById("loader_section");

window.addEventListener("load", () => {
  heroTl.play();
  loaderSection.classList.add("hide");
  setTimeout(() => {
    loaderSection.style.display = "none";
  }, 400);
});

const heroTl = gsap.timeline({
  defaults: { duration: 0.4, ease: "linear" },
  paused: true,
});

heroTl
  .fromTo(
    ".nav_link_btn",
    {
      y: "-80px",
      duration: 800,
      opacity: 0,
    },
    { y: 0, stagger: 0.1, opacity: 1 }
  )
  .from(".hero_dis_small_header", { opacity: 0, y: 20 }, "-=0.2")
  .from(".hero_dis_header", { opacity: 0, y: 20 })
  .from(".hero_dis_text", { opacity: 0, y: 20 })
  .fromTo("#hero_btn", { opacity: 0 }, { opacity: 1 });

// !ANIMATIONS

// !ANIMATIONS

// our services
gsap.from(".service_card_btn_icon", {
  y: 20,
  opacity: 0,
  duration: 0.8,
  scrollTrigger: {
    trigger: ".service_card_container",
    start: "top 600px",
    end: "top 20%",
    // markers: true,
  },
});
gsap.from(".service_card h3, .service_card h2", {
  y: -20,
  opacity: 0,
  duration: 0.8,
  scrollTrigger: {
    trigger: ".service_card_container",
    start: "top 60%",
    end: "top 20%",
    // markers: true,
  },
});

// ABOUT US

const aboutUsTl = gsap.timeline({
  defaults: { duration: 1, ease: "power2" },
  scrollTrigger: {
    trigger: ".about_us_home_section_container",
    start: "top 60%",
    end: "top 20%",
    // markers: true,
  },
});

aboutUsTl
  .from(".about_us_main_img img", { filter: "saturate(0)" })
  .from(".secondary_img", { scale: 0, opacity: 0 })
  .from(".plant_2 img", { y: 20, opacity: 0 })
  .from(
    ".about_us_home_section_right_container",
    { y: 20, opacity: 0, duration: 0.6 },
    "-= 1"
  )
  .to(".discover_more_btn", { y: 0, opacity: 1 });

// OUR SERVICES CARDS
gsap.from(".what_we_offer_card", {
  y: -40,
  opacity: 0,
  duration: 0.6,
  stagger: 0.6,
  scrollTrigger: {
    trigger: ".what_we_offer_card",
    start: "top 70%",
    // markers: true,
  },
});

// VIDEO SECTION
// gsap.from(".completed_work_card", {
//   scrollTrigger: {
//     trigger: ".completed_work_card",
//     start: "top 70%",
//     onEnter: () => changeAgriProdCount(),
//     onEnterBack: () => false,
//     // markers: true,
//   },
// });
// const countList = [5000, 4000, 3500, 6400];
// const countElement = document.querySelectorAll(".completed_work_card h5");
// const changeAgriProdCount = () => {
//   countList.forEach((item, index) => {
//     let num = 0;
//     const interval = setInterval(() => {
//       if (num === item) {
//         clearInterval(interval);
//       }
//       countElement[index].innerText = num;
//       num += 200;
//     }, 100);
//   });
// };

// VIDEO SECTION

const videoSectionTl = gsap.timeline({
  defaults: { duration: 0.6, ease: "easeInOut" },
  scrollTrigger: {
    trigger: ".video_main_container",
    start: "top 70%",
    // markers: true,
  },
});
videoSectionTl
  .from(".video_block", { opacity: 0, y: 20, stagger: 0.4 })
  .from(".video_play_btn", { scale: 1.5, opacity: 0 });

// OUR FARM BENEFITS
const ourFarmBenefitsTl = gsap.timeline({
  defaults: { duration: 0.6, ease: "easeInOut" },
  scrollTrigger: {
    trigger: ".why_choose_us_list_container",
    start: "top 60%",
    // markers: true,
  },
});

ourFarmBenefitsTl
  .from(".why_choose_us_list", {
    opacity: 0,
    x: 40,
    stagger: 0.4,
  })
  .from(".discover_more_btn", { opacity: 0, y: 20 });

// OUR PRIDE
gsap.from(".our_pride_card", {
  opacity: 0,
  y: 20,
  stagger: 0.4,
  scrollTrigger: { trigger: ".our_pride_card_container", start: "top 70%" },
});

// FOOTER
gsap.from(".footer_container", {
  opacity: 0,
  stagger: 0.4,
  duration: 0.4,
  y: 20,
  scrollTrigger: {
    trigger: "footer",
    start: "top 75%",
    // markers: true,
  },
});
