let output = document.getElementById("output");

// Function for submiting data from form
function submitData(fdata) {
  let xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    jData(xhttp);
  };
  xhttp.open(fdata.method, fdata.action, true);
  xhttp.send(new FormData(fdata));

  // console.log();
  return false;
}

// Function for taking result and writing it asynchronous
function jData(xhttp) {
  let ajaxhttp = new XMLHttpRequest();
  ajaxhttp.open("GET", "", true);
  ajaxhttp.setRequestHeader("content-type", "application/json");
  ajaxhttp.onreadystatechange = function() {
    output.innerHTML = `Empty`;
    if (ajaxhttp.readyState == 4 && ajaxhttp.status == 200) {
      output.innerHTML = xhttp.responseText;
    }
  };
  ajaxhttp.send();
}
