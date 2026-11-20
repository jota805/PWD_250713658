var suhuC = prompt("Masukkan suhu dalam Celcius (°C):");

if (suhuC != null && suhuC != "") {
    var suhuF = (suhuC * 9/5) + 32;
    alert(suhuC + " °C sama dengan " + suhuF + " °F");
}