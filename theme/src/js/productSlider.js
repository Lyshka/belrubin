const productSlider = () => {
  const productSlider = document.getElementById("productSlider");

  const fullSlider = productSlider.querySelector(".fullSlider");
  const thumbnailSlider = productSlider.querySelector(".thumbnailSlider");

  const galleryThumbs = new Swiper(thumbnailSlider, {
    slideToClickedSlide: true,
    slidesPerView: 3,
    breakpoints: {
      1200: {
        spaceBetween: 14,
      },
      0: {
        spaceBetween: 8,
      },
    },
  });

  new Swiper(fullSlider, {
    navigation: false,
    thumbs: {
      swiper: galleryThumbs,
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

productSlider();
