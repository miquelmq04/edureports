<?php

namespace App\Controllers;

class DashboardController
{
    public function index($params = [])
    {
        // Configuració de la pàgina Dashboard
        $pageConfig = [
            'page_title' => 'Dashboard - EduReports',
            'lang' => 'ca',
            'body_class' => 'bg-gray-50',

            // Vistes a carregar
            'header_view' => null,  // Sense header global (el Dashboard té el seu propi)
            'sidebar' => 'DashboardSideBar',  // Vista del sidebar
            'main_view' => 'Dashboard',  // Vista del contingut principal
            'footer_view' => null,  // Sense footer

        ];

        echo resource('DashboardPage', $pageConfig);
    }
}
