<!--Banner code-->

<script src="{{url('js/outside/easeljs-0.7.1.min.js')}}"></script>
<script src="{{url('js/outside/tweenjs-0.5.1.min.js')}}"></script>
<script src="{{url('js/outside/movieclip-0.7.1.min.js')}}"></script>
<script src="{{url('js/outside/preloadjs-0.4.1.min.js')}}"></script>
<script src="{{url('js/outside/2.js')}}"></script>

<script>
    var canvas, stage, exportRoot;

    function init() {
        canvas = document.getElementById("canvas");
        images = images||{};

        var loader = new createjs.LoadQueue(false);
        loader.addEventListener("fileload", handleFileLoad);
        loader.addEventListener("complete", handleComplete);
        loader.loadManifest(lib.properties.manifest);
    }

    function handleFileLoad(evt) {
        if (evt.item.type == "image") { images[evt.item.id] = evt.result; }
    }

    function handleComplete() {
        exportRoot = new lib._2();

        stage = new createjs.Stage(canvas);
        stage.addChild(exportRoot);
        stage.update();

        createjs.Ticker.setFPS(lib.properties.fps);
        createjs.Ticker.addEventListener("tick", stage);
    }

    $(document).ready(function() {
       init();
    });
</script>
<!--Banner code-->

<!-- Google Code dành cho Adword -->
<script type="text/javascript">
    var google_tag_params = {
        dynx_itemid: 'REPLACE_WITH_VALUE',
        dynx_itemid2: 'REPLACE_WITH_VALUE',
        dynx_pagetype: 'REPLACE_WITH_VALUE',
        dynx_totalvalue: 'REPLACE_WITH_VALUE',
    };
</script>
<script type="text/javascript">
    /* <![CDATA[ */
    var google_conversion_id = 964027423;
    var google_custom_params = window.google_tag_params;
    var google_remarketing_only = true;
    /* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
    <div style="display:inline;">
        <img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/964027423/?value=0&amp;guid=ON&amp;script=0"/>
    </div>
</noscript>
<!-- Google Code dành cho Adword -->

<!--Analytics-->
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-40782874-1', 'auto');
    ga('send', 'pageview');

</script>
<!--analytics-->