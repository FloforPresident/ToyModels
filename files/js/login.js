function loggingIn(form)
{
    if(form.kundennummer.value == "1")
    {
        window.open('welcome.php');
    }
    else
    {
        alert("Wrong ID")
    }

}

