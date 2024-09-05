const screen = document.querySelector(".screen");
function pressKeyboard(sound) {
  switch (sound) {
    case "doh":
      doh.play();
      break;

    default:
      break;
  }
}

const doh = document.querySelector(".doh");
doh.play();
