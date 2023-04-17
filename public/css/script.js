$(document).ready(function(){
    $('.counter').counterUp({
      delay: 100,
      time: 5000
    });
    setTimeout(function() {
  $('.counter-up').fadeOut('fast');
}, 5050); // <-- time in milliseconds
});