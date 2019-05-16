<!DOCTYPE html>
<html>
    <head>
        <title>Hier Registrieren</title>
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/register-style.css">
        <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
        <meta charset="utf-8"> 
        <script type="text/javascript">

            var fehlermeldung = "";

            function checkEmail(){
                if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(registrieren.email.value)){
                        return true;
                }
                else{
                    fehlermeldung += "Bitte geben Sie eine gültige Email Adresse ein\n"
                    return (false)
                }
            }

            function checkformular()
            {                       
                if(document.registrieren.name.value == "") {
                    fehlermeldung += "Bitte geben Sie Ihren Namen ein\n";
                    // document.registrieren.name.focus();
                }
                if(document.registrieren.vorname.value == ""){
                    fehlermeldung += "Bitte geben Sie Ihren Voramen ein\n";
                }
                if(document.registrieren.email.value == ""){
                    fehlermeldung += "Bitte geben Sie Ihre E-Mail Adresse ein\n";
                }
                else{
                    checkEmail();
                }                             
                if(document.registrieren.strassehnr.value == ""){
                    fehlermeldung += "Bitte geben Sie Ihre Straße und Hausnummer ein\n";
                }
                if(document.registrieren.plz.value == "")  {
                    fehlermeldung += "Bitte geben Sie Ihre PLZ ein\n";
                }
                if(document.registrieren.ort.value == "")  {
                    fehlermeldung += "Bitte geben Sie Ihren Ort ein\n";
                }
                if(document.getElementById("agb").checked == false)  {
                    fehlermeldung += "Bitte akzeptieren Sie die AGB\n";
                }
                if(fehlermeldung.length > 0){
                    alert(fehlermeldung);
                }
            }
        </script>
    </head>
    <body>

        <?php include "header.php" ?>
        
        <main>
            <a href="index.php">&lt;&lt;&nbsp;Zurück zu unserem Angebot</a>
            <h1>Hi ich bin Stefan, du kannst dich hier Registrieren</h1>
            <form name="registrieren">
            <table>
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="name" placeholder="Name"><br></td>
                </tr>
                <tr>
                    <td>Vorname</td>
                    <td><input type="text" name="vorname" placeholder="Vorname"><br><td>
                </tr>
                <tr>
                    <td>E-Mail</td>
                    <td><input type="text" name="email" placeholder="E-Mail"><br><br></td>
                </tr>
                <tr>
                    <td>Straße und Hnr</td>
                    <td><input type="text" name="strassehnr" placeholder="Straße Hnr"><br></td>
                </tr>
                <tr>
                    <td>PLZ</td>
                    <td><input type="text" name="plz" placeholder="PLZ"><br></td>
                </tr>
                <tr>
                    <td>Ort</td>
                    <td><input type="text" name="ort" placeholder="Ort"><br></td>
                </tr>
            </table>
            <input type="radio" id="agb" name="AGB" value="AGB">
            <label for="agb">AGB bestätigen</label><br><br>
            <button type="button" onclick="checkformular()">Kostenpflichtig Registrieren</button>
            </form>
        </main>

        <?php include "footer.php" ?>

    </body>
</html>