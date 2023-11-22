<?php

require_once "./partials/header.php";



$myfile = fopen("youtube-links.txt", "r") or die("Unable to open file!");
$youtubeInfo = fread($myfile,filesize("youtube-links.txt"));
fclose($myfile);


// var_dump($youtubeInfo);

$youtubeVideos = explode("\n", $youtubeInfo);



// Here is a sample of the URLs this regex matches: (there can be more content after the given URL that will be ignored)

// http://youtu.be/dQw4w9WgXcQ
// http://www.youtube.com/embed/dQw4w9WgXcQ
// http://www.youtube.com/watch?v=dQw4w9WgXcQ
// http://www.youtube.com/?v=dQw4w9WgXcQ
// http://www.youtube.com/v/dQw4w9WgXcQ
// http://www.youtube.com/e/dQw4w9WgXcQ
// http://www.youtube.com/user/username#p/u/11/dQw4w9WgXcQ
// http://www.youtube.com/sandalsResorts#p/c/54B8C800269D7C1B/0/dQw4w9WgXcQ
// http://www.youtube.com/watch?feature=player_embedded&v=dQw4w9WgXcQ
// http://www.youtube.com/?feature=player_embedded&v=dQw4w9WgXcQ

// It also works on the youtube-nocookie.com URL with the same above options.
// It will also pull the ID from the URL in an embed code (both iframe and object tags)

$url = "https://www.youtube.com/watch?v=c39E5et84fI";

function getYoutubeID($url)  {
    preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $match);
    return $match[1];
}

$youtube_id = getYoutubeID($url);

$output = shell_exec("ls; echo $?");

$files = explode("\n", $output);

$items = [];

foreach ($files as $key => $item) {
    $phpFiles = preg_match('/\.php/i', $item);
    if($phpFiles) {
        $items[]  = $item;
    }


}
// var_dump($items);



$recenica = "13 Flatbed Trucking Companies To Work With: Pros, Cons, and More";


$niza = explode(" ", $recenica);


// var_dump($niza);

$slug = implode("-", $niza);

// var_dump($slug);

$id =  "http://www.youtube.com/?v=dQw4w9WgXcQ";

$youtubeID = explode("v=", $id);
// var_dump($youtubeID[1]);



?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Youtube videos</h1>
        </div>
    </div>

    <div class="row">
        <?php
        foreach ($youtubeVideos as $video) {



            $videoIdTitle  = explode("https", $video);
            $videoId = getYoutubeID("https". $videoIdTitle[1]);


        echo '<div class="col-md-4">
            <p>'.$videoIdTitle[0].'</p>
            <iframe src="https://www.youtube.com/embed/'.$videoId.'" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>';
        }
        ?>

    </div>
</div>

<?php

require_once "./partials/footer.php";

?>
