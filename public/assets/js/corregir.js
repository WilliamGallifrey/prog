/* var respcorr = document.getElementById("21").value;
var respcorr1 = document.getElementById("22").value;
var respcorr2 = document.getElementById("23").value; */

var respuesta;
var respuestachecked;

function corregirtest(bal){
   /*  if (respcorr = "1") {
        document.getElementById("221").classList.add("borderverde");
    }
    else if (respcorr1 = "1") {
        document.getElementById("222").classList.add("borderverde");
    }
    else if (respcorr2 = "1") {
        document.getElementById("223").classList.add("borderverde");
    }
 */


    for (let i = 1; i < 31; i++) {
        for (let u = 1; u < 4; u++) {
            
            respuesta = document.getElementById("p"+i.toString()+u.toString()).value;
            respuestachecked = document.getElementById("p"+i.toString()+u.toString()).checked.value

            if (respuesta == "1"){
                document.getElementById(i.toString()+i.toString()+u.toString()).classList.add("borderverde");
            }

            console.log(respuestachecked)
            if (respuestachecked == "0"){
                document.getElementById(i.toString()+i.toString()+u.toString()).classList.add("borderrojo");
            }
            
        }
    }
}