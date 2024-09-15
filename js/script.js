// Burger Menu 
$(document).ready(function(){
    $("#menu").click(function(){
      $("#navlinks").slideToggle("slow");
    });
  });

//Smooth Scroll
  $(document).ready(function() {
    $('a[href^="#"]').on('click', function(event) {
        var target = $(this.getAttribute('href'));
        if( target.length ) {
            event.preventDefault();
            $('html, body').stop().animate({
                scrollTop: target.offset().top
            }, 1000);
        }
    });
});
