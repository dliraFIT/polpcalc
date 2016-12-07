<!-- START HEADER -->
      <div class="header ">
        <!-- START MOBILE CONTROLS -->
        <!-- LEFT SIDE -->
        <div class="pull-left full-height visible-sm visible-xs"></div>
        <!-- RIGHT SIDE -->
        <div class="pull-right full-height visible-sm visible-xs"></div>
        <!-- END MOBILE CONTROLS -->
        <div class=" pull-left sm-table">
          <div class="header-inner text-left">
          	<a href="#" class="btn-link toggle-sidebar visible-sm-inline-block visible-xs-inline-block" data-toggle="sidebar">
              	<span class="icon-set menu-hambuger"></span>
            </a>
            &nbsp;
            <div class="brand inline">
              <img src="/calculadora/assets/img/logo.png" alt="logo" data-src="/calculadora/assets/img/logo.png" data-src-retina="/calculadora/assets/img/logo_2x.png" width="93" height="25">
            </div>
             <?=invoke("template","notifications");?>
          </div>
        </div>
        <div class=" pull-right">
             <?=invoke("template","userInfo");?>
        </div>
      </div>
      <!-- END HEADER -->