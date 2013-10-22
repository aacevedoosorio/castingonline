<?php defined('SYSPATH') or die('No direct script access.');
/**
 * User: alejandroacevedo
 * Template with divisions used in the model view
 */
?>
<!--Sidebar content-->
<div class="row-offcanvas row-offcanvas-left">
    <div class="sidebar-offcanvas col-xs-12 col-sm-3 col-lg-3" id="sidebar" role="navigation">
        <div class="sidebar-nav">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Search Filters</h3>
                </div>
                <div class="panel-body">
                    <div class="center">
                        <?= Form::open('model/list',array('method' => 'get', 'class' => 'form-search', 'id' => 'form-search')); ?>
                        <div class="form-group">
                            <?= Form::input('name', isset($_GET['name'])?$_GET['name']:"",
                                array('id' => 'model_name',
                                    'class'         => 'form-control',
                                    'placeholder'   => 'Nombre',
                                    'size'          => 50)
                            );
                            ?>
                        </div>
                        <div class="form-group">
                            <input type="text" class="slider input slider-horizontal form-control" id="model_height" name="height" data-slider-min="0" data-slider-max="100" data-slider-step="1" data-slider-value="[10,20]" data-slider-orientation="horizontal" data-slider-selection="after" data-slider-tooltip="show" data-slider-id="BC">
                        </div>
                        <?= Form::input('reset', 'Reset', array('id' => 'reset' ,'type' => 'button', 'class' => 'btn btn-danger')); ?>
                        <?= Form::submit('filter', 'Filtro', array('class' => 'btn btn-primary')); ?>
                        <?= Form::close(); ?>
                    </div>
                </div>
            </div>
        </div><!--/.well -->
    </div><!--/span-->

    <!--Body content-->
    <section class="col-xs-12 col-sm-9 col-lg-9">
        <div class="row row-fluid">
            <p class="pull-left visible-xs">
                <button type="button" class="btn side-menu-link glyphicon glyphicon-search" data-toggle="offcanvas"></button>
                <button type="button" class="btn side-menu-link glyphicon glyphicon-plus" data-target="#newModal" data-toggle="modal" data-remote="<?=URL::site('model/add');?>"></button>
            </p>
        </div>
        <?= $list; ?>
    </section>

</div>
