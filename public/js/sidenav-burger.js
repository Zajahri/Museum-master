// sidenav.js
document.addEventListener("DOMContentLoaded", function () {
  var sidenav = document.querySelector("aside");
  var sidenav_trigger = document.querySelector("[sidenav-trigger]");
  var sidenav_close_button = document.querySelector("[sidenav-close]");
  var burger = sidenav_trigger.firstElementChild;
  var top_bread = burger.firstElementChild;
  var bottom_bread = burger.lastElementChild;

  var page = "dashboard"; // Default page value
  if (!window.location.pathname.includes("pages")) {
    page = "dashboard";
  }

  sidenav_trigger.addEventListener("click", function (event) {
    event.preventDefault();

    if (page == "virtual-reality") {
      sidenav.classList.toggle("xl:left-[18%]");
    }

    sidenav.setAttribute(
      "aria-expanded",
      sidenav.getAttribute("aria-expanded") === "true" ? "false" : "true"
    );

    sidenav.classList.toggle("translate-x-0");
    sidenav.classList.toggle("ml-6");
    sidenav.classList.toggle("shadow-xl");

    if (page == "rtl") {
      top_bread.classList.toggle("-translate-x-[5px]");
      bottom_bread.classList.toggle("-translate-x-[5px]");
    } else {
      top_bread.classList.toggle("translate-x-[5px]");
      bottom_bread.classList.toggle("translate-x-[5px]");
    }
  });

  sidenav_close_button.addEventListener("click", function () {
    sidenav_trigger.click();
  });

  window.addEventListener("click", function (e) {
    if (
      !sidenav.contains(e.target) &&
      !sidenav_trigger.contains(e.target)
    ) {
      if (sidenav.getAttribute("aria-expanded") == "true") {
        sidenav_trigger.click();
      }
    }
  });
});
