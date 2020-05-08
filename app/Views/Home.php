<div class="w3-container w3-center ">
    <div class='w3-xxlarge w3-text-green upper'>
        Learn Word
    </div>
    <!-- recommend words -->
    <div class="w3-border w3-border-green w3-padding-small">
        <div class="w3-xlarge w3-left-align">
            Start with some words:<br>
            <span class="w3-large">(click on words below)</span>
        </div>
        <div class="w3-xxlarge upper w3-text-blue">
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


<!-- / w3-container -->
</div>