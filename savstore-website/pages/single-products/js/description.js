function openDesc(desc) {
  var i;
  var x = document.getElementsByClassName("desc");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  document.getElementById(desc).style.display = "block";
}

var desdet = $(".changeitem");

desdet.on("click", function() {
	
	desdet.removeClass("active")
	$(this).addClass("active");

})
