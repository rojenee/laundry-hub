const body = document.querySelector("body");
  sidebar = document.querySelector(".sidebar");
  sidebarClose = document.querySelector("#sidebar-close");
  toggle = document.querySelector(".toggle"), // Make sure you have an HTML element with class "toggle"
  searchBtn = document.querySelector(".search-box");
  modeSwitch = document.querySelector(".toggle-switch");
  modeText = document.querySelector(".mode-text");

sidebarClose.addEventListener("click", ()=> sidebar.classList.toggle("close"));

toggle.addEventListener("click", () => {
  body.classList.toggle("close");
});

modeSwitch.addEventListener("click", () => {
    body.classList.toggle("dark");
  });
  