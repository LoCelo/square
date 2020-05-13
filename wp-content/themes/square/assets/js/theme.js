jQuery(document).ready(function(){


var texto = jQuery(".hero").attr("data-text");
var texto2 = jQuery(".hero").attr("data-rewrite");

if(texto){

// values to keep track of the number of letters typed, which quote to use. etc. Don't change these values.
var i = 0,
    a = 0,
    isBackspacing = false,
    isParagraph = false;

// Typerwrite text content. Use a pipe to indicate the start of the second line "|".
var textArray = [texto, texto2];

// Speed (in milliseconds) of typing.
var speedForward = 80, //Typing Speed
    speedWait = 1000, // Wait between typing and backspacing
    speedBetweenLines = 1000, //Wait between first and second lines
    speedBackspace = 25; //Backspace Speed

//Run the loop
typeWriter("output", textArray, stop);


function typeWriter(id, ar) {
  var element = jQuery("#" + id),
      aString = ar[a],
      eHeader = element.children("h1"), //Header element
      eParagraph = element.children("p"); //Subheader element

  // Determine if animation should be typing or backspacing
  if (!isBackspacing) {

    // If full string hasn't yet been typed out, continue typing
    if (i < aString.length) {

      // If character about to be typed is a pipe, switch to second line and continue.
      if (aString.charAt(i) == "|") {
        stop = true;
        eHeader.removeClass("cursor");
        isBackspacing = false;
        eHeader.removeClass("cursor");
        clearTimeout();


      // If character isn't a pipe, continue typing.
      } else {
        // Type header or subheader depending on whether pipe has been detected
        if (!isParagraph) {
          eHeader.text(eHeader.text() + aString.charAt(i));
          eHeader.innerHTML = eHeader.text();
        } else {
          eParagraph.text(eParagraph.text() + aString.charAt(i));
        }
        i++;
        setTimeout(function(){ typeWriter(id, ar); }, speedForward);
      }

    // If full string has been typed, switch to backspace mode.
      } else if (i == aString.length) {

      if (stop == true) {
        isBackspacing = false;
        eHeader.removeClass("cursor");
        clearTimeout();
      }else{
        isBackspacing = true;
        setTimeout(function(){ typeWriter(id, ar); }, speedWait);
      }
      }

  // If backspacing is enabled
  } else {

    // If either the header or the paragraph still has text, continue backspacing
    if (eHeader.text().length > 0 ) {

      // If paragraph still has text, continue erasing, otherwise switch to the header.
      // if (eParagraph.text().length > 0) {
      //   eParagraph.text(eParagraph.text().substring(0, eParagraph.text().length - 1));
      // } else
      if (eHeader.text().length > 0) {
        eParagraph.removeClass("cursor");
        eHeader.addClass("cursor");
        eHeader.text(eHeader.text().substring(0, eHeader.text().length - 1));
      }
      var stop = true;
      setTimeout(function(){ typeWriter(id, ar, stop = true); }, speedBackspace);
      // eHeader.removeClass("cursor");
      // clearTimeout();



    // If neither head or paragraph still has text, switch to next quote in array and start typing.
    } else {

      isBackspacing = false;
      i = 0;
      isParagraph = false;
      a = (a + 1) % ar.length; //Moves to next position in array, always looping back to 0
      setTimeout(function(){ typeWriter(id, ar); }, speedForward);
      // eHeader.removeClass("cursor");
      // clearTimeout();
      // var textArray = '';

    }
  }
}

jQuery(".scroll").click(function() {
    jQuery([document.documentElement, document.body]).animate({
        scrollTop: jQuery(".content").offset().top
    }, 2000);
});

}

var burger = document.querySelector('#nav-icon3');
var menu = document.querySelector('.main-menu-wrapper');
var header = document.querySelector('header');
var button = document.querySelector('.burger-button');
burger.onclick = function() {
  menu.classList.toggle('open');
  this.classList.toggle('open');
  header.classList.toggle('open');
  button.classList.toggle('open');
}

})
