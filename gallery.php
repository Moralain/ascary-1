<div id="content">
    <span id ="decoration" style="display:none">
        <img src="images/bigDisk.png" id="bigDisk"/>
        <img src="images/smallDisk.png" id="smallDisk" />
        <img src="images/nut.png" id="nut" />   
    </span>
    <div class="slider-wrapper theme-bar">
        <div id="slider" class="nivoSlider">
            <?php
            // Aï¿½adir las imï¿½genes de la carpeta 'slider' para mostrarlas en el slider.
            $directory = "images/slider/";
            $images = glob($directory . "*.{jpg,gif,png}", GLOB_BRACE);
            foreach ($images as $image) {
                $dir = explode("/", $image);
                $filename = end($dir);
                $alt = explode(".", $filename);
                // echo "<div class='slide'><img class='lazy-fadeIn' src='images/loading.gif' data-src='$image' alt='$alt[0]' style='position:relative; top:120px; left:265px;'/></div>";
                echo "<img src='$image' data-thumb='$image' alt='$alt[0]' />";
            }
            ?>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready (function () {
            $("#slider").nivoSlider();
        });
    </script>
</div>