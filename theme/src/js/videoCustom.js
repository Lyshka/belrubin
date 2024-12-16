const videoCustom = () => {
  const videoCustomElements = document.querySelectorAll(".videoCustom");

  if (!videoCustomElements) return;

  videoCustomElements.forEach((videoContainer) => {
    const video = videoContainer.querySelector("video");
    const button = videoContainer.querySelector("button");
    let isLoaded = false;

    button.addEventListener("click", () => {
      if (!isLoaded) {
        video.load();
        isLoaded = true;
      }
      video.play();
      button.style.display = "none";
    });

    video.addEventListener("play", () => {
      button.style.display = "none";
      video.setAttribute("controls", "controls");
    });

    video.addEventListener("pause", () => {
      button.style.display = "flex";
      video.removeAttribute("controls");
    });

    video.addEventListener("ended", () => {
      button.style.display = "flex";
      video.removeAttribute("controls");
    });
  });
};

videoCustom();
