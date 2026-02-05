<?php

namespace App\Controllers;

class ReportController
{
    public function processForm($params = [])
    {
        require_once __DIR__ . '/../models/LoadSessionDemoForm.php';
        
        redirect('write-report');
    }
    
    public function showReport($params = [])
    {
        // Agafar les dades guardades a la sessió
        $reportData = $_SESSION['report_data'] ?? null;
        
        // Si no hi ha dades, tornar a la home
        if (!$reportData) {
            redirect('/');
            return;
        }
        
        // Mostrar la vista
        echo view('Header');
        echo view('WriteReport', [
            'reportData' => $reportData
        ]);
    }
}