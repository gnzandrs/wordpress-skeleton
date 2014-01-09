<?php
//Agregamos soporte para menus personalizados
add_action('init','registrar_menu');
 
//Registramos un nuevo menu personalizado
function registrar_menu() {
register_nav_menu('menuprincipal', __('Menu Principal'));
}
 
// Registro Sidebar
register_sidebar(array(
'name' => 'Sidebar Personalizada',
'id' => 'sidebar-personalizada',
'description' => 'Estos Widgets se mostrarán en la sidebar personalizada.'
));
 
?>