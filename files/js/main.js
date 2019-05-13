function show_description(Bescreibung)
{
    obj = document.getElementById('Beschreibung1');
    if(obj.style.display=='none'){
        obj.style.display='block';
    } else{
        obj.style.display='none';
    }
}
// $(document).ready(function(){
//     $('.artikel').on('click', function(){
//         $(this).find('ul #Beschreibung1').addClass("beschreibung1-2");
//     })
// })