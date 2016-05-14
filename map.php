       
           <?php
    
      
        
           include 'includes/overall/header2.php';
         
           
           ?>
           
           
           <html lang="en">
  
  

    <style>

html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #map {
        height: 94%;
      }

  @media screen and (max-width: 773px) {
         #map{
    height: 88%; } 
    
   

    </style>

  <body>
       
            
            
            
            
             </div>
    
    <div id="map"></div>
     <div id="floating-panel">
      Origin: <input type="text" readonly id="origin">
      Destination: <input type="text" readonly id="destination"><br>
      Heading: <input type="text" readonly id="heading"> degrees
    </div>

    
    
    
                <div class="navbar navbar-inverse navbar-fixed-bottom">
  <div class="container">
    
      <p class="navbar-text" >Website Developed By Mahan Zeraat-Talab</p>
    
  </div>
</div>
                 <script>
   jQuery(document).ready(function(){

                                      
        $( "#your-page" ).fadeIn(400);
    });  

     </script>
  </body>
</html>
           
           
                   <?php include 'includes/footer.php'; ?>