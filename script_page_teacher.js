$("#cancel-create-room-btn").click(function () {
  document.getElementById("part2").style.display = "none";
  document.getElementById("part3").style.display = "none";
});
$("#create-room-btn").click(function () {
  document.getElementById("part2").style.display = "block";
  document.getElementById("part3").style.display = "block";
});
$("#exit-rooms").click(function () {
  document.getElementById("part2").style.display = "none";
  document.getElementById("part4").style.display = "none";
});
$("#change-room-btn").click(function () {
  document.getElementById("part2").style.display = "block";
  document.getElementById("part4").style.display = "block";
});
$("#exit-created-questions").click(function () {
  document.getElementById("part2").style.display = "none";
  document.getElementById("part5").style.display = "none";
});
$("#created-questions-btn").click(function () {
  document.getElementById("part2").style.display = "block";
  document.getElementById("part5").style.display = "block";
});
$("#cancel-your-students-btn").click(function () {
  document.getElementById("part2").style.display = "none";
  document.getElementById("part6").style.display = "none";
});
$("#your-students-btn").click(function () {
  document.getElementById("part2").style.display = "block";
  document.getElementById("part6").style.display = "block";
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