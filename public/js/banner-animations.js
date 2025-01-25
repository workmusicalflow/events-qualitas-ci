// Animation de base pour la bannière
document.addEventListener("DOMContentLoaded", function () {
  const banner = document.querySelector(".banner");
  const bannerContent = document.querySelector(".banner-content");

  if (banner && bannerContent) {
    // Animation d'entrée
    bannerContent.style.opacity = "0";
    bannerContent.style.transform = "translate(-50%, -40%)";

    setTimeout(() => {
      bannerContent.style.transition = "opacity 1s ease, transform 1s ease";
      bannerContent.style.opacity = "1";
      bannerContent.style.transform = "translate(-50%, -50%)";
    }, 500);

    // Animation au scroll
    window.addEventListener("scroll", () => {
      const scrollPosition = window.scrollY;
      banner.style.transform = `translateY(${scrollPosition * 0.3}px)`;
    });
  }
});

// Animation du menu
document.addEventListener("DOMContentLoaded", function () {
  const nav = document.querySelector(".main-nav");

  if (nav) {
    window.addEventListener("scroll", () => {
      if (window.scrollY > 50) {
        nav.classList.add("scrolled");
      } else {
        nav.classList.remove("scrolled");
      }
    });
  }
});
