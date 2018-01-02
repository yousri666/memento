
<div class="w3-card-4 synapse" style="width: 100%">
    <header class="w3-row" style="margin-left: 16px">
        <div class="w3-dropdown-hover w3-right synapse-related-questions">
            <a class="w3-button w3-white">
                <span class="fa-stack">
                    <i class="fa fa-circle-thin fa-stack-2x"></i>
                    <i class="fa fa-link fa-stack-1x"></i>
                </span>
            </a>
            <div class="w3-dropdown-content w3-bar-block w3-card-4" style="right:0">
                <a href="#" class="w3-bar-item w3-button">When using template?</a>
                <a href="#" class="w3-bar-item w3-button">Why templates?</a>
                <a href="#" class="w3-bar-item w3-button">How using templates?</a>
            </div>
        </div>
        <h3>What are templates?</h3>
        <p></p>
    </header>
    <div class="w3-container w3-leftbar w3-border-grey syn-main-sentense">
            <!--<p>When to use?</p>
            <hr>
            <img src="img_avatar3.png" alt="Avatar"
                    class="w3-left w3-circle w3-margin-right w3-margin-bottom" style="width: 60px">-->
        <h4>They are used when you want to perform a same code but on different
            argument's type and/or return type.
        </h4>
    </div>
    <div class="w3-hide w3-container w3-leftbar w3-border-grey w3-animate-opacity syn-more-container">
        <h5>Here we create a function that take 2 generic type 'T' and return that Type 'T'</h5>
        <br>
    </div>
    <div class="w3-hide w3-panel w3-light-grey w3-animate-opacity syn-example-container">
        <h4>Example</h4>
        <div class="w3-code" style="position:relative;min-height:50px;">
            <code  class="syn-code-ground" id="code-ground">
                template &lt typename T &gt
                T min(const T& a,const T& b) {
                return (a &lt b) ? a : b;
                }
            </code>
        </div>		
    </div>
    <div class="w3-hide w3-container w3-animate-opacity syn-tags-container">
        <span class="w3-tag w3-color-grey">#templates</span>
        <span class="w3-tag w3-color-grey">#c++</span>
        <br>
    </div>
    <div class="w3-row w3-light-grey">
        <div class="w3-bar">
            <a href="#" class="w3-bar-item w3-button w3-right w3-hover-teal syn-tag-button"
               onclick="toggleSynElt('.syn-tags-container')">
                <span class="fa-stack">
                    <i class="fa fa-tags"></i>
                </span>
            </a>
            <a href="#" class="w3-bar-item w3-button w3-right w3-hover-teal syn-code-button"
               onclick="toggleSynElt('.syn-example-container')">
                <span class="fa-stack">
                    <i class="fa fa-circle-thin fa-stack-2x"></i>
                    <i class="fa fa-code fa-stack-1x"></i>
                </span>
            </a>
            <a href="#" class="w3-bar-item w3-button w3-right w3-hover-teal syn-more-button"
               onclick="toggleSynElt('.syn-more-container')">
                <span class="fa-stack">
                    <i class="fa fa-plus"></i>
                </span>more
            </a>
        </div>	
    </div>	
</div>