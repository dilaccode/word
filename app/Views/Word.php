<div class="w3-container w3-center ">
    <!-- word container -->
    <div class="word-container w3-border-top w3-border-left w3-border-right w3-border-blue">
        <!-- word -->
        <div class='<?php echo $classWordSize ?> w3-text-blue upper'><?php echo $wordObj->word ?></div>
  
        <!-- definition -->
        <div class='mean w3-xxlarge'>
            <?php echo $wordObj->mean; ?>
        </div>
        <div class='meanWithLinks w3-xxlarge'>
            <?php echo $wordObj->meanWithLinks; ?>
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
        <div class="w3-xlarge w3-left-align">Up to level <?php echo $Stats->level ?>:</div>
        <div class="w3-xlarge upper">
            <?php foreach ($LowSeeWords as $Word): ?>
                <a href="/public/home/word/<?php echo $Word->word ?>">
                    <?php echo $Word->word ?>
                </a>
                <br>
            <?php endforeach; ?>    
        </div>
    </div>
    <!-- level -->
    <div class="w3-border-left w3-border-right w3-border-green w3-large w3-left-align w3-padding-small">
        Your level: <?php echo $Stats->level ?>.<br>
        Highest word saw: <?php echo $Stats->highest ?>.
    </div>
    <!-- home -->
    <div class="w3-border-left w3-border-right w3-border-green">
        <a href="/public" class="w3-large w3-text-green">HOME</a>
    </div>
    <div style="margin-top:1em;"></div>
<!-- / w3-container -->
</div>