var headerBar = document.querySelector(".header-bar");
headerBar.addEventListener("click", function () {
  headerBar.classList.toggle("active");
  var menu = document.querySelector(".menu");
  if (menu) {
    menu.classList.toggle("active");
  }
});

//Header
var fixedTop = document.querySelector("header");
window.addEventListener("scroll", function () {
  if (window.scrollY > 300) {
    fixedTop.classList.add("header-fixed", "fadeInUp");
  } else {
    fixedTop.classList.remove("header-fixed", "fadeInUp");
  }
});
function setTheme(theme) {
  const html = document.documentElement;
  const bootstrapCSS = document.getElementById("bootstrapCSS");
  if (theme === "dark") {
    html.setAttribute("data-bs-theme", "dark");

    localStorage.setItem("theme", "dark");
  } else {
    html.setAttribute("data-bs-theme", "blue");

    localStorage.setItem("theme", "blue");
  }
}

// Function to get the theme
function getTheme() {
  const savedTheme = localStorage.getItem("theme");
  if (savedTheme) {
    setTheme(savedTheme);
  }
}

// Load the theme on page load
window.onload = getTheme;
// =================== header js end here =================== //

//Animation on Scroll initializing
AOS.init();
