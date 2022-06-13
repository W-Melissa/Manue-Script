switch(window.location.pathname){
    case '/manuescript/view/accueil.php':
        document.getElementById("bgHeader").id = "" ;
        document.getElementById("titlePage").innerHTML="Accueil - Manue'Script";
        break;

    case '/manuescript/view/prestations.php':
        document.getElementById("bgHeader").id = "prestations" ;
        document.getElementById("titlePage").innerHTML="Prestations - Manue'Script";
        break;

    case '/manuescript/view/mon-histoire.php':
        document.getElementById("bgHeader").id = "monHistoire" ;
        document.getElementById("titlePage").innerHTML="Mon histoire - Manue'Script";
        break;

    case '/manuescript/view/contact.php':
        document.getElementById("bgHeader").id = "contact" ;
        document.getElementById("titlePage").innerHTML="Me contacter - Manue'Script";
        break;
}

