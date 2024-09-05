const error = document.querySelector("#error");
const loader = document.querySelector(".loader");
document
  .querySelector("#register")
  .addEventListener("submit", async function (event) {
    event.preventDefault();
    loader.classList.remove("d-none");
    console.log(event);
    const form = new FormData(event.target);

    url =
      "https://ebuka-practice.serv00.net/api-learning/bank-api/bank-api.php";
    const request = await fetch(url, {
      method: "POST",
      body: form,
    })
      .then((response) => response.json())
      .catch((error) => {
        error.textContent = error;
      });
    if (request.success == true) {
      console.log(request);
      error.textContent = request.message;
      localStorage.setItem("user_token", request.user_token);
      window.location = "profile.html";
    } else {
      error.textContent = request.message;
    }
    loader.classList.add("d-none");
  });
