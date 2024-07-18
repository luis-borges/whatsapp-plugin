<?php
 /**
 * Plugin Name: Whatsapp Estrategia 
 * Plugin URI:http://www.estrategiaconcursos.com.br 
 * Description:Plugin criado para acrescentar um módulo float de botão do personalizado do Whatsapp ao Divi Builder
 * Version:1.0 
 * Author:Lus Borges 
 * Author URI:http://www.estrategiaconcursos.com.br 
 * License: GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html    
    Whatsapp Estrategia is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 2 of the License, or any later version. 
    Whatsapp Estrategia is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details. 
    You should have received a copy of the GNU General Public License along with Whatsapp Estrategia. If not, see https://www.gnu.org/licenses/gpl-2.0.html. 
 * */
    // Exit if accessed directly
    if (!defined("ABSPATH")) {
        exit;
    }
    function whatsapp_estrategia_load_the_modules(){
    
        require_once 'modules/whatsapp_estrategia.php';
    }
    // Include the modules
    add_action("et_builder_ready", "whatsapp_estrategia_load_the_modules"); 
?>