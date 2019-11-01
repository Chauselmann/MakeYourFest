export default {
  init() {
    // When the user scrolls the page, execute myFunction
  },
  finalize() {

    //JavaScript to be fired on all pages, after page specific JS is fired
    // Set the date we're counting down to
var countDownDate = new Date('Jan 5, 2021 15:37:25').getTime();

    function isDigit(val) {
      if (String(+val).charAt(0) == val){
        return '0'+val;
      } else {
        return val;
      }
    }
console.log(countDownDate);
// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = isDigit(Math.floor(distance / (1000 * 60 * 60 * 24)));
  var hours = isDigit(Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)));
  var minutes = isDigit(Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60)));
  var seconds = isDigit(Math.floor((distance % (1000 * 60)) / 1000));

  // // Display the result in the element with id="demo"
  // document.getElementById('demo').innerHTML = days + 'd ' + hours + 'h '
  //   + minutes + 'm ' + seconds + 's ';

  document.getElementById('days').innerHTML = days + '';
  document.getElementById('hours').innerHTML = hours + '';
  document.getElementById('minutes').innerHTML = minutes + '';
  document.getElementById('seconds').innerHTML = seconds + '';

  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById('demo').innerHTML = 'EXPIRED';
  }
}, 1000);

  },
};
