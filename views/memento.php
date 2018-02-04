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
        <a href="#" class="w3-bar-item w3-button">Templates</a>
        <a href="#" class="w3-bar-item w3-button">Exceptions</a>
        <a href="#" class="w3-bar-item w3-button">Pointers</a>
    </div>

    <div class="w3-main-medium" style="margin-left: 250px">
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