<!-- Static navbar -->
    <nav class="navbar navbar-default navbar-static-top">
      <?php if(Auth::guest()): ?>
        <div class="container" style="height: : 70px;">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo e(URL ('/')); ?>"><img src="<?php echo e(asset('images/logo.png')); ?>" style="width: 45px; height: 45px;"></a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a href="<?php echo e(URL ('/news')); ?>">News</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Review <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="<?php echo e(URL ('/review_smartphone')); ?>">Smartphone</a></li>
                  <li><a href="#">Gadget</a></li>
                  <li><a href="#">Accesories</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tips n Trick <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="<?php echo e(URL ('/TipsnTrick_GuideToBuy')); ?>">Guide To Buy</a></li>
                  <li><a href="<?php echo e(URL ('/TipsnTrick_Maintanance')); ?>">Maintenance</a></li>
                </ul>
              </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                 <li><a href="<?php echo e(route('login')); ?>">Login</a></li>
            </ul>
          </div>
        </div>
        <?php else: ?>
          <div class="container" style="height: : 70px;">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="<?php echo e(URL ('/')); ?>"><img src="<?php echo e(asset('images/logo.png')); ?>" style="width: 45px; height: 45px;"></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li><a href="<?php echo e(URL ('/news')); ?>">News</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Review <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="<?php echo e(URL ('/review_smartphone')); ?>">Smartphone</a></li>
                    <li><a href="#">Gadget</a></li>
                    <li><a href="#">Accesories</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tips n Trick <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="<?php echo e(URL ('/TipsnTrick_GuideToBuy')); ?>">Guide To Buy</a></li>
                    <li><a href="<?php echo e(URL ('/TipsnTrick_Maintenance')); ?>">Maintenance</a></li>
                  </ul>
                </li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                        <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-item">
                            <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                Logout
                            </a>
                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                <?php echo e(csrf_field()); ?>

                            </form>
                        </li>
                    </ul>
                </li>
              </ul>
          </div>
        </div>
        <?php endif; ?>
    </nav>