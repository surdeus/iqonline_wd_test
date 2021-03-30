function updateNumberByRange (rangeId) {
	document.getElementById(rangeId).value =
		document.getElementById(rangeId+"-range").value ;
}

function loadCalculation() {
  var formEl = document.querySelector("form")
  var req = new XMLHttpRequest() ;
  req.onreadystatechange = function () {
    document.getElementById("calculation").innerHTML = this.responseText ;
  }
  req.open("POST", "calc.php", true);
  req.send(new FormData(formEl));
}