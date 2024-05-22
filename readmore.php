<?php
require_once 'header.php';

if (isset($_GET['articleDetails'])) {
    $articleDetails = json_decode(urldecode($_GET['articleDetails']), true);
    if (!$articleDetails) {
        echo "Invalid article details.";
        exit;
    }
} else {
    echo "No article details provided.";
    exit;
}
?>

<div class="container">
  <h1 class="my-4 text-center">Full Article</h1>
  <div class="article-content">
    <h2><?php echo htmlspecialchars($articleDetails['title']); ?></h2>
    <p><?php echo htmlspecialchars($articleDetails['description']); ?></p>
    <p><a href="<?php echo htmlspecialchars($articleDetails['url']); ?>" target="_blank">Read the full article here</a></p>
  </div>
</div>

<?php
require_once 'footer.php';
?>
