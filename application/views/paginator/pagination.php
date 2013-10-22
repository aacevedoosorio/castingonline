<?php
$first_string = '&laquo;';
$last_string = '&raquo;';
?>
<div class="col-xs-12 col-sm-12 col-lg-12 pull-left text-center">
    <ul class="pagination">
        <?php

        $first ? print('<li><a href="' . $first . '">' . $first_string . '</a></li>') : print('<li class="disabled"><span>'.$first_string.'</span></li>');

        foreach ($pages_in_range as $key => $value){
            $value ? print('<li><a href="' . $value . '">' . $key . '</a></li>')  : print('<li class="active"><span>'.$key.'<span class="sr-only">(current)</span></span></li>');
        }

        $last ? print('<li><a href="' . $last . '">' . $last_string . '</a></li>') : print('<li class="disabled"><span>'.$last_string.'</span></li>');

        ?>
    </ul>
</div>
