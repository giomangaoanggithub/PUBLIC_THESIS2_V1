$("#search-room-btn").click(function () {
  document.getElementById("shadow").style.display = "block";
  document.getElementById("search-room-position").style.display = "block";
});
$("#exit-search-room").click(function () {
  document.getElementById("shadow").style.display = "none";
  document.getElementById("search-room-position").style.display = "none";
});
$("#rooms-btn").click(function () {
  document.getElementById("shadow").style.display = "block";
  document.getElementById("rooms-position").style.display = "block";
});
$("#exit-rooms").click(function () {
  document.getElementById("shadow").style.display = "none";
  document.getElementById("rooms-position").style.display = "none";
});
$("#logout-btn").click(function () {
  window.location.href = 'page_sign-in-up.php';
});

function page_start(){
  $.get(
    "zerver_greet_user.php",
    function(data){
      if(data.length == 11){
        alert("Warning no user found.");
        window.location.href = 'page_sign-in-up.php';
      } else {
        alert(data);
      }
    }
  );
}

page_start();