
<div class="w3-card-4 synapse" style="width: 100%">
    <header class="w3-row syn-top-row" style="margin-left: 16px">
        <div class="w3-dropdown-hover w3-right syn-related-questions">
            <a class="w3-button w3-white">
                <i class="fa fa-ellipsis-v"></i>
            </a>
            <div class="w3-dropdown-content w3-bar-block w3-card-4" style="min-width: 20px; right:0">
                <a href="#" class="w3-bar-item w3-button" onclick="openSynLB(this)">
                    <i class="fa fa-pencil"></i>
                </a>
                <a href="#" class="w3-bar-item w3-button">
                    <i class="fa fa-trash"></i>
                </a>
                <a href="#" class="w3-bar-item w3-button">
                    <i class="fa fa-cog"></i>
                </a>
            </div>
        </div>
        <div class="w3-dropdown-hover w3-right syn-actions">
            <a class="w3-button w3-white">
                <span class="fa-stack">
                    <i class="fa fa-circle-thin fa-stack-2x"></i>
                    <i class="fa fa-link fa-stack-1x"></i>
                </span>
            </a>
            <div class="w3-dropdown-content w3-bar-block w3-card-4" style="right:0">
                <?php
                foreach ($questions as $question) {
                    echo '<a href="#" class="w3-bar-item w3-button">' . $question . '</a>';
                }
                ?>
            </div>
        </div>
        <h3><?php echo $questions[0] ?></h3>
    </header>
    <div class="w3-row syn-center-row">
        <div class="w3-container w3-leftbar w3-border-grey syn-main-sentence">
                <!--<p>When to use?</p>
                <hr>
                <img src="img_avatar3.png" alt="Avatar"
                        class="w3-left w3-circle w3-margin-right w3-margin-bottom" style="width: 60px">-->
            <h4><?php echo $main ?></h4>
        </div>
        <div class="w3-hide w3-container w3-leftbar w3-border-grey w3-animate-opacity syn-more-container">
            <h5><?php echo $details->text ?></h5>
            <br>
        </div>
        <div class="w3-hide w3-panel w3-light-grey w3-animate-opacity syn-example-container">
            <h4>Example</h4>
            <div class="w3-code" style="position:relative;min-height:100px;">
                <code  class="syn-code-ground" id="code-ground-<?php echo $_id?>">
                    <?php echo $details->code ?>
                </code>
            </div>		
        </div>
        <div class="w3-hide w3-container w3-animate-opacity syn-tags-container">
            <?php
            foreach ($tags as $tag) {
                echo '<span class="w3-tag w3-color-grey">' . $tag . '</span>';
            }
            ?>
            <br>
        </div>
    </div>
    <div class="w3-row w3-light-grey syn-bottom-row">
        <div class="w3-bar">
            <a href="#" class="w3-bar-item w3-button w3-right w3-hover-teal syn-tag-button"
               onclick="toggleSynElt(this,'.syn-tags-container')">
                <span class="fa-stack">
                    <i class="fa fa-tags"></i>
                </span>
            </a>
            <a href="#" class="w3-bar-item w3-button w3-right w3-hover-teal syn-code-button"
               onclick="toggleSynElt(this,'.syn-example-container')">
                <span class="fa-stack">
                    <i class="fa fa-circle-thin fa-stack-2x"></i>
                    <i class="fa fa-code fa-stack-1x"></i>
                </span>
            </a>
            <a href="#" class="w3-bar-item w3-button w3-right w3-hover-teal syn-more-button"
               onclick="toggleSynElt(this, '.syn-more-container')">
                <span class="fa-stack">
                    <i class="fa fa-plus"></i>
                </span>more
            </a>
        </div>	
    </div>
</div>