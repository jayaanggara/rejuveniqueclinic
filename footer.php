	
<?php get_template_part( 'template-part/footer-content'); ?>
</main>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/locomotive-scroll@3.5.4/dist/locomotive-scroll.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory') ;?>/assets/plugins/owlcarousel/owl.carousel.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="<?php bloginfo('stylesheet_directory') ;?>/assets/plugins/enllax/jquery.enllax.min.js"></script>
<script>
AOS.init();
$(window).enllax({

//default values

// type can be defined as it is background parallax scrolling element or foreground scrolling element.
type: 'background',  // another value for type is 'foreground'.

ratio: 0.5,  // multiplier for scrolling speed. Less is slower. Default: '0'.

direction: 'vertical' // another value for direction is 'horizontal'.

});
jQuery(document).ready(function ($) {
        $("#openMenu").click( function(){
            $('.containerNav').fadeIn();
            $('body').addClass('overflow-hidden');
        });

        $("#closeMenu").click( function(){
            $('.containerNav').fadeOut();
            $('body').removeClass('overflow-hidden');
        });
        $(window).resize(function() {
            var width = $(window).width();
            if (width > 1024){
                $('.containerNav').fadeIn();
            } else {
                $('.containerNav').fadeOut();
            }
        });
    });

    var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
  var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("navbar-first").style.top = "0";
     document.getElementById("navbar").style.marginTop = "50px";
    prevScrollpos = currentScrollPos;
  } else if (currentScrollPos > prevScrollpos + 200){
    document.getElementById("navbar-first").style.top = "-60px";
    document.getElementById("navbar").style.marginTop = "0";
    prevScrollpos = currentScrollPos;
  }
}


$( '.js-input' ).keyup(function() {
  if( $(this).val() ) {
     $(this).addClass('not-empty');
  } else {
     $(this).removeClass('not-empty');
  }
});

    $(document).ready(function() {
    // Gets the video src from the data-src on each button
        var $videoSrc;  
        $('.video-btn').click(function() {
            $videoSrc = $(this).data( "src" );
        });
        console.log($videoSrc);
        // when the modal is opened autoplay it  
        $('#myModal').on('shown.bs.modal', function (e) {
        // set the video src to autoplay and not to show related video. Youtube related video is like a box of chocolates... you never know what you're gonna get
        $("#video").attr('src',$videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0" ); 
        })
        // stop playing the youtube video when I close the modal
        $('#myModal').on('hide.bs.modal', function (e) {
            // a poor man's stop video
            $("#video").attr('src',$videoSrc); 
        }) 
    // document ready  
    });




// const scroller = new LocomotiveScroll({
//     el: document.querySelector('[data-scroll-container]'),
//     smooth: true
// });

$('.slider-carousel').owlCarousel({
    loop:false,
    margin:10,
    nav:true,
    dots:false,
    navText: ['<img class="icon-slider" src="<?php bloginfo('stylesheet_directory');?>/assets/img/left-arrow.png">', '<img class="icon-slider" src="<?php bloginfo('stylesheet_directory');?>/assets/img/right-arrow.png">'],
    responsive:{
        0:{
            items:1,
            margin: 10,
        },
        600:{
            items:2,
            nav:true,
            margin: 10
        },
        1000:{
            items:3,
            nav:true,
            margin: 30
        }
    }
});

$('.special-offers').owlCarousel({
    loop:false,
    margin:10,
    nav:false,
    dots:false,    
    responsive:{
        0:{
            items:1,
            margin: 10,
            nav:false
        },
        600:{
            items:2,
            nav:false,
            margin: 10
        },
        1000:{
            items:3,
            nav:false,
            margin: 30
        }
    }
});


$('.news').owlCarousel({
    loop:true,
    margin:10,
    dots:false,
    navText: ['<img class="icon-slider" src="<?php bloginfo('stylesheet_directory');?>/assets/img/left-arrow.png">', '<img class="icon-slider" src="<?php bloginfo('stylesheet_directory');?>/assets/img/right-arrow.png">'],
    responsive:{
        0:{
            items:1,
            margin: 10,
            nav:true
        },
        600:{
            items:2,
            nav:true,
            margin: 10
        },
        1000:{
            items:2,
            nav:true,
            margin: 50
        }
    }
});

</script>
<?php wp_footer();?>
</body>
</html>