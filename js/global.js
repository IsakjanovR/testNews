jQuery(document).ready(function($) {

// Toggle mobile menu
    $(".nav-toggle").on("click", function(){
        $(this).toggleClass("active");
        $(".mobile-menu").slideToggle();
        if ($(".search-toggle").hasClass("active")) {
            $(".search-toggle").removeClass("active");
            $(".search-container").slideToggle();
        }
        return false;
    });

    // Toggle search container
    $(".search-toggle").on("click", function(){
        $(this).toggleClass("active");
        $(".search-container").slideToggle();
        if ($(".nav-toggle").hasClass("active")) {
            $(".nav-toggle").removeClass("active");
            $(".mobile-menu").slideToggle();
        }
        return false;
    });

    // Hide mobile menu/search container at resize
    $(window).resize(function() {

        if ($(window).width() >= 850) {
            $(".nav-toggle").removeClass("active");
            $('.mobile-menu').hide();
        }

        if ($(window).width() <= 850) {
            $(".search-toggle").removeClass("active");
            $('.search-container').hide();
        }

    });

    // Toggle login container
    $(".login-toggle").on("click", function(){
        $(this).toggleClass("active");
        $(".login-container").slideToggle();
        if ($(".nav-toggle").hasClass("active")) {
            $(".nav-toggle").removeClass("active");
            $(".mobile-menu").slideToggle();
        }
        return false;
    });

// Register - icon
        $(".login").focus(function() {
            $(".login-icon").css("left","5%");
        });
        $(".login").blur(function() {
            $(".login-icon").css("left","20%");
        });

        $(".password").focus(function() {
            $(".pass-icon").css("left","5%");
        });
        $(".password").blur(function() {
            $(".pass-icon").css("left","20%");
        });

        $(".email").focus(function() {
            $(".email-icon").css("left","5%");
        });
        $(".email").blur(function() {
            $(".email-icon").css("left","20%");
        });

        $(".phone").focus(function() {
            $(".phone-icon").css("left","5%");
        });
        $(".phone").blur(function() {
            $(".phone-icon").css("left","20%");
        });


    $('#logout').click(function(){
        $.ajax({
            method: 'post',
            url:'/zip.re/client/logout.php',
            success: function(data) {
                location.replace("http://localhost/zip.re/index.php");
                alert('you are logged out');

            }
        });
    });
});
/**
 * Created by Рустам on 29.06.2016.
 */
