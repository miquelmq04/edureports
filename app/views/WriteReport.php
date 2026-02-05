<link href="<?= base_url('css/styles.css') ?>" rel="stylesheet">
<style>
@keyframes progress {
    0% { width: 0%; }
    100% { width: 100%; }
}
.animate-progress {
    animation: progress 3s ease-out forwards;
}
</style>

<div id="reportContainer" 
     data-student-name="<?= htmlspecialchars($reportData['student_name']) ?>"
     data-course="<?= htmlspecialchars($reportData['course']) ?>"
     data-style="<?= htmlspecialchars($reportData['style']) ?>"
     class="min-h-screen bg-gradient-to-b from-blue-50 to-white py-12">
    <div class="container mx-auto px-4 max-w-4xl">
        
        <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
            
            <!-- ESTAT 1: Loader (visible al principi) -->
            <div id="loader" class="text-center py-20 px-8">
                <div class="relative inline-block">
                    <div class="animate-spin rounded-full h-20 w-20 border-b-4 border-blue-600 mx-auto mb-6"></div>
                    <div class="absolute inset-0 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                    </div>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-3">Generant el teu informe...</h3>
                <p class="text-gray-600 mb-2">La nostra IA està redactant l'informe personalitzat per a <span class="font-semibold text-blue-600"><?= htmlspecialchars($reportData['student_name']) ?></span></p>
                <p class="text-sm text-gray-400">Això pot trigar entre 3 i 5 segons</p>
                
                <!-- Barra de progrés animada -->
                <div class="mt-8 max-w-md mx-auto">
                    <div class="h-2 bg-gray-200 rounded-full overflow-hidden">
                        <div class="h-full bg-gradient-to-r from-blue-500 to-indigo-600 rounded-full animate-progress"></div>
                    </div>
                </div>
            </div>
            
            <!-- ESTAT 2: Informe generat (ocult al principi) -->
            <div id="reportContent" class="hidden">
                
                <!-- Capçalera de l'informe -->
                <div class="bg-gradient-to-r from-blue-600 to-indigo-600 text-white p-8">
                    <div class="flex justify-between items-start">
                        <div>
                            <h2 class="text-3xl font-bold mb-2">Informe Pedagògic</h2>
                            <p class="text-blue-100 text-lg"><?= htmlspecialchars($reportData['student_name']) ?></p>
                            <p class="text-blue-200 text-sm mt-1"><?= htmlspecialchars($reportData['course']) ?> · Generat el <?= date('d/m/Y') ?></p>
                        </div>
                        
                        <!-- Botó descarregar (bloquejat) -->
                        <div class="relative group">
                            <button disabled class="px-6 py-3 bg-white/20 text-white/50 rounded-lg font-semibold cursor-not-allowed flex items-center gap-2 border-2 border-white/30">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                </svg>
                                Descarregar PDF
                            </button>
                            <div class="absolute top-full right-0 mt-2 w-48 bg-gray-900 text-white text-xs px-3 py-2 rounded-lg shadow-lg opacity-0 group-hover:opacity-100 transition pointer-events-none">
                                🔒 Disponible només a la versió completa
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Contingut de l'informe -->
                <div class="p-8">
                    <div class="prose max-w-none">
                        
                        <!-- Secció d'introducció -->
                        <div class="mb-8">
                            <h3 class="text-xl font-bold text-gray-900 mb-4 flex items-center gap-2">
                                <span class="w-8 h-8 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center text-sm font-bold">1</span>
                                Valoració General
                            </h3>
                            <div id="reportText" class="text-gray-700 leading-relaxed space-y-3">
                                <!-- El text es generarà aquí amb JavaScript -->
                            </div>
                        </div>
                        
                        <!-- Secció d'observacions -->
                        <?php if (!empty($reportData['observations'])): ?>
                        <div class="mb-8">
                            <h3 class="text-xl font-bold text-gray-900 mb-4 flex items-center gap-2">
                                <span class="w-8 h-8 bg-purple-100 text-purple-600 rounded-full flex items-center justify-center text-sm font-bold">2</span>
                                Observacions del Docent
                            </h3>
                            <div class="bg-purple-50 border-l-4 border-purple-500 p-4 rounded-r-lg">
                                <p class="text-gray-700 italic">"<?= htmlspecialchars($reportData['observations']) ?>"</p>
                            </div>
                        </div>
                        <?php endif; ?>
                        
                        <!-- Secció de recomanacions -->
                        <div class="mb-8">
                            <h3 class="text-xl font-bold text-gray-900 mb-4 flex items-center gap-2">
                                <span class="w-8 h-8 bg-green-100 text-green-600 rounded-full flex items-center justify-center text-sm font-bold">3</span>
                                Recomanacions
                            </h3>
                            <div id="recommendations" class="text-gray-700 leading-relaxed">
                                <!-- Recomanacions generades per IA -->
                            </div>
                        </div>
                        
                    </div>
                    
                    <!-- Banner de Demo -->
                    <div class="mt-12 bg-gradient-to-r from-gray-900 to-gray-800 rounded-xl p-8 text-center text-white">
                        <h4 class="text-2xl font-bold mb-2">T'ha agradat la demo? 🚀</h4>
                        <p class="text-gray-300 mb-6">Amb la versió completa pots personalitzar plantilles, entrenar la IA amb el teu estil i descarregar en format Word/PDF.</p>
                        <div class="flex gap-4 justify-center">
                            <a href="<?= base_url('/') ?>" class="px-6 py-3 bg-white text-gray-900 rounded-lg font-semibold hover:bg-gray-100 transition">
                                Tornar a l'inici
                            </a>
                            <button class="px-6 py-3 bg-blue-600 hover:bg-blue-700 rounded-lg font-semibold transition">
                                Veure plans (Demo)
                            </button>
                        </div>
                    </div>
                </div>
                
            </div>
            
        </div>
        
    </div>
</div>

<script src="<?= base_url('js/funcions.js') ?>"></script>

</body>
</html>
