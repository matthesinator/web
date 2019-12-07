var btn_zuklappbar = document.getElementsByClassName("hider");
for (var i = 0; i < btn_zuklappbar.length; i++) {
  btn_zuklappbar[i].addEventListener("click", function () {
    pfeil = this.firstChild
    if(pfeil.classList.contains("pfeil-d")){
      pfeil.classList.remove("pfeil-d");
      pfeil.classList.add("pfeil-r");
    } else {
      pfeil.classList.remove("pfeil-r");
      pfeil.classList.add("pfeil-d");
    }
    lern_inhalt = this.nextElementSibling;
    if (lern_inhalt.classList.contains("hidden")) {
      lern_inhalt.classList.remove("hidden");
    } else {
      lern_inhalt.classList.add("hidden");
    }
  });
}

