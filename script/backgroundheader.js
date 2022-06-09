switch(window.location.pathname){
    case '/manuescript/view/index.php':
        document.getElementById("bgHeader").id = "" ;
        break;

    case '/manuescript/view/prestations.php':
        document.getElementById("bgHeader").id = "prestations" ;
        break;

    case '/manuescript/view/mon-histoire.php':
        document.getElementById("bgHeader").id = "monHistoire" ;
        break;
}

