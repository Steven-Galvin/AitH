/*

	Author: Steven Galvin

	Date: 05/27/2020

	Purpose: Hamburger Menu Module

*/

// Define module

function hamburgerModule() {

    // Define variables

	const hamburger = $('.hamburger');
    const menuItems = $('#menu-items');
    
    // Show menu and animate hamburger menu

	hamburger.click(function() {
		hamburger.toggleClass('is-active');
		menuItems.toggleClass('hidden');
    });
    
    // Hide menu and animate hamburger menu

	menuItems.click(function() {
		hamburger.toggleClass('is-active');
		menuItems.toggleClass('hidden');
	});
}

// Export module

export { hamburgerModule };