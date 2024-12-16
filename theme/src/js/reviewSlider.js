const reviewSlider = () => {
  const reviewSliderElement = document.getElementById("reviewSlider");

  if (!reviewSliderElement) return;

  const prevBtn = reviewSliderElement.querySelector(".prev");
  const nextBtn = reviewSliderElement.querySelector(".next");

  new Swiper(reviewSliderElement, {
    loop: true,
    navigation: {
      prevEl: prevBtn,
      nextEl: nextBtn,
    },
    breakpoints: {
      1200: {
        spaceBetween: 24,
      },
      0: {
        spaceBetween: 10,
      },
    },
  });
};

reviewSlider();
