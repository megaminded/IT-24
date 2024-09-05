let data = [];
const notes = document.querySelector("#notes");
const note = document.querySelector("#note");
const content = document.querySelector("#content");
const message = document.querySelector("#message");

// This function is used to load the data into the notes div
function loadNote() {
  console.log("Make sure our notes placeholder is clean");
  notes.innerHTML = "";
  console.log("We load the notes into the notes div using loop");
  const storage = localStorage.getItem("notes");
  const newData = JSON.parse(storage);
  console.log(newData);
  // return;
  if (newData != null) {
    newData.forEach((note, index) => {
      notes.innerHTML += `<button
      type="button"
      onclick="openNote(${index})"
      class="list-group-item list-group-item-action"
    >
      <strong class="d-block truncate">${note.title}</strong>
      <small class="d-block">${note.date}</small>
    </button>`;
    });
  }
}

window.onload = function () {
  loadNote();
};

function openNote(index) {
  const storage = localStorage.getItem("notes");
  const newData = JSON.parse(storage);
  note.textContent = newData[index].title;
}
function saveNote(event) {
  event.preventDefault();
  data.push({
    title: content.value,
    date: new Date().toDateString(),
  });
  localStorage.setItem("notes", JSON.stringify(data));
  loadNote();
  console.log(data);
}
