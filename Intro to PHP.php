<?php

/*******w******** 
    
    Name: Wadia Jara
    Date: 2024/05/15
    Description:

****************/

$config = [

    'gallery_name' => 'Pictures Gallery',
 
    'unsplash_categories' => ['Animals','Nature','People','City', 'Health', 'Spirituality', 'Urban', 'Food'],
 
    'local_images' => ['image1.jpg','image2.jpg','image3.jpg','image4.jpg','image5.jpg'],

    'Author' => [   'name' => [ 'Mourad Saadi', 'Tomáš Malík', 'Dima Solomin', 'Getty Images', 'Kellen Riggin'],
                    'profile' => [ '@mougrapher', '@malcoo', '@solomin_d', '@gettyimages', '@kalaniparker']
                ]
 
];

    $galleryName = "<h1>{$config['gallery_name']}</h1>";
    $url_unsplash = "https://unsplash.com/";
    $url_unsplash_categories = "https://source.unsplash.com/300x200/?";

    $list_ImgForCategory = "<div id='gallery'>";
    foreach($config['unsplash_categories'] as $x){
        $list_ImgForCategory .= "<div>";
        $list_ImgForCategory .= "<h2>{$x}</h2>";
        $list_ImgForCategory .= "<img src='{$url_unsplash_categories}{$x}' alt='{$x}'>";
        $list_ImgForCategory .= "</div>";
    }
    $list_ImgForCategory .= "</div>";

    $largeImage = "<h1>".count($config['local_images'])." Large Images</h1>";
    $authorsImages = "<div id='large-images'>";
    foreach($config['local_images'] as $x => $y){
        $name = $config['Author']['name'][$x];
        $profile = $config['Author']['profile'][$x];

        $authorsImages .= "<img src='images/{$y}' alt='{$name}'>";
        $authorsImages .= "<h3 class='photographer'><a href='{$url_unsplash}{$profile}'>{$name}</a></h3>";
    }
    $authorsImages .= "</div>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Assignment 1</title>
</head>
<body>
    <!-- Remember that alternative syntax is good and html inside php is bad -->
    
    <?php
        echo $galleryName;
        echo $list_ImgForCategory;
    
        echo $largeImage;
        echo $authorsImages;
    ?>
</body>
</html>