import './bootstrap';

$(document).ready(function() {

    $('.js-next-button').on('click', function() {
        $.session.set("myVar", "Hello World!");
    });

    $('.js-previous-button').on('click', function(){
        alert($.session.get("myVar"));
    });
})
