// function updateTimer() {
//   future = Date.parse("june 9, 2023 11:30:00");
//   now = new Date();
//   diff = future - now;

//   days = Math.floor(diff / (1000 * 60 * 60 * 24));
//   hours = Math.floor(diff / (1000 * 60 * 60));
//   mins = Math.floor(diff / (1000 * 60));
//   secs = Math.floor(diff / 1000);

//   d = days;
//   h = hours - days * 24;
//   m = mins - hours * 60;
//   s = secs - mins * 60;

//   document.getElementById("timer")
//       .innerHTML =
//       '<div>' + d + '<span>DAYS</span></div>' +
//       '<div>' + h + '<span>HOURS</span></div>' +
//       '<div>' + m + '<span>MINUTES</span></div>' +
//       '<div>' + s + '<span>SECONDS</span></div>';
// }
// setInterval('updateTimer()', 1000);




const dayselement = document.getElementById("days");
const hourselement = document.getElementById("hours");
const minuteselement = document.getElementById("minutes");
const secondselement = document.getElementById("seconds");

const newYears = "1 August 2023";

function countdown() {
  const newYearsDate = new Date(newYears);
  const currentDate = new Date();

  const totalSeconds = (newYearsDate - currentDate) / 1000;

  const days = Math.floor(totalSeconds / 3600 / 24);
  const hours = Math.floor(totalSeconds / 3600) % 24;
  const minutes = Math.floor(totalSeconds / 60) % 60;
  const seconds = Math.floor(totalSeconds) % 60;

  dayselement.innerHTML = formatTime(days);
  hourselement.innerHTML = formatTime(hours);
  minuteselement.innerHTML = formatTime(minutes);
  secondselement.innerHTML = formatTime(seconds);
}

function formatTime(time) {
  return time < 10 ? `0${time}` : time;
}

// Initial Call
countdown();

setInterval(countdown, 1000);
