const form = document.querySelector("#login");
form.addEventListener("submit", async function (e) {
  e.preventDefault();
  const name = e.target[0].value;
  const password = e.target[1].value;
  const url = "http://127.0.0.1:8080/backend.php";
  const result = await submitForm(name, password, url);
  console.log(result);
  if (result.status == "success") {
    const token = result.token;
    localStorage.setItem("user_token", token);
    window.location = "profile.html";
  } else {
    document.querySelector("#message").textContent = result.message;
  }
});

async function submitForm(name, password, url) {
  const loader = document.querySelector(".loading");
  loader.classList.remove("hidden");
  const form = new FormData();
  form.append("username", name);
  form.append("password", password);
  const post = await fetch(url, {
    method: "POST",
    body: form,
  }).then((res) => res.json());
  loader.classList.add("hidden");
  return post;
}
