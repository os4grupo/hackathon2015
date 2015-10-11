(function()
{
 "use strict";
 /*
   hook up event handlers 
 */
 function register_event_handlers()
 {
    
    
     /* button  Menu */
    $(document).on("click", ".uib_w_2", function(evt)
    {
        /*Other possible functions are: 
            uib_sb.open_sidebar($sb)
           uib_sb.close_sidebar($sb)
           uib_sb.toggle_sidebar($sb)
            uib_sb.close_all_sidebars()
          See js/sidebar.js for the full sidebar API */
        
         uib_sb.toggle_sidebar($(".uib_w_3"));  
    });
    
        /* listitem  Inicio */
    
    
        /* listitem  Ranking */
    $(document).on("click", ".uib_w_7", function(evt)
    {
         activate_subpage("#Ranking"); 
    });
    
        /* listitem  Museus */
    $(document).on("click", ".uib_w_9", function(evt)
    {
         activate_subpage("#museus"); 
    });
    
        /* listitem  Mapa */
    $(document).on("click", ".uib_w_11", function(evt)
    {
         activate_subpage("#mapa"); 
    });
    
        /* listitem  Promocoes */
    $(document).on("click", ".uib_w_13", function(evt)
    {
         activate_subpage("#promocoes"); 
    });
    
        /* listitem  SAC */
    $(document).on("click", ".uib_w_15", function(evt)
    {
         activate_subpage("#sac"); 
    });
    
        /* listitem  Holograma */
    $(document).on("click", ".uib_w_19", function(evt)
    {
         activate_subpage("#holograma"); 
    });
    
        /* button  ESCANEAR */
    $(document).on("click", ".uib_w_21", function(evt)
    {
      cordova.plugins.barcodeScanner.scan(
      function (result) {
                window.location(result.text);
      }, 
      function (error) {
          alert("Scanning failed: " + error);
      }
   );
    });
    
        /* listitem  Inicio */
    $(document).on("click", ".uib_w_5", function(evt)
    {
         activate_subpage("#inicio"); 
    });
    
    }
 document.addEventListener("app.Ready", register_event_handlers, false);
})();
