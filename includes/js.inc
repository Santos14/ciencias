 <script src="<?php echo base_url(); ?>public/js/jquery.js"></script> <!-- Jquery Library Call -->


<script src="<?php echo base_url(); ?>public/js/jquery-ui.js"></script> <!-- Plugins -->
<script src="<?php echo base_url(); ?>public/js/helper-plugins.js"></script> <!-- Plugins -->
<script src="<?php echo base_url(); ?>public/js/bootstrap.js"></script> <!-- UI -->
<script src="<?php echo base_url(); ?>public/js/waypoints.js"></script> <!-- Waypoints -->


 <script src="<?php echo base_url(); ?>public/js/noti.js"></script>




<script>
    jQuery("document").ready(function(){
    $(window).scroll(function(){
      if($(this).scrollTop() > 145){
        $("#menubebe").addClass("fixedmenutop");
        $("#logofixed").css("display","block");
      }else{
        $("#menubebe").removeClass("fixedmenutop");
        $("#logofixed").css("display","none");

      }
    });
  });
   $(document).ready(function(){
              $("#candado").click(function(){
                 $("#login").slideToggle("fast");
              });
            });

     $(function() {
    $( "#datepicker" ).datepicker();
  });
</script>