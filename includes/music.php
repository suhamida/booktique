<!-- Fist CSS -->

<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">

<style type="text/css">
.player {
  background: #242628;
  background: -moz-linear-gradient(top, #242628 0%, #000000 100%);
  background: -webkit-linear-gradient(top, #242628 0%, #000000 100%);
  background: linear-gradient(to bottom, #242628 0%, #000000 100%);
  filter: progid: DXImageTransform.Microsoft.gradient( startColorstr='#242628', endColorstr='#000000', GradientType=0);
  position: absolute;
  bottom: 0px;
  width: 100%;
  z-index: 2;
}

.splitTxt,
.icons {
  color: #ffffff;
}

.trackDetails {
  text-align: center;
  margin: 4px auto;
  width: 300px;
  height: 38px;
  border: 1px solid #1e1e1e;
  background: #000000;
  border-radius: 4px;
  padding: 6px;
}

.title,
.artist {
  color: #999;
  -moz-user-select: none;
  left: 167px;
}

.title {
  font-size: 14px;
  font-weight: bold;
}

.artist {
  font-size: 12px;
}

.playlistIcon,
.volumeIcon {
  position: absolute;
  right: 0;
  cursor: pointer;
  height: 34px;
  width: 32px;
}

.volumeIcon {
  bottom: 6px;
  display: block;
}

.controls {
  cursor: pointer;
  height: 40px;
  width: 120px;
  margin: 0 auto;
}

.controls .play,
.controls .pause,
.controls .rew,
.controls .fwd {
  float: left;
  height: 40px;
  width: 40px;
  line-height: 40px;
  text-align: center;
}

.controls .play,
.controls .pause,
.plIcon,
.volumeIcon {
  font-size: 26px;
}

.controls .pause {
  display: none;
}

.hidden {
  display: none;
}

.controls .visible {
  display: inline-block;
}

.tracker {
  cursor: pointer;
  height: 5px;
}

.ui-widget.ui-widget-content {
  border: 0;
}

.ui-corner-all {
  border-radius: 0;
}

.ui-slider .ui-slider-handle {
  display: block;
  height: 14px;
  border-radius: 14px;
  width: 14px;
  -webkit-transition: all ease-in-out .3s;
  transition: all ease-in-out .3s;
}

.tracker .ui-slider-range {
  background: #00dbde;
  background: -moz-linear-gradient(left, #00dbde 0%, #fc00ff 100%);
  background: -webkit-linear-gradient(left, #00dbde 0%, #fc00ff 100%);
  background: linear-gradient(to right, #00dbde 0%, #fc00ff 100%);
  filter: progid: DXImageTransform.Microsoft.gradient( startColorstr='#00dbde', endColorstr='#fc00ff', GradientType=1);
  -webkit-transition: all ease-in-out .3s;
  transition: all ease-in-out .3s;
  height: 100%;
  top: 0;
}

.volume .ui-slider-range {
  background: #333333;
  -webkit-transition: all ease-in-out .3s;
  transition: all ease-in-out .3s;
}

.volume.ui-widget-content {
  background: #00dbde;
}

.ui-slider-handle {
  cursor: pointer;
  height: 10px;
  margin-left: -5px;
  top: 2px;
  width: 10px;
  z-index: 2;
}

.volume {
  display: none;
  right: 12px;
  position: absolute;
  top: 35px;
  height: 100px;
  width: 20px;
  box-shadow: 0px 0px 10px #000;
}

.volume .ui-slider-handle {
  display: none;
}

.playlist {
  background-color: #1e1e1e;
  list-style-type: none;
  padding-bottom: 10px;
  padding: 15px;
  position: relative;
  width: 100%;
  z-index: 1;
  display: none;
  -webkit-transition: all ease-in-out .1s;
  transition: all ease-in-out .1s;
}

.playlist li {
  color: #eeeeee;
  cursor: pointer;
  margin-bottom: 4px;
  padding: 6px 12px;
  -webkit-transition: all ease-in-out .1s;
  transition: all ease-in-out .1s;
}

.playlist li:hover {
  background: #333333;
}

.playlist li.active {
  font-weight: bold;
  background: #000000;
}

.show {
  display: block;
}

.ui-state-default,
.ui-widget-content .ui-state-default,
.ui-widget-header .ui-state-default,
.ui-button,
html .ui-button.ui-state-disabled:hover,
html .ui-button.ui-state-disabled:active {
  border: 0;
}

.ui-widget-content {
  background: #666666;
}

.cr {
  color: #f9f9f9;
  text-align: center;
}
</style>



  <div class="player">
  <div class="playlistIcon">
    <i class="icons ion-android-list plIcon"></i>
  </div>
  <div class="clearfix"></div>
  <div class="trackDetails ">
    <span class="artist"></span>
    <span class="splitTxt"> - </span>
    <span class="title"></span>
  </div>

  <div class="controls">
    <div class="rew">
      <i class="icons ion-ios-skipbackward"></i>
    </div>
    <div class="play">
      <i class="icons ion-ios-play"></i>
    </div>
    <div class="pause">
      <i class="icons ion-ios-pause"></i>
    </div>

    <div class="fwd">
      <i class="icons ion-ios-skipforward"></i>
    </div>
  </div>
  <div class="volumeIcon">
    <i class="icons ion-android-volume-up"></i>
    <div class="volume"></div>
  </div>

  <div class="tracker"></div>
</div>
<!-- Change your music form here  -->

<ul class="playlist" id="playlist">
  <li audioURL="music/1.mp3" artist="Test-1">Jitni Dafa</li>
  <li audioURL="music/2.mp3" artist="Test-2">Di Bawah</li>
  <li audioURL="music/3.mp3" artist="Test-3">Monogram</li>
  <li audioURL="music/4.mp3" artist="Test-4">Vagabond</li>
  <li audioURL="music/5.mp3" artist="Test-5">Tum Hi Ana</li>

</ul>

<!-- 2Nd HTML -->



<!-- 3rd -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.0/jquery-ui.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {

  var song;
  var tracker = $('.tracker');
  var volume = $('.volume');

  function initAudio(elem) {
    var url = elem.attr('audiourl');

    var title = elem.text();
    var artist = elem.attr('artist');

    $('.player .title').text(title);
    $('.player .artist').text(artist);

    // song = new Audio('media/'+url);
    song = new Audio(url);

    // timeupdate event listener
    song.addEventListener('timeupdate', function() {
      var curtime = parseInt(song.currentTime, 10);
      tracker.slider('value', curtime);
    });

    $('.playlist li').removeClass('active');
    elem.addClass('active');
  }

  function playAudio() {
    song.play();

    tracker.slider("option", "max", song.duration);

    $('.play').addClass('hidden');
    $('.pause').addClass('visible');
  }

  function stopAudio() {
    song.pause();

    $('.play').removeClass('hidden');
    $('.pause').removeClass('visible');
  }

  // play click
  $('.play').click(function(e) {
    e.preventDefault();
    // playAudio();

    song.addEventListener('ended', function() {
      var next = $('.playlist li.active').next();
      if (next.length == 0) {
        next = $('.playlist li:first-child');
      }
      initAudio(next);

      song.addEventListener('loadedmetadata', function() {
        playAudio();
      });

    }, false);

    tracker.slider("option", "max", song.duration);
    song.play();
    $('.play').addClass('hidden');
    $('.pause').addClass('visible');

  });
  window.onload = playAudio;

  // pause click
  $('.pause').click(function(e) {
    e.preventDefault();
    stopAudio();
  });

  // next track
  $('.fwd').click(function(e) {
    e.preventDefault();

    stopAudio();

    var next = $('.playlist li.active').next();
    if (next.length === 0) {
      next = $('.playlist li:first-child');
    }
    initAudio(next);
    song.addEventListener('loadedmetadata', function() {
      playAudio();
    });
  });

  // prev track
  $('.rew').click(function(e) {
    e.preventDefault();

    stopAudio();

    var prev = $('.playlist li.active').prev();
    if (prev.length === 0) {
      prev = $('.playlist li:last-child');
    }
    initAudio(prev);

    song.addEventListener('loadedmetadata', function() {
      playAudio();
    });
  });

  // show playlist
  $('.playlistIcon').click(function(e) {
    e.preventDefault();
    $('.playlist').toggleClass('show');
  });

  // playlist elements - click
  $('.playlist li').click(function() {
    stopAudio();
    initAudio($(this));
  });

  // initialization - first element in playlist
  initAudio($('.playlist li:first-child'));

  song.volume = 0.8;

  volume.slider({
    orientation: 'vertical',
    range: 'max',
    max: 100,
    min: 1,
    value: 80,
    start: function(event, ui) {},
    slide: function(event, ui) {
      song.volume = ui.value / 100;
    },
    stop: function(event, ui) {},
  });

  $('.volumeIcon').click(function(e) {
    e.preventDefault();
    $('.volume').toggleClass('show');
  });

  // empty tracker slider
  tracker.slider({

    range: 'min',
    min: 0,
    max: 10,
    start: function(event, ui) {},
    slide: function(event, ui) {
      song.currentTime = ui.value;
    },
    stop: function(event, ui) {}
  });
}); 

</script>







