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

    .pointer {
        cursor: pointer;
    }
    
    article {
        margin-left: 20px;
        border-left: 1px solid gray;
        padding: 2em;
        overflow: hidden;
    }

    .jumbotron {
        background-color: #007ee2;
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
<b>
    <div class="jumbotron text-center">
        <h1 class="text-center text-white">BunnyCorp Enrichment Centre<img src="img/img_avatar.png" alt="Avatar"
                                                                           class="avatar"></h1>
        <h5 class="text-center text-white">Topic Information <div class="col-md-0 text-left">
                <a href="userHome.php" class="btn btn-secondary">Back</a>
            </div></h5>

    </div>

    <div class="d-flex flex-row">
        <article id=MVCA>
            <h5>Model View Controller Design Pattern</h5>
            <p>Model–view–controller is commonly used for developing software that divides an application into three
                interconnected parts.</p>
            <p>This is done to separate internal representations of information from the ways information is presented
                to and accepted from the user. The MVC design pattern decouples these major components allowing for
                efficient code reuse and parallel development.</p>
            <p id="MVCmoreInfo"></p>
            <h6 class="pointer" c style="color:#43c0ff;" id="MVCLabel" onclick="viewMoreMVC()">See more
                information.</h6>
        </article>

        <article id=TSA>
            <h5>Templating System</h5>
            <p>A web template system is used in web publishing to allow web designers and developers to work with web
                templates for the automatic generation of custom web pages, such as the results from a search. </p>
            <p>This allows for reuse of the static elements of a web page, while allowing the dynamic elements to be
                defined based on the parameters of the web request.</p>
            <p id="TSmoreInfo"></p>
            <h6 class="pointer" c style="color:#43c0ff;" id="TSALabel" onclick="viewMoreTS()">See more information.</h6>
        </article>

        <article id=SWAA>
            <h5>Security in Web Applications</h5>
            <p>SQL Injection (SQLi) refers to an injection attack wherein an attacker can execute malicious SQL
                statements that control a web application’s database server.</p>
            <p>Since an SQL Injection vulnerability could possibly affect any website or web application that makes use
                of an SQL-based database, the vulnerability is one of the oldest, most prevalent and most dangerous of
                web application vulnerabilities.</p>
            <p id="SWAmoreInfo"></p>
            <h6 class="pointer" c style="color:#43c0ff;" id="SWALabel" onclick="viewMoreSWA()">See more
                information.</h6>
        </article>
    </div>

    <script>
        function viewMoreMVC() {
            var item = document.getElementById("MVCA").childNodes[9];
            var labelNode2 = document.createTextNode("See more information");
            var node = document.createElement("P");
            var textNode = document.createTextNode("This has been implemented within the webpage using images, PHP files and separates PHP from the HTML");
            var labelNode = document.createTextNode("See less information");
            node.appendChild(textNode);
            if (item.id === "MVCLabel") {
                document.getElementById("MVCmoreInfo").appendChild(node);
                item.replaceChild(labelNode, item.childNodes[0]);
                item.id = "showLessLabel";
            } else if (item.id === "showLessLabel") {
                item.replaceChild(labelNode2, item.childNodes[0]);
                item.id = "MVCLabel";
                var parent = document.getElementById("MVCA");
                var child = document.getElementById("MVCmoreInfo");
                parent.removeChild(child);
            }
        }
    </script>


    <script>
        function viewMoreTS() {
            var item = document.getElementById("TSA").childNodes[9];
            var labelNode2 = document.createTextNode("See more information");
            var node = document.createElement("P");
            var textNode = document.createTextNode("This has been implemented by using PHP to change elements of the webpage");
            var labelNode = document.createTextNode("See less information");
            node.appendChild(textNode);
            if (item.id === "TSALabel") {
                document.getElementById("TSmoreInfo").appendChild(node);
                item.replaceChild(labelNode, item.childNodes[0]);
                item.id = "showLessLabel";
            } else if (item.id === "showLessLabel") {
                item.replaceChild(labelNode2, item.childNodes[0]);
                item.id = "TSALabel";
                var parent = document.getElementById("TSA");
                var child = document.getElementById("TSmoreInfo");
                parent.removeChild(child);
            }
        }
    </script>


    <script>
        function viewMoreSWA() {
            var item = document.getElementById("SWAA").childNodes[9];
            var labelNode2 = document.createTextNode("See more information");
            var node = document.createElement("P");
            var textNode = document.createTextNode("This has been implemented by sanitising input data validating data types, length, format and range. ");
            var labelNode = document.createTextNode("See less information");
            node.appendChild(textNode);
            if (item.id === "SWALabel") {
                document.getElementById("SWAmoreInfo").appendChild(node);
                item.replaceChild(labelNode, item.childNodes[0]);
                item.id = "showLessLabel";
            } else if (item.id === "showLessLabel") {
                item.replaceChild(labelNode2, item.childNodes[0]);
                item.id = "SWALabel";
                var parent = document.getElementById("SWAA");
                var child = document.getElementById("SWAmoreInfo");
                parent.removeChild(child);
            }
        }
    </script>

</html>


