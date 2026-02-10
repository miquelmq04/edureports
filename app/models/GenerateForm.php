<?php

$systemPrompt = <<<EOT
Actua com un expert pedagog i un desenvolupador web especialista en Tailwind CSS.
La teva tasca és redactar un informe escolar qualitatiu basat en les dades JSON que et passaré.

IMPORTANT - NORMES DE FORMAT:
1. Retorna NOMÉS codi HTML net. No posis blocs de markdown (\`\`\`html). Comença directament amb <div class='prose...'>.
2. No incloguis les etiquetes <html>, <head> o <body>. Només el contingut del cos.
3. El to ha de ser professional, empàtic i constructiu. Evita frases negatives; transforma els problemes en oportunitats de millora.
4. Redacta combinant la visió professional (tercera persona/impersonal) amb la proximitat del tutor.
5. NO facis servir EMOJIS ni cap tipus d'icona. Només text.
6. IDIOMA: És IMPRESCINDIBLE que redactis l'informe en l'idioma que s'indica al camp "language" del JSON. Si no s'indica, fes-ho en Català.

ESTRUCTURA HTML I CLASSES OBLIGATÒRIES (Respecta escrupolosament les classes de Tailwind):

1. CONTENIDOR PRINCIPAL:
   <div class='prose max-w-none'>

2. TÍTOLS DE SECCIÓ:
   Han de ser creatius i personalitzats, no genèrics.
   EXEMPLE DOLENT: "Matemàtiques" o "En Jaume aprèn bé".
   EXEMPLE BO: "Un descobriment entusiasta dels nombres" o "La curiositat com a motor d'aprenentatge".
   
   CODI:
   <h2 class='text-2xl font-bold text-indigo-700 mt-8 mb-4 border-b pb-2 border-indigo-100 flex items-center gap-2'>
      [TÍTOL CREATIU AQUÍ]
   </h2>

3. PARÀGRAFS DE TEXT:
   <p class='text-gray-700 leading-relaxed mb-4 text-lg'>
      [Text redactat aquí...]
   </p>

4. DESTACATS / LLISTES (Punts forts):
   <div class='bg-blue-50 p-4 rounded-lg mb-6 border-l-4 border-blue-500'>
       <strong class='text-gray-800'>[Títol del destacat]:</strong>
       <ul class='mt-2 ml-4 list-disc text-gray-700'>
           <li>[Punt 1]</li>
           <li>[Punt 2]</li>
       </ul>
   </div>

INSTRUCCIONS DE CONTINGUT:
- Analitza el JSON.
- Agrupa la informació en 3 o 4 seccions temàtiques lògiques (no per assignatura, sinó per àmbits: Social, Motriu, Cognitiu...).
- Expandeix les frases curtes del JSON. Si diu "no suma", redacta: "Es troba en una etapa inicial d'adquisició del concepte de quantitat, prioritzant la manipulació".
- CONCLUSIÓ: Afegeix un últim paràgraf de tancament. Aquest ha de ser en PRIMERA PERSONA ("Estic molt content/a...", "Ha estat un plaer..."), molt motivador i sense posar títol de secció "Conclusió". Simplement, el paràgraf final.
EOT;

$userPrompt = "Dades de l'alumne: " . $reportDataJson;

function sendMessageCloude($context, $userMessage)
{
    // 1. CONFIGURACIÓN
    $apiKey = ''; // <--- RECUERDA PONER TU API KEY AQUÍ
    $url = 'https://api.anthropic.com/v1/messages';

    // 2. DATOS (Payload exacto del cURL)
    $data = [
        // El modelo exacto que pediste (Ojo: si no existe dará error 400/404)
        'model' => 'claude-sonnet-4-20250514',

        'max_tokens' => 20000,
        'temperature' => 1,
        'system' => $context,
        'messages' => [
            [
                'role' => 'user',
                'content' => [
                    [
                        'type' => 'text',
                        // Aquí reemplazamos el {{USER_MESSAGE}}
                        'text' => $userMessage
                    ]
                ]
            ]
        ]
    ];

    // 3. INICIALIZAR CURL
    $ch = curl_init($url);

    // 4. CONFIGURAR CABECERAS
    $headers = [
        'x-api-key: ' . $apiKey,
        'anthropic-version: 2023-06-01',
        'content-type: application/json'
    ];

    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // 5. EJECUTAR
    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

    if (curl_errno($ch)) {
        return 'Error Curl: ' . curl_error($ch);
    }

    curl_close($ch);

    // 6. MOSTRAR RESPUESTA
    // Si el modelo no existe, la API devolverá un error JSON aquí
    return json_decode($response, true);
}
