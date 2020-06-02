/*

	Author: Steven Galvin

	Date: 05/26/2020

	Purpose: Slideshow Module

*/

// Define module

function slideshowModule() {

    // Assign Variables

    let slideIndex = 1;
    let next = $('.next');
    let previous = $('.previous');

    // Show first slide

    showSlides(slideIndex)

    // Advance one slide

    next.click(function() {
        showSlides(slideIndex += 1);
    });

    // Go back a slide

    previous.click(function() {
        showSlides(slideIndex += -1);
    });

    // Show slide function

    function showSlides(index) {
        let i = 0;
        let slides = $(".slides");
        
        if (index > slides.length) {
            slideIndex = 1
        }    
        if (index < 1) {
            slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
            $(slides[i]).css("display", "none");  
        }
        $(slides[slideIndex-1]).css("display", "inline-block");
      }
}

// Export module

export { slideshowModule }