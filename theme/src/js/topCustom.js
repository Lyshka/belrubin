const topCustom = () => {
  const screenHeight = document.documentElement.clientHeight;
  const btnTop = document.getElementById("btnTop");

  window.addEventListener("scroll", function () {
    if (window.scrollY > screenHeight) {
      btnTop.classList.add("visible");
    } else {
      btnTop.classList.remove("visible");
    }
  });
};
topCustom();
