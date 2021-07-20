// -----------------H E A D I N G-----------------//
// 1.
$(document).ready(function(){
  $("#para1").mouseover(function(){
    $("#para2").css("background-color", "orange");
    $("#para2").css("color", "black");
  });

});

// 2.
  window.setInterval(function(){

    var randomColor = '#'+ ('000000' + Math.floor(Math.random()*16777215).toString(16)).slice(-6);
    
    $('#para1').css({
      'background-color' : randomColor
    });

  }, 2000);
   
  $(document).ready(function(){    
    scroll_pos = $(this).scrollTop();   
    var scroll_pos = 0;
  
    $(document).scroll(function() { 
      if(scroll_pos > 100) {
        $("#para2").css('background-color', 'orange');
    } else {
        $("#para2").css('background-color', 'lightgreen');  
    }
     
    scroll_pos = $(this).scrollTop();
      if(scroll_pos > 700) {
        $("#para2").css('background-color', 'lightblue');
        $("#para2").css('color', 'black');
    } else {
        $("#para2").css('background-color', '#00E9FF');  
        $("#para2").css('color', 'black');      
    }
    });
  });

// 3.
$(document).ready(function(){
  $("#para2").mouseover(function(){
    $("#para1").fadeOut();
    $("#para1").fadeOut("slow");
    $("#para1").fadeOut(3000);
  });
});

$(document).ready(function(){
  $("#para2").mouseout(function(){
  $("#para1").slideToggle("slow");
  }); 
});

// 4.
$(document).ready(function(){
  $("#Welcome").mouseover(function(){
    $("#Welcome").css("background-color", "rgb(17, 101, 255)");
  });
  $("#Welcome").mouseover(function(){
    $("#Welcome").css("color", "whitesmoke");
  });
  $("#Welcome").mouseover(function(){
    $("#Welcome").css("font-size", "23px");
    $("#Welcome").load("../View/demo.txt");
  });
});

// 5. Works for the final project [localhost:8080], but not on the live server!
$(document).ready(function(){
  $("#Contact").click(function(){
    $("#Contact").load("slow", function(){
      alert("Will You Accept Our Cookies?");
    });
  });
});

// Notice Frontal Page

$(document).ready(function(){
  $("#Notice").mouseover(function(){
  $("#NoticePost").fadeOut("slow");
  }); 

  $("#para1").mouseover(function(){
    $("#NoticePost").fadeIn("slow");
    }); 
});

// Post Notice Section

$(document).ready(function(){
  $("#togglepage").mouseout(function(){
  $("#HideSearch").slideToggle("slow");
  }); 
});
