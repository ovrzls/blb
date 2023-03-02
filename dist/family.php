<?php include("./incs/head.php"); ?>
<div class="main">
    <header>
        <h1>Family Bingo</h1>
        <h2>What made you laugh? What made you sad or mad?</h2>
        <p>This is a great way to look back on your day. Think about those little positive decisions you made and talk with someone you love about how you felt today.</p>
    </header>
    <div class="board-content">
        <div class="tile-grid" id="gameboard">
        <?php
        include("./incs/bingo_lists.php");
        $bingoArr = $bingolists["standard"];
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