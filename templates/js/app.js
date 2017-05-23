$(document).foundation();

// Headroom 
var myElement = document.querySelector("header");
var headroom  = new Headroom(myElement, {
    "offset": 100,
    "tolerance": {
        "up": 10,
        "down": 15,
    }
});
headroom.init();

$(document).ready(function() {
    myParaxify = paraxify('.hero', {
	   boost: 1
    });
});

// Smooth Scrolling
$(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});

// Cookie Consent
window.addEventListener("load", function(){
window.cookieconsent.initialise({
  "palette": {
    "popup": {
      "background": "#214e71"
    },
    "button": {
      "background": "#fd7d45",
      "text": "#ffffff"
    }
  },
  "content": {
    "message": "Corptrade.se använder cookies för att webbplatsen ska fungera på ett bra sätt för dig. Genom att vidare använda sidan godkänner du att vi använder cookies.",
    "dismiss": "Jag godkänner",
    "link": "Vad är cookies?",
    "href": "www.corptrade.se/om-cookies"
  }
})});