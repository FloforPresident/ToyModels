
alert('<?php echo $variabel; ?>');

$(document).ready(function(){
    $('#artikel1').on('click', function(){
        var beschreibung = $('.artikel ul .beschreibung');
        if(beschreibung.hasClass("hidden")){
            beschreibung.removeClass("hidden");
        }
        else{
            beschreibung.addClass("hidden");
        }
    })
})