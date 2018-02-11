<body>
    <div
        class="w3-sidebar w3-bar-block w3-collapse w3-card w3-animate-left"
        style="min-width: 200px;width: 250px" id="mySidebar">
        <button
            class="w3-bar-item w3-button w3-large w3-hide-large w3-hide-medium"
            onclick="w3_close()">Close &times;</button>
        <div class="w3-bar-item w3-teal">
            <h2>C++ Memento</h2>
        </div>
        <?php
        foreach (($mem_config['chapter_list']) as $chapter) {
            echo '<a href = "#" class = "w3-bar-item w3-button">' . $chapter . '</a>';
        }
        ?>
    </div>

    <div class="w3-main-medium" style="margin-left: 250px">
        <div class="w3-teal">
            <button
                class="w3-button w3-teal w3-xlarge w3-hide-large w3-hide-medium"
                onclick="w3_open()">&#9776;</button>
            <div class="w3-container w3-hide-large w3-hide-medium">
                <h1><?php echo $mem_config['title'] ?></h1>
            </div>
            <div class='w3-container w3-padding w3-hide-small'>
                <h2><?php echo $mem_config['desc'] ?></h2>
            </div>
        </div>

        <div class="w3-panel">
            <h3><?php echo $mem_config['chapter_list'][0] ?></h3>
            <?php
            foreach ($synapses as $synapse) {
                echo '<div class="w3-panel">' . $synapse . '</div>';
            }
            ?>
        </div>

    </div>

    <script type="text/javascript">
        function w3_open() {
            document.getElementById("mySidebar").style.display = "block";
        }
        function w3_close() {
            document.getElementById("mySidebar").style.display = "none";
        }
    </script>

</body>