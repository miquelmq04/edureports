<!DOCTYPE html>
<html lang="<?= $lang ?? 'ca' ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $page_title ?? 'EduReports - Informes d\'Infantil amb IA' ?></title>
    <link href="/css/styles.css" rel="stylesheet">
    <script src="/js/funcions.js" defer></script>
    <?php if (isset($extra_css)): ?>
        <?php foreach ((array)$extra_css as $css): ?>
            <link href="<?= $css ?>" rel="stylesheet">
        <?php endforeach; ?>
    <?php endif; ?>
</head>

<body class="<?= $body_class ?? 'bg-gray-50 text-gray-900 font-sans antialiased' ?>">
    <?php
    // Header (per defecte 'Header', però pot ser null per ocultar-lo)
    if (($header_view ?? 'Header') !== null) {
        echo view($header_view ?? 'Header', $view_data ?? []);
    }

    // Vista principal (obligatòria)
    echo view($main_view ?? 'Home', $view_data ?? []);

    // Footer (per defecte 'Footer', però pot ser null per ocultar-lo)
    if (($footer_view ?? 'Footer') !== null) {
        echo view($footer_view ?? 'Footer', $view_data ?? []);
    }
    ?>

    <?php if (isset($extra_js)): ?>
        <?php foreach ((array)$extra_js as $js): ?>
            <script src="<?= $js ?>" defer></script>
        <?php endforeach; ?>
    <?php endif; ?>
</body>

</html>