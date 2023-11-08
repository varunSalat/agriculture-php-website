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

const videoContainer = document.querySelector(".video_container"),
  videoPlayBtn = document.querySelector(".video_play_btn"),
  videoCloseBtn = document.querySelector(".video_close_btn");
videoPlayBtn.addEventListener("click", () =>
  videoContainer.classList.remove("hide")
);
videoCloseBtn.addEventListener("click", () =>
  videoContainer.classList.add("hide")
);

const handleContactFormOpen = () => {
  document
    .querySelector(".product_contact_us_form_container")
    .classList.add("active");
};
const handleContactFormClose = () => {
  document
    .querySelector(".product_contact_us_form_container")
    .classList.remove("active");
};

// !HANDLE PRODUCT NAV BUTTON
const productDetailNavBtns = document.querySelectorAll(
    ".product_detail_nav_btn"
  ),
  detailContainers = document.querySelectorAll(".detail_container");

productDetailNavBtns.forEach((btn, i) => {
  btn.addEventListener("click", () => {
    detailContainers.forEach((container) => container.classList.remove("show"));
    productDetailNavBtns.forEach((btn) => btn.classList.remove("active"));
    btn.classList.add("active");
    detailContainers[i].classList.add("show");
  });
});
