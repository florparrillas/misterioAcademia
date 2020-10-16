//Menu Navbar
var menuBtn = $('.menu-icon');
var menu = $('.navegador ul');

menuBtn.click(function(){
  if(menu.hasClass('show')){
      menu.removeClass('show');
  } else {
      menu.addClass('show');
  }
});

/* JS DE Acordeon  */
$(function() {

    var enlaces = $(".acordion");
    enlaces.click(function() {

        var icono = $(this).children("span").children("i");
        if (icono.attr("class") === "fas fa-plus") {
            icono.attr("class", "fas fa-minus");
        } else {
            icono.attr("class", "fas fa-plus");
        }
        enlaces.removeClass("activo");
        $(this).addClass("activo");
        var contenido = $(this).next();
        contenido.slideToggle("slow");
    });

});

/* js de Carrousel */

const buttonPrev = document.getElementById('button-prev');
const buttonNext = document.getElementById('button-next');
const track = document.getElementById('track');
const slickList = document.getElementById('slick-list');
const slick = document.querySelectorAll('.slick');

const slickWidth = slick[0].offsetWidth;

buttonPrev.onclick = () => Move(1);
buttonNext.onclick = () => Move(2);

function Move(value) {
    const trackWidth = track.offsetWidth;
    const listWidth = slickList.offsetWidth;

    track.style.left == "" ? leftPosition = track.style.left = 0 : leftPosition = parseFloat(track.style.left.slice(0, -2) * -1);
    if (leftPosition < (trackWidth - listWidth) && value == 2) {
        track.style.left = `${-1 * (leftPosition + slickWidth)}px`;
        
    } else if (leftPosition > 0 && value == 1) {
        track.style.left = `${-1 * (leftPosition - slickWidth)}px`;

    }
    
};

 //Helper Anchors
 (function(document, history, location) {
   var HISTORY_SUPPORT = !!(history && history.pushState);
   var anchorScrolls = {
     ANCHOR_REGEX: /^#[^ ]+$/,
     OFFSET_HEIGHT_PX: 136,
     /**
      * Establish events, and fix initial scroll position if a hash is provided.
      */
     init: function() {
       this.scrollToCurrent();
       $(window).on('hashchange', $.proxy(this, 'scrollToCurrent'));
       $('body').on('click', 'a', $.proxy(this, 'delegateAnchors'));
     },
     /**
      * Return the offset amount to deduct from the normal scroll position.
      * Modify as appropriate to allow for dynamic calculations
      */
     getFixedOffset: function() {
       return this.OFFSET_HEIGHT_PX;
     },
     /**
      * If the provided href is an anchor which resolves to an element on the
      * page, scroll to it.
      * @param  {String} href
      * @return {Boolean} - Was the href an anchor.
      */
     scrollIfAnchor: function(href, pushToHistory) {
       var match, anchorOffset;
       if(!this.ANCHOR_REGEX.test(href)) {
         return false;
       }
       match = document.getElementById(href.slice(1));
       if(match) {
         anchorOffset = $(match).offset().top - this.getFixedOffset();
         $('html, body').animate({ scrollTop: anchorOffset});
         // Add the state to history as-per normal anchor links
         if(HISTORY_SUPPORT && pushToHistory) {
           history.pushState({}, document.title, location.pathname + href);
         }
       }
       return !!match;
     },
  
     /**
      * Attempt to scroll to the current location's hash.
      */
     scrollToCurrent: function(e) { 
       if(this.scrollIfAnchor(window.location.hash) && e) {
         e.preventDefault();
       }
     },
     /**
      * If the click event's target was an anchor, fix the scroll position.
      */
     delegateAnchors: function(e) {
       var elem = e.target;
       if(this.scrollIfAnchor(elem.getAttribute('href'), true)) {
         e.preventDefault();
       }
     }
   };
   $(document).ready($.proxy(anchorScrolls, 'init'));
 })(window.document, window.history, window.location);