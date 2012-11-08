<div class="title-main"><h3>Dự án nổi bật</h3></div>
<div class="list_carousel box-border-round box-shadow">
    <ul id="list-slider">
        <li>
            <a href="#" title="">
                <img class="img-border img-middle" src="data/hot-projects/building_0.jpg" alt="" />
                Sunny Villa
            </a>
        </li>
        <li>
            <a href="#" title="">
                <img class="img-border img-middle" src="data/hot-projects/building_1.jpg" alt="" />
                Green Bay Tower
            </a>
        </li>
        <li>
            <a href="#" title="">
                <img class="img-border img-middle" src="data/hot-projects/building_2.jpg" alt="" />
                Nam Đô Complex
            </a>
        </li>
        <li>
            <a href="#" title="">
                <img class="img-border img-middle" src="data/hot-projects/building_3.jpg" alt="" />
                Tân Tây Đô
            </a>
        </li>
        <li>
            <a href="#" title="">
                <img class="img-border img-middle" src="data/hot-projects/building_4.jpg" alt="" />
                Donphin Plaza
            </a>
        </li>
        <li>
            <a href="#" title="">
                <img class="img-border img-middle" src="data/hot-projects/building_5.jpg" alt="" />
                Golden land
            </a>
        </li>
        <li>
            <a href="#" title="">
                <img class="img-border img-middle" src="data/hot-projects/building_6.jpg" alt="" />
                 Green Bay Tower
            </a>
        </li>
        <li>
            <a href="#" title="">
                <img class="img-border img-middle" src="data/hot-projects/building_7.jpg" alt="" />
                Sunny Villa
            </a>
        </li>
        <li>
            <a href="#" title="">
                <img class="img-border img-middle" src="data/hot-projects/building_8.jpg" alt="" />
                Donphin Plaza
            </a>
        </li>
        <li>
            <a href="#" title="">
                <img class="img-border img-middle" src="data/hot-projects/building_9.jpg" alt="" />
                Golden land
            </a>
        </li>
        <li>
            <a href="#" title="">
                <img class="img-border img-middle" src="data/hot-projects/building_10.jpg" alt="" />
                Green Bay Tower
            </a>
        </li>
    </ul>
    <div class="clearfix"></div>
    <div id="timer1" class="timer"></div>
</div>
<!-- include carouFredSel plugin -->
<script type="text/javascript" language="javascript" src="js/slider/jquery.carouFredSel-6.1.0-packed.js"></script>

<!-- optionally include helper plugins -->
<script type="text/javascript" language="javascript" src="js/slider/jquery.mousewheel.min.js"></script>
<script type="text/javascript" language="javascript" src="js/slider/jquery.touchSwipe.min.js"></script>
<script type="text/javascript" language="javascript" src="js/slider/jquery.ba-throttle-debounce.min.js"></script>

<!-- fire plugin onDocumentReady -->
<script type="text/javascript" language="javascript">
    $(function() {
        //	Basic carousel + timer
        $('#list-slider').carouFredSel({
            auto: {
                pauseOnHover: 'resume',
                progress: '#timer1'
            }
        });
    });
</script>