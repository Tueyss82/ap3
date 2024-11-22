"use strict";
getRequete = new XMLHttpRequest();

getRequete.onload = function(){

    getRequete.open("GET","http://publicom.local/gestion_panneaux");
    getRequete.send();
}
