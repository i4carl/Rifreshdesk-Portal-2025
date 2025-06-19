<?php
  // Import the header file (includes opening HTML tags, <head>, site header, etc.)
  include 'header.php';
?>

<main class="fw-main-wrapper mt-0 min-h-[100vh]" id="fw-main-content">
  <?php
    // Get the requested page from the URL, e.g. index.php?page=about
    $page = isset($_GET['page']) ? $_GET['page'] : 'home';

    // Sanitize page name to avoid directory traversal
    $page = basename($page);

    // Build the path to the page content file
    $file = "output_content/pages/general_pages/{$page}.php";

    // Check if the file exists, and include it; otherwise, load a fallback (404 or default)
    if (file_exists($file)) {
      include $file;
    } else {
      include 'routes/404.php'; // fallback file
    }
  ?>
</main>

<?php
  // Import the footer file (includes footer HTML, closing </body> and </html> tags)
  include 'footer.php';
?>
