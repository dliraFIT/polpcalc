  <?=invoke("default","headerIncludes");?>
  <body class="fixed-header ">
    <!-- BEGIN SIDEBAR -->
    <div class="page-sidebar" data-pages="sidebar">
    	<?=invoke("default","sideBarHeader");?>
      	<?=invoke("default","sideBarMenu");?>
    </div>
    <!-- END SIDEBAR -->
    <!-- START PAGE-CONTAINER -->
    <div class="page-container">
      <!-- START PAGE HEADER WRAPPER -->
      <?=invoke("default","header");?>
      <!-- END PAGE HEADER WRAPPER -->
            <!-- START PAGE CONTENT WRAPPER -->
      <div class="page-content-wrapper">
        <!-- START PAGE CONTENT -->
        <div class="content">
		  <?=invoke("default","topMenu");?>
          <!-- START CONTAINER FLUID -->
          <div class="container-fluid container-fixed-lg">
            <!-- BEGIN PlACE PAGE CONTENT HERE -->
           	<?=invoke("default","content");?>
            <!-- END PLACE PAGE CONTENT HERE -->
          </div>
          <!-- END CONTAINER FLUID -->
        </div>
        <!-- END PAGE CONTENT -->
       <?=invoke("default","footer");?>
      </div>
      <!-- END PAGE CONTENT WRAPPER -->
          </div>
    <!-- END PAGE CONTAINER -->
    

    <!-- BEGIN VENDOR JS -->
    <script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery/jquery-1.11.1.min.js" type="text/javascript"></script>
    <script src="assets/plugins/modernizr.custom.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
    <script src="assets/plugins/boostrapv3/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery/jquery-easy.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery-bez/jquery.bez.min.js"></script>
    <script src="assets/plugins/jquery-ios-list/jquery.ioslist.min.js" type="text/javascript"></script>
    <script src="assets/plugins/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="assets/plugins/jquery-actual/jquery.actual.min.js"></script>
    <script src="assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js"></script>
    <!-- END VENDOR JS -->
    <!-- BEGIN CORE TEMPLATE JS -->
    <script src="pages/js/pages.js" type="text/javascript"></script>
    <!-- END CORE TEMPLATE JS -->
    
  </body>
</html>