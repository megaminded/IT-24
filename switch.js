const age = 20;
const gender = "male";
switch (age > 18) {
  case true:
    if (gender == "male") {
      console.log("Access denied");
    } else {
      console.log("Access granted");
    }
    break;
  case false:
    console.log("Access denied");
    break;
  default:
    console.log("This user age is invalid");
    break;
}

// keyword
// while, for, foreach
