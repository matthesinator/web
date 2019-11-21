var btn_zuklappbar = document.getElementsByClassName("collapsible");
for (var i = 0; i < btn_zuklappbar.length; i++) {
  btn_zuklappbar[i].addEventListener("click", function () {
    lern_inhalt = this.nextElementSibling;
    console.log(this);
    console.log(lern_inhalt);
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
