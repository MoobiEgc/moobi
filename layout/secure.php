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

// Get the HTML for the settings bits.
$html = theme_moobi_get_html_for_settings($OUTPUT, $PAGE);

echo $OUTPUT->doctype() ?>
<html <?php echo $OUTPUT->htmlattributes(); ?>>
<head>
    <title><?php echo $OUTPUT->page_title(); ?></title>
    <link rel="shortcut icon" href="<?php echo $OUTPUT->favicon(); ?>" />
    <?php echo $OUTPUT->standard_head_html() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo $CFG->wwwroot; ?>/blocks/webgd/css/font-awesome-4.2.0/css/font-awesome.min.css" rel="stylesheet" />';

    <style>
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

    </style>
</head>

<body <?php echo $OUTPUT->body_attributes(); ?>>

<?php echo $OUTPUT->standard_top_of_body_html() ?>

<header role="banner" class="navbar navbar-fixed-top moodle-has-zindex">
    <nav role="navigation" class="navbar-inner">
        <div class="container-fluid">
            <a class="brand" href="<?php echo $CFG->wwwroot;?>"><?php echo $SITE->shortname; ?></a>
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <div class="nav-collapse collapse">
                <ul class="nav pull-right">
                    <li><?php echo $OUTPUT->page_heading_menu(); ?></li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<div id="page" class="container-fluid">

    <header id="page-header" class="clearfix">
        <?php echo $html->heading; ?>
    </header>

    <div id="page-content" class="row-fluid">
        <div id="region-bs-main-and-pre" class="span9">
            <div class="row-fluid">
                <section id="region-main" class="span8 pull-right">
                    <?php echo $OUTPUT->main_content(); ?>
                </section>
                <?php echo $OUTPUT->blocks('side-pre', 'span4 desktop-first-column'); ?>
            </div>
        </div>
        <?php echo $OUTPUT->blocks('side-post', 'span3'); ?>
    </div>

    <?php echo $OUTPUT->standard_end_of_body_html() ?>

</div>
</body>
</html>
