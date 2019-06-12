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

function suchVorschlaege(eingabe){
  var xmlhttp = new XMLHttpRequest();
  var elem = document.getElementById("suchVorschlaege");
  var content;

  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      elem.innerHTML = this.responseText;
      var artikel = JSON.parse(this.responseText);
      content = "<table>";
      for(i in artikel){
        content += "<tr><td>" + artikel[i].Name + "</td></tr>";
      }
      content += "</table>";
      elem.innerHTML = content;
    }
  };
  xmlhttp.open("GET", "create_json.php?q="+eingabe, true);
  xmlhttp.send();
}