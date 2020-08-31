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

    $(".dropdown-select").change(function($products){
      var e = $(".dropdown-select :selected").val();
      
      switch(e){
        case "1": alert(1);break;
        case "2": alert(2);break;
        case "3": alert(3);break;
        case "4": alert(4);break;
      }
    });
})
