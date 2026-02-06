<div id="reportContainer" class="min-h-screen bg-gradient-to-b from-blue-50 to-white py-12">
    
    <div class="container mx-auto px-4 max-w-4xl">
        <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
            <div id="reportContent" class="hidden">

                <div class="bg-gradient-to-r from-blue-600 to-indigo-600 text-white p-8">
                    <div class="flex justify-between items-start">
                        <div>
                            <h2 class="text-3xl font-bold mb-2">Informe Pedagògic</h2>
                            <p class="text-blue-100 text-lg"><?= htmlspecialchars($reportData['student_name']) ?></p>
                            
                            <p class="text-blue-200 text-sm mt-1 flex items-center gap-2">
                                <span><?= htmlspecialchars($reportData['course']) ?></span>
                                <span>•</span>
                                <span class="uppercase tracking-wider font-semibold bg-blue-500/30 px-2 py-0.5 rounded text-xs">
                                    <?= htmlspecialchars(strtoupper($reportData['language'])) ?>
                                </span>
                                <span>•</span>
                                <span>Generat el <?= date('d/m/Y') ?></span>
                            </p>
                        </div>

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

                <div class="p-8">
                    <div class="prose max-w-none">

                        <?php if (!empty($reportData['evaluations'])): ?>
                        <div class="mb-8 border-b border-gray-100 pb-6">
                            <h3 class="text-lg font-bold text-gray-800 mb-4 flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M2 11a1 1 0 011-1h2a1 1 0 011 1v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5zM8 7a1 1 0 011-1h2a1 1 0 011 1v9a1 1 0 01-1 1H9a1 1 0 01-1-1V7zM14 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1h-2a1 1 0 01-1-1V4z" />
                                </svg>
                                Resultats Avaluats
                            </h3>
                            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-3">
                                <?php foreach ($reportData['evaluations'] as $eval): ?>
                                    <div class="bg-gray-50 border border-gray-200 rounded-lg p-3 flex justify-between items-center">
                                        <span class="text-sm font-medium text-gray-700 truncate mr-2" title="<?= htmlspecialchars($eval['label']) ?>">
                                            <?= htmlspecialchars($eval['label']) ?>
                                        </span>
                                        <span class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-white border border-blue-200 text-blue-700 font-bold text-sm shadow-sm">
                                            <?= htmlspecialchars($eval['value']) ?>
                                        </span>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <?php endif; ?>

                        <div class="mb-8">
                            <h3 class="text-xl font-bold text-gray-900 mb-4 flex items-center gap-2">
                                <span class="w-8 h-8 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center text-sm font-bold">1</span>
                                Valoració General
                            </h3>
                            <div id="reportText" class="text-gray-700 leading-relaxed space-y-3">
                                </div>
                        </div>

                        <?php if (!empty($reportData['observations'])): ?>
                            <div class="mb-8">
                                <h3 class="text-xl font-bold text-gray-900 mb-4 flex items-center gap-2">
                                    <span class="w-8 h-8 bg-purple-100 text-purple-600 rounded-full flex items-center justify-center text-sm font-bold">2</span>
                                    Observacions del Docent
                                </h3>
                                <div class="bg-purple-50 border-l-4 border-purple-500 p-4 rounded-r-lg">
                                    <ul class="list-disc list-inside text-gray-700 italic">
                                        <?php foreach ($reportData['observations'] as $observation): ?>
                                            <li>"<?= htmlspecialchars($observation) ?>"</li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                        <?php endif; ?>

                        <div class="mb-8">
                            <h3 class="text-xl font-bold text-gray-900 mb-4 flex items-center gap-2">
                                <span class="w-8 h-8 bg-green-100 text-green-600 rounded-full flex items-center justify-center text-sm font-bold">3</span>
                                Recomanacions
                            </h3>
                            <div id="recommendations" class="text-gray-700 leading-relaxed">
                                </div>
                        </div>

                    </div>

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
</body>
</html>
