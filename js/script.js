var url2 = "js/leeJugadores.php";

var xmlhttp2 = new XMLHttpRequest();
xmlhttp2.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        var documentJson2 = JSON.parse(this.responseText);
        arrayG = documentJson2;   
        myFunction(arrayG["jugadores"]);
    }
}
xmlhttp2.open("GET", url2, true);
xmlhttp2.send();

function myFunction(arrG) {

}