
// $(document).ready(function(){
//     $('#artikel1').on('click', function(){
//         var beschreibung = $('.artikel ul .beschreibung');
//         if(beschreibung.hasClass("hidden")){
//             beschreibung.removeClass("hidden");
//         }
//         else{
//             beschreibung.addClass("hidden");
//         }
//     })
// })
//Beschreibung ausklappen
// function showDescription(element){
//     element.ch
//     element.classList.remove('hidden');
    // if(element.classList.contains("hidden")){
    //     element.classList.remove("hidden");
    // }
    // else{
    //     element.classList.add("hidden");
    // }
// }

//Formularvalidierung Anmelden
function checkkid(){
    if(isNaN(document.login.kid.value) || document.login.kid.value == "") {
       alert("Bitte geben Sie eine gültige Kundennummer ein");
       document.login.kid.classList.add("inputinvalid");
       return false;
   }else{
       if(document.login.kid.classList.contains("inputinvalid")){
        document.login.kid.classList.remove("inputinvalid");
       return true;
       }
    }
}


//Formularvalidierung auf Registrieren Seite
var fehlermeldung = "";

function checkEmail(){
    if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(registrieren.email.value)){
        document.registrieren.email.classList.remove("inputinvalid");    
        return true;
    }
    else{
        fehlermeldung += "Bitte geben Sie eine gültige Email Adresse ein\n"
        document.registrieren.email.classList.add("inputinvalid");
        return (false)
    }
}

function checkformular()
{
    fehlermeldung = "";
    if(document.registrieren.name.value == "") {
        fehlermeldung += "Bitte geben Sie Ihren Namen ein\n";
        document.registrieren.name.classList.add("inputinvalid");
    }else{
        if(document.registrieren.name.classList.contains("inputinvalid")){
            document.registrieren.name.classList.remove("inputinvalid");
        }
    }
    if(document.registrieren.vorname.value == ""){
        fehlermeldung += "Bitte geben Sie Ihren Voramen ein\n";
        document.registrieren.vorname.classList.add("inputinvalid");
    }else{
        if(document.registrieren.vorname.classList.contains("inputinvalid")){
            document.registrieren.vorname.classList.remove("inputinvalid");
        }
    }
    if(document.registrieren.email.value == ""){
        fehlermeldung += "Bitte geben Sie Ihre E-Mail Adresse ein\n";
        document.registrieren.email.classList.add("inputinvalid");
    }
    else{
        checkEmail();
    }
    if(document.registrieren.strassehnr.value == ""){
        fehlermeldung += "Bitte geben Sie Ihre Straße und Hausnummer ein\n";
        document.registrieren.strassehnr.classList.add("inputinvalid");
    }else{
        document.registrieren.strassehnr.classList.remove("inputinvalid");
    }
    if(document.registrieren.plz.value == "")  {
        fehlermeldung += "Bitte geben Sie Ihre PLZ ein\n";
        document.registrieren.plz.classList.add("inputinvalid");
    }else{
        document.registrieren.plz.classList.remove("inputinvalid");
    }
    if(document.registrieren.ort.value == "")  {
        fehlermeldung += "Bitte geben Sie Ihren Ort ein\n";
        document.registrieren.ort.classList.add("inputinvalid");
    }else{
        document.registrieren.ort.classList.remove("inputinvalid");
    }
    if(document.getElementById("agb").checked == false)  {
        fehlermeldung += "Bitte akzeptieren Sie die AGB\n";
        document.registrieren.agb.classList.add("inputinvalid");
    }else{
        document.registrieren.agb.classList.remove("inputinvalid");
    }
    if(fehlermeldung.length > 0){
        alert(fehlermeldung);
    }
}

function alertID()
{
    alert("Wrong ID")
}