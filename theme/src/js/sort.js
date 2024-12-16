const sort = () => {
  const sortForm = document.getElementById("sortForm");

  if (!sortForm) return;

  const inputElements = sortForm.querySelectorAll("input");
  const selectElements = sortForm.querySelectorAll("select");

  const onChange = (element) => {
    element.addEventListener("change", () => {
      const url = new URL(window.location.href);

      url.searchParams.forEach((_, key) => url.searchParams.delete(key));

      inputElements.forEach((input) => {
        if (input.name) {
          if (input.type === "checkbox" && input.checked) {
            url.searchParams.set(input.name, "on");
          } else if (input.type !== "checkbox" && input.value) {
            url.searchParams.set(input.name, input.value);
          }
        }
      });

      selectElements.forEach((select) => {
        if (select.name && select.value) {
          url.searchParams.set(select.name, select.value);
        }
      });

      const newUrl = url.pathname.replace(/page\/\d/, "");
      url.pathname = newUrl;

      window.location.href = url.toString();
    });
  };

  inputElements.forEach(onChange);
  selectElements.forEach(onChange);
};

sort();
