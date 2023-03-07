const stylesheet = document.documentElement.style;

const toggle = document.querySelector(".switch__input[data-theme-toggle]");
toggle.addEventListener("click", () => {
  // get the css variables
  const color1 = getComputedStyle(document.documentElement).getPropertyValue(
    "--color-1"
  );
  const color2 = getComputedStyle(document.documentElement).getPropertyValue(
    "--color-2"
  );

  // switching the css variables
  stylesheet.setProperty("--color-1", color2);
  stylesheet.setProperty("--color-2", color1);
});
function note() {
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    document.getElementById("demo").innerHTML =
    xhttp.responseText;
  }
  xhttp.open("GET", "./PHP/NOTE/note.php"); 
  xhttp.send();
}
function outcome() {
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    document.getElementById("demo").innerHTML =
    xhttp.responseText;
  }
  xhttp.open("GET", "./PHP/outcome/outcome.php"); 
  xhttp.send();
}
function notePad() {
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    document.getElementById("note_pad").innerHTML =
    xhttp.responseText;
  }
  xhttp.open("GET", "./note_page.php");
  xhttp.send();
}
alert('hello');
