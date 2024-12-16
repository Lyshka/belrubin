const getInputValue = (e, key, isChecked = false) => {
  if (isChecked) {
    return e.target.elements[key].checked;
  } else {
    return e.target.elements[key].value;
  }
};
