
    $(document).ready(function()
    {
      $(window).scroll(function() 
      {
        $(".slideanim").each(function()
        {
          var pos = $(this).offset().top;
    
          var winTop = $(window).scrollTop();
            if (pos < winTop + 450) 
            {
              $(this).addClass("slide");
            }
        });

      });
    })
   
    
    
      var myIndex_1 = 0;
      carousel_1();
      
      function carousel_1() {
        var i;
        var x = document.getElementsByClassName("mySlides_1");
        for (i = 0; i < x.length; i++) {
          x[i].style.display = "none";  
        }
        myIndex_1++;
        if (myIndex_1 > x.length) {myIndex_1 = 1}    
        x[myIndex_1-1].style.display = "block";  
        setTimeout(carousel_1, 9000);    
      }
      var myIndex_2 = 0;
      carousel_2();
      
      function carousel_2() {
        var i;
        var y = document.getElementsByClassName("mySlides_2");
        for (i = 0; i < y.length; i++) {
          y[i].style.display = "none";  
        }
        myIndex_2++;
        if (myIndex_2 > y.length) {myIndex_2 = 1}    
        y[myIndex_2-1].style.display = "block";  
        setTimeout(carousel_2, 9000);    
      }

      var myIndex_3 = 0;
      carousel_3();
      
      function carousel_3() {
        var i;
        var z = document.getElementsByClassName("mySlides_3");
        for (i = 0; i < z.length; i++) {
          z[i].style.display = "none";  
        }
        myIndex_3++;
        if (myIndex_3 > z.length) {myIndex_3 = 1}    
        z[myIndex_3-1].style.display = "block";  
        setTimeout(carousel_3, 9000);    
      }

     
