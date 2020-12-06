<?php
define("URLROOT","");
define("DOCROOT",$_SERVER['DOCUMENT_ROOT']."/".URLROOT);
define("APP_PATH",DOCROOT."App/");
define("CORE_PATH",DOCROOT."Core/");
define("HELPER_PATH",DOCROOT."Helpers/");
define("MODULES_PATH",DOCROOT."Modules/");
define("CONTROLLERS_PATH",APP_PATH."Controllers/");
define("MODELS_PATH",APP_PATH."Models/");
define("VIEWS_PATH",APP_PATH."Views/");
define("TEMPLASE_PATH",APP_PATH."Templase/");
define("CORE_BASE_PATH",CORE_PATH."Base/");
define("CONFIGS_PATH",APP_PATH."Configs/");
define("CORE_CLASSES_PATH",CORE_PATH."Classes/");
define("EXEPTION_PATH",CORE_PATH."Classes/Exeptions/");
include CORE_PATH."loader.php";
