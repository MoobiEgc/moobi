<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * This page provides the Administration -> ... -> Theme selector UI.
 *
 * @package core
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once($CFG->dirroot.'/config.php');
require_once($CFG->libdir. '/adminlib.php');
global $CFG;

echo '<link href="'.$CFG->wwwroot.'/blocks/webgd/css/font-awesome-4.2.0/css/font-awesome.min.css" rel="stylesheet" />';

echo '<style>
.titulo_pagina{
	font-weight: bold;
	font-size: 24;
	color: #41627F;
}

.descricao p {
	text-align: justify;
	text-indent: 2.5em;
	margin-right: 20px;
	font-size: 14px;
	margin-top: 30px;

}

/*VIDEOCSS*/


.move {
		cursor:move;
}

div#videodiv{
		position: absolute;
		top: 200px;
		left: 300px;
		width:512px;
		height:288px;
}

.link{
		cursor: pointer;
}

.linkdisabled{
		color: #AAA;
}


.controls{
		text-align: center;
		background-color: whitesmoke;
		box-shadow: 5px 5px 15px #AAA;
		position: relative;
		margin-top: 0px;
		margin-left: 150px;
		width: 200px;
		height: 100px;
		border-radius: 10px;
}

.playBar{
		height: 35px;
		width: calc(100% - 10px);
		margin-top: 26px;
		text-align: center;
		background-color: #CCC;
		border-radius: 0 0 10px 10px;
		padding-top: 4px;
		padding-left: 10px;
		margin-left:0px !important;
}

#playBackSlider{
		margin-top: 20px;
		width:150px;
}

.dismiss{
		background-color: #d2322d;
		border-radius: 10px 1px;
		color: whitesmoke;
		font-size: 20pt;
		width: 30px;
		height: 25px;
		top:0;
		margin-top: 0px;
		margin-left: 210px;
		box-shadow: 5px 5px 15px #AAA;
		font-weight: bolder;
		position:absolute;
}

#imagediv .dismiss{
		margin-left: 50px !important;
		width:25px !important;
}

.controlBtn{
		font-size: 10px;
		background-color: whitesmoke;
		border-radius: 5px;
		color: #416280;
		padding-top: 3px;
		padding-bottom: 3px;
		margin-left: 5px;
		margin-right: 5px;
		width: 50px;
		float: left;
}

#buffer {
		display: none;
}

.mobile{
		position: absolute;
}

.dissmissable{
		display:none;
}

#mainHand img {
	margin-top: -40px;
	margin-left: 400px;
		display: block;
}

</style>';

	echo $OUTPUT->heading(get_string('bemvindo','theme_moobi'), 2 ,'titulo_pagina');

	$videoLibras = '#';
	$videoLibras = $CFG->wwwroot . '/blocks/webgd/videos/boasvindas.mp4';
  $imgLibras = $CFG->wwwroot . '/theme/moobi/pix/icons/mao-libras.png';

	echo "<div><a class='hand' id='mainHand' href='" . $videoLibras . "'><img src='" . $imgLibras . "'></img></a></div>";
$descricao=get_string('descricao','theme_moobi');
echo ' <div class="descricao">
<p>
'.$descricao.'</p>
</div>

<!--VIDEO-->
<div id="videodiv" class="dissmissable mobile" onload="myFunction()">

    <video id="videotag" style="display:none" autoplay>
        <source src="./blocks/webgd/videos/equipe.mp4" type=\'video/mp4; codecs="avc1.42E01E"\' />
    </video>
    <canvas width="512" height="576" id="buffer"></canvas>
    <canvas width="512" height="288" id="output" class="move"></canvas>


    <div class="controls">
        <div class="myRow">
            <div class="col-xs-12">
                <input id="playBackSlider" min="0.25" max="1.75" value="1" step="0.25" type="range">
            </div>
        </div>
        <div class="playBar">

                    <div class="controlBtn link" id="replay">
                        <span class="fa fa-fast-backward"></span>
                    </div>

                    <div class="controlBtn link" id="playPause">
                        <span class="fa fa-pause"></span>
                    </div>

                    <div class="controlBtn link" id="faster">
                        <span class="fa fa-forward"></span>
                    </div>


        </div>

        <div class="link dismiss">&times;</div>
    </div>

</div>
<div id="imagediv" class="mobile dissmissable">
    <div class="move">
      <img src="#" />
      <div class="link dismiss">&times;</div>
    </div>
</div>

<script type="text/javascript" src="' . $CFG->wwwroot . '/blocks/webgd/js/videolibras.js"></script>
<!--FIM DO VIDEO e imagem LIBRAS-->';


  echo "
  <script>
  $(document).ready(function(){
	  $('#mainHand').click();

		var mediaPlayer = $('#videotag').get(0);

		mediaPlayer.addEventListener('ended', function(e)
		{
			mediaPlayer.currentTime = 1000;
			mediaPlayer.pause();
			$('#playPause').children().removeClass('fa-pause');
			$('#playPause').children().addClass('fa-play');

		}, false);
  });
  </script>
  ";

?>
