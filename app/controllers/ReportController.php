<?php

namespace App\Controllers;

class ReportController
{
    public function processForm($params = [])
    {
        require_once __DIR__ . '/../models/LoadSessionDemoForm.php';
        $reportData = $_SESSION['report_data'] ?? null;
        echo view('GeneratingReport', [
            'reportData' => $reportData
        ]);
    }

    public function generateReport($params = [])
    {
        $reportDataJson = json_encode($_SESSION['report_data'], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
        require_once __DIR__ . '/../models/GenerateForm.php';
        $response = sendMessageCloude($systemPrompt, $userPrompt);
        /*
        $response = <<<HTML
<div class='prose max-w-none'>
<h2 class='text-2xl font-bold text-indigo-700 mt-8 mb-4 border-b pb-2 border-indigo-100 flex items-center gap-2'>
Un pequeño explorador en crecimiento
</h2>
<p class='text-gray-700 leading-relaxed mb-4 text-lg'>
Jaume se encuentra en un momento muy especial de su desarrollo, característico de los niños de tres años. Observamos cómo va construyendo poco a poco sus habilidades y competencias, mostrando un ritmo de aprendizaje propio y natural. Su personalidad se manifiesta con claridad: es un niño que prefiere explorar el mundo a su manera, tomándose el tiempo necesario para asimilar cada nueva experiencia.
</p>
<h2 class='text-2xl font-bold text-indigo-700 mt-8 mb-4 border-b pb-2 border-indigo-100 flex items-center gap-2'>
Desarrollo de la motricidad y primeras huellas
</h2>
<p class='text-gray-700 leading-relaxed mb-4 text-lg'>
En el ámbito de la motricidad fina, Jaume demuestra una progresión muy positiva. Ha conseguido desarrollar la prensión en pinza de forma correcta, lo cual constituye un logro fundamental para su edad. Este control del instrumento gráfico le permite explorar el mundo del dibujo y la expresión plástica con creciente confianza.
</p>
<div class='bg-blue-50 p-4 rounded-lg mb-6 border-l-4 border-blue-500'>
    <strong class='text-gray-800'>Aspectos a reforzar en casa</strong>:
    <ul class='mt-2 ml-4 list-disc text-gray-700'>
        <li>Recordarle mantener una postura adecuada durante las actividades de mesa</li>
        <li>Proporcionar oportunidades para el dibujo libre y la manipulación de diferentes materiales</li>
    </ul>
</div>
<h2 class='text-2xl font-bold text-indigo-700 mt-8 mb-4 border-b pb-2 border-indigo-100 flex items-center gap-2'>
Descubriendo el mundo de los números y las formas
</h2>
<p class='text-gray-700 leading-relaxed mb-4 text-lg'>
En el pensamiento lógico-matemático, Jaume se encuentra en la fase de exploración manipulativa, que es exactamente donde debe estar un niño de su edad. A través del juego y la manipulación de objetos, va construyendo los conceptos básicos que más adelante le permitirán desarrollar un pensamiento matemático más complejo. Su proceso de aprendizaje es gradual y necesita del acompañamiento cercano del adulto para realizar clasificaciones y comenzar a asociar cantidades con su representación gráfica.
</p>
<h2 class='text-2xl font-bold text-indigo-700 mt-8 mb-4 border-b pb-2 border-indigo-100 flex items-center gap-2'>
Un estilo propio de relacionarse y aprender
</h2>
<p class='text-gray-700 leading-relaxed mb-4 text-lg'>
Jaume muestra un perfil de niño reflexivo que prefiere el juego individual o paralelo. Esta característica no es motivo de preocupación, sino una muestra de su personalidad y estilo de aprendizaje. Observamos cómo va iniciándose tímidamente en las interacciones con sus compañeros, lo cual es completamente natural en su proceso evolutivo.
</p>
<div class='bg-blue-50 p-4 rounded-lg mb-6 border-l-4 border-blue-500'>
    <strong class='text-gray-800'>En los momentos de grupo</strong>:
    <ul class='mt-2 ml-4 list-disc text-gray-700'>
        <li>Se beneficia de pequeños recordatorios para mantener la atención</li>
        <li>Responde positivamente a la reconducción del adulto</li>
        <li>Va adquiriendo gradualmente las rutinas de atención conjunta</li>
    </ul>
</div>
<p class='text-gray-700 leading-relaxed mb-4 text-lg'>
Consideramos que Jaume está realizando un recorrido de aprendizaje muy apropiado para su edad. Su evolución es constante y positiva, y confiamos en que seguirá desarrollando sus competencias de forma natural. Es un niño que nos aporta mucha tranquilidad con su forma pausada de explorar el mundo, y estamos seguros de que este estilo reflexivo será una gran fortaleza en su futuro académico.
</p>
</div>
HTML;
*/
        $_SESSION['report_data']['generated_report'] = $response['content'][0]['text'];
        echo json_encode(['reportStatus' => 'success']);
    }

    public function showReport($params = [])
    {
        $reportData = $_SESSION['report_data'] ?? [];
        $generatedReport = $reportData['generated_report'] ?? '';

        $pageConfig = [
            'page_title' => 'EduReports - Informes d\'Infantil amb IA',
            'lang' => 'ca',
            'body_class' => 'bg-gray-50 text-gray-900 font-sans antialiased',

            // Vistes a carregar
            'header_view' => 'Header',  // null per no mostrar header
            'main_view' => 'GeneratedReport',
            'footer_view' => 'Footer',   // null per no mostrar footer
            'view_data' => [
                'reportData' => $reportData,
                'generatedReport' => $generatedReport
            ],
        ];

        echo resource('DefaultPage', $pageConfig);
    }
}
