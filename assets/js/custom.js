$( document ).ready(function() {
    $('.kt-terms_item').on("click", function() {
        $(this).next().slideToggle();
    });
});
