function signinPass() {
  var tipo = document.getElementById("password-in");
  var show = document.getElementById("show-pass-in");
  var hide = document.getElementById("hide-pass-in");
  if (tipo.type == "password") {
    tipo.type = "text";
    show.style.display = "none";
    hide.style.display = "block";
  } else {
    tipo.type = "password";
    show.style.display = "block";
    hide.style.display = "none";
  }
}

function signupPass() {
  var tipo = document.getElementById("password-up");
  var show = document.getElementById("show-pass-up");
  var hide = document.getElementById("hide-pass-up");
  if (tipo.type == "password") {
    tipo.type = "text";
    show.style.display = "none";
    hide.style.display = "block";
  } else {
    tipo.type = "password";
    show.style.display = "block";
    hide.style.display = "none";
  }
}

function signin() {
  document.getElementById("signin").style.display = "none";
  document.getElementById("signup").style.display = "flex";
}

function signup() {
  document.getElementById("signin").style.display = "flex";
  document.getElementById("signup").style.display = "none";
}

function signupPeople() {
  document.getElementById("div-p").style.display = "block";
  document.getElementById("div-f").style.display = "none";
}

function signupField() {
  document.getElementById("div-f").style.display = "block";
  document.getElementById("div-p").style.display = "none";
}
