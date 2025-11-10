/**
 * Contact Page Scripting
 *
 * @package Postali Child
 * @author Postali LLC
 */
/*global jQuery: true */
/*jslint white: true */
/*jshint browser: true, jquery: true */

jQuery( function ( $ ) {
	"use strict";

    $('.contact-tabs span').click(function() {
      
        // Check for active
        $('.contact-tabs li').removeClass('active');
        $(this).parent().addClass('active');
      
        // Display active tab
        let currentTab = $(this).attr('id');
        $('.tabs-content div.hide').hide();
        $(currentTab).fadeIn('slow');
      
        return false;
    });
	
});