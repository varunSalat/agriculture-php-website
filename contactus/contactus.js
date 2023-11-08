// !BURGER TOGGLE
const burgerBtn = document.querySelector(".burger_container"),
  navLinkContainer = document.querySelector(".nav_link_container");
burgerBtn.addEventListener("click", () => {
  burgerBtn.classList.toggle("active");
  navLinkContainer.classList.toggle("active");
});
console.log(true);
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
  gsap.fromTo(
    ".nav_link_btn",
    {
      y: "-80px",
      duration: 800,
      opacity: 0,
    },
    { y: 0, stagger: 0.1, opacity: 1 }
  );
});
