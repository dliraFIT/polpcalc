  <?=invoke("template","headerIncludes");?>
  <body class="fixed-header ">
    <!-- BEGIN SIDEBAR -->
    <div class="page-sidebar" data-pages="sidebar">
    	<?=invoke("template","sideBarHeader");?>
      	<?=invoke("template","sideBarMenu");?>
    </div>
    <!-- END SIDEBAR -->
    <!-- START PAGE-CONTAINER -->
    <div class="page-container">
      <!-- START PAGE HEADER WRAPPER -->
      <?=invoke("template","header");?>
      <!-- END PAGE HEADER WRAPPER -->
            <!-- START PAGE CONTENT WRAPPER -->
      <div class="page-content-wrapper">
        <!-- START PAGE CONTENT -->
        <div class="content">
		  <?=invoke("template","topMenu");?>
          <!-- START CONTAINER FLUID -->
          <div class="container-fluid container-fixed-lg">
            <!-- BEGIN PlACE PAGE CONTENT HERE -->
           	<?php 
           	$toload = explode(".",$modulo);
           	echo invoke($toload[0],$toload[1]);
           	?>
            <!-- END PLACE PAGE CONTENT HERE -->
          </div>
          <!-- END CONTAINER FLUID -->
        </div>
        <!-- END PAGE CONTENT -->
       <?=invoke("template","footer");?>
      </div>
      <!-- END PAGE CONTENT WRAPPER -->
          </div>
    <!-- END PAGE CONTAINER -->
    <?=invoke("template","footerIncludes");?>
  </body>
</html>