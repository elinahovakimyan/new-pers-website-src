(function ($) {
    "use strict";

    jQuery(document).ready(function () {

        /***MENU TOGGLE ANIMATION***/
        $('.toggle-normal').on('click', function() {
                $('.top-bar').toggleClass('top-transform');
                $('.middle-bar').toggleClass('middle-transform');
                $('.bottom-bar').toggleClass('bottom-transform');
            });


        /***MENU CLOSE***/
        $('.section,div#menu-options a').on('click', function () {
            $('nav#theMenu').removeClass('menu-open');
            $('.top-bar').removeClass('top-transform');
            $('.middle-bar').removeClass('middle-transform');
            $('.bottom-bar').removeClass('bottom-transform');
        });

        /***MENU OPEN***/
        $('div#menuToggle').on('click', function () {
            $('div#menuToggle').toggleClass('active');
            $('body').toggleClass('body-push-toright');
            $('nav#theMenu').toggleClass('menu-open');
        });


        /***SMOOTH SCROLL***/
        $(function () {
            $('div#menu-options,div#about-btn').find('a[href*=#]:not([href=#])').click(function () {
                if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                    if (target.length) {
                        $('html,body').animate({
                            scrollTop: target.offset().top
                        }, 900, "swing");
                        return false;
                    }
                }
            });
        });


        /***SCROLL TO TOP***/
        $(window).scroll(function () {
            if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
                $('div#scrollup').addClass('animated flipInY').fadeIn(200);    // Fade in the arrow
            } else {
                $('div#scrollup').fadeOut(200);
            }
        });


        $('div#scrollup').on('click', function () {
            $("html,body").animate({
                scrollTop: 0
            }, 600);

            return false;
        });
      

        /***PORTFOLIO GALLERY***/
        var all = '#a,#b,#c';
        var afterFirst = '#b,#c';

        $(afterFirst).addClass('hide');

        $('a#all-sample').on('click', function () {
            $('#add-more').removeClass('hide');
            $(all).removeClass('tab-pane');
            $(afterFirst).addClass('hide');
        });
        $('a.cate').on('click', function () {
            $('#add-more').addClass('hide');
            $(afterFirst).removeClass('hide');
            $(all).addClass('tab-pane');

        });
        $('#add-more').on('click', function () {
            if ($(all).hasClass('')) {
                $(all).removeClass('tab-pane hide').addClass('x');
                $('#port-add-icon').removeClass('fa-plus').addClass('fa-arrow-up');
            } else {
                $(afterFirst).addClass('hide');
                $(all).removeClass('x');
                $('#port-add-icon').addClass('fa-plus').removeClass('fa-arrow-up');
            }

        });


        /***PORTFOLIO***/
        $('li.list-shuffle,#add-more').on('click', function () {
            $(".inLeft")
                .removeClass('InLeft')
                .hide()
                .addClass('InLeft')
                .show();
            $(".inRight")
                .removeClass('InRight')
                .hide()
                .addClass('InRight')
                .show();
        });


        /***SKILLS***/
        $('div.skillbar').each(function () {
            $(this).find('div.skillbar-bar').css({
                width: $(this).attr('data-percent')
            });
        });


        // /***CAROUSAL SWIPE***/
        // $(".carousel-inner").swipe( {
        //     //Generic swipe handler for all directions
        //     swipeLeft:function() {
        //         $(this).parent().carousel('next');
        //     },
        //     swipeRight: function() {
        //         $(this).parent().carousel('prev');
        //     },
        //     //Default is 75px, set to 0 for demo so any distance triggers swipe
        //     threshold:0
        // });

        var quotes = [
        "You can’t teach employees to smile. They have to smile before you hire them. – Arte Nathan",
        "Website without visitors is like a ship lost in the horizon. ― Dr. Christopher Dayagdag", 
        "A successful website does three things: 1) It attracts the right kinds of visitors, 2) Guides them to the main services or product you offer, 3) Collect Contact details for future ongoing relation. ― Mohamed Saad", 
        "What separates design from art is that design is meant to be... functional.― Cameron Moll", 
        "Try not to become a man of success. Rather become a man of value. ― Albert Einstein", 
        "A dream doesn't become reality through magic; it takes sweat, determination and hard work. ― Colin Powell",
        "Opportunities are usually disguised as hard work, so most people don't recognize them. ― Ann Landers", 
        "People only see what they are prepared to see. ― Ralph Waldo Emerson", 
        "Hire CHARACTER, train SKILL!",
        "With the past, I have nothing to do; nor with the future. I live now. ― Ralph Waldo Emerson", 
        "Only those who dare to fail greatly can achieve greatly",
        "Any sufficiently advanced technology is a equivalent to magic",
        "It has become appallingly obvious that our technology has exceeded our humanity. ― Albert Einstein"
        ];

        $('#randomQuote').on('click', function() {
            $('#randomQ').text(quotes[Math.floor(Math.random()*(11)+0)]); 
        });

        /***MAIL SCRIPT***/ // Upadted in V. 1.1
        $('form#contact-form').on('submit', function (e) {
            e.preventDefault(); //Prevents default submit
            var form = $(this);
            $("#submit").attr('disabled', 'disabled'); //Disable the submit button on click
            var post_data = form.serialize(); //Serialized the form data 
            $('div#form-loader').removeClass('is-hidden').fadeIn(500);
            $.ajax({
                type: 'POST',
                url: 'php/mail_handler.php', // Form script
                data: post_data
            })
                .done(function () {
                    $('div#form-loader').fadeOut(500);
                    Materialize.toast('Message Sent! I will contact you shortly, Thanks', 4000);
                    $("form#contact-form")[0].reset();
                    Materialize.updateTextFields(); // Rest floating labels
                    $("#submit").removeAttr('disabled', 'disabled'); // Enable submit button

                })
                .fail(function () {
                    $('div#form-loader').fadeOut(500);
                    Materialize.toast('Sorry! Something Wrong, Try Again', 4000);
                    $("#submit").removeAttr('disabled', 'disabled'); // Enable submit button
                });
        });
              

    });


    jQuery(window).load(function () {

        /***FADES OUT PRE-LOADER***/
        $('div#loading').fadeOut(500);

        /***SCROLL ANIMATION***/
        window.sr = ScrollReveal({reset: false}); // reset false stops repetition of animation
        var commonCards = '#port-add-icon,#map-card,.interest-icon-even,.interest-icon,' +
            '.timeline-dot, .timeline-content,#add-more,#skills-card,#testimonials-card,' +
            '#portfolios-card,#interest-card,#p-one,#p-two,#p-three,#blog-card,#contact-card,#clients';
        // Customizing a reveal set
        sr.reveal(commonCards, {duration: 1100});
        sr.reveal('#about-card,.map-label', {duration: 1400, delay: 500});
        sr.reveal('#v-card-holder', {duration: 1400, distance: '150px'});
        sr.reveal('.skillbar-bar', {duration: 1800, delay: 300, distance: '0'});});


})(jQuery);


