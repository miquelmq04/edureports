<div class="bg-gradient-to-b from-blue-50 via-white to-white min-h-screen">

    <!-- Hero Section amb Demo Integrada -->
    <section class="pt-12 pb-20 px-4">
        <div class="container mx-auto max-w-6xl">
            <div class="flex flex-col lg:flex-row items-start gap-12">

                <!-- Text i CTA -->
                <div class="lg:w-1/2 text-center lg:text-left space-y-6">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-blue-100 text-blue-700 text-xs font-bold uppercase tracking-wide">
                        <span class="w-2 h-2 rounded-full bg-blue-600 animate-pulse"></span>
                        Nova Versió Beta
                    </div>

                    <h1 class="text-4xl md:text-6xl font-extrabold text-gray-900 tracking-tight leading-tight">
                        Informes escolars <br>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-indigo-600">en segons, no hores.</span>
                    </h1>

                    <p class="text-lg text-gray-600 max-w-2xl mx-auto lg:mx-0">
                        Utilitza la nostra IA per redactar informes pedagògics personalitzats, empàtics i professionals. Prova-ho ara mateix aquí al costat.
                    </p>

                    <div class="pt-4 flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                        <a href="#features" class="px-8 py-3 rounded-xl bg-white border border-gray-200 text-gray-700 font-medium hover:border-gray-300 hover:shadow-md transition">
                            Com funciona?
                        </a>
                    </div>

                    <div class="pt-8 flex items-center justify-center lg:justify-start gap-8 text-gray-400 grayscale opacity-70">
                        <!-- Logos ficticis d'escoles o partners -->
                        <div class="font-bold text-xl">Escola<span class="font-light">Nova</span></div>
                        <div class="font-bold text-xl">Edu<span class="font-light">Tech</span></div>
                        <div class="font-bold text-xl">Institut<span class="font-light">Obert</span></div>
                    </div>
                </div>

                <!-- Demo Interactiva (Card Principal) -->
                <div class="lg:w-1/2 w-full relative">
                    <!-- Efectes de fons -->
                    <div class="absolute top-0 right-0 -mr-4 -mt-4 w-72 h-72 bg-purple-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob"></div>
                    <div class="absolute bottom-0 left-0 -ml-4 -mb-4 w-72 h-72 bg-blue-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob animation-delay-2000"></div>

                    <div class="relative bg-white rounded-2xl shadow-2xl border border-gray-100 overflow-hidden">
                        <div class="bg-gray-50 border-b border-gray-100 px-6 py-4 flex justify-between items-center">
                            <div class="flex gap-2">
                                <div class="w-3 h-3 rounded-full bg-red-400"></div>
                                <div class="w-3 h-3 rounded-full bg-yellow-400"></div>
                                <div class="w-3 h-3 rounded-full bg-green-400"></div>
                            </div>
                            <div class="text-xs font-mono text-gray-400">generador_ia.exe</div>
                        </div>

                        <form method="POST" action="<?= base_url('generate-report') ?>" class="p-6 md:p-8 grid gap-6">
                            <!-- Input ràpid -->
                            <div class="space-y-4">
                                <div class="grid grid-cols-2 gap-4">
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-1">Nom de l'alumne</label>
                                        <input type="text" name="student_name" class="w-full rounded-lg border-gray-200 bg-gray-50 focus:bg-white focus:ring-2 focus:ring-blue-500 focus:border-transparent p-2.5 text-sm transition" placeholder="Ex: Maria" required>
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-1">Curs</label>
                                        <select name="course" class="w-full rounded-lg border-gray-200 bg-gray-50 p-2.5 text-sm focus:bg-white focus:ring-2 focus:ring-blue-500 focus:border-transparent transition">
                                            <option>Llar d'infants</option>
                                            <option>I3</option>
                                            <option>I4</option>
                                            <option>I5</option>
                                        </select>
                                    </div>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Idioma de l'informe</label>
                                    <select name="language" class="w-full rounded-lg border-gray-200 bg-gray-50 p-2.5 text-sm focus:bg-white focus:ring-2 focus:ring-blue-500 focus:border-transparent transition">
                                        <option value="Català" selected>Català</option>
                                        <option value="Español (España)">Castellà</option>
                                        <option value="English">Anglès</option>
                                    </select>
                                </div>
                                <div class="w-full"> <label class="block text-sm font-medium text-gray-700 mb-2">Evidències d'aprenentatge</label>

                                    <div id="evaluationItems" class="space-y-4 w-full">

                                        <div class="flex flex-col gap-3 p-3 border border-gray-200 rounded-lg bg-white shadow-sm">

                                            <div class="flex items-start gap-2">

                                                <input type="text"
                                                    name="eval_label[]"
                                                    class="flex-1 min-w-0 rounded-lg border-gray-200 bg-gray-50 p-2 text-sm focus:ring-purple-500 focus:bg-white transition"
                                                    placeholder="Ex: Cal·ligrafia">

                                                <select name="eval_value[]"
                                                    class="w-1/3 min-w-[180px] rounded-lg border-gray-200 bg-gray-50 p-2 text-sm focus:bg-white focus:ring-2 focus:ring-blue-500 focus:border-transparent transition">
                                                    <option value="suport_total">Amb suport total</option>
                                                    <option value="acompanyament">Amb acompanyament</option>
                                                    <option value="supervisio">Amb supervisió puntual</option>
                                                    <option value="autonom">De manera autònoma</option>
                                                </select>

                                                <button type="button"
                                                    onclick="eliminarEval(this)"
                                                    class="cursor-pointer p-2 text-gray-400 hover:text-red-600 hover:bg-red-50 rounded-lg transition-colors"
                                                    title="Eliminar ítem">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                    </svg>
                                                </button>
                                            </div>

                                            <div class="w-full">
                                                <label class="block text-xs font-medium text-gray-500 mb-1 ml-1">
                                                    Observacions sobre el procés d'aprenentatge:
                                                </label>

                                                <textarea
                                                    name="eval_text[]"
                                                    rows="3"
                                                    class="w-full rounded-lg border-gray-200 bg-gray-50 p-2 text-sm focus:ring-purple-500 focus:bg-white transition resize-y"
                                                    placeholder="Ex: Necessita recordatoris verbals per mantenir la pinça, però millora la direccionalitat del traç."></textarea>
                                            </div>

                                        </div>

                                    </div>

                                    <button type="button" onclick="addEvaluationItem()" class=" cursor-pointer mt-2 text-xs text-blue-600 font-medium hover:underline flex items-center gap-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd" />
                                        </svg>
                                        Afegir ítem
                                    </button>
                                </div>

                                <div class="w-full">
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Comentaris / Observacions</label>

                                    <div id="observationItems" class="space-y-2 w-full">
                                        <div class="flex items-center w-full gap-2">
                                            <textarea
                                                name="observations[]"
                                                rows="3"
                                                class="w-full rounded-lg border-gray-200 bg-gray-50 p-2 text-sm focus:ring-purple-500 focus:bg-white transition resize-y"
                                                placeholder="Ex: S'ha adaptat bé a les rutines. Es mostra participatiu en les rotllanes, tot i que necessita ajuda per gestionar els torns de paraula. Ha guanyat autonomia en el vestit."></textarea>
                                            <button type="button"
                                                onclick="eliminarItem(this)"
                                                class="cursor-pointer p-2 text-gray-400 hover:text-red-600 hover:bg-red-50 rounded-lg transition-colors"
                                                title="Eliminar ítem">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>

                                    <button type="button" onclick="addObservationItem()" class="cursor-pointer mt-2 text-xs text-blue-600 font-medium hover:underline flex items-center gap-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd" />
                                        </svg>
                                        Afegir observació
                                    </button>
                                </div>
                                <button type="submit" class="cursor-pointer w-full bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white font-bold py-3 rounded-lg shadow-lg transform transition hover:-translate-y-0.5 flex justify-center items-center gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0 1 1 0 002 0zm-1 4a1 1 0 00-1 1v3a1 1 0 002 0v-3a1 1 0 00-1-1z" clip-rule="evenodd" />
                                    </svg>
                                    Generar Informe de Prova
                                </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>
</section>

<!-- Features Grid -->
<section id="features" class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-bold text-gray-900">Tot el que necessites per gestionar l'aula</h2>
            <p class="text-gray-500 mt-4">Eines pensades per docents, no per informàtics.</p>
        </div>

        <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">
            <div class="p-8 rounded-2xl bg-gray-50 hover:bg-white hover:shadow-xl transition border border-gray-100 group">
                <div class="w-14 h-14 rounded-xl bg-blue-100 text-blue-600 flex items-center justify-center mb-6 group-hover:scale-110 transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Informes PDF</h3>
                <p class="text-gray-600 leading-relaxed">Genera i descarrega informes oficials amb un sol clic. Plantilles personalitzables per a cada escola.</p>
            </div>

            <div class="p-8 rounded-2xl bg-gray-50 hover:bg-white hover:shadow-xl transition border border-gray-100 group">
                <div class="w-14 h-14 rounded-xl bg-purple-100 text-purple-600 flex items-center justify-center mb-6 group-hover:scale-110 transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Gestió d'Alumnes</h3>
                <p class="text-gray-600 leading-relaxed">Tota la informació dels teus alumnes en un sol lloc. Assistència, notes i observacions diàries.</p>
            </div>

            <div class="p-8 rounded-2xl bg-gray-50 hover:bg-white hover:shadow-xl transition border border-gray-100 group">
                <div class="w-14 h-14 rounded-xl bg-green-100 text-green-600 flex items-center justify-center mb-6 group-hover:scale-110 transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Analítiques</h3>
                <p class="text-gray-600 leading-relaxed">Visualitza el progrés de la classe amb gràfics intuïtius. Detecta problemes abans que sigui tard.</p>
            </div>
        </div>
    </div>
</section>

<footer class="bg-gray-900 text-gray-400 py-12 border-t border-gray-800">
    <div class="container mx-auto px-4 text-center">
        <h4 class="text-white text-2xl font-bold mb-4">EduReports 🍎</h4>
        <p class="mb-8 max-w-md mx-auto">La plataforma de gestió escolar feta per professors, per a professors.</p>
        <div class="flex justify-center gap-6 mb-8">
            <a href="#" class="hover:text-white transition">Sobre nosaltres</a>
            <a href="#" class="hover:text-white transition">Privacitat</a>
            <a href="#" class="hover:text-white transition">Contacte</a>
        </div>
        <p class="text-sm opacity-50">&copy; <?php echo date('Y'); ?> EduReports. Tots els drets reservats.</p>
    </div>
</footer>
</div>
</body>

</html>