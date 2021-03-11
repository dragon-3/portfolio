function myFunction() {
    var elmnt = document.getElementById("intro");
    elmnt.scrollIntoView();
    };
          
    
            
    $(document).ready(function() {
        $('#main-load').hide().delay(200).fadeIn(1500);
    });
    
          
    
            
    $(document).ready(function() {
        $('#banner').hide().delay(1400).fadeIn(1500);
    });
    
          
    
            
    $(document).ready(function() {
        $('#button').hide().delay(2100).fadeIn(1500);
    });


    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
          x.className += " responsive";
        } else {
          x.className = "topnav";
        }
    }