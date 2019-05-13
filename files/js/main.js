$(document).ready(function(){
    $('.artikel').on('click', function(){
        var beschreibung = $(this).find('ul .beschreibung');
        if(beschreibung.hasClass("hidden")){
            beschreibung.removeClass("hidden");
        }
        else{
            beschreibung.addClass("hidden");
        }

        
    })
})