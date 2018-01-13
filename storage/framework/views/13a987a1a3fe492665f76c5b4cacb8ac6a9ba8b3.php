<?php $__env->startSection('content'); ?>

<style type="text/css">
    .first-slide{
        width: 100%;
    }
    .second-slide{
        width: 100%;
    }
    .third-slide{
        width: 100%;
    }
</style>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="<?php echo e(asset ('images/u28.jpg')); ?>" alt="First slide">
        </div>
        <div class="item">
          <img class="second-slide" src="<?php echo e(asset('images/u27.jpg')); ?>" alt="Second slide">
        </div>
        <div class="item">
          <img class="third-slide" src="<?php echo e(asset('images/u29.jpg')); ?>" alt="Third slide">
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->

     <hr class="featurette-divider">

      <div class="row featurette" style="padding-left: 5px; padding-bottom: 10px;">
        <div class="col-md-7">
            <a href="<?php echo e(URL ('/news_smartphone_razerPhone')); ?>" style="color: black; text-decoration: none;"><h2 class="featurette-heading">Smartphone untuk Gamers</h2></a>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" src="<?php echo e(asset('images/u29.jpg')); ?>" alt="Generic placeholder image" style="width: 500px;">
        </div>
      </div>

      <hr class="featurette-divider" style="padding-left: 5px; padding-bottom: 10px;">

      <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <a href="<?php echo e(URL ('/news_smartphone_xiaoMi4A')); ?>" style="color: black; text-decoration: none;"><h2 class="featurette-heading">Smartphone untuk Kere-kere Hore</h2></a>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5 col-md-pull-7">
          <img class="featurette-image img-responsive center-block" src="<?php echo e(asset('images/u56.jpg')); ?>" alt="Generic placeholder image" style="width: 500px; height:220px;">
        </div>
      </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>