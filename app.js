let btn = document.querySelectorAll(".btn-outline-success");

let cart = document.querySelector(".bi-cart-plus-fill");
let text = document.querySelector(".text");
let number = 0;

btn.forEach((item, index) => {
  item.addEventListener("click", () => {
    number++;
    let result = number;
    if (number > 9) {
      result = number;
    } else if (number < 9) {
      result = `${0}${result}`;
    } else {
      result = "09";
    }
    text.innerHTML = result;
  });
});

let button = document.querySelector(".bi-list");
let bar = document.querySelector(".sidebar");
let underlay = document.querySelector(".underlay");
button.addEventListener("click", () => {
  bar.classList.toggle("move");
  if (bar.classList.contains("move")) {
    underlay.style.transform = "translateX(0)";
    underlay.style.transition = "1.2s all";
  } else {
    underlay.style.transform = "translateX(-120%)";
    underlay.style.transition = "1.2s all";
  }
});
