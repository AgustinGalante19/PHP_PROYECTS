const borrar = (id) => {
  const deleteButton = document.querySelector(".delete-user");
  deleteButton.addEventListener("click", (e) => {
    e.preventDefault();
    console.log(id);
  });
};
