$(document).ready(function(){
  //closes the images on page load
  $("#pane1").fadeToggle("fast");
  $("#pane2").fadeToggle("fast");
  $("#pane3").fadeToggle("fast");
//The section below are listeners for image clicks or div clicks
  $("#team1").click(function(){
    $("#pane1").fadeToggle("slow");
  });
  $("#team2").click(function(){
    $("#pane2").fadeToggle("slow");
  });
  $("#team3").click(function(){
    $("#pane3").fadeToggle("slow");
  });
  $("#teamimage").click(function(){
    $("#pane1").fadeToggle("slow");
  });
  $("#teamimage2").click(function(){
    $("#pane2").fadeToggle("slow");
  });
  $("#teamimage3").click(function(){$("#pane3").fadeToggle("slow");
  });

}


);
