<?php if( !defined("webStart") ) { exit(0); } ?>
<?php require_once( ROOT_VIEW . 'header.php' ); ?>

<div class="contianer">
    <?php
    $l_controller = scandir(ROOT_CONTROLLER);
    print_r($l_controller);
    ?>
</div>

<?php require_once( ROOT_VIEW . 'footer.php' ); ?>