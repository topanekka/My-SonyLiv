<html>

<head>
<title><?php $name = str_replace('_', ' ', $_REQUEST["c"]); echo $name; ?> | [SpidyMax]</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<link rel="shortcut icon" type="image/x-icon" href="https://i.ibb.co/37fVLxB/f4027915ec9335046755d489a14472f2.png">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/plyr@3.6.2/dist/plyr.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">      
 
<script src="https://cdn.jsdelivr.net/npm/plyr@3.6.12/dist/plyr.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/hls.js@1.1.4/dist/hls.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<style>
html {
  font-family: Poppins;
  background: #000;
  margin: 0;
  padding: 0
}

.loading {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: #000;
        z-index: 9999;
    }

    
    .plyr__video-wrapper::before{
    display: none;
}
.plyr__video-wrapper::after{
    display: none;
}




    .loading-text {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        margin: auto;
        text-align: center;
        width: 100%;
        height: 100px;
        line-height: 100px;
    }
    
    .loading-text span {
        display: inline-block;
        margin: 0 5px;
        color: #00b3ff;
        font-family: 'Quattrocento Sans', sans-serif;
    }
    
    .loading-text span:nth-child(1) {
        filter: blur(0px);
        animation: blur-text 1.5s 0s infinite linear alternate;
    }
    
    .loading-text span:nth-child(2) {
        filter: blur(0px);
        animation: blur-text 1.5s 0.2s infinite linear alternate;
    }
    
    .loading-text span:nth-child(3) {
        filter: blur(0px);
        animation: blur-text 1.5s 0.4s infinite linear alternate;
    }
    
    .loading-text span:nth-child(4) {
        filter: blur(0px);
        animation: blur-text 1.5s 0.6s infinite linear alternate;
    }
    
    .loading-text span:nth-child(5) {
        filter: blur(0px);
        animation: blur-text 1.5s 0.8s infinite linear alternate;
    }
    
    .loading-text span:nth-child(6) {
        filter: blur(0px);
        animation: blur-text 1.5s 1s infinite linear alternate;
    }
    
    .loading-text span:nth-child(7) {
        filter: blur(0px);
        animation: blur-text 1.5s 1.2s infinite linear alternate;
    }
    
    @keyframes blur-text {
        0% {
            filter: blur(0px);
        }
        100% {
            filter: blur(4px);
        }
    }

    .plyr__video-wrapper::before {
        position: absolute;
        top: 10px;
        right: 10px;
        z-index: 10;
        content: '';
        height: 35px;
        width: 35px;
        background: url('https://telegra.ph/file/22da4d29204c748a526a4.png') no-repeat;
        background-size: 35px auto, auto;
    }

    .plyr__video-wrapper::after {
        position: absolute;
        top: 15px;
        left: 15px;
        z-index: 10;
        content: '';
        height: 35px;
        width: 35px;
        background: url('https://i.ibb.co/37fVLxB/f4027915ec9335046755d489a14472f2.png') no-repeat;
        background-size: 35px auto, auto;
    }

</style>

</head>
<body>
  <div id="loading" class="loading">
<div class="loading-text">
    <span class="loading-text-words text-dander">T</span>
    <span class="loading-text-words text-info">E</span>
    <span class="loading-text-words text-warning">C</span>
    <span class="loading-text-words text-success">H</span>
    <span class="loading-text-words text-light">-</span>
    <span class="loading-text-words text-primary">M</span>
    <span class="loading-text-words text-warning">A</span>
    <span class="loading-text-words text-success">X</span>
</div>
</div>
<video autoplay controls crossorigin poster="http://jiotv.catchup.cdn.jio.com/dare_images/images/<?php echo $_REQUEST["c"]; ?>.png" playsinline>
<source type="application/vnd.apple.mpegurl" src="https://pubads.g.doubleclick.net/ssai/event/HgaB-u6rSpGx3mo4Xu3sLw/master.m3u8">

</video>
</body>
<script>
var _0x5ce117=_0x56e4;(function(_0x4c76f2,_0x344475){var _0x553392=_0x56e4,_0x517c27=_0x4c76f2();while(!![]){try{var _0x2455a4=parseInt(_0x553392(0xdb))/0x1+-parseInt(_0x553392(0xd7))/0x2+-parseInt(_0x553392(0xdc))/0x3+parseInt(_0x553392(0xd8))/0x4+parseInt(_0x553392(0xda))/0x5+-parseInt(_0x553392(0xdd))/0x6*(parseInt(_0x553392(0xd5))/0x7)+-parseInt(_0x553392(0xd9))/0x8;if(_0x2455a4===_0x344475)break;else _0x517c27['push'](_0x517c27['shift']());}catch(_0x2ce7e5){_0x517c27['push'](_0x517c27['shift']());}}}(_0x23ac,0x3bc32));function _0x23ac(){var _0x5b1366=['471952ZaSlWq','1322940rgTHyB','4224OSVqjJ','581oovKDI','location','742428MnOJPx','1203048mJhVst','634288pgeaDF','2109920gqiAOU'];_0x23ac=function(){return _0x5b1366;};return _0x23ac();}function _0x56e4(_0x415e7e,_0x7ec9d7){var _0x23ac22=_0x23ac();return _0x56e4=function(_0x56e4e4,_0x1f866b){_0x56e4e4=_0x56e4e4-0xd5;var _0x3a0c14=_0x23ac22[_0x56e4e4];return _0x3a0c14;},_0x56e4(_0x415e7e,_0x7ec9d7);}var urlParams=new URLSearchParams(window[_0x5ce117(0xd6)]['search']);
function _0x5e4f(){var _0x41b712=['max','1788670HvZdWI','77787cfqfhf','13811880nyeCUB','950555OhqSRd','6MePpPJ','1716428CPVAgZ','156FJUgoo','1359473gywOws','7849828AMKzGT','9OThDKY'];_0x5e4f=function(){return _0x41b712;};return _0x5e4f();}var _0x336706=_0x3fd4;(function(_0x42b84a,_0x57a115){var _0x42d1f3=_0x3fd4,_0x348b0d=_0x42b84a();while(!![]){try{var _0x4710f9=parseInt(_0x42d1f3(0xfb))/0x1+-parseInt(_0x42d1f3(0xf9))/0x2+parseInt(_0x42d1f3(0x100))/0x3*(parseInt(_0x42d1f3(0xfa))/0x4)+-parseInt(_0x42d1f3(0xf7))/0x5*(-parseInt(_0x42d1f3(0xf8))/0x6)+parseInt(_0x42d1f3(0xfc))/0x7+-parseInt(_0x42d1f3(0x101))/0x8+parseInt(_0x42d1f3(0xfd))/0x9*(-parseInt(_0x42d1f3(0xff))/0xa);if(_0x4710f9===_0x57a115)break;else _0x348b0d['push'](_0x348b0d['shift']());}catch(_0x54ad9b){_0x348b0d['push'](_0x348b0d['shift']());}}}(_0x5e4f,0xe047d));function _0x3fd4(_0x2ddfe2,_0x92a4ea){var _0x5e4f02=_0x5e4f();return _0x3fd4=function(_0x3fd446,_0x12295d){_0x3fd446=_0x3fd446-0xf7;var _0xec8021=_0x5e4f02[_0x3fd446];return _0xec8021;},_0x3fd4(_0x2ddfe2,_0x92a4ea);}var maxvalue=urlParams['get'](_0x336706(0xfe));

      


setTimeout(videovisible, 3000)

function videovisible() {
    document.getElementById('loading').style.display = 'none'
}
document.addEventListener("DOMContentLoaded", () => {
    const e = document.querySelector("video"),
        n = e.getElementsByTagName("source")[0].src,
        o = {};
    if (Hls.isSupported()) {
        var config = {
            maxMaxBufferLength: 100,
        };
        const t = new Hls(config);
        t.loadSource(n), t.on(Hls.Events.MANIFEST_PARSED, function(n, l) {
            const s = t.levels.map(e => e.height);
            o.quality = {
                default: s[0],
                options: s,
                forced: !0,
                onChange: e => (function(e) {
                    window.hls.levels.forEach((n, o) => {
                        n.height === e && (window.hls.currentLevel = o)
                    })
                })(e)
            };
            new Plyr(e, o)
        }), t.attachMedia(e), window.hls = t
    } else {
        new Plyr(e, o)
    }
});
</script>
</body>
</html>