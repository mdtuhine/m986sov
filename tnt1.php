<!DOCTYPE html>
<html>
<head>
    <title>Video Player</title>
    <meta content="noindex, nofollow, noarchive" name="robots"/>
    <meta name="referrer" content="no-referrer" />
    <link rel="stylesheet" type="text/css" href="https://mhdmaxtv.net/players/jw.css">

    <script src='https://cdn.jwplayer.com/libraries/MAaRkUjT.js'></script>
        <script>jwplayer.key = "jTL7dlu7ybUI5NZnDdVgb1laM8/Hj3ftIJ5Vqg==";</script>
        <script disable-devtool-auto src='//cdn.jsdelivr.net/npm/disable-devtool@latest'></script>
<style>
    body {
      margin: 0;
    }

    .jwplayer {
      position: absolute !important;
    }

    .jwplayer.jw-flag-aspect-mode {
      min-height: 100%;
      max-height: 100%;
    }
  </style>
</head>
<body>
    <div id="player" class="ViostreamIframe"></div>

    <script>
        function getParameterByName(name) {
            name = name.replace(/[\[\]]/g, "\\$&");
            var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
                results = regex.exec(window.location.href);
            if (!results) return null;
            if (!results[2]) return '';
            return decodeURIComponent(results[2].replace(/\+/g, " "));
        }

        var ConfiguracionCanales = {
            
            "USANETWORK": {
                url: "//fsly.stream.peacocktv.com/Content/CMAF_OL1-CTR-4s/Live/channel(usa-east)/master.mpd",
                k1: "882c9f5613b43b47adc70aa968a308ce",
                k2: "de534ef8914bfe62ba3cdd6bdb9e1c04"
            },
            "USANETWORK_WEST": {
                url: "https://ottb.live.cf.ww.aiv-cdn.net/lhr-nitro/live/clients/dash/enc/wf8usag51e/out/v1/bd3b0c314fff4bb1ab4693358f3cd2d3/cenc.mpd",
                k1: "ae26845bd33038a9c0774a0981007294",
                k2: "63ac662dde310cfb4cc6f9b43b34196d"
            },
        };

var id = getParameterByName('id');
var config = ConfiguracionCanales[id];

if (config) {
    var sources = [];

    if (config.url.includes('.m3u8')) {
        sources.push({
            file: config.url
        });
    }
    
    if (config.url.includes('.mpd') && config.k1 && config.k2) {
        sources.push({
            file: config.url,
            drm: {"clearkey": {"keyId": config.k1, "key": config.k2}}
        });
    }

 //JWWWWWW
    jwplayer("player").setup({
        playlist: [{
            sources: sources
        }],
        autostart: true,
        width: "100%", 
        height: "100%", 
        stretching: "exactfit",
        aspectratio: "16:9",
        cast: {}, 
                
        });
        }
    </script>
</body>
</html>
