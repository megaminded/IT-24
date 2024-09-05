async function submitConfirmation(event) {
  const alert = document.querySelector(".alert");
  const alertMessage = document.querySelector("#alert-message");
  const loader = document.querySelector(".loader");
  event.preventDefault();
  loader.classList.remove("d-none");
  const form = new FormData(event.target);
  const url = "http://127.0.0.1:8000/email.php";
  const response = await fetch(url, {
    method: "POST",
    body: form,
  })
    .then((response) => response.json())
    .catch((error) => {
      alert.classList.add("alert-danger");
      alert.classList.remove("d-none");
      alertMessage.textContent = response.message;
    });
  loader.classList.add("d-none");
  if (response.success == true) {
    console.log(response);
  } else {
    alert.classList.add("alert-danger");
    alert.classList.remove("d-none");
    alertMessage.textContent = response.message;
  }
}
