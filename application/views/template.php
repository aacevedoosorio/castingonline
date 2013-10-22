<?php defined('SYSPATH') or die('No direct script access.');
/**
 * User: alejandroacevedo
 * The most basic and generic template we are using
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Casting Online</title>
    <meta name="viewport" content="width=device-width,initial-scale=1" />

    <!-- StyleSheet -->
    <?= HTML::style("assets/css/bootstrap.min.css"); ?>
    <?= HTML::style("assets/css/custom.css"); ?>
    <?= $extra_css ?>
</head>
<body>
    <!-- Navigation Bar -->
    <div class="navbar navbar-fixed-top navbar-inverse" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <?=HTML::anchor('','<span class="glyphicon glyphicon-home"></span> Casting Online', array('class' => 'navbar-brand', 'title' => 'Casting Online'));?>
            </div>
            <div class="navbar-collapse collapse pull-right">
                <ul class="nav navbar-nav">
                    <?= $header; ?>
                </ul>
            </div>
        </div>
    </div>
    <!-- Navigation Ends -->
    <div class="container">
        <div id="content">
            <?= $content; ?>
        </div>
    </div>
    <div class="modal" id="newModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"></div><!-- /.modal -->
    <!-- JavaScript -->
    <?= HTML::script("http://code.jquery.com/jquery-latest.js"); ?>
    <?= HTML::script("assets/js/bootstrap.min.js");?>
    <?= HTML::script("assets/js/custom.js");?>
    <?= $extra_js ?>
</body>
</html>