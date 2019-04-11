var boton2 = document.getElementById("btn_field2");
boton2.addEventListener("click", hide2);
function hide2(e) {
    e.preventDefault();
    var form1 = document.getElementById("field1");
    var form2 = document.getElementById("field2");
    var form3 = document.getElementById("field3");
    document.getElementById("btn_field1").disabled=false;
    document.getElementById("btn_field2").disabled=true;
    document.getElementById("btn_field3").disabled=false;
    form2.style.display = "block";
    form1.style.display = "none";
    form3.style.display = "none";

}

var boton3 = document.getElementById("btn_field3");
boton3.addEventListener("click", hide3);
function hide3(e) {
    e.preventDefault();
    var form1 = document.getElementById("field1");
    var form2 = document.getElementById("field2");
    var form3 = document.getElementById("field3");
    document.getElementById("btn_field1").disabled=false;
    document.getElementById("btn_field2").disabled=false;
    document.getElementById("btn_field3").disabled=true;
    form3.style.display = "block";
    form1.style.display = "none";
    form2.style.display = "none";

}

var boton1 = document.getElementById("btn_field1");
boton1.addEventListener("click", hide1);
function hide1(e) {
    e.preventDefault();
    var form1 = document.getElementById("field1");
    var form2 = document.getElementById("field2");
    var form3 = document.getElementById("field3");
    document.getElementById("btn_field1").disabled=true;
    document.getElementById("btn_field2").disabled=false;
    document.getElementById("btn_field3").disabled=true;
    form1.style.display = "block";
    form2.style.display = "none";
    form3.style.display = "none";

}