let btn = document.querySelectorAll(".btn-outline-success");

let cart = document.querySelector(".bi-cart-plus-fill");
let text = document.querySelector(".text");
let number = 0;
let cart_menu = document.querySelector(".cartmenu");
btn.forEach((item, index) => {
  item.addEventListener("click", () => {
    let menu = document.createElement("div");
    menu.classList.add(".display");
    console.log(menu);
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

let title = document.createElement("h1");
title.innerHTML = "Add To Cart";
title.classList.add("title1");
title.style.fontWeight = "bold";
cart_menu.appendChild(title);
cart.addEventListener("click", () => {
  cart_menu.classList.toggle("cartmove");
});
