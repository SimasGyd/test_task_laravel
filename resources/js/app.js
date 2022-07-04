import './bootstrap';

$(document).ready(function () {
    let pageNumber = $('.js-answer-id').attr('data-id');
    let testId = $('.js-test-id').val();
    let savedAnswer = localStorage.getItem(pageNumber);
    let storageLength = localStorage.length;


    if (Object.keys(localStorage).length >= 10) {
        $('.js-submit-form').attr('disabled', false);
    }

    if (pageNumber && savedAnswer) {
        console.log(pageNumber, savedAnswer);
        $('#answer' + savedAnswer).prop('checked', true);
    }

    $('.js-next-button').on('click', function (event) {
        let radioValue = $('input[name="answerId"]:checked').val();

        if (radioValue && pageNumber) {
            localStorage.setItem(pageNumber, radioValue);
        }

        localStorage.setItem('testId', testId);

        if (!radioValue) {
            event.preventDefault();
            alert('Please select answer');
        }
        // Object.keys(localStorage).forEach((key) => {
        //     if ($.isNumeric(key)) {
        //         let value = JSON.parse(localStorage.getItem(key))
        //         $('.js-answers').prepend('' +
        //             '<input type="hidden" id="' + key + '" value="' + value + '" name="answerIds[]">');
        //     }
        // });
        // event.preventDefault();
    });

    // $('.js-click-me').on('click', function () {
    //     console.log(111);
    //
    // })

    $('form').on('submit', function () {
        Object.keys(localStorage).forEach((key) => {
            if ($.isNumeric(key)) {
                let value = JSON.parse(localStorage.getItem(key))
                $('.js-answers').prepend('' +
                    '<input type="hidden" id="' + key + '" value="' + value + '" name="answerIds[]">');
            }
        });

        $('.js-answers input').sort(function(a, b) {
            return parseInt(a.id) - parseInt(b.id);
        }).each(function() {
            let elem = $(this);
            elem.remove();
            $(elem).appendTo('.js-answers');
        });

        localStorage.clear();
    });

    $('.js-restart-session').on('click', function () {
        localStorage.clear();
    })

    if (storageLength) {
        let id = localStorage.getItem('testId')
        let answeredQuestions = storageLength - 1;
        $('.js-unfinished').prepend('' +
            '<div class="card-body">' +
            '<h5 class="card-title">Continue your unfinished test!</h5>' +
            '<p class="card-text">You have unfinished your test ' + answeredQuestions + '/10 questions answered</p>' +
            '<a href="test/' + id + '?page=' + answeredQuestions + '" class="btn btn-primary">Continue</a>' +
            '</div>'
        );
    }

    $('.table-answers tr').each(function (index, cell) {
        let points = $(cell).children('.js-points').attr('data-id');
        let answer = $(cell).children('.js-correct').attr('data-id');

        if (points > 0 && answer > 0) {
            $(cell).css('background-color', 'MediumSeaGreen');
        }
        if (points < 1 && answer > 0) {
            $(cell).css('background-color', 'LightCoral');
        }
        if (points > 0 && answer < 1) {
            $(cell).css('background-color', 'LightYellow');
        }
    })

});





