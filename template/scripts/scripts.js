/*

	Author: Steven Galvin

	Date: 04/23/2020

	Purpose: Main Scripts

*/

$(document).ready(function() {

	var hamburger = $('.hamburger');
	var menuItems = $('#menu-items');

	hamburger.click(function() {
		hamburger.toggleClass('is-active');
		menuItems.toggleClass('hidden');
	});

	menuItems.click(function() {
		hamburger.toggleClass('is-active');
		menuItems.toggleClass('hidden');
	});
   
});

