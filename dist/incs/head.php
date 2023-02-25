<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Better Life Bingo, the Mindfullness and Wellness Game</title>
    <meta property="og:site_name" content="Better Life Bingo, The Mindfulness and Wellness Game">
    <meta property="og:title" content="Better Life Bingo, The Mindfulness and Wellness Game. Did you have a Bingo Day?">
    <meta property="og:url" content="http://betterlifebingo.com/">
    <meta property="og:type" content="website">
    <meta property="og:author" content="Mark Zelis">
    <meta property="og:description" content="Play a game of mindfulness for Youths, Adults and for Wellness. Did you have a Bingo day? Small changes and everyday choices can greatly affect health and well-being. At the end of each day, click on the activities you chose to do that day. Get Bingo by connecting five of these across, down or diagonally. Get enough “Bingo Days” and you know you are on the right track to wellness!">
    <meta property="og:image" content="https://web.archive.org/web/20200929045930im_/http://betterlifebingo.com/images/betterlife-bingo-2x.png">
    <meta name="description" content="Play this mindfulness game and see if you have a Bingo Day. Small changes and everyday choices can greatly affect health and well-being. At the end of each day, click on the activities you chose to do that day. Get Bingo by connecting five of these across, down or diagonally. Get enough “Bingo Days” and you know you are on the right track to wellness!">
    <?php
    $filename = './main.css';
    $v = '';
    if (file_exists($filename)) {
       $v = filemtime($filename);
    }
    ?>
    <link rel="stylesheet" href="./main.css?v=<?php echo $v; ?>">

    <?php
    $filename = './main.js';
    $v = '';
    if (file_exists($filename)) {
       $v = filemtime($filename);
    }
    ?>
    <script src="./main.js?v=<?php echo $v; ?>"></script>
</head>
<body>