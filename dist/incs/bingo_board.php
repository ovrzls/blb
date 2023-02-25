<?php
$index = 0;
for( $y=0; $y<5; $y++ ){
    for( $x=0; $x<5; $x++ ){
    ?>
    <div class="<?php echo $x==2 && $y==2 ? "freespace" : "tile"; ?>" data-x="<?php echo $x; ?>" data-y="<?php echo $y; ?>">
        <?php
        if($x==2 && $y==2) {
            ?>
            <img src="/images/betterlifebingo.png" />
            <?php
        } else {
            echo "<p>".$bingoArr[$index]."</p>";
            $index++;
        }
        ?>
    </div>
    <?php
    }
}