<?php include("./incs/head.php"); ?>
<div class="main">
    <header>
        <h1>Wellness Bingo</h1>
        <p>Reflect on your day and see if you had a bingo day. Share your board (win or loose) with your partner, friend, or parent so they can learn about your day.</p>
    </header>
    <div class="board-content">
        <div class="tile-grid" id="gameboard">
        <?php
        include("./incs/bingo_lists.php");
        $bingoArr = $bingolists["wellness"];
        shuffle($bingoArr);
        if( count($bingoArr) >= 24 ):
            include("incs/bingo_board_checkboxes.php");
        else:
            echo "<h2>There doesn't appear to be enough tiles to show please let me know.</h2>";        
        endif;
        ?>
        </div><!-- eo .tile-grid -->
    </div><!-- eo .board-content -->
</div><!-- eo .main -->
<?php include('incs/foot.php'); ?>