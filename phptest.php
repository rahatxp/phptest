<?php
global $avia_config;
$style       = $avia_config['box_class'];
$responsive  = avia_get_option('responsive_active') != "disabled" ? "responsive" : "fixed_layout";
$blank       = isset($avia_config['template']) ? $avia_config['template'] : "";
$av_lightbox = avia_get_option('lightbox_active') != "disabled" ? 'av-default-lightbox' : 'av-custom-lightbox';

$preloader   = avia_get_option('preloader') == "preloader" ? 'av-preloader-active av-preloader-enabled' : 'av-preloader-disabled';

?>
