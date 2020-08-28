$(document).ready(function(){

    $(".search").focus(function(){
      $("#clear-btn").show();
    })

    $("#clear-btn").click(function(){
      $(".search").val("");  
      $("#clear-btn").hide();
    });

    $(".search").blur(function(){
      var $target =  $(".search").val();  
      if(!$target){
        $("#clear-btn").hide();
      }
    });
});