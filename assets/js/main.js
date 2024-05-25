function showval() {
    //Gathering Data
    var x = document.getElementById("opt").selectedIndex;
    var y = document.getElementById("opt").options;
    var f = y[x].index;
    console.log(f);
    var text;

    if (f == 0) {
        text = "<input style='text-align: center;' class='form-control' placeholder='Date' size='25' type='date' id='fn'  name='inputss'>"
    }
    if (f == 1) {
        text = "<input style='text-align: center;' class='form-control' placeholder='Writer Name' size='25' type='text' id='fn' maxlength='100' name='inputss'>"
    }
    if (f == 2) {
        text = "<input style='text-align: center;' class='form-control' placeholder='Heading' size='25' type='text' id='fn' maxlength='100' name='inputss'>"
    }

    document.getElementById("resultshown").innerHTML = text;
}