function home() {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
      document.getElementById("demo").innerHTML =
      xhttp.responseText;
    }
    xhttp.open("GET", "./PHP/home.php");
    xhttp.send();
  }