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
        $response = "<h2 class='text-2xl font-bold text-indigo-700 mt-8 mb-4 border-b pb-2 border-indigo-100 flex items-center gap-2'>\n  📊 Progrés Acadèmic\n</h2>\n\n<p class='text-gray-700 leading-relaxed mb-4 text-lg'>La Maria ha demostrat un rendiment excel·lent durant aquest trimestre. En l'àrea de matemàtiques ha assolit una qualificació de 8, la qual reflecteix un domini sòlid dels continguts treballats i una comprensió adequada dels conceptes fonamentals del currículum de 3r de primària.</p>\n\n<div class='bg-blue-50 p-4 rounded-lg mb-6 border-l-4 border-blue-500'>\n  <strong>Punts forts acadèmics:</strong>\n  <ul class='mt-2 ml-4 list-disc text-gray-700'>\n    <li>Matemàtiques: Notable alt (8) - Bona comprensió dels conceptes numèrics i resolució de problemes</li>\n    <li>Participació activa en les explicacions a la pissarra</li>\n  </ul>\n</div>\n\n<h2 class='text-2xl font-bold text-indigo-700 mt-8 mb-4 border-b pb-2 border-indigo-100 flex items-center gap-2'>\n  🌟 Actitud i Comportament\n</h2>\n\n<p class='text-gray-700 leading-relaxed mb-4 text-lg'>La Maria mostra una actitud molt positiva cap a l'aprenentatge. S'ha observat especialment el seu entusiasme per participar activament a classe, fet que es manifesta clarament en el seu interès per sortir a la pissarra i compartir els seus coneixements amb la resta de companys.</p>\n\n<div class='bg-blue-50 p-4 rounded-lg mb-6 border-l-4 border-blue-500'>\n  <strong>Aspectes destacables:</strong>\n  <ul class='mt-2 ml-4 list-disc text-gray-700'>\n    <li>Gran motivació per participar en les activitats de classe</li>\n    <li>Confiança per expressar-se davant del grup</li>\n    <li>Actitud proactiva en l'aprenentatge</li>\n  </ul>\n</div>\n\n<h2 class='text-2xl font-bold text-indigo-700 mt-8 mb-4 border-b pb-2 border-indigo-100 flex items-center gap-2'>\n  🎯 Recomanacions per al Desenvolupament\n</h2>\n\n<p class='text-gray-700 leading-relaxed mb-4 text-lg'>Per continuar potenciant el progrés de la Maria, es recomana mantenir aquesta motivació participant en activitats que li permetin seguir desenvolupant les seves habilitats de comunicació i lideratge. Seria beneficiós oferir-li oportunitats addicionals per explicar conceptes als companys o liderar petits projectes de grup.</p>\n\n<p class='text-gray-700 leading-relaxed mb-4 text-lg'>A nivell acadèmic, es suggereix continuar treballant per consolidar els aprenentatges en totes les àrees, aprofitant la seva predisposició positiva per enfrontar nous reptes matemàtics i d'altres matèries del currículum.</p>\n\n<h2 class='text-2xl font-bold text-indigo-700 mt-8 mb-4 border-b pb-2 border-indigo-100 flex items-center gap-2'>\n  📝 Conclusions\n</h2>\n\n<p class='text-gray-700 leading-relaxed mb-4 text-lg'>La Maria es troba en un moment molt positiu del seu desenvolupament acadèmic i personal. La seva actitud participativa i els bons resultats obtinguts indiquen que està preparada per continuar avançant en els seus aprenentatges. Es recomana mantenir aquesta dinàmica positiva i seguir fomentant la seva participació activa a l'aula.</p>";
        $_SESSION['report_data']['generated_report'] = $response;
        echo json_encode(['reportStatus' => 'success']);
    }

    public function showReport($params = [])
    {
        //TODO: Fer servir $_SESSION['report_data']['generated_report'] per mostrar el contingut realment generat per l'IA
        // S'ha de pensar un millor codi HTML per mostrar aquest contingut, ja que ara mateix només es mostra un paràgraf senzill amb estils una mica merda
    }
}