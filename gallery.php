<div id="content">
    <span id ="decoration" style="display:none">
        <img src="images/bigDisk.png" id="bigDisk"/>
        <img src="images/smallDisk.png" id="smallDisk" />
        <img src="images/nut.png" id="nut" />   
    </span>
    <div class="slider-wrapper theme-bar">
        <div id="slider" class="nivoSlider">
           <img src="images/slider/bike01.png" />
           <img src="images/slider/bike02.png" />
           <img src="images/slider/bike03.png" />
           <img src="images/slider/bike04.png" />
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready (function () {
            $("#slider").nivoSlider({
				 effect: 'fade',
				 directionNav: false
			});
        });
    </script>
</div>