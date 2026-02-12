<!DOCTYPE html>
<html lang="<?= $lang ?? 'ca' ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $page_title ?? 'EduReports - Informes d\'Infantil amb IA' ?></title>
    <link href="/css/styles.css" rel="stylesheet">
    <script src="/js/funcions.js" defer></script>
</head>

<body class="<?= $body_class ?? 'bg-gray-50 text-gray-900 font-sans antialiased' ?>">
    <?php
    // Header (opcional - només si està definit i no és null)
    if (!empty($header_view)) {
        echo view($header_view, $view_data ?? []);
    }
    ?>
    <div class="min-h-screen bg-gray-50 flex">
        <aside id="sidebar" class="w-64 bg-white border-r border-gray-200 flex flex-col transition-all duration-300 ease-in-out">
            <?php echo view($sidebar ?? 'DashboardSideBar', $view_data ?? []) ?>
        </aside>
        <main class="flex-1 overflow-y-auto">
            <?php echo view($main_view ?? 'Dashboard', $view_data ?? []); ?>
        </main>
    </div>
    <?php
    // Footer (opcional - només si està definit i no és null)
    if (!empty($footer_view)) {
        echo view($footer_view, $view_data ?? []);
    }
    ?>

    <!-- Script del sidebar col·lapsable -->
    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            const sidebarTexts = document.querySelectorAll('.sidebar-text');

            // Toggle classes del sidebar
            sidebar.classList.toggle('w-64');
            sidebar.classList.toggle('w-20');

            // Toggle visibilitat dels textos
            sidebarTexts.forEach(text => {
                text.classList.toggle('opacity-0');
                text.classList.toggle('w-0');
            });

            // Guardar estat en localStorage
            const isCollapsed = sidebar.classList.contains('w-20');
            localStorage.setItem('sidebarCollapsed', isCollapsed);
        }

        // Restaurar estat al carregar la pàgina
        document.addEventListener('DOMContentLoaded', function() {
            const isCollapsed = localStorage.getItem('sidebarCollapsed') === 'true';
            if (isCollapsed) {
                toggleSidebar();
            }
        });
    </script>

    <?php if (isset($extra_js)): ?>
        <?php foreach ((array)$extra_js as $js): ?>
            <script src="<?= $js ?>" defer></script>
        <?php endforeach; ?>
    <?php endif; ?>
</body>

</html>