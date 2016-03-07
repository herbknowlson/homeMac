<html>
<head>
<title>HOME</title>
<h1 id="heading"></h1>

<style>

h1 {
    color:black;
    font-family:verdana;
    font-size:75%;
    opacity: 0.4;
}
h2   {color:blue}

.boldtable
{
font-family:fantasy;
font-size:18pt;
color: black;
opacity: 0.4;
background-color:white;
}
</style>


<script>
//console.log(" - home.php - start");
<?php
//date_default_timezone_set('America/Chicago');
//error_log(date('Y-m-d H:i:s') . " " . "- home.php - start" .  "\n", 3, "E:/xampp/php/logs/execution.log");

?>

function changeIt()
{
  $msg = "- home.php - changeIt()";
  console.log($msg);
  var i = "../../home/img/cs.jpg";
  bg = "url(" + i + ") no-repeat";
  document.getElementById("heading").innerHTML=bg;
  document.body.style.background = bg;
  document.body.style.backgroundSize = 'cover';
}

<?php

  function doSelect()
  {
    //error_log(date('Y-m-d H:i:s') . " " . "- home.php - doSelect()" .  "\n", 3, "E:/xampp/php/logs/execution.log");
    if ($_GET["index"] == "3") {
        date_default_timezone_set('America/Chicago');
        console.log(" - home.php - doSelect() index = 3");
    	exec("E:/xampp/htdocs/Ajax/batchIndexV03.bat " . $_GET["index1"] . " " . $_GET["index2"]);
    	header("Location: index2.php?selection=1");
	} elseif ($_GET["index"] == "4") {
        //date_default_timezone_set('America/Chicago');
        //error_log(date('Y-m-d H:i:s') . " " . "- home.php - doSelect - index = 4" .  "\n", 3, "E:/xampp/php/logs/execution.log");
		exec("E:/xampp/htdocs/home/openLog.bat");
		header("Location: home.php?selection=false");
  	} elseif ($_GET["index"] == "5") {
        date_default_timezone_set('America/Chicago');
        error_log(date('Y-m-d H:i:s') . " " . "- home.php - doSelect - index = 5" .  "\n", 3, "E:/xampp/php/logs/execution.log");
		exec("E:/xampp/htdocs/home/deleteLog.bat");
		header("Location: home.php?selection=false");
	} elseif ($_GET["index"] == "6") {
        date_default_timezone_set('America/Chicago');
        error_log(date('Y-m-d H:i:s') . " " . "- home.php - doSelect - index = 6" .  "\n", 3, "E:/xampp/php/logs/execution.log");
		exec("E:/xampp/htdocs/home/openCmdAjax.bat");
		header("Location: home.php?selection=false");
	} elseif ($_GET["index"] == "7") {
        date_default_timezone_set('America/Chicago');
        error_log(date('Y-m-d H:i:s') . " " . "- home.php - doSelect - index = 7" .  "\n", 3, "E:/xampp/php/logs/execution.log");
		exec("E:/xampp/htdocs/home/openCmdHome.bat");
		header("Location: home.php?selection=false");
    } else {
		error_log(date('Y-m-d H:i:s') . " " . "- home.php - doSelect - index = 1" .  "\n", 3, "E:/xampp/php/logs/execution.log");
    	exec("E:/xampp/htdocs/home/openCmdRule1.bat ");
    	header("Location: home.php?selection=false");
    }
  }

  if (isset($_GET['select'])) {
    //date_default_timezone_set('America/Chicago');
    //error_log(date('Y-m-d H:i:s') . " - home.php - call doSelect()" .  "\n", 3, "E:/xampp/php/logs/execution.log");
    doSelect();
   }
?>

</script>



</head>
<body link="blue" onload="changeIt();">
	
<h2> Current Links</h2>
<p><a href='https://github.com/'>github</a></p>

<h2> Run code</h2>
<p><a href='home.php?select=true&index=7'>open cmd window - home</a></p>
<p><a href='home.php?select=true'>open cmd window - rule1</a></p>
<p><a href='home.php?select=true&index=6'>open cmd window - Ajax</a></p>
<p><a href='home.php?select=true&index=4'>open the log</a></p>
<p><a href='home.php?select=true&index=5'>delete the log</a></p>

<h2> Other</h2>

<input id='password' type='text'  />
<a href='http://localhost/Ajax/home.php' onclick="javascript:return validatePass()">CLICK</a>

<script>
function validatePass(){
    if(document.getElementById('password').value == 'Pass12345'){
        return true;
	    document.getElementById('password').value == '*****'
    }else{
        alert('access denied');
        return false;
    }
}
</script>

</body>
</html>