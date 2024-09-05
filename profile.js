window.onload = function () {
  loginUser();
};

async function loginUser() {
  const url = "http://127.0.0.1:8080/profile.php";
  const token = localStorage.getItem("user_token");
  console.log(token);
  const form = new FormData();
  form.append("token", token);
  const result = await fetch(url, {
    method: "POST",
    body: form,
  }).then((res) => res.json());
  if (result.status == "success") {
    document.querySelector("#username").textContent = result.user.username;
    document.querySelector("#message").textContent = result.message;
  } else {
    alert(result.message);
    window.location = "login.html";
  }
}

function logout() {
  localStorage.removeItem("user_token");
  window.location = "login.html";
}
