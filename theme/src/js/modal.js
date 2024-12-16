const modal = () => {
  const handleModalElements = document.querySelectorAll(".handleModal");

  const closeModal = () => {
    const activeModalElements = document.querySelectorAll(".modal.open");

    if (!activeModalElements) return;

    activeModalElements[activeModalElements.length - 1]?.classList.remove(
      "open"
    );
  };

  handleModalElements.forEach((handleModal) => {
    handleModal.addEventListener("click", () => {
      const nameModal = handleModal.dataset["nameModal"];
      const modal = document.getElementById(`${nameModal}Modal`);

      modal.classList.add("open");
    });
  });

  document.addEventListener("click", (event) => {
    const isClickInsideContent =
      !event.target.closest(".content") &&
      !event.target.closest("img") &&
      event.target.closest(".modal");
    if (isClickInsideContent) {
      closeModal();
    }
  });
};

modal();
