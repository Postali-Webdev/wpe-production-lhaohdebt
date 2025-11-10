/**
 * Home Page Scripting
 *
 * @package Postali Child
 * @author Postali LLC
 */
/*global jQuery: true */
/*jslint white: true */
/*jshint browser: true, jquery: true */

jQuery( function ( $ ) {
	"use strict";

    // scripts for waypoints

    var onpage1 = new Waypoint({
        element: document.getElementById('section_1'),
        handler: function(direction) {
            if (direction == "down") {
                $('#on-page-1').addClass('active');
            } else {
                $('#on-page-1').removeClass('active');
            }
        },
    offset: 200
    });
    
    var onpage2 = new Waypoint({
        element: document.getElementById('section_2'),
        handler: function(direction) {
            if (direction == "down") {
                $('#on-page-2').addClass('active');
                $('#on-page-1').removeClass('active');
            } else {
                $('#on-page-2').removeClass('active');
                $('#on-page-1').addClass('active');
            }
        },
    offset: 200
    });
    
    var onpage3 = new Waypoint({
        element: document.getElementById('section_3'),
        handler: function(direction) {
            if (direction == "down") {
                $('#on-page-3').addClass('active');
                $('#on-page-2').removeClass('active');
            } else {
                $('#on-page-3').removeClass('active');
                $('#on-page-2').addClass('active');
            }
        },
    offset: 200
    });
    
    var onpage4 = new Waypoint({
        element: document.getElementById('section_4'),
        handler: function(direction) {
            if (direction == "down") {
                $('#on-page-4').addClass('active');
                $('#on-page-3').removeClass('active');
            } else {
                $('#on-page-4').removeClass('active');
                $('#on-page-3').addClass('active');
            }
        },
    offset: 200
    });
    
    var onpage5 = new Waypoint({
        element: document.getElementById('contact_footer'),
        handler: function(direction) {
            if (direction == "down") {
                $('#on-page-5').addClass('active');
                $('#on-page-4').removeClass('active');
            } else {
                $('#on-page-5').removeClass('active');
                $('#on-page-4').addClass('active');
            }
        },
        offset: 200
    });

    $(document).ready(function() {
        var OnPageNavPosition = $('.mobile-on-page-nav').position().top;
        $(window).scroll(function() {
        if($(window).scrollTop() > (OnPageNavPosition - 75)) {
            $('.mobile-on-page-nav').addClass('stick');
            $('.mobile-on-page-nav').addClass('close');
            $('.detail').addClass('closed');
            $('.offset').addClass('active');
        } else {
            $('.mobile-on-page-nav').removeClass('stick');
            $('.mobile-on-page-nav').removeClass('close');
            $('.detail').removeClass('closed');
            $('.offset').removeClass('active');
        }
        });
    }); 

    $(window).scroll(function() {
        $(".on-page-nav").removeClass("fade-out");
        if($(window).scrollTop() + $(window).height() > ($(document).height() - 100) ) {
            //you are at bottom
            $(".on-page-nav").addClass("fade-out");
        }
     });

    $(function() {
		$(".expand").on( "click", function() {
			$(this).next().slideToggle(200);
			$('.icon-expand').toggleClass('clicked');
		});
	});

    $('.links > a').click(function() {
		$('.detail').slideToggle(200);
	});
	
});