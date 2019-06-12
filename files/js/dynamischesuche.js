function suchVorschlaege(eingabe){
  var xmlhttp = new XMLHttpRequest();
  var elem = document.getElementById("suchVorschlaege");
  var content;

  if(eingabe == ""){
    elem.innerHTML = ""; return;
  }

  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      elem.innerHTML = this.responseText;
      var artikel = JSON.parse(this.responseText);
      content = "<table>";
      for(i in artikel){
        content += `<tr><td onclick='pasteName("${artikel[i].Name}")'>` + artikel[i].Name + "</td></tr>";
      }
      content += "</table>";
      elem.innerHTML = content;
    }
  };
  xmlhttp.open("GET", "create_json.php?q="+eingabe, true);
  xmlhttp.send();
}

function pasteName(name){
  document.getElementById("search").value = name;
  suchVorschlaege("");
}