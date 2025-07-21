// Menu
$(function() {
    $(document).ready(function(){

        $(window).scroll(function(){
            if ($(this).scrollTop() > 60) {
                $('.menu2').fadeIn(160);
            } else {
                $('.menu2').fadeOut(160);
            }
        });
 
    });
});


// Slider
$("#carousel-home .carousel-inner .item:first").addClass("active");

$(function() {
  //Function to animate slider captions 
  function doAnimations( elems ) {
    //Cache the animationend event in a variable
    var animEndEv = 'webkitAnimationEnd animationend';
    
    elems.each(function () {
      var $this = $(this),
        $animationType = $this.data('animation');
      $this.addClass($animationType).one(animEndEv, function () {
        $this.removeClass($animationType);
      });
    });
  }
  
  //Variables on page load 
  var $myCarousel = $('#carousel-home'),
    $firstAnimatingElems = $myCarousel.find('.item:first').find("[data-animation ^= 'animated']");
    
  //Initialize carousel 
  $myCarousel.carousel();
  
  //Animate captions in first slide on page load 
  doAnimations($firstAnimatingElems);
  
  //Pause carousel  
  $myCarousel.carousel('pause');

  $myCarousel.carousel({
    interval: 6000,
    cycle: true
  });
  
  //Other slides to be animated on carousel slide event 
  $myCarousel.on('slide.bs.carousel', function (e) {
    var $animatingElems = $(e.relatedTarget).find("[data-animation ^= 'animated']");
    doAnimations($animatingElems);
  });  
  
});


// Effects
$(document).ready(function() {
  $('.project-entry, .section, .author').addClass("bt_hidden").viewportChecker({
  classToAdd: 'bt_visible animated fadeIn', 
    offset: 50, 
    repeat: true, 
    callbackFunction: function(elem, action){},
    scrollHorizontal: false 
  });
  $('.essential, .quote').addClass("bt_hidden").viewportChecker({
  classToAdd: 'bt_visible animated fadeInUp', 
    offset: 50, 
    repeat: true, 
    callbackFunction: function(elem, action){},
    scrollHorizontal: false 
  });
});



// Form Validation
function updateInputClass() {
    $(this).toggleClass('error', $.trim(this.value) == '');
}
$(".wpcf7-text, .wpcf7-textarea").blur(updateInputClass);
$('button').click(updateInputClass);


// Hover fix for iOS Mobile
var mobileHover = function () {
    $('*').on('touchstart', function () {
        $(this).trigger('hover');
    }).on('touchend', function () {
        $(this).trigger('hover');
    });
};
mobileHover();

// Images
$(document).ready(function()
{
    $('img').bind('contextmenu', function(e){
        return false;
    }); 
});


// Facebook counter fix

/* Init the SDK upon load */
window.fbAsyncInit = function(){
  FB.init({
    appId      : '464723870207650', // App ID
    channelUrl : '//'+window.location.hostname+'/channel.php', // Path to your Channel File
    status     : true, // check login status
    cookie     : true, // enable cookies to allow the server to access the session
    xfbml      : true,  // parse XFBML
    frictionlessRequests: true
  });
}





