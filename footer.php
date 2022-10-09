	
<?php get_template_part( 'template-part/footer-content'); ?>
</main>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="<?php bloginfo('stylesheet_directory') ;?>/assets/plugins/owlcarousel/owl.carousel.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="<?php bloginfo('stylesheet_directory') ;?>/assets/plugins/enllax/jquery.enllax.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.0/jquery.flexslider.min.js"></script>
<script>

$('.map-container')
	.click(function(){
			$(this).find('iframe').addClass('clicked')})
	.mouseleave(function(){
			$(this).find('iframe').removeClass('clicked')});

AOS.init();
$(window).enllax({

//default values

// type can be defined as it is background parallax scrolling element or foreground scrolling element.
type: 'background',  // another value for type is 'foreground'.

ratio: 0.5,  // multiplier for scrolling speed. Less is slower. Default: '0'.

direction: 'vertical' // another value for direction is 'horizontal'.

});
$(window).load(function() {
  // The slider being synced must be initialized first
  $('#carousel-tret').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    slideshow: false,
    itemWidth: 210,
    itemMargin: 5,
    asNavFor: '#slider-tret'
  });
 
  $('#slider-tret').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    slideshow: false,
    sync: "#carousel-tret"
  });
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
     document.getElementById("navbar").style.marginTop = "55px";
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

document.addEventListener('DOMContentLoaded', function () {
                var beforeAfterExample = new BeforeAfter(document.querySelector('.example'));
            });
            var BeforeAfter = (function () {
    function BeforeAfter(handler) {
        this.handler = handler;

        if(this.checkHandlerExist() && this.checkImagesExist()){
            this.init();
            this.bindEvents();
        }
    }

    BeforeAfter.prototype.init = function () {
        this.wrapHandler();
        this.wrapImages();
        this.createHandler();
    };

    BeforeAfter.prototype.wrapHandler = function () {
        var html = this.getHandler().innerHTML;
        var container = document.createElement('div');
        container.className = 'before-after';
        container.innerHTML = html;

        this.getHandler().innerHTML = container.outerHTML;
    };

    BeforeAfter.prototype.wrapImages = function () {
        var images = this.getImages();

        for(var i = 0, l = images.length; i < l; i++) {
            images[i].outerHTML = this.getWrappedImage(images[i].outerHTML, i);
        }
    };

    BeforeAfter.prototype.getWrappedImage = function (image, index) {
        var photo = document.createElement('div');
        photo.className = 'photo';
        photo.innerHTML = image;

        if(index === 0){
            photo.className += ' before';
        }
        else{
            photo.className += ' after';
        }

        return photo.outerHTML;
    };

    BeforeAfter.prototype.createHandler = function () {
        var beforeAfterHandler = this.getHandler().querySelector('.before-after');

        var dragHandler = document.createElement('div');
        dragHandler.className = 'drag-handler';
        dragHandler.draggable = true;
        var dragElement = document.createElement('div');
        dragElement.className = 'drag-element';
        dragHandler.appendChild(dragElement);

        beforeAfterHandler.innerHTML += dragHandler.outerHTML;
    };

    BeforeAfter.prototype.checkHandlerExist = function () {
        return this.getHandler() !== undefined;
    };

    BeforeAfter.prototype.checkImagesExist = function () {
        return this.getImages().length === 2;
    };

    BeforeAfter.prototype.getImages = function () {
        var images = this.getHandler().querySelectorAll('img');
        if(images.length === 0){
            return this.getHandler().querySelectorAll('.layer');
        }
        return images;
    };

    BeforeAfter.prototype.bindEvents = function () {
        var self = this;

        'mousedown touchstart'.split(' ').forEach(function(evt) {
            self.getDragHandler().addEventListener(evt, function (e) {
                e.preventDefault();
                e.stopPropagation();
                self.markDragStart();
            });
        });

        'mouseup touchend'.split(' ').forEach(function (evt) {
            document.addEventListener(evt, function () {
                self.markDragStop();
            });
        });

        'mousemove touchmove'.split(' ').forEach(function (evt) {
            self.getContainer().addEventListener(evt, function (e) {
                if(self.isDragStart()){
                    var moveX = evt === 'touchmove' ? e.changedTouches[0].clientX : e.clientX;
                    self.update(moveX);
                }
            });
        })
    };

    BeforeAfter.prototype.getHandler = function () {
        return this.handler;
    };

    BeforeAfter.prototype.getContainer = function () {
        return this.getHandler().querySelector('.before-after');
    };

    BeforeAfter.prototype.getDragHandler = function () {
        return this.getHandler().querySelector('.drag-handler');
    };

    BeforeAfter.prototype.getDragHandlerOffsetX = function () {
        return this.getDragHandler().offsetLeft;
    };

    BeforeAfter.prototype.getPositionByOffset = function (offsetX) {
        var prePosition = (offsetX - this.getHandlerOffsetX()) * 100 / this.getImagesWidth();
        var position = null;
        if(prePosition < 0){
            position = 0;
        }
        else if(prePosition > 100){
            position = 100;
        }
        else {
            position = prePosition;
        }

        return position
    };

    BeforeAfter.prototype.update = function (offsetX) {
        var position = this.getPositionByOffset(offsetX);
        this.updateDragHandlerPosition(position);
        this.updatePhotoBefore(position);
    };

    BeforeAfter.prototype.updateDragHandlerPosition = function (position) {
        this.getDragHandler().style.left = position + '%';
    };

    BeforeAfter.prototype.updatePhotoBefore = function (position) {
        var photoBefore = this.getPhotoBefore();
        var photoBeforeImage = this.getPhotoBeforeImage();
        var translateValue = 100 - position;
        photoBefore.style.transform = 'translate(' + (-1 * translateValue) + '%)';
        photoBeforeImage.style.transform = 'translate(' + translateValue + '%)';
    };

    BeforeAfter.prototype.getPhotoBefore = function () {
        return this.getHandler().querySelector('.photo.before');
    };

    BeforeAfter.prototype.getPhotoBeforeImage = function () {
        var photoBefore = this.getPhotoBefore().querySelector('img');
        if(photoBefore === null){
            return this.getPhotoBefore().querySelector('.layer');
        }
        return photoBefore;
    };

    BeforeAfter.prototype.getImagesWidth = function () {
        return this.getHandler().querySelector('.before-after').offsetWidth;
    };

    BeforeAfter.prototype.getHandlerOffsetX = function () {
        return this.getHandler().getBoundingClientRect().left;
    };

    BeforeAfter.prototype.markDragStart = function () {
        this.dragStart = true;
    };

    BeforeAfter.prototype.markDragStop = function () {
        this.dragStart = false;
    };

    BeforeAfter.prototype.isDragStart = function () {
        return this.dragStart === true;
    };

    return BeforeAfter;
})();

</script>
<?php wp_footer();?>
</body>
</html>