<?php include("./incs/head.php"); ?>
<div class="main">
    <header>
        <h1>Teen Bingo</h1>
        <p>Take this time for yourself to reflect on the day. What did you do that you can be proud of? What would you like to repeat. If you share your reflection of the day with someone you care about it will be a double bingo helping to forge connections with that person. Good Luck!</p>
        
    </header>
    <div class="board-content">
        <div class="tile-grid" id="gameboard">
        <?php
        include("./incs/bingo_lists.php");
        $bingoArr = $bingolists["youth"];
        shuffle($bingoArr);
        if( count($bingoArr) >= 24 ):
            include("incs/bingo_board.php");
        else:
            echo "<h2>There doesn't appear to be enough tiles to show please let me know.</h2>";        
        endif;
        ?>
        </div><!-- eo .tile-grid -->
    </div><!-- eo .board-content -->
</div><!-- eo .main -->
<?php include('incs/foot.php'); ?>