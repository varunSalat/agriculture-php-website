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
  loaderSection.classList.add("hide");
  setTimeout(() => {
    loaderSection.style.display = "none";
  }, 400);
  heroTl.play();
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
  .fromTo(".hero_dis h4", { opacity: 0, y: 20 }, { opacity: 1, y: 0 }, "-=0.1")
  .from(".hero_dis_navigate", { opacity: 0, y: 20 });

// !ANIMATIONS
//USP SECTION ANIMATION
const uspTl = gsap.timeline({
  defaults: { duration: 0.4, ease: "ease" },
  scrollTrigger: { trigger: ".usp_card", start: "top 450px" },
});

uspTl
  .fromTo(
    ".usp_card figure img",
    { filter: "blur(5px)" },
    { filter: "blur(0)" }
  )
  .from(".usp_card article", { opacity: 0, y: 20 });

// OUR FARM BENEFITS
const ourFarmBenefitsTl = gsap.timeline({
  defaults: { duration: 0.6, ease: "easeInOut" },
  scrollTrigger: {
    trigger: ".why_choose_us_list_container",
    start: "top 80%", // Adjusted start position
    end: "top 20%", // Adjusted end position
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

// OUR MISSION
const ourMissionTl = gsap.timeline({
  defaults: { duration: 0.6, ease: "easeInOut" },
  scrollTrigger: {
    trigger: ".our_mission_list_container",
    start: "top 80%", // Adjusted start position
    end: "top 20%", // Adjusted end position
    // markers: true,
  },
});

ourMissionTl.from(".our_mission_list", {
  opacity: 0,
  x: -40,
  stagger: 0.4,
});
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
