 <?php
    // 1. Processar Avaluacions
    $evaluations = [];
    if (isset($_POST['eval_label']) && is_array($_POST['eval_label'])) {
        $labels = $_POST['eval_label'];
        $values = $_POST['eval_value'] ?? [];
        $comment = $_POST['eval_text'];
        foreach ($labels as $index => $label) {
            if (!empty(trim($label))) {
                $evaluations[] = [
                    'label' => trim($label),
                    'value' => $values[$index],
                    'teacher_comment' => $comment[$index],
                ];
            }
        }
    }

    // 2. Processar Observacions
    $observations = [];
    if (isset($_POST['observations']) && is_array($_POST['observations'])) {
        $observations = array_filter($_POST['observations'], function ($obs) {
            return !empty(trim($obs));
        });
        $observations = array_values($observations);
    }

    // 3. Guardar TOTES les dades a la sessió
    $_SESSION['report_data'] = [
        'student_name' => $_POST['student_name'] ?? 'Alumne sense nom',
        'course'       => $_POST['course'] ?? '',
        'language'     => $_POST['language'] ?? 'English', // <--- NOU CAMP AQUÍ
        'evaluations'  => $evaluations,
        'observations' => $observations
    ];
