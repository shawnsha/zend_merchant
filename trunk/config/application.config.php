<?php
return array(
    "modules" => array(
        "ExtLibrary", 
        "HiiirStdLib", 
        "HiiirDb", 
        "HiiirSettings", 
        "HiiirErrorHandler",
        "Point"

    ),
    "module_listener_options" => array(
        "config_glob_paths"    => array(
            "config/autoload/{,*.}{global,local}.php",
        ),
        "module_paths" => array(
            "./module/BackEnd/v1",
            //���W�[nginx���Asite-avaliable�������ܼ�
            getenv("HIIIR_MODULE_PATH"),
        ),
    ),
);
?>