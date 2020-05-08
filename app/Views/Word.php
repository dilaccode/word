<div class="w3-container w3-center ">
    <!-- word container -->
    <div class="word-container w3-border-top w3-border-left w3-border-right w3-border-blue">
        <!-- word -->
        <div class='w3-jumbo w3-text-blue upper'><?php echo $wordObj->word ?></div>
        <!-- definition -->
        <div class='w3-xxlarge'>
            <!-- A <a class='' href="/public/home/word/<?php echo $word ?>123">long</a> -->
            <?php echo $wordObj->mean ?>
        </div>
        <!-- stat -->
        <div class="w3-large w3-border-top w3-border-blue w3-left-align w3-padding-small">
            You saw <span class="upper">
            <?php echo $wordObj->word." ".$wordObj->count; ?>
            </span> times.
        </div>
    </div> 
    <!-- /.word container -->
    <div style="margin-top:1em;"></div>
    <!-- recommend words -->
    <div class="w3-border w3-border-green w3-padding-small">
        <div class="w3-xlarge w3-left-align">Up to level 5:</div>
        <div class="w3-xlarge">
            <a href="/long">long</a> <a href="/long">long</a> <a href="/long">long</a>
        </div>
    </div>
    <!-- level -->
    <div class="w3-border-left w3-border-right w3-border-green w3-large w3-left-align w3-padding-small">
        Your level: 4.<br>
        Highest word saw: 499.
    </div>
    <!-- home -->
    <div class="w3-border-left w3-border-right w3-border-green">
        <a href="/public" class="w3-large w3-text-green">HOME</a>
    </div>
    <div style="margin-top:1em;"></div>
<!-- / w3-container -->
</div>