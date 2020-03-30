$(document).ready(function() {
    $('#example').DataTable();
} 
);
$("document").ready(function(){
      
 
      

    var sum = 0;

  $("#Sun").blur(function(){


  result= parseInt($("#Sun").val());

  sum +=result;

  $("#numHours").html(sum);
  $(".numHours").val(sum);
  });

 $("#Mon").blur(function(){

result=parseInt($("#Mon").val());

 sum +=result;

 $("#numHours").html(sum);
 $(".numHours").val(sum);

});

$("#Tues").blur(function(){

result= parseInt($("#Tues").val());

sum +=result;

$("#numHours").html(sum);
$(".numHours").val(sum);

});

$("#Wed").blur(function(){

result= parseInt($("#Wed").val());

sum +=result;

$("#numHours").html(sum);
$(".numHours").val(sum);

});
$("#Thurs").blur(function(){

result= parseInt($("#Thurs").val());

sum +=result;

$("#numHours").html(sum);
$(".numHours").val(sum);

});


  });
