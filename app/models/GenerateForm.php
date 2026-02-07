<?php

$systemPrompt = "Ets un expert pedagog. Redacta un informe escolar complet.
        IMPORTANT: La teva resposta ha de ser NOMÉS codi HTML (sense markdown ```html).
        Has de fer servir aquestes classes de Tailwind per fer-ho bonic:

        1. Per als títols de les seccions (Ex: Progrés Acadèmic, Actitud...), utilitza:
        <h2 class='text-2xl font-bold text-indigo-700 mt-8 mb-4 border-b pb-2 border-indigo-100 flex items-center gap-2'>
            TITOL SECCIÓ
        </h2>

        2. Per als paràgrafs:
        <p class='text-gray-700 leading-relaxed mb-4 text-lg'> ... </p>

        3. Si vols destacar llistes o punts forts:
        <div class='bg-blue-50 p-4 rounded-lg mb-6 border-l-4 border-blue-500'> ... </div>

        No incloguis cap etiqueta <html>, <head> o <body>, només el contingut de l'informe.";

$userPrompt = "Dades de l'alumne: " . $reportDataJson;

function sendMessageCloude($context, $userMessage)
{
    // 1. CONFIGURACIÓN
    $apiKey = 'Introduir APIKEY AQUÍ'; // <--- RECUERDA PONER TU API KEY AQUÍ
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
