<?php
function atg_menu_classes($classes,$item,$args){
    if($args->theme_location=='menu-1'){
        $classes[]='nav-item-toggle active';
    }
    return $classes;
}
add_filter('nav_menu_css_class','atg_menu_classes',1,3);
