window.onload = function () {

    var xmlhttp = new XMLHttpRequest();
    var url = "db_connect.php";

    xmlhttp.onreadystatechange=function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            myFunction(xmlhttp.responseText);
        }
    };
    xmlhttp.open("GET", url, true);
    xmlhttp.send();

    function myFunction(response) {
        var arr = JSON.parse(response);
        var i;
        var out = "<table>";

        for (i = 0; i < arr.length; i++) {
            var t = arr[i].Date.split("-");
            for(el = 0; el < t.length; el++){
                if(t[el].indexOf('0') == 0){
                    t[el] = t[el].substr(1);
                }
            }

            var table = document.getElementsByClassName("b-calendar__tb");
            for(var tab_count = 0; tab_count < table.length; tab_count++) {
                var trList = table[tab_count].getElementsByTagName('tr');
                for (var row_count = 0; row_count < trList.length; row_count++) {
                    var tdList = trList[row_count].getElementsByTagName('td');
                    for (var cell_count = 0; cell_count < tdList.length; cell_count++) {
                        if(tdList[cell_count].getElementsByTagName('div')[0]){
                            if(tdList[cell_count].getElementsByTagName('div')[0].innerHTML == t[2] && tab_count+1 == t[1] && document.getElementById('cur_year').innerHTML == t[0]){
                                tdList[cell_count].style.backgroundColor = '#CCC';
                                tdList[cell_count].setAttribute('title', arr[i].Caption);
                            }
                        }
                    }
                }
            }
            out += "<tr><td>" +
                arr[i].Date +
                "</td><td>" +
                arr[i].Caption +
                "</td></td>";
        }
        out += "</table>";
        document.getElementById("id01").innerHTML = out;
    }
};
