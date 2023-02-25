<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Better Life Bingo the Mindfullness and Wellness Game</title>
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
  </head>
  <body>

    <div class="wrapper">
      <div class="row-lg">
        <div>
          <h1 class="site-header">
            <img src="./images/betterlifebingo.png" alt="" />Better Life Bingo</h1>
        </div>
          <div>
            <h2 class="section-title">Pick a Bingo Card</h2>
            <a href="family.php" class="btn">Family</a>
            <a href="teen.php" class="btn">Teen</a>
            <a href="wellbeing.php" class="btn">Wellbeing</a>
          </div>
        </div>
      <section id="intro">
        <h2 class="section-title">Reflect on your day and find gratitude in simple experiences</h2>
        <p>This game provides a unique way to look back on your day and acknowledge the positive aspects. Whether it's spending time with friends and family, laughing, or simply enjoying a quiet moment, <strong>Better Life Bingo</strong> encourages you to focus on the good things that you made happen in your day. Play the game, reflect on your experiences, and start appreciating the small moments in life.</p>
      </section>
      <section id="howto">
          <h2 class="section-title">
            How to Use Better Life Bingo(BLB)
          </h2>
          <p>Small changes and everyday choices can greatly affect health and well-being. At the end of each day, click on the activities you chose to do that day. Get “Bingo” by connecting five of these across, down or diagonally. Get enough “Bingo Days” and you know you are on the right track to wellness!</p>
      </section>
    </div>
  </body>
</html>