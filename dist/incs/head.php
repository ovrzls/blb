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
<body id="bingo">
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v16.0&appId=1140252116028361&autoLogAppEvents=1" nonce="Vmfc4XQW"></script>
<canvas class="confetti" id="canvas"></canvas>
<div id="congratulations" role="modal">
   <div id="modal">
      <h2>Congratulations</h2>
      <p class="text-larger">You had a Bingo Day!</p>
      <div class="fb-like" data-href="https://betterlifebingo.com" data-width="" data-layout="" data-action="recommend" data-size="" data-share="true"></div>
      <p><a href="javascript:window.location.href=window.location.href">Clear board and try again</a></p>
   </div>
</div>