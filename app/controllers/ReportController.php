<?php

namespace App\Controllers;

class ReportController
{
    public function processForm($params = [])
    {
        require_once __DIR__ . '/../models/LoadSessionDemoForm.php';
        $reportData = $_SESSION['report_data'] ?? null;
        echo view('GeneratingReport',[
            'reportData' => $reportData
        ]);
    }

    public function generateReport($params = [])
    {
        $reportDataJson = json_encode($_SESSION['report_data'], JSON_UNESCAPED_UNICODE);
        require_once __DIR__ . '/../models/GenerateForm.php';
        //$response = sendMessageCloude($systemPrompt, $userPrompt);
        //$response = "<h2 class='text-2xl font-bold text-indigo-700 mt-8 mb-4 border-b pb-2 border-indigo-100 flex items-center gap-2'>\n  📊 Progrés Acadèmic\n</h2>\n\n<p class='text-gray-700 leading-relaxed mb-4 text-lg'>La Maria ha demostrat un rendiment excel·lent durant aquest trimestre. En l'àrea de matemàtiques ha assolit una qualificació de 8, la qual reflecteix un domini sòlid dels continguts treballats i una comprensió adequada dels conceptes fonamentals del currículum de 3r de primària.</p>\n\n<div class='bg-blue-50 p-4 rounded-lg mb-6 border-l-4 border-blue-500'>\n  <strong>Punts forts acadèmics:</strong>\n  <ul class='mt-2 ml-4 list-disc text-gray-700'>\n    <li>Matemàtiques: Notable alt (8) - Bona comprensió dels conceptes numèrics i resolució de problemes</li>\n    <li>Participació activa en les explicacions a la pissarra</li>\n  </ul>\n</div>\n\n<h2 class='text-2xl font-bold text-indigo-700 mt-8 mb-4 border-b pb-2 border-indigo-100 flex items-center gap-2'>\n  🌟 Actitud i Comportament\n</h2>\n\n<p class='text-gray-700 leading-relaxed mb-4 text-lg'>La Maria mostra una actitud molt positiva cap a l'aprenentatge. S'ha observat especialment el seu entusiasme per participar activament a classe, fet que es manifesta clarament en el seu interès per sortir a la pissarra i compartir els seus coneixements amb la resta de companys.</p>\n\n<div class='bg-blue-50 p-4 rounded-lg mb-6 border-l-4 border-blue-500'>\n  <strong>Aspectes destacables:</strong>\n  <ul class='mt-2 ml-4 list-disc text-gray-700'>\n    <li>Gran motivació per participar en les activitats de classe</li>\n    <li>Confiança per expressar-se davant del grup</li>\n    <li>Actitud proactiva en l'aprenentatge</li>\n  </ul>\n</div>\n\n<h2 class='text-2xl font-bold text-indigo-700 mt-8 mb-4 border-b pb-2 border-indigo-100 flex items-center gap-2'>\n  🎯 Recomanacions per al Desenvolupament\n</h2>\n\n<p class='text-gray-700 leading-relaxed mb-4 text-lg'>Per continuar potenciant el progrés de la Maria, es recomana mantenir aquesta motivació participant en activitats que li permetin seguir desenvolupant les seves habilitats de comunicació i lideratge. Seria beneficiós oferir-li oportunitats addicionals per explicar conceptes als companys o liderar petits projectes de grup.</p>\n\n<p class='text-gray-700 leading-relaxed mb-4 text-lg'>A nivell acadèmic, es suggereix continuar treballant per consolidar els aprenentatges en totes les àrees, aprofitant la seva predisposició positiva per enfrontar nous reptes matemàtics i d'altres matèries del currículum.</p>\n\n<h2 class='text-2xl font-bold text-indigo-700 mt-8 mb-4 border-b pb-2 border-indigo-100 flex items-center gap-2'>\n  📝 Conclusions\n</h2>\n\n<p class='text-gray-700 leading-relaxed mb-4 text-lg'>La Maria es troba en un moment molt positiu del seu desenvolupament acadèmic i personal. La seva actitud participativa i els bons resultats obtinguts indiquen que està preparada per continuar avançant en els seus aprenentatges. Es recomana mantenir aquesta dinàmica positiva i seguir fomentant la seva participació activa a l'aula.</p>";
        $response = "
    <div class='max-w-4xl mx-auto bg-white rounded-lg shadow-lg p-8 my-8'>
        <!-- Header del informe -->
        <div class='flex justify-between items-start mb-8 pb-6 border-b-2 border-indigo-200'>
            <div>
                <h1 class='text-3xl font-bold text-gray-900 mb-2'>Informe Acadèmic</h1>
                <p class='text-gray-600'>Alumne: <span class='font-semibold'>Maria</span></p>
                <p class='text-gray-600'>Curs: <span class='font-semibold'>3r Primària</span></p>
                <p class='text-gray-600'>Trimestre: <span class='font-semibold'>1r</span></p>
            </div>
            <div class='relative'>
                <button onclick='toggleDownloadMenu()' class='bg-indigo-600 hover:bg-indigo-700 text-white font-semibold px-6 py-3 rounded-lg shadow-md transition flex items-center gap-2'>
                    <svg class='w-5 h-5' fill='none' stroke='currentColor' viewBox='0 0 24 24'>
                        <path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4'></path>
                    </svg>
                    Descarregar
                </button>
                <div id='downloadMenu' class='hidden absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-xl border border-gray-200 z-10'>
                    <a href='#' onclick='downloadPDF()' class='block px-4 py-3 hover:bg-indigo-50 text-gray-700 font-medium border-b border-gray-100 rounded-t-lg flex items-center gap-2'>
                        <svg class='w-5 h-5 text-red-500' fill='currentColor' viewBox='0 0 20 20'>
                            <path d='M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4z'></path>
                        </svg>
                        PDF
                    </a>
                    <a href='#' onclick='downloadWord()' class='block px-4 py-3 hover:bg-indigo-50 text-gray-700 font-medium rounded-b-lg flex items-center gap-2'>
                        <svg class='w-5 h-5 text-blue-500' fill='currentColor' viewBox='0 0 20 20'>
                            <path d='M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4z'></path>
                        </svg>
                        Word
                    </a>
                </div>
            </div>
        </div>

        <!-- Contingut de l'informe -->
        <div class='prose max-w-none'>
            <h2 class='text-2xl font-bold text-indigo-700 mt-8 mb-4 border-b pb-2 border-indigo-100 flex items-center gap-2'>
                📊 Progrés Acadèmic
            </h2>
            
            <p class='text-gray-700 leading-relaxed mb-4 text-lg'>La Maria ha demostrat un rendiment excel·lent durant aquest trimestre. En l'àrea de matemàtiques ha assolit una qualificació de 8, la qual reflecteix un domini sòlid dels continguts treballats i una comprensió adequada dels conceptes fonamentals del currículum de 3r de primària.</p>
            
            <div class='bg-blue-50 p-4 rounded-lg mb-6 border-l-4 border-blue-500'>
                <strong class='text-gray-800'>Punts forts acadèmics:</strong>
                <ul class='mt-2 ml-4 list-disc text-gray-700'>
                    <li>Matemàtiques: Notable alt (8) - Bona comprensió dels conceptes numèrics i resolució de problemes</li>
                    <li>Participació activa en les explicacions a la pissarra</li>
                </ul>
            </div>
            
            <h2 class='text-2xl font-bold text-indigo-700 mt-8 mb-4 border-b pb-2 border-indigo-100 flex items-center gap-2'>
                🌟 Actitud i Comportament
            </h2>
            
            <p class='text-gray-700 leading-relaxed mb-4 text-lg'>La Maria mostra una actitud molt positiva cap a l'aprenentatge. S'ha observat especialment el seu entusiasme per participar activament a classe, fet que es manifesta clarament en el seu interès per sortir a la pissarra i compartir els seus coneixements amb la resta de companys.</p>
            
            <div class='bg-blue-50 p-4 rounded-lg mb-6 border-l-4 border-blue-500'>
                <strong class='text-gray-800'>Aspectes destacables:</strong>
                <ul class='mt-2 ml-4 list-disc text-gray-700'>
                    <li>Gran motivació per participar en les activitats de classe</li>
                    <li>Confiança per expressar-se davant del grup</li>
                    <li>Actitud proactiva en l'aprenentatge</li>
                </ul>
            </div>
            
            <h2 class='text-2xl font-bold text-indigo-700 mt-8 mb-4 border-b pb-2 border-indigo-100 flex items-center gap-2'>
                🎯 Recomanacions per al Desenvolupament
            </h2>
            
            <p class='text-gray-700 leading-relaxed mb-4 text-lg'>Per continuar potenciant el progrés de la Maria, es recomana mantenir aquesta motivació participant en activitats que li permetin seguir desenvolupant les seves habilitats de comunicació i lideratge. Seria beneficiós oferir-li oportunitats addicionals per explicar conceptes als companys o liderar petits projectes de grup.</p>
            
            <p class='text-gray-700 leading-relaxed mb-4 text-lg'>A nivell acadèmic, es suggereix continuar treballant per consolidar els aprenentatges en totes les àrees, aprofitant la seva predisposició positiva per enfrontar nous reptes matemàtics i d'altres matèries del currículum.</p>
            
            <h2 class='text-2xl font-bold text-indigo-700 mt-8 mb-4 border-b pb-2 border-indigo-100 flex items-center gap-2'>
                📝 Conclusions
            </h2>
            
            <p class='text-gray-700 leading-relaxed mb-4 text-lg'>La Maria es troba en un moment molt positiu del seu desenvolupament acadèmic i personal. La seva actitud participativa i els bons resultats obtinguts indiquen que està preparada per continuar avançant en els seus aprenentatges. Es recomana mantenir aquesta dinàmica positiva i seguir fomentant la seva participació activa a l'aula.</p>
        </div>
        
        <!-- Footer del informe -->
        <div class='mt-8 pt-6 border-t-2 border-gray-200 text-sm text-gray-500 flex justify-between'>
            <span>Data de generació: " . date('d/m/Y') . "</span>
            <span>EduReports - Sistema de Gestió Escolar</span>
        </div>
    </div>

    <script>
    function toggleDownloadMenu() {
        const menu = document.getElementById('downloadMenu');
        menu.classList.toggle('hidden');
    }

    // Tancar el menú si es clica fora
    document.addEventListener('click', function(event) {
        const menu = document.getElementById('downloadMenu');
        const button = event.target.closest('button');
        if (!button && !menu.contains(event.target)) {
            menu.classList.add('hidden');
        }
    });

    function downloadPDF() {
        alert('Funcionalitat de descàrrega PDF pendent d\\'implementar');
        // TODO: Implementar descàrrega PDF
    }

    function downloadWord() {
        alert('Funcionalitat de descàrrega Word pendent d\\'implementar');
        // TODO: Implementar descàrrega Word
    }
    </script>
    ";
        $_SESSION['report_data']['generated_report'] = $response;
        echo json_encode(['reportStatus' => 'success']);
    }

    public function showReport($params = [])
    {
        $reportData = $_SESSION['report_data'] ?? [];
        $generatedReport = $reportData['generated_report'] ?? '';
        
        echo view('Header');
        echo view('GeneratedReport', [
            'reportData' => $reportData,
            'generatedReport' => $generatedReport
        ]);
    }
}