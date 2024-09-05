window.onload = function () {
  fetchCategories();
};

async function fetchCategories() {
  const url = "https://ok.surf/api/v1/cors/";
  const route = "news-section-names";
  const section = await fetch(url + route, {})
    .then((res) => {
      if (!res.ok) {
        throw Error("could not fetch data for that resource");
      }
      return res.json();
    })
    .catch((err) => {
      console.log(err);
    });
  const divSection = document.querySelector("#categories");
  divSection.innerHTML = null;
  section.forEach((data) => {
    divSection.innerHTML += `<button type="button" onclick="fetchSection('${data}')" class="list-group-item list-group-item-action">${data}</button>`;
  });
}

async function fetchSection(selectedSection) {
  const section = await fetch("//ok.surf/api/v1/news-section", {
    method: "POST",
    body: {
      section: [selectedSection],
    },
  })
    .then((res) => {
      if (!res.ok) {
        throw Error("could not fetch data for that resource");
      }
      return res.json();
    })
    .catch((err) => {
      console.log(err);
    });
  console.log("Response", section);
  return;
  const contentSection = document.querySelector("#content-section");
  const contentPage = document.querySelector("#content-page");
}
