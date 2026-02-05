<?php

namespace App\Controllers;

class ReportController
{
    public function processForm($params = [])
    {
        // 1. Guardar les dades del formulari a la sessió
        $_SESSION['report_data'] = [
            'student_name' => $_POST['student_name'] ?? 'Alumne sense nom',
            'course' => $_POST['course'] ?? '',
            'observations' => $_POST['observations'] ?? '',
            'style' => $_POST['style'] ?? 'empatic'
        ];
        
        // 2. Redirigir a la pàgina de generació
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