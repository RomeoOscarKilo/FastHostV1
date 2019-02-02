$(document).ready(function(){

  $("#tableSearch").on("keyup", function() {

    var value = $(this).val().toLowerCase();

    $("#interestTable tr").filter(function() {

      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)

    });
  });
}); //w3 schools helped with this
