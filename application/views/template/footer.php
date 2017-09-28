<?php
/**
 * Created by PhpStorm.
 * User: Andrey
 * Date: 27.09.2017
 * Time: 21:20
 */
?>
<div class="hidden"></div>

<!--[if lt IE 9]>
<script src="<?php echo base_url('libs/html5shiv/es5-shim.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/libs/html5shiv/html5shiv.min.js');?>"></script>
<script src="<?php echo base_url('assets/libs/html5shiv/html5shiv-printshiv.min.js');?>"></script>
<script src="<?php echo base_url('assets/libs/respond/respond.min.js');?>"></script>
<![endif]-->

<!-- Load CSS -->
<script>
    function loadCSS(hf) {
        var ms=document.createElement("link");ms.rel="stylesheet";
        ms.href=hf;document.getElementsByTagName("head")[0].appendChild(ms);
    }
    loadCSS("<?php echo base_url('assets/libs/animate/animate.css'); ?>"); //Load Libs CSS: Animate CSS
    loadCSS("<?php echo base_url('assets/css/_header.css');?>");              //Header Styles (compress & paste to header after release)
    loadCSS("<?php echo base_url('assets/css/_main.css');?>");                //User Styles: Main
    loadCSS("<?php echo base_url('assets/css/_media.css');?>");               //User Styles: Media
</script>

<!-- Load CSS compiled without Bootstrap & Header styles (after release) -->
<script>var ms=document.createElement("link");ms.rel="stylesheet";
    // ms.href="compiled.min.css";document.getElementsByTagName("head")[0].appendChild(ms);
</script>

<!-- Load Scripts -->
<script>var scr = {"scripts":[
        {"src" : "<?php echo base_url('assets/libs/modernizr/modernizr.js');?>", "async" : false},
        {"src" : "<?php echo base_url('assets/libs/jquery/jquery-1.11.2.min.js');?>", "async" : false},
        {"src" : "<?php echo base_url('assets/libs/waypoints/waypoints.min.js');?>", "async" : false},
        {"src" : "<?php echo base_url('assets/libs/animate/animate-css.js');?>", "async" : false},
        {"src" : "<?php echo base_url('assets/libs/plugins-scroll/plugins-scroll.js');?>", "async" : false},
        {"src" : "<?php echo base_url('assets/js/common.js');?>", "async" : false}
    ]};!function(t,n,r){"use strict";var c=function(t){if("[object Array]"!==Object.prototype.toString.call(t))return!1;for(var r=0;r<t.length;r++){var c=n.createElement("script"),e=t[r];c.src=e.src,c.async=e.async,n.body.appendChild(c)}return!0};t.addEventListener?t.addEventListener("load",function(){c(r.scripts);},!1):t.attachEvent?t.attachEvent("onload",function(){c(r.scripts)}):t.onload=function(){c(r.scripts)}}(window,document,scr);
</script>

</body>
</html>
