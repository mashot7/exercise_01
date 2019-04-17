let output = document.getElementById("output");

// Function for submiting data from form
function submitData(fdata) {
  let xhr = new XMLHttpRequest();
  xhr.open(fdata.method, fdata.action, true);
  xhr.onprogress = function() {
    output.innerHTML = `Loading...`;
  };
  xhr.onload = function() {
    if (xhr.status == 200) {
      output.innerHTML = xhr.responseText;
    }
  };
  xhr.send(new FormData(fdata));
  return false;
}
