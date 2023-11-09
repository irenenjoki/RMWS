// JavaScript code to get the current date and year
var currentDate = new Date();
var year = currentDate.getFullYear();


// Function to update the date and year
function updateDate() {
  document.getElementById('current-year').textContent = "© IRINNAH&ADRIAN. All right Reserved " + year;
}

// Update the date and year initially
updateDate();

// Update the date and year every second
setInterval(updateDate, 1000);

const preloader = document.querySelector("[data-preload]");

window.addEventListener("load", function () {
  var preloader = document.getElementById("preloader");
  preloader.style.display = "none";
});

$(window).on("load", function () {
  $('body').addClass('loaded');
});



const addEventOnElements = function (elements, eventType, callback) {
  for (let i = 0, len = elements.length; i < len; i++) {
    elements[i].addEventListener(eventType, callback);
  }
}




