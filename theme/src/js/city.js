const city = () => {
  const cityContact = document.getElementById("cityContact");

  if (!cityContact) return;

  const addressList = cityContact.querySelector(".addressList");
  const addressButtonElements = addressList.querySelectorAll("button");

  const mapList = cityContact.querySelector(".mapList");
  const mapItemElements = mapList.querySelectorAll("li");

  if (!addressList || !mapList) return;

  const closeAll = () => {
    addressButtonElements.forEach((el) => {
      el.classList.remove("active");
    });
    mapItemElements.forEach((el) => {
      el.classList.remove("visible");
    });
  };

  addressButtonElements.forEach((addressButton, idx) => {
    addressButton.addEventListener("click", () => {
      closeAll();

      addressButton.classList.add("active");
      mapItemElements[idx].classList.add("visible");
    });
  });
};

city();
