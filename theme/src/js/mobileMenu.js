const mobileMenuMain = () => {
  const closeMobileMenuAll = () => {
    const handleMobileTelMenuElements = document.querySelectorAll(
      ".handleMobileTelMenu"
    );
    const mobileMenuElements = document.querySelectorAll(".mobileMenu");

    mobileMenuElements.forEach((mobileMenu) => {
      mobileMenu.classList.remove("open");
    });

    handleMobileTelMenuElements.forEach((handleMobileTelMenu) => {
      handleMobileTelMenu.classList.remove("active");
    });
  };

  const telMenu = () => {
    const mobileTelMenu = document.getElementById("mobileTelMenu");
    const handleMobileTelMenu = document.getElementById("handleMobileTelMenu");

    if (!mobileTelMenu || !handleMobileTelMenu) return;

    handleMobileTelMenu.onclick = () => {
      if (mobileTelMenu.classList.contains("open")) {
        mobileTelMenu.classList.remove("open");
      } else {
        closeMobileMenuAll();
        mobileTelMenu.classList.add("open");
      }

      handleMobileTelMenu.classList.toggle("active");
    };
  };

  const mobileMenu = () => {
    const mobileMenuElement = document.getElementById("mobileMenu");
    const handleMobileMenu = document.getElementById("handleMobileMenu");

    const mobileItemElements = document.querySelectorAll(
      ".menu-site-mobile li.menu-item-has-children > a"
    );

    mobileItemElements.forEach((mobileItem) => {
      mobileItem.addEventListener("click", (event) => {
        event.preventDefault();
        mobileItem.classList.toggle("open");
      });
    });

    handleMobileMenu.onclick = () => {
      if (mobileMenuElement.classList.contains("open")) {
        mobileMenuElement.classList.remove("open");
      } else {
        closeMobileMenuAll();
        mobileMenuElement.classList.add("open");
      }

      handleMobileMenu.classList.toggle("active");
    };
  };

  telMenu();
  mobileMenu();
};
mobileMenuMain();
