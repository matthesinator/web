var btn_zuklappbar = document.getElementsByClassName("pfeil-d");
for (var i = 0; i < btn_zuklappbar.length; i++) {
  btn_zuklappbar[i].addEventListener("click", function () {
    console.log(this);
    if(this.classList.contains("pfeil-d")){
      this.classList.remove("pfeil-d");
      this.classList.add("pfeil-r");
    } else {
      this.classList.remove("pfeil-r");
      this.classList.add("pfeil-d");
    }
    console.log(this);
    lern_inhalt = this.parentNode.nextElementSibling;
    if (lern_inhalt.classList.contains("hidden")) {
      lern_inhalt.classList.remove("hidden");
    } else {
      lern_inhalt.classList.add("hidden");
    }
  });
}

var cookie = document.getElementById("cookie-button");
cookie.addEventListener("click", function() {
  document.getElementById("cookie").classList.add("hidden");
});
