<?php

if (! defined('ABSPATH')) exit;


if (file_exists(RGI_DIR . "/core/models/rgi-model.php")) {
    require_once RGI_DIR . "/core/models/rgi-model.php";
}

if (file_exists(RGI_DIR . "/core/controllers/rgi-controller.php")) {
    require_once RGI_DIR . "/core/controllers/rgi-controller.php";
}

if (file_exists(RGI_DIR . "/core/controllers/rgi-block-controller.php")) {
    require_once RGI_DIR . "/core/controllers/rgi-block-controller.php";
}
