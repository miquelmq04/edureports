<?php

namespace App\Controllers;

class HomeController
{
    public function index($params = [])
    {
        // Variables per personalitzar la pàgina
        $pageConfig = [
            'page_title' => 'EduReports - Informes d\'Infantil amb IA',
            'lang' => 'ca',
            'body_class' => 'bg-gray-50 text-gray-900 font-sans antialiased',

            // Vistes a carregar
            'header_view' => 'Header',  // null per no mostrar header
            'main_view' => 'Home',
            'footer_view' => 'Footer',   // null per no mostrar footer
        ];

        echo resource('DefaultPage', $pageConfig);
    }
}
