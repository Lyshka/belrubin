const sendAction = async (formData, handle = () => {}) => {
  const {
    data: {
      data: { message },
      success,
    },
  } = await axios.post(ajaxurl, formData, {
    headers: {
      "Content-Type": "multipart/form-data",
    },
  });

  if (success) {
    toastr.success(message);
    handle();
  } else {
    toastr.error(message);
  }
};
