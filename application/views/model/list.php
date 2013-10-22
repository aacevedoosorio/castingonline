<?php defined('SYSPATH') or die('No direct script access.');
/**
 * User: alejandroacevedo
 * Builds the list of models
 */
?>
<div class="row-fluid">
    <ul class="media-list">

    <?php
        foreach($models as $model_data){
    ?>
    <div class="media-box col-lg-3 col-xs-6 isotope-item">
        <a class="view view-first pull-left" href="#"><?= HTML::image(($model_data->get("profile_picture")?$model_data->get("profile_picture"):'/assets/img/no_profile_pic.jpeg'), array('alt' => $model_data->get("name"),
                'class' => 'media-object img-responsive'));?>
            <div class="mask">
                <div class="caption-btm">
                    <p><?=$model_data->get("name");?></p>
                    <p><?=$model_data->get("height");?> cm</p>
                    <p><?=$model_data->get("measurements");?></p>
                    <p id="star_readOnly_<?=$model_data->get("id");?>" class="star" data-score="<?=$model_data->get("id");?>"></p>
                    <button type="button" class="btn side-menu-link glyphicon glyphicon-facetime-video pull-right" data-target="#newModal" data-toggle="modal" data-remote="<?=URL::site("model/gallery/".$model_data->get('id'));?>"></button>
                    <button type="button" class="btn side-menu-link glyphicon glyphicon-edit pull=left" data-target="#newModal" data-toggle="modal" data-remote="<?=URL::site("model/edit/".$model_data->get('id'));?>"></button>
                </div>
            </div>
        </a>
    </div>
    <?php
        }
    ?>
    </ul>
</div>
<?= $pagination; ?>