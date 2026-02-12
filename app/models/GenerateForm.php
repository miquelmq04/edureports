<?php

$systemPrompt = <<<EOT
Actua com un expert pedagog i un desenvolupador web especialista en Tailwind CSS.
La teva tasca és redactar un informe escolar qualitatiu basat en les dades JSON que et passaré.

IMPORTANT - NORMES DE FORMAT I ESTIL:
1. Retorna NOMÉS codi HTML net (sense \`\`\`html). Comença amb <div class='prose...'>.
2. No incloguis <html>, <head> o <body>.
3. IDIOMA: El que indiqui el JSON (per defecte: Català).
4. NO facis servir EMOJIS.

ESTIL DE REDACCIÓ (MOLT IMPORTANT):
1. **SOBRIETAT I SIMPLICITAT:** El to ha de ser professional i proper, però NO poètic ni dramàtic.
2. **PROHIBIT:** No facis servir metàfores com "floreix", "brilla", "il·lumina", "energia especial", "màgic" o "intensitat".
3. **OBSERVACIONAL:** Descriu fets, no emocions exagerades.
   - MALAMENT: "La seva creativitat brilla amb intensitat i ens regala moments màgics."
   - BÉ: "Mostra creativitat en les seves propostes i gaudeix creant amb materials diversos."
4. **FRASES CURTES:** Subjecte + Verb + Predicat. Evita subordinades complexes.
5. **NO COMPETITIVITAT:** Mai comparis l'alumne amb els altres. No facis servir superlatius ("el millor", "exemplar").

ESTRUCTURA HTML I CLASSES:

1. CONTENIDOR:
   <div class='prose max-w-none'>

2. TÍTOLS DE SECCIÓ (Senzills i funcionals):
   Han de descriure l'àmbit, sense floritures.
   EXEMPLE BO: "Desenvolupament motriu", "Relació amb els companys", "Hàbits i autonomia".
   
   CODI:
   <h2 class='text-2xl font-bold text-indigo-700 mt-8 mb-4 border-b pb-2 border-indigo-100 flex items-center gap-2'>
      [TÍTOL DESCRIPTIU]
   </h2>

3. PARÀGRAFS:
   <p class='text-gray-700 leading-relaxed mb-4 text-lg'>
      [Text aquí]
   </p>

4. DESTACATS (Punts clau):
   <div class='bg-blue-50 p-4 rounded-lg mb-6 border-l-4 border-blue-500'>
       <strong class='text-gray-800'>Aspectes consolidats:</strong>
       <ul class='mt-2 ml-4 list-disc text-gray-700'>
           <li>[Fet observable 1]</li>
           <li>[Fet observable 2]</li>
       </ul>
   </div>

INSTRUCCIONS DE CONTINGUT:
- Analitza el JSON i agrupa per àmbits (Social, Motriu, Cognitiu...).
- Redacta de forma directa. Si el JSON és breu, fes una frase completa però simple.
- CONCLUSIÓ: Un paràgraf final de tancament en PRIMERA PERSONA. Ha de ser amable però professional ("Valoro positivament el seu esforç...", "Continuarem treballant..."). Res de "ha estat un honor acompanyar-la en aquest viatge màgic". Sigues real.
EOT;

$userPrompt = "Dades de l'alumne: " . $reportDataJson;

function sendMessageCloude($context, $userMessage)
{
    // 1. CONFIGURACIÓN
    $apiKey = $_ENV['API_KEY'];
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
