<?php defined('SYSPATH') or die('No direct script access.');
/**
 * User: alejandroacevedo
 * Gallery view
 */
?>
<form class="form-inline">
    <div class="form-group">
        <button id="video-gallery-button" type="button" class="btn btn-success btn-lg">
            <i class="glyphicon glyphicon-film"></i>
            Launch Video Gallery
        </button>
    </div>
    <div class="form-group">
        <button id="image-gallery-button" type="button" class="btn btn-primary btn-lg">
            <i class="glyphicon glyphicon-picture"></i>
            Launch Image Gallery
        </button>
    </div>
    <div class="btn-group" data-toggle="buttons">
        <label class="btn btn-success btn-lg">
            <i class="glyphicon glyphicon-leaf"></i>
            <input id="borderless-checkbox" type="checkbox"> Borderless
        </label>
        <label class="btn btn-primary btn-lg">
            <i class="glyphicon glyphicon-fullscreen"></i>
            <input id="fullscreen-checkbox" type="checkbox"> Fullscreen
        </label>
    </div>
</form>
<!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
<div id="blueimp-gallery" class="blueimp-gallery">
    <!-- The container for the modal slides -->
    <div class="slides"></div>
    <!-- Controls for the borderless lightbox -->
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
</div>
<div id="links">
    <a href="../assets/img/models/3/000000304757-anna_selezneva-fit.jpg" title="Banana" data-gallery>
        <img src="../assets/img/models/3/000000304757-anna_selezneva-fit-thumb.jpg" alt="Banana">
    </a>
    <a href="../assets/img/models/3/000000304759-anna_selezneva-fit.jpg" title="Apple" data-gallery>
        <img src="../assets/img/models/3/000000304759-anna_selezneva-fit-thumb.jpg" alt="Apple">
    </a>
    <a href="../assets/img/models/3/000000304762-anna_selezneva-fit.jpg" title="Orange" data-gallery>
        <img src="../assets/img/models/3/000000304762-anna_selezneva-fit-thumb.jpg" alt="Orange">
    </a>
</div>

<script>
    document.getElementById('links').onclick = function (event) {
        event = event || window.event;
        var target = event.target || event.srcElement,
        link = target.src ? target.parentNode : target,
        options = {index: link, event: event},
        links = this.getElementsByTagName('a');
        blueimp.Gallery(links, options);
    };
</script>