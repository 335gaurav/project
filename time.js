
function updateTime() {
  var date = new Date();
  var hours = date.getHours();
  var minutes = date.getMinutes();
  var seconds = date.getSeconds();

  // Add leading zeros if needed
  hours = (hours < 10 ? "0" : "") + hours;
  minutes = (minutes < 10 ? "0" : "") + minutes;
  seconds = (seconds < 10 ? "0" : "") + seconds;

  var currentTime = hours + ":" + minutes + ":" + seconds;

  document.getElementById("clock").textContent = currentTime;
}

// Call updateTime() initially to avoid delay
updateTime();

// Refresh time every second
setInterval(updateTime, 1000);

