<?php
session_start();
if (!$_SESSION['isLogged']) {
    header("location:index.php");
    die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
</head>
<style>

    table th, tr {
        width: 10%;
        height: 65%;
    }

    .jumbotron {
        background-color: #61baed;
    }

    img.avatar {
        width: 9%;
        border-radius: 10%;
    }

    button {
        padding: 8px;
        margin: 9px 0;
        border: none;
        cursor: pointer;
        width: 35%;
    }
</style>
<body>
<div class="jumbotron text-center">
    <h1 class="text-center text-white">BunnyCorp Enrichment Centre<img src="img/img_avatar.png" alt="Avatar"
                                                                       class="avatar"></h1>
    <h5 class="text-center text-white">Course Information</h5>
    <div class="col-md-0 text-left">
        <a href="userHome.php" class="btn btn-secondary">Back</a>
    </div>
</div>
<p>


<div class="col-md-0 text-center">
    <a class="btn btn-primary" onclick="loadDoc1()">HND Software Development</a>
    <a class="btn btn-primary" onclick="loadDoc2()">HND Networking</a>
    <a class="btn btn-primary" onclick="loadDoc3()">HND Technical Support</a>
</div>
</p>
</body>


</html>
<table id="courseInfo"></table>
<script>
    function loadDoc1() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                myFunction(this);
            }
        };
        xhttp.open("GET", "docs/SoftDevUnits.xml", true);
        xhttp.overrideMimeType('text/xml');
        xhttp.send();
    }

    function myFunction(xml) {
        var i;
        var xmlDoc = xml.responseXML;
        var table = "<tr><th>Unit Number</th><th>Course Title</th><th>Credit Value</th></tr>";
        table.style = "padding:50px"
        var x = xmlDoc.getElementsByTagName("unit");
        for (i = 0; i < x.length; i++) {
            table += "<tr><td>" +
                x[i].getElementsByTagName("unitnumber")[0].childNodes[0].nodeValue +
                "</td><td>" +
                x[i].getElementsByTagName("title")[0].childNodes[0].nodeValue +
                "</td><td>" +
                x[i].getElementsByTagName("creditvalue")[0].childNodes[0].nodeValue +
                "</td></tr>";
        }
        document.getElementById("courseInfo").innerHTML = table;
    }
</script>

<table id="courseInfo"></table>
<script>
    function loadDoc2() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                myFunction(this);
            }
        };
        xhttp.open("GET", "docs/NetworkingUnits.xml", true);
        xhttp.overrideMimeType('text/xml');
        xhttp.send();
    }

    function myFunction(xml) {
        var i;
        var xmlDoc = xml.responseXML;
        var table = "<tr><th>Unit Number</th><th>Course Title</th><th>Credit Value</th></tr>";
        var x = xmlDoc.getElementsByTagName("unit");
        for (i = 0; i < x.length; i++) {
            table += "<tr><td>" +
                x[i].getElementsByTagName("unitnumber")[0].childNodes[0].nodeValue +
                "</td><td>" +
                x[i].getElementsByTagName("title")[0].childNodes[0].nodeValue +
                "</td><td>" +
                x[i].getElementsByTagName("creditvalue")[0].childNodes[0].nodeValue +
                "</td></tr>";
        }
        document.getElementById("courseInfo").innerHTML = table;
    }
</script>

<table id="courseInfo"></table>
<script>
    function loadDoc3() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                myFunction(this);
            }
        };
        xhttp.open("GET", "docs/TechSuppUnits.xml", true);
        xhttp.overrideMimeType('text/xml');
        xhttp.send();
    }

    function myFunction(xml) {
        var i;
        var xmlDoc = xml.responseXML;
        var table = "<tr><th>Unit Number</th><th>Course Title</th><th>Credit Value</th></tr>";
        var x = xmlDoc.getElementsByTagName("unit");
        for (i = 0; i < x.length; i++) {
            table += "<tr><td>" +
                x[i].getElementsByTagName("unitnumber")[0].childNodes[0].nodeValue +
                "</td><td>" +
                x[i].getElementsByTagName("title")[0].childNodes[0].nodeValue +
                "</td><td>" +
                x[i].getElementsByTagName("creditvalue")[0].childNodes[0].nodeValue +
                "</td></tr>";
        }
        document.getElementById("courseInfo").innerHTML = table;
    }
</script>
