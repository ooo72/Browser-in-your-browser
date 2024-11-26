<?php
if (isset($_GET['url'])) {
    $url = filter_var($_GET['url'], FILTER_SANITIZE_URL);
    if (filter_var($url, FILTER_VALIDATE_URL)) {
        $content = file_get_contents($url);
        echo $content;
    } else {
        echo "Invalid URL";
    }
} else {
    echo "No URL provided.";
}
?>
