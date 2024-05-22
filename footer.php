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
          <li><span>Friday - Saturday:</span> 6:00 AM - 8:00 PM</li>
          <li><span>Sunday:</span>12:00pm - 9:00pm</li>
        </ul>
      </div>
      <div class="col-sm-12 col-md-4 d-flex justify-content-center align-items-center">
        <h2>Useful Links</h2>
        <ul class="hours-list">
          <li><span> <a href="">Join Our Whatsap Group</a></span></li>
          <li><span>  <a href="contact.php">Frequently Asked Questions </a></span></li>
          <li><span><a href="#">Terms and Condition</a> </span></li>
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

<script>
  const apiKey = 'facb7d6695914faeb60a29c8381eb2c1';
  const apiUrl = `https://newsapi.org/v2/everything?q=ghana&language=en&apiKey=${apiKey}`;

  const categories = ['General', 'Politics', 'Technology', 'Sports', 'Entertainment'];

  $(document).ready(function() {
    // Create category buttons
    categories.forEach(category => {
      $('#categoryButtons').append(
        `<label class="btn btn-secondary">
          <input type="radio" name="options" autocomplete="off" value="${category.toLowerCase()}"> ${category}
        </label>`
      );
    });

    // Fetch and display news on category change
    $('#categoryButtons input').change(function() {
      fetchNews($(this).val());
    });

    // Fetch and display news for the default category (General)
    fetchNews('General');
  });

  function fetchNews(category) {
    $.get(apiUrl, function(data) {
      const articles = data.articles.filter(article => {
        const categoryKeywords = {
          General: ['news', 'ghana', 'top', 'trending', 'popular', 'latest', 'breaking', 'schools'],
          politics: ['politics', 'government', 'election', 'president', 'minister', 'parliament', 'opposition', 'ruling party', 'opposition party', 'policy', 'law', 'constitution', 'democracy', 'governance', 'political', 'political party', 'political leader', 'political figure', 'political news', 'political news today', 'political news now', 'political news 2021', 'political news 2022', 'political news 2023', 'political news 2024', 'NPP', 'NDC', 'NPP news', 'NDC news', 'NPP news today', 'NDC news today', 'NPP news now', 'NDC news now', 'NPP news 2021', 'NDC news 2021', 'NPP news 2022', 'NDC news 2022', 'NPP news 2023', 'NDC news 2023', 'NPP news 2024', 'NDC news 2024', 'NEW FORCE', 'NEW FORCE news', 'NEW FORCE news today', 'NEW FORCE news now', 'NEW FORCE news 2021', 'NEW FORCE news 2022', 'NEW FORCE news 2023', 'NEW FORCE news 2024', 'CPP', 'CPP news', 'CPP news today', 'CPP news now', 'CPP news 2021', 'CPP news 2022', 'CPP news 2023', 'CPP news 2024', 'PPP', 'PPP news', 'PPP news today', 'PPP news now', 'PPP news 2021', 'PPP news 2022', 'PPP news 2023', 'PPP news 2024', 'PNC', 'PNC news', 'PNC news today', 'PNC news now', 'PNC news 2021', 'PNC news 2022', 'PNC news 2023', 'PNC news 2024', 'GUM', 'GUM news', 'GUM news today', 'GUM news now', 'GUM news 2021', 'GUM news 2022', 'GUM news 2023', 'GUM news 2024', 'CPP', 'CPP news', 'CPP news today', 'CPP news now', 'CPP news 2021', 'CPP news 2022', 'CPP news 2023', 'CPP news 2024', 'CPP', 'CPP news', 'CPP news today', 'CPP news now', 'CPP news 2021', 'CPP news 2022', 'CPP news 2023', 'CPP news 2024', 'CPP', 'CPP news', 'CPP news today', 'CPP news now', 'CPP news 2021', 'CPP news 2022', 'CPP news 2023', 'CPP news 2024', 'CPP', 'CPP news', 'CPP news today', 'CPP news now', 'CPP news 2021', 'CPP news 2022', 'CPP news 2023', 'CPP news 2024', 'CPP', 'CPP news', 'CPP news today', 'CPP news now', 'CPP news 2021', 'CPP news 2022', 'CPP news 2023', 'CPP news 2024', 'CPP', 'CPP news', 'CPP news today', 'CPP news now', 'CPP news 2021', 'CPP news 2022', 'Dr Bawumia', 'Dr Bawumia news', 'Dr Bawumia news today', 'Dr Bawumia news now', 'Dr Bawumia news 2021', 'Dr Bawumia news 2022', 'Dr Bawumia news 2023', 'Dr Bawumia news 2024', 'Dr Bawumia', 'Dr Bawumia news', 'Dr Bawumia news today', 'Dr Bawumia news now', 'Dr Bawumia news 2021', 'Dr Bawumia news 2022', 'Dr Bawumia news 2023', 'Dr Bawumia news 2024', 'Dr Bawumia', 'Dr Bawumia news', 'Dr Bawumia news today', 'Dr Bawumia news now', 'Dr Bawumia news 2021', 'Dr Bawumia news 2022', 'Dr Bawumia news 2023', 'Dr Bawumia news 2024', 'Dr Bawumia', 'Dr Bawumia news', 'Dr Bawumia news today', 'Dr Bawumia news now', 'Dr Bawumia news 2021', 'Dr Bawumia news 2022', 'Dr Bawumia news 2023', 'Dr Bawumia news 2024', 'Dr Bawumia', 'Dr Bawumia news', 'Dr Bawumia news today', 'Dr Bawumia news now', 'Dr Bawumia news 2021', 'Dr Bawumia news 2022', 'Dr Bawumia news 2023', 'Dr Bawumia news 2024', 'Dr Bawumia', 'Dr Bawumia news', 'Dr Bawumia news today', 'Dr Bawumia news now', 'Dr Bawumia news 2021', 'Dr Bawumia news 2022', 'Dr Bawumia news 2023', 'Dr Bawumia news 2024', 'Dr Bawumia', 'Dr Bawumia news', 'Dr Bawumia news today', 'Dr Bawumia news now', 'Dr Bawumia news 2021', 'Mahamma', 'Asare Bediako', 'Asare Bediako news', 'Asare Bediako news today', 'Asare Bediako news now', 'Asare Bediako news 2021', 'Asare Bediako news 2022', 'Asare Bediako news 2023', 'Asare Bediako news 2024', 'Asare Bediako', 'Asare Bediako news', 'Asare Bediako news today', 'Asare Bediako news now', 'Asare Bediako news 2021', 'Asare Bediako news 2022', 'Asare Bediako news 2023', 'Asare Bediako news 2024', 'Asare Bediako', 'Asare Bediako news', 'Asare Bediako news today', 'Asare Bediako news now', 'Asare Bediako news 2021', 'Asare Bediako news 2022', 'Asare Bediako news 2023', 'Asare Bediako news 2024', 'Asare Bediako', 'Asare Bediako news', 'Asare Bediako news today', 'Asare Bediako news now', 'Asare Bediako news 2021', 'Asare Bediako news 2022', 'Asare Bediako news 2023', 'Asare Bediako news 2024', 'Asare Bediako', 'Asare Bediako news', 'Asare Bediako news today', 'Asare Bediako news now', 'Asare Bediako news 2021', 'Asare Bediako news 2022', 'Asare Bediako news 2023', 'Asare Bediako news 2024', 'Asare Bediako', 'Asare Bediako news', 'Asare Bediako news today', 'Asare Bediako news now', 'Asare Bediako news 2021', 'Asare Bediako news 2022', 'Asare Bediako news 2023', 'Asare Bediako news 2024', 'Asare Bediako', 'Asare Bediako news', 'Asare Bediako news today', 'Asare Bediako news now', 'Asare Bediako news 2021'],
          technology: ['tech', 'technology', 'innovation', 'software', 'hardware', 'internet', 'gadget'],
          sports: ['sports', 'game', 'match', 'football', 'soccer', 'basketball', 'tennis', 'cricket', 'rugby', 'olympics', 'athlete', 'champion', 'league', 'tournament','betting','bet','betting tips','betting odds','betting sites','betting websites','betting apps','betting app','betting predictions','betting tips today','betting tips 1x2','betting tips football','betting tips soccer','betting tips tomorrow','betting tips for today','betting tips for tomorrow','betting tips 1x2 prediction','betting tips and predictions','betting tips and predictions football','betting tips and predictions soccer','betting tips and predictions today','betting tips and predictions tomorrow','betting tips and predictions 1x2','betting tips and predictions for today','betting tips and predictions for tomorrow','betting tips and predictions 1x2','betting tips and predictions football today','betting tips and predictions soccer today','betting tips and predictions tomorrow soccer','betting tips and predictions 1x2 today','betting tips and predictions for today soccer','betting tips and predictions for tomorrow soccer','betting tips and predictions 1x2 today','betting tips and predictions for today football','betting tips and predictions for tomorrow football','betting tips and predictions 1x2 today','betting tips and predictions for today soccer 1x2','betting tips and predictions for tomorrow soccer 1x2','betting tips and predictions 1x2 today','betting tips and predictions for today football 1x2','betting tips and predictions for tomorrow football 1x2','betting tips and predictions 1x2 today','betting tips and predictions for today soccer 1x2','betting tips and predictions for tomorrow soccer 1x2','betting tips and predictions 1x2 today','betting tips and predictions for today football 1x2','betting tips and predictions for tomorrow football 1x2','betting tips and predictions 1x2 today','betting tips and predictions for today soccer 1x2','betting tips and predictions for tomorrow soccer 1x2','betting tips and predictions 1x2 today','betting tips and predictions for today football 1x2','betting tips and predictions for tomorrow football 1x2','betting tips and predictions 1x2 today','betting tips and predictions for today soccer 1x2','betting tips and predictions for tomorrow soccer 1x2','betting tips and predictions 1x2 today','betting tips and predictions for today football 1x2','betting tips and predictions for tomorrow football 1x2','betting tips and predictions 1x2 today','betting tips and predictions for today soccer 1x2','betting tips and predictions for tomorrow soccer 1x2','betting tips and predictions 1x2 today','betting tips and predictions for today football 1x2','betting tips and predictions for tomorrow football 1x2','betting tips and predictions 1x2 today','betting tips and predictions for today soccer 1x2','betting tips and predictions for tomorrow soccer 1x2','betting tips and predictions 1x2 today','betting tips and predictions for today football 1x2','betting tips and predictions for tomorrow football 1x2','betting tips and predictions 1x2 today','betting tips and predictions for today soccer 1x2','betting tips and predictions for tomorrow soccer 1x2','betting tips and predictions 1x2 today','betting tips and predictions for today football 1x2','betting tips and predictions for tomorrow football 1x2','betting tips and predictions 1x2 today','betting tips and predictions for today soccer 1x2','betting tips and predictions for tomorrow soccer 1x2','betting tips and predictions 1x2 today','betting tips and predictions for today football 1x2','betting tips and predictions for tomorrow football 1x2','betting tips and predictions 1x2 today','betting tips and predictions for today soccer 1x2','betting tips and predictions for tomorrow soccer 1x2','betting tips and predictions 1x2 today','betting tips and predictions for today football 1x2','betting tips and predictions for tomorrow football 1x2','betting tips and predictions 1x2 today','betting tips and predictions for today soccer 1x2','betting tips and predictions for tomorrow soccer 1x2','betting tips and predictions 1x2 today','betting tips and predictions for today football 1x2','betting tips and predictions for tomorrow football 1x2','betting tips and predictions 1x2 today','betting tips and predictions for today soccer 1x2','betting tips', 'kotoko', 'hearts', 'ghana premier league', 'ghana football', 'ghana sports', 'ghana sports news', 'ghana sports news today', 'ghana sports news now', 'ghana sports news 2021', 'ghana sports news 2022', 'ghana sports news 2023', 'ghana sports news 2024'],
          entertainment: ['entertainment', 'celebrity', 'movie', 'music', 'show', 'film', 'actor', 'actress', 'artist', 'song', 'album', 'concert', 'festival', 'award', 'hollywood', 'bollywood', 'nollywood', 'ghana movie', 'ghana music', 'ghana entertainment', 'ghana entertainment news', 'ghana entertainment news today', 'ghana entertainment news now', 'ghana entertainment news 2021', 'ghana entertainment news 2022', 'ghana entertainment news 2023', 'ghana entertainment news 2024']
        };
        const keywords = categoryKeywords[category];
        return keywords.some(keyword => article.title.toLowerCase().includes(keyword));
      });
      displayNews(articles, category);
    });
  }

  function displayNews(articles, category) {
    $('#newsContainer').empty();
    if (articles.length === 0) {
      $('#newsContainer').append(`<div class="col-12"><p>No news available for ${category} category.</p></div>`);
    } else {
      // Sort articles by published date in descending order
      articles.sort((a, b) => new Date(b.publishedAt) - new Date(a.publishedAt));

      articles.forEach((article, index) => {
        const articleDetails = {
          title: article.title,
          description: article.description,
          url: article.url,
          imageUrl: article.urlToImage || 'https://via.placeholder.com/150',
          publishedAt: new Date(article.publishedAt).toLocaleDateString()
        };
        const encodedDetails = encodeURIComponent(JSON.stringify(articleDetails));
        if (index === 0) {
          $('#newsContainer').append(`
            <div class="col-md-4">
              <div class="card news-article">
                <img src="${articleDetails.imageUrl}" class="card-img-top news-image" alt="News Image">
                <div class="card-body">
                  <h2 class="card-title news-title">${articleDetails.title}</h2>
                  <p class="card-text news-description">${articleDetails.description || 'No description available.'}</p>
                  <p class="news-date">${articleDetails.publishedAt}</p>
                  <a href="readmore.php?articleDetails=${encodedDetails}" class="btn btn-primary">Read more</a>
                </div>
              </div>
            </div>
          `);
        } else {
          $('#newsContainer').append(`
            <div class=" col-md-4">
              <div class="card news-article">
                <img src="${articleDetails.imageUrl}" class="card-img-top news-image" alt="News Image">
                <div class="card-body">
                  <h5 class="card-title news-title">${articleDetails.title}</h5>
                  <p class="card-text news-description">${articleDetails.description || 'No description available.'}</p>
                  <p class="news-date">${articleDetails.publishedAt}</p>
                  <a href="readmore.php?articleDetails=${encodedDetails}" class="btn btn-primary">Read more</a>
                </div>
              </div>
            </div>
          `);
        }
      });
    }
  }

</script>
</body>
</html>