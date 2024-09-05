const solve_button = document.querySelector("#submit");
solve_button.addEventListener("click", solve);

function solve() {
  let a = document.querySelector("#first_number").value;
  let b = document.querySelector("#second_number").value;
  let operator = document.querySelector("#operator").value;
  let answer = document.querySelector("#answer");
  switch (operator) {
    case "+":
      answer.textContent = Number(a) + Number(b);
      break;
    case "-":
      answer.textContent = a - b;
      break;
    case "/":
      answer.textContent = a / b;
      break;
    case "*":
      answer.textContent = a * b;
      break;

    default:
      break;
  }
}
document.querySelector("#ainput").addEventListener("input", function (e) {
  document.querySelector("#answer").textContent = e.target.value;
});
