// $(document).ready(function()
//         {
//             $('#search').keyup(function()
//             {
//                 if($(this).val().length >= 3)
//                 {
//                     $.get("suche.php", {search: $(this).val()}, function(data)
//                     {
//                         $("#results").html(data);
//                     });
//                 }
//             });
//         });

var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
    var artikel = JSON.parse(this.responseText);
    console.log(artikel);
  }
};
xmlhttp.open("GET", "create_json.php", true);
xmlhttp.send();