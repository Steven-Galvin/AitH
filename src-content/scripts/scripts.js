/*

	Author: Steven Galvin

	Date: 04/23/2020

	Purpose: Main Scripts

*/

// Import modules

import { hamburgerModule } from './modules/hamburger.js';
import { slideshowModule } from './modules/slideshow.js';
import { toggleFAQ, toggleCourseDetails } from './modules/toggleItems.js';


$(document).ready(function () {

	hamburgerModule();
	slideshowModule();
	toggleFAQ();
	toggleCourseDetails();

});

