<?php
$index = 0;
for( $y=0; $y<5; $y++ ){
    for( $x=0; $x<5; $x++ ){
    ?>
    <div class="<?php echo $x==2 && $y==2 ? "freespace" : "tile"; ?>">
    <?php
        if($x==2 && $y==2) {
            ?>
            <img src="/images/betterlifebingo.png" alt="Better Life Bingo, Free Space" />
            <?php
        } else {
            ?>
        <input type="checkbox" name="tile<?php echo $index; ?>" id="tile<?php echo $index; ?>" data-x="<?php echo $x; ?>" data-y="<?php echo $y; ?>">
        <label for="tile<?php echo $index; ?>">
            <?php
                echo "<p>".$bingoArr[$index]."</p>";
                $index++;
            ?>
        </label>
        <?php
        }
        ?>
    </div>
    <?php
    }
}