
 <!-- import content -->
<?php
	include("includes/global-nav.php");
?>

       	<section id="content">
      <h2 style="color:steelblue;font-size:24px;text-align: left">Feedback Informatio</h2> 
      </div>
      <div class="roofing-text3">
      <?php
   
$Name = $_GET['fname'];

  echo ('Hello, 
			<b>  '. $Name. ' </b>, thanks for your submitting your application. ' );
?>
</div>
</section>


 <!-- import content -->
<?php
	include("includes/footer-nav.php");
?> 