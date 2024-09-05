const domain = "https://api.lyrics.ovh/v1/";

document
  .querySelector("#lyrics-form")
  .addEventListener("submit", async function (e) {
    e.preventDefault();
    const form = new FormData(e.target);

    const title = form.get("title");
    const artist = form.get("artist");

    const url = domain + artist + "/" + title;

    const result = await fetch(url)
      .then((response) => {
        return response.json();
      })
      .catch((error) => {
        console.log("its catch", error);
      });

    document.querySelector("#content").innerHTML = result.lyrics;
    // if (result.statusCode == 200) {
    //   console.log("Successful");
    // } else {
    //   console.log("Not Successful");
    // }
  });
