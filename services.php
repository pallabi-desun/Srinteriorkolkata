<?php include_once("inc/master.php") ?>

<!--Start breadcrumb area-->
<section class="breadcrumb-area style2" style="background-image: url(images/resources/breadcrumb-bg-2.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="inner-content-box clearfix">
                    <div class="title-s2 text-center">
                        <span>Our Services</span>
                        <h1>Bringing Great Design</h1>
                    </div>
                    <div class="breadcrumb-menu float-left">
                        <ul class="clearfix">
                            <li><a href="index.html">Home</a></li>
                            <li class="active">Services</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End breadcrumb area-->
<!--Start services style1 service page-->
<section class="services-style1-service-page">
    <div class="container">
        <div class="sec-title text-center wow fadeInDown" data-wow-delay="100ms" data-wow-duration="1200ms">
            <p>Interior Elements</p>
            <div class="title">Some Special <span>Services</span></div>
        </div>
        <div class="row">
        <?php
			$sql = "SELECT * FROM `services`";
			$result = mysqli_query($conn, $sql);
			$row = mysqli_num_rows($result);
			// print_r($row);
while ($rows = mysqli_fetch_assoc($result)) {
    ?>
            <!--Start single service style1-->
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                <div class="single-service-style1 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1200ms">
                    <div class="img-holder">
                        <img src="<?php echo $rows['image'] ?>" alt="Awesome Image">
                        <div class="overlay-style-two"></div>
                    </div>
                    <div class="text-holder bg-white">
                        <div class="inner-content">
                            <div class="top">
                                <div class="icon">
                                    <span class="icon-lamp"></span>
                                </div>
                                <div class="count">
                                    <h1><?php echo $rows['service_id'] ?></h1>
                                </div>
                            </div>
                            <div class="bottom">
                                <div class="title">
                                    <h3><?php echo $rows['title'] ?></h3>
                                </div>
                                <div class="read-more">
                                    <a href="contact.php"><span class="icon-next"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="overlay-content">
                            <div class="text">
                                <p><?php echo $rows['short_desp'] ?></p>
                            </div>
                            <div class="read-more">
                                <a href="contact.php"><span class="icon-next"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End single service style1-->
            <?php } ?>
        </div>
    </div>
</section>
<!--End services style1 service page-->

<?php include_once("inc/footer.php") ?>