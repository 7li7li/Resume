﻿<div class="back-to-top"></div>

    <!-- SVG masks -->
    <svg class="svg-defs">
        <clipPath id="avatar-box">
            <path d="M1.85379 38.4859C2.9221 18.6653 18.6653 2.92275 38.4858 1.85453 56.0986.905299 77.2792 0 94 0c16.721 0 37.901.905299 55.514 1.85453 19.821 1.06822 35.564 16.81077 36.632 36.63137C187.095 56.0922 188 77.267 188 94c0 16.733-.905 37.908-1.854 55.514-1.068 19.821-16.811 35.563-36.632 36.631C131.901 187.095 110.721 188 94 188c-16.7208 0-37.9014-.905-55.5142-1.855-19.8205-1.068-35.5637-16.81-36.63201-36.631C.904831 131.908 0 110.733 0 94c0-16.733.904831-37.9078 1.85379-55.5141z"/>
        </clipPath>
        <clipPath id="avatar-hexagon">
             <path d="M0 27.2891c0-4.6662 2.4889-8.976 6.52491-11.2986L31.308 1.72845c3.98-2.290382 8.8697-2.305446 12.8637-.03963l25.234 14.31558C73.4807 18.3162 76 22.6478 76 27.3426V56.684c0 4.6805-2.5041 9.0013-6.5597 11.3186L44.4317 82.2915c-3.9869 2.278-8.8765 2.278-12.8634 0L6.55974 68.0026C2.50414 65.6853 0 61.3645 0 56.684V27.2891z"/>
        </clipPath>		
    </svg>

	<!-- JavaScripts -->
	<script src="<?php $this->options->themeUrl('assets/js/jquery-3.4.1.min.js'); ?>"></script>
	<script src="<?php $this->options->themeUrl('assets/js/plugins.js'); ?>"></script>
	<script src="<?php $this->options->themeUrl('assets/js/common.js'); ?>"></script>
	<script type = "text/javascript" >



function switchNightMode() {  
  


    var night = document.cookie.replace(/(?:(?:^|.*;\s*)night\s*\=\s*([^;]*).*$)|^.*$/, "$1") || "0";
    if (night == "0") {
          $("head").append("<link>");
    css = $("head").children(":last");
    css.attr({
        rel: "stylesheet",
        type: "text/css",
        href: "https://www.guoyanys.com/usr/themes/vCard/assets/styles/style-dark.css"
		
    });
        document.cookie = "night=1;path=/";
        console.log("夜间模式开启")
    } else {
        removejscssfile("style-dark.css","css")
        document.cookie = "night=0;path=/";
        console.log("夜间模式关闭")
    }
} (function() {
    if (document.cookie.replace(/(?:(?:^|.*;\s*)night\s*\=\s*([^;]*).*$)|^.*$/, "$1") === "") {
        if (new Date().getHours() > 21 || new Date().getHours() < 6) {
            $("head").append("<link>");
    css = $("head").children(":last");
    css.attr({
        rel: "stylesheet",
        type: "text/css",
        href: "https://www.guoyanys.com/usr/themes/vCard/assets/styles/style-dark.css"
		
    });
            document.cookie = "night=1;path=/";
            console.log("夜间模式开启")
        } else {
           removejscssfile("style-dark.css","css")
            document.cookie = "night=0;path=/";
            console.log("夜间模式关闭")
        }
    } else {
        var night = document.cookie.replace(/(?:(?:^|.*;\s*)night\s*\=\s*([^;]*).*$)|^.*$/, "$1") || "0";
        if (night == "0") {
            removejscssfile("style-dark.css","css")
        } else {
            if (night == "1") {
                $("head").append("<link>");
    css = $("head").children(":last");
    css.attr({
        rel: "stylesheet",
        type: "text/css",
        href: "https://www.guoyanys.com/usr/themes/vCard/assets/styles/style-dark.css"
		
    });
            }
        }
    }
})();

function removejscssfile(filename,filetype){

var targetelement=(filetype=="js")? "script" :(filetype=="css")? "link" : "none"

var targetattr=(filetype=="js")?"src" : (filetype=="css")? "href" :"none"

var allsuspects=document.getElementsByTagName(targetelement)

for (var i=allsuspects.length; i>=0;i--){

if (allsuspects[i] &&allsuspects[i].getAttribute(targetattr)!=null && allsuspects[i].getAttribute(targetattr).indexOf(filename)!=-1)

  allsuspects[i].parentNode.removeChild(allsuspects[i])

}

}


</script>
<?php $this->footer(); ?>
<?php if ($this->options->foothtml): ?>
<?php $this->options->foothtml(); ?>
<?php endif; ?>
<?php if ($this->is('post')) : ?>
<?php if ($this->options->baiduappdi): ?>
<script type="application/ld+json">
        {
            "@context": "https://ziyuan.baidu.com/contexts/cambrian.jsonld",
            "@id": "<?php $this->permalink() ?>",
            "appid": "<?php $this->options->baiduappdi(); ?>",
            "title": "<?php $this->title() ?>",
            "images": ["<?php $this->fields->img(); ?>"],
            "description": "<?php $this->description() ?>",
            "pubDate": "<?php $this->date('Y-m-d\TH:i:s'); ?>"
        }
</script>
<?php endif; ?>
<?php endif; ?>
</body>
</html>