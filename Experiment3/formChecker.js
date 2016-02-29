var user, pass1, pass2, val1, val2, val4;

function refresh() {
  window.location.reload();
}

function isInt(value) {
  if ((value % 1) == 0) {
    return true;
  }
  else {
    return false;
  }
}

function verify() {
  val1 = document.getElementById("bat").value;
  val2 = document.getElementById("mitt").value;
  val3 = document.getElementById("ball").value;
  user = document.getElementById("username").value;
  pass1 = document.getElementById("password").value;
  pass2 = document.getElementById("reenter").value;

  if (val1 == "" || val2 == "" || val3 == "") {
    alert("None of the fields can be empty. Please enter a value for each box.");
    return false;
  }
  else if (!isInt(val1) || !isInt(val2) || !isInt(val3)) {
    alert("Entered value must be an number.");
    return false;
  }

  if (pass1.length < 8) {
    alert("Password must be at least 8 characters long.");
    return false;
  }
  else {
    if (pass1 != pass2) {
      alert("The passwords do not match.");
      return false;
    }
    else {
      return true;
    }
  }
}
