 <!-- Header
 <header class="bg-dark py-5" id="main-header">
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
            <h1 class="display-4 fw-bolder">Welcome <?php echo $_settings->info('name') ?></h1>
        </div>
    </div>
</header> -->
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
        <img src="./uploads/s1.jpg" class="d-block w-100" alt="Banking">
        <div class="carousel-caption d-none d-md-block">
            <a href="./?p=login" class="btn btn-primary btn-lg">Login Now</a>
        </div>
    </div>
    <div class="carousel-item">
        <img src="./uploads/s2.jpg" class="d-block w-100" alt="Banking">
        <div class="carousel-caption d-none d-md-block">
            <a href="./?p=login" class="btn btn-primary btn-lg">Login Now</a>
        </div>
    </div>
    <div class="carousel-item">
        <img src="./uploads/s3.jpg" class="d-block w-100" alt="Banking">
        <div class="carousel-caption d-none d-md-block">
            <a href="./?p=login" class="btn btn-primary btn-lg">Login Now</a>
        </div>
    </div>
    <div class="carousel-item">
        <img src="./uploads/s4.jpg" class="d-block w-100" alt="Banking">
        <div class="carousel-caption d-none d-md-block">
            <a href="./?p=login" class="btn btn-primary btn-lg">Login Now</a>
        </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- Section-->
<?php 
$sched_arr = array();
$max = 0;
?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card" >
                    <img src="./uploads/s1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Banking</h5>
                        <p class="card-text">Your success is our business. We've got the global network, deep expertise and innovative vision to meet all your banking needs and more</p>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="./uploads/s4.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Be fraud alert</h5>
                        <p class="card-text">We are aware of a number of scams and attempted frauds, including by companies posing as us, or individuals impersonating our staff</p>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="./uploads/s3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Digitalise your collections</h5>
                        <p class="card-text">Straight2Bank Pay is a one-stop global platform and your go-to solution to provide customers with different digital payment options, online and offline. </p>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


<script>
</script>