$(document).ready(function(){     
 
  $("#button").click(function(){
    $.ajax({
      url: "expression.txt",
       success: (data)=>{
        $('p').append(data);
      }
  });

});


});


