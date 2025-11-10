/**
 * Theme scripting
 *
 * @package Postali Child
 * @author Postali LLC
 */
/*global jQuery: true */
/*jslint white: true */
/*jshint browser: true, jquery: true */

jQuery( function ( $ ) {
	"use strict";

    $("#menu-icon").on("mousedown", function(e) {
        $("#nav-container").toggleClass('open');
        $("#menu-icon").toggleClass("closed active");
        console.log('clicked');
        e.preventDefault();
    });

    $("#menu-icon").on("focusin", function() {
        $("#nav-container").addClass('open');
        $(this).toggleClass("closed active");
        console.log('tabbed');
    });

    


    
	//Mobile menu accordion toggle for sub pages
	$('#menu-main-menu > li.menu-item-has-children').append('<div class="accordion-toggle"><span class="icon-chevron-down"></span></span></div>');

	$('#menu-main-menu .accordion-toggle').click(function() {
		$(this).toggleClass('toggle-background');
		$(this).find('.icon-chevron-down').toggleClass('toggle-rotate');
        $(this).parent().find('> ul').toggleClass("open");
	});

    $('#menu-main-menu a').click(function() {
		$("#nav-container").removeClass('open');
        $("#menu-icon").removeClass("active");
	});

    // script to make accordions function
	$(".accordions").on("click", ".accordions_title", function() {
        // will (slide) toggle the related panel.
        $(this).toggleClass("active").next().slideToggle();
    });

    $(function() {
        //caches a jQuery object containing the header element
        var onpagecta = $(".on-page-cta");
        $(window).scroll(function() {
            var scroll = $(window).scrollTop();
    
            if (scroll >= 700) {
                onpagecta.addClass("visible");
            } else {
                onpagecta.removeClass("visible");
            }
        });
    });

    $(document).ready(function() {
        $("#nav-container").removeClass('open');
    });

    //keeps menu expanded so user can tab through sub-menu, then closes menu after user tabs away from last child
    $(document).ready(function() {
        $(".menu-close").on("focusout", function() {
            $("#nav-container").toggleClass('open');
            $("#menu-icon").toggleClass("closed active");
        });
    });

    $(document).ready(function() {
        $('.menu-item-has-children').on('focusin', function() {
            var subMenu = $(this).find('.sub-menu');
            subMenu.addClass('open');

            $(this).find('.sub-menu > li:last-child').on('focusout', function() {
                subMenu.removeClass('open');
            });

            $('html').on('click', function(e) {
                var target = e.target;
                if( $(target).closest('.menu-item').length ) {
                    return;
                } else {
                    subMenu.css('display', 'none');
                }
            });
        });
    });

});