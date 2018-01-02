<body>
    <div
        class="w3-sidebar w3-bar-block w3-collapse w3-card w3-animate-left"
        style="width: 200px;" id="mySidebar">
        <button
            class="w3-bar-item w3-button w3-large w3-hide-large w3-hide-medium"
            onclick="w3_close()">Close &times;</button>
        <a href="#" class="w3-bar-item w3-button">Link 1</a>
        <a href="#" class="w3-bar-item w3-button">Link 2</a>
        <a href="#" class="w3-bar-item w3-button">Link 3</a>
    </div>

    <div class="w3-main-medium" style="margin-left: 200px">
        <div class="w3-teal">
            <button
                class="w3-button w3-teal w3-xlarge w3-hide-large w3-hide-medium"
                onclick="w3_open()">&#9776;</button>
            <div class="w3-container">
                <h1>C++ Mememto</h1>
            </div>
        </div>

        <div class="w3-panel">
            <h3>Templates</h3>
            <?php echo $synapse ?>
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