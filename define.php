<?php
// duong dan thu muc chua ung dung

defined("APPLICATION_PATH") || define("APPLICATION_PATH", realpath(dirname(__FILE__)."/application"));

// khai bao phan doan cau hinh su dung cho ung dung
defined("APPLICATION_ENV") || define("APPLICATION_ENV", (getenv("APPLICATION_ENV") ? getenv("APPLICATION_ENV") : "developer"));

// Nap duong dan den cac thu vien su dung trong ung dung

set_include_path(implode(PATH_SEPARATOR, array(
    dirname(__FILE__)."/library",
    get_include_path()

)));


// duong dan den thu muc public
define("PUBLIC_PATH",realpath(dirname(__FILE__) . "/public"));
// duong dan den thu muc template
define("TEMPLATE_PATH",realpath(PUBLIC_PATH."/templates"));

define("TEMPLATE_URL",realpath("/public/templates"));

