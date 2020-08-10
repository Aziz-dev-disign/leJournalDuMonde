/**
 * Js permet d'afficher le contenu au click
 */


$(document).ready(function() {
    $('.contenu').hide();
    $('.slug').click(function(){
        $('.contenu').show()
    });
});