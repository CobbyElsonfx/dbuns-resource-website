</div><!-- end row -->
</div><!-- end container -->
</section>

<?php
use App\classes\Site;
$ob = Site::displaySocialLink();
$data = mysqli_fetch_assoc($ob);
?>
<section class="working-hours">
  <div class="container">
    <div class="row ">
    <div class="col-sm-12 col-md-4">
        <img src="assets/images/working.png" alt="Working Hours Illustration" class="img-fluid illustration">
      </div>
    <div class="col-sm-12 col-md-4 d-flex justify-content-center align-items-center">
        <h2>Working Hours</h2>
        <ul class="hours-list">
          <li><span>Monday - Thursday:</span> 6:00 AM - 9:00 PM</li>
          <li><span>Friday Saturday:</span> 9:00 AM - 8:00 PM</li>
          <li><span>Sunday:</span>1:00pm - 7:00pm</li>
        </ul>
      </div>
      <div class="col-sm-12 col-md-4 d-flex justify-content-center align-items-center">
        <h2>Useful Links</h2>
        <ul class="hours-list">
          <li><span> <a>Join Our Whatsap Group</a></span></li>
          <li><span><a>Frequently Asked Questions </a></span></li>
          <li><span><a>Terms and Condition</a> </span></li>
        </ul>
      </div>
      
    </div>
  </div>
</section>
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="widget">
                    <div class="footer-text text-left">
                        <a href="index.html"><img src="images/version/tech-footer-logo.png" alt="" class="img-fluid"></a>
                        <p>At dataBundleshub, we are more than just a data bundle provider; we are your gateway to seamless connectivity and affordable data solutions. </p>
                        <div class="social">
                            <a href="<?= $data['facebook']?>" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook"></i></a>
                            <a href="<?= $data['twitter']?>" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter"></i></a>
                            <a href="<?= $data['instagram']?>" data-toggle="tooltip" data-placement="bottom" title="Instagram"><i class="fa fa-instagram"></i></a>
                            <a href="<?= $data['github']?>" data-toggle="tooltip" data-placement="bottom" title="Github"><i class="fa fa-github"></i></a>
                            <a href="<?= $data['linkedin']?>" data-toggle="tooltip" data-placement="bottom" title="Linkedin"><i class="fa fa-linkedin"></i></a>
                        </div>

                        <hr class="invis">

                        <!-- <div class="newsletter-widget text-left">
                            <form class="form-inline">
                                <input type="text" class="form-control" placeholder="Enter your email address">
                                <button type="submit" class="btn btn-primary">SUBMIT</button>

                            </form>
                        </div> -->
                    </div><!-- end footer-text -->
                </div><!-- end widget -->
            </div><!-- end col -->

            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="widget">
                    <h2 class="widget-title">Popular Categories</h2>
                    <div class="link-widget">
                        <ul>
                            <?php
                            use App\classes\Category;
                            $popu = Category::showLimitCategory();
                            while ($cat = mysqli_fetch_assoc($popu)){
                                ?>
                                <li><a href="index.php?id=<?= $cat['id']?>&catwisepost"><?= $cat['category_name'] ?> <span><?php echo Category::countCategoryPost($cat['id']);?></span></a></li>
                            <?php } ?>
                        </ul>
                    </div><!-- end link-widget -->
                </div><!-- end widget -->
            </div><!-- end col -->
        </div>

        <div class="row" >
            <div class="col-md-12 text-center">
                <br>
                <div class="copyright"> <?= $siteData['footer']?> <a href="<?= $data['footerlink']?>"><?= $data['footertxt']?></a>.</div>
            </div>
        </div>
    </div><!-- end container -->
</footer><!-- end footer -->

<div class="dmtop">Scroll to Top</div>

</div><!-- end wrapper -->

<!-- Core JavaScript
================================================== -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/tether.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/custom.js"></script>

</body>
</html>