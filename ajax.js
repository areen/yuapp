$(document).ready(function(){
  
 $("button#submit").click(function(){ 
    
         if($("#ID").val() === "" || $("#P").val() === "")
             $("div#one").html("please enter both Id AND Password");
         else
             $.post($("#myform").attr("action"),
              $("#myform :input").serializeArray(),
            function(data){
                $("div#one").html(data);
         
            });
            $("#myform").submit(function(){
                return false;
            });
           
                       
});
});

  
                $(document).ready(function(){
  
      $("button#s").click(function(){ 
    
         if($("#my_id").val() === "" || $("#myList").val() === "")
             $("div#one").html("please enter boh Id AND Password");
         else
             $.post($("#myform2").attr("action"),
              $("#myform2 :input").serializeArray(),
            function(data){
                $("div#one").html(data);
         
            });
            $("#myform2").submit(function(){
                return false;
            });
            });
});

$(document).ready(function () {
  $('#nav > li > a').click(function(){
    if ($(this).attr('class') != 'active'){
      $('#nav li ul').slideUp();
      $(this).next().slideToggle();
      $('#nav li a').removeClass('active');
      $(this).addClass('active');
    }
  });
});



  