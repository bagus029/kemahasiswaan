<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
      //  'css/site.css',
      'adminlte/plugins/fontawesome-free/css/all.min.css',
      'adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css',
        'adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css',
        'adminlte/plugins/jqvmap/jqvmap.min.css',
        'adminlte/dist/css/adminlte.min.css',
        'adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css',
        'adminlte/plugins/daterangepicker/daterangepicker.css',
        'adminlte/plugins/summernote/summernote-bs4.css',
    ];
    public $js = [
        'adminlte/plugins/jquery/jquery.min.js',
        'adminlte/plugins/jquery-ui/jquery-ui.min.js',
        'adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js',
        'adminlte/plugins/chart.js/Chart.min.js',
        'adminlte/plugins/sparklines/sparkline.js',
        'adminlte/plugins/jqvmap/jquery.vmap.min.js',
        'adminlte/plugins/jqvmap/maps/jquery.vmap.usa.js',
        'adminlte/plugins/jquery-knob/jquery.knob.min.js',
        'adminlte/plugins/moment/moment.min.js',
        'adminlte/plugins/daterangepicker/daterangepicker.js',
        'adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js',
        'adminlte/plugins/summernote/summernote-bs4.min.js',
        'adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js',
        'adminlte/dist/js/adminlte.js',
        'adminlte/dist/js/pages/dashboard.js',
        'adminlte/dist/js/demo.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
      //  'yii\bootstrap\BootstrapAsset',
    ];
}
