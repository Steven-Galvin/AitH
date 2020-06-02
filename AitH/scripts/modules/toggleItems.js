/*

	Author: Steven Galvin

	Date: 05/28/2020

	Purpose: Toggle FAQ Answers Module

*/

function toggleItems(cause, effect) {
    cause.click(function () {
        let effectIndex = cause.index(this);

        if ($(effect[effectIndex]).is(':visible')) {
            $(effect).css('display', 'none');
        } else {
            $(effect).css('display', 'none');
            $(effect[effectIndex]).css('display', 'block');
        }
    });
}

function toggleFAQ() {
    let questions = $('.faq-question');
    let answers = $('.faq-answer');

    toggleItems(questions, answers);

    // questions.click(function () {
    //     $(answers).css('display', 'none');
    //     let answerIndex = questions.index(this);
    //     $(answers[answerIndex]).css('display', 'block');
    // });
}

function toggleCourseDetails() {
    let titles = $('.detail-title');
    let descriptions = $('.detail-description');

    toggleItems(titles, descriptions);

    // titles.click(function () {
    //     $(descriptions).css('display', 'none');
    //     let descriptionIndex = titles.index(this);
    //     $(descriptions[descriptionIndex]).css('display', 'block');
    // });
}

export { toggleFAQ, toggleCourseDetails };