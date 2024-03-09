const burger = document.querySelector(".fa-bars");
const menu = document.querySelector(".resp");
const cont = document.querySelector(".main_content");
const hedr = document.querySelector(".hedr");
const web = document.querySelector("body");

burger.addEventListener("click", () => {
  menu.classList.toggle("reap_act");
  cont.classList.toggle("cont");
  hedr.classList.toggle("tit");
  web.classList.toggle("web");
});