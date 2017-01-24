/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



function oblicz() {
    var iloscDni = document.getElementById('ileDni');
    var poleSelect = document.getElementById('wybierzGre');
    iloscDni = iloscDni.value;
    iloscDni = parseInt(iloscDni);
    kosztGry = poleSelect.options[poleSelect.selectedIndex].value;
    kosztGry = parseInt(kosztGry);
    koszt.value = iloscDni * kosztGry;
}
