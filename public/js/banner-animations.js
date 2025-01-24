document.addEventListener("DOMContentLoaded", () => {
  // Configuration des animations GSAP
  gsap.registerPlugin(ScrollTrigger);

  // Timeline principale pour l'animation de la bannière
  const bannerTimeline = gsap.timeline({
    defaults: {
      ease: "power3.out",
      duration: 1,
    },
  });

  // Séquence d'animations
  bannerTimeline
    // Fade in de l'overlay
    .to(".banner-overlay", {
      opacity: 1,
      duration: 1.2,
    })
    // Animation du titre
    .from(
      ".banner-title",
      {
        y: 30,
        opacity: 0,
        duration: 1,
      },
      "-=0.8"
    )
    // Animation de la description
    .from(
      ".banner-description",
      {
        y: 30,
        opacity: 0,
        duration: 1,
      },
      "-=0.7"
    )
    // Animation du thème
    .from(
      ".banner-theme",
      {
        y: 30,
        opacity: 0,
        duration: 1,
      },
      "-=0.7"
    )
    // Animation de la boîte d'informations
    .from(
      ".event-info-box",
      {
        y: 30,
        opacity: 0,
        duration: 1,
      },
      "-=0.6"
    )
    // Animation du bouton CTA
    .from(
      ".cta-button",
      {
        y: 30,
        opacity: 0,
        duration: 1,
        onComplete: () => {
          // Animation continue du bouton
          gsap.to(".cta-button", {
            y: "-5px",
            duration: 1.5,
            repeat: -1,
            yoyo: true,
            ease: "power1.inOut",
          });
        },
      },
      "-=0.5"
    );

  // Animation des icônes d'information au survol
  const infoIcons = document.querySelectorAll(".info-icon");
  infoIcons.forEach((icon) => {
    icon.addEventListener("mouseenter", () => {
      gsap.to(icon, {
        scale: 1.2,
        duration: 0.3,
        ease: "back.out",
      });
    });

    icon.addEventListener("mouseleave", () => {
      gsap.to(icon, {
        scale: 1,
        duration: 0.3,
        ease: "power2.out",
      });
    });
  });

  // Effet parallaxe sur l'image de fond
  gsap.to(".banner-image", {
    y: 50,
    ease: "none",
    scrollTrigger: {
      trigger: ".banner-container",
      start: "top top",
      end: "bottom top",
      scrub: true,
    },
  });

  // Animation des éléments d'information au scroll
  gsap.from(".event-info-item", {
    y: 20,
    opacity: 0,
    duration: 0.8,
    stagger: 0.2,
    scrollTrigger: {
      trigger: ".event-info-box",
      start: "top 80%",
      toggleActions: "play none none reverse",
    },
  });

  // Gestion du redimensionnement
  let resizeTimeout;
  window.addEventListener("resize", () => {
    clearTimeout(resizeTimeout);
    resizeTimeout = setTimeout(() => {
      ScrollTrigger.refresh();
    }, 250);
  });
});
