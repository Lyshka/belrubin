const lightBox = () => {
  const lightBox = document.getElementById("lightBox");
  const btnCloseLightBox = lightBox.querySelector("button");
  const imgLightBox = lightBox.querySelector("img");

  const openLightBoxImgElements = document.querySelectorAll(
    "button.openLightBoxImg"
  );

  btnCloseLightBox.addEventListener("click", () => {
    lightBox.classList.remove("open");
  });

  openLightBoxImgElements.forEach((openLightBoxImg) => {
    openLightBoxImg.addEventListener("click", () => {
      const urlImg = openLightBoxImg.dataset["url"];

      imgLightBox.src = urlImg;
      lightBox.classList.add("open");
    });
  });
};

lightBox();
