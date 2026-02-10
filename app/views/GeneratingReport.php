<link href="<?= base_url('css/styles.css') ?>" rel="stylesheet">
<style>
    @keyframes progress {
        0% {
            width: 0%;
        }

        100% {
            width: 100%;
        }
    }

    .animate-progress {
        animation: progress 3s ease-out forwards;
    }
</style>

<div class="min-h-screen flex items-center justify-center bg-gray-100 p-4">

    <div id="loadingContainer" data-url="<?= base_url('generate-report') ?>" class="w-full max-w-md text-center space-y-4">

        <div class="relative inline-block w-20 h-20 mx-auto">
            <div class="animate-spin rounded-full h-20 w-20 border-b-4 border-blue-600"></div>
            <div class="absolute inset-0 flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                </svg>
            </div>
        </div>

        <div>
            <h3 class="text-2xl font-bold text-gray-900">Generant el teu informe...</h3>
            <p class="text-gray-600 mt-2">La nostra IA està redactant l'informe personalitzat per a <span class="font-semibold text-blue-600"><?= htmlspecialchars($reportData['student_name']) ?></span></p>
            <p class="text-sm text-gray-400 mt-1">Això pot trigar entre 3 i 5 segons</p>
        </div>

        <div class="pt-4">
            <div class="h-2 bg-gray-200 rounded-full overflow-hidden w-full">
                <div class="h-full bg-gradient-to-r from-blue-500 to-indigo-600 rounded-full w-full origin-left animate-progress"></div>
            </div>
        </div>

    </div>
</div>
<script src="<?= base_url('js/funcions.js') ?>"></script>
<script>
    document.addEventListener('DOMContentLoaded', initReportGeneration)
</script>