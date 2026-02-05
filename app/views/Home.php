<div class="bg-gradient-to-b from-blue-50 via-white to-white min-h-screen">
    
    <!-- Hero Section amb Demo Integrada -->
    <section class="pt-12 pb-20 px-4">
        <div class="container mx-auto max-w-6xl">
            <div class="flex flex-col lg:flex-row items-center gap-12">
                
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
                        
                        <div class="p-6 md:p-8 grid gap-6">
                            <!-- Input ràpid -->
                            <div class="space-y-4">
                                <div class="grid grid-cols-2 gap-4">
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-1">Nom de l'alumne</label>
                                        <input type="text" class="w-full rounded-lg border-gray-200 bg-gray-50 focus:bg-white focus:ring-2 focus:ring-blue-500 focus:border-transparent p-2.5 text-sm transition" placeholder="Ex: Maria">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-1">Curs</label>
                                        <select class="w-full rounded-lg border-gray-200 bg-gray-50 p-2.5 text-sm focus:bg-white focus:ring-2 focus:ring-blue-500 focus:border-transparent transition">
                                            <option>3r Primària</option>
                                            <option>4t Primària</option>
                                            <option>5è Primària</option>
                                            <option>6è Primària</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Avaluació i Notes</label>
                                    <div class="space-y-2">
                                        <div class="flex gap-2">
                                            <input type="text" class="w-2/3 rounded-lg border-gray-200 bg-gray-50 p-2 text-sm" placeholder="Matèria/Competència" value="Matemàtiques">
                                            <select class="w-1/3 rounded-lg border-gray-200 bg-gray-50 p-2 text-sm">
                                                <option>Assoliment Excel·lent</option>
                                                <option>Assoliment Notable</option>
                                                <option>Assoliment Satisfactori</option>
                                            </select>
                                        </div>
                                        <div class="flex gap-2">
                                            <input type="text" class="w-2/3 rounded-lg border-gray-200 bg-gray-50 p-2 text-sm" placeholder="Matèria/Competència" value="Comportament">
                                            <select class="w-1/3 rounded-lg border-gray-200 bg-gray-50 p-2 text-sm">
                                                <option>Molt bo</option>
                                                <option>Bo</option>
                                                <option>Regular</option>
                                            </select>
                                        </div>
                                        <button class="text-xs text-blue-600 font-medium hover:underline flex items-center gap-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd" /></svg>
                                            Afegir ítem
                                        </button>
                                    </div>
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Situacions observades</label>
                                    <textarea class="w-full rounded-lg border-gray-200 bg-gray-50 focus:bg-white focus:ring-2 focus:ring-blue-500 focus:border-transparent p-3 text-sm h-20 resize-none transition" placeholder="Ex: Es distreu parlant amb els companys. És molt creativa dibuixant."></textarea>
                                </div>

                                <!-- Funcions Pro (Bloquejades) -->
                                <div class="relative group rounded-lg">
                                    <div class="absolute inset-0 bg-white/40 z-10 flex items-center justify-center rounded-lg border-2 border-dashed border-gray-200 hover:bg-white/20 transition-colors">
                                        <div class="bg-gray-800 text-white text-xs font-bold px-3 py-1.5 rounded-full shadow-lg flex items-center gap-2 transform group-hover:scale-105 transition cursor-not-allowed">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" /></svg>
                                            Només versió completa
                                        </div>
                                    </div>
                                    <div class="space-y-3 opacity-75 filter grayscale pointer-events-none select-none p-1">
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700 mb-1">Entrenament IA (El teu estil)</label>
                                            <div class="border border-gray-300 rounded-lg p-2.5 bg-gray-50 flex items-center justify-between">
                                                <span class="text-xs text-gray-500">Pujar informes antics...</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12" /></svg>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700 mb-1">Plantilla de l'informe</label>
                                            <div class="border border-gray-300 rounded-lg p-2.5 bg-gray-50 flex items-center justify-between">
                                                <span class="text-xs text-gray-500">Seleccionar arxiu .docx</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" /></svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Estil</label>
                                    <select class="w-full rounded-lg border-gray-200 bg-gray-50 p-2.5 text-sm">
                                        <option>Empàtic i positiu</option>
                                        <option>Formal i tècnic</option>
                                    </select>
                                </div>

                                <button class="w-full bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white font-bold py-3 rounded-lg shadow-lg transform transition hover:-translate-y-0.5 flex justify-center items-center gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0 1 1 0 002 0zm-1 4a1 1 0 00-1 1v3a1 1 0 002 0v-3a1 1 0 00-1-1z" clip-rule="evenodd" /></svg>
                                    Generar Informe de Prova
                                </button>
                            </div>

                            <!-- Resultat Simulat -->
                            <div class="bg-blue-50 rounded-lg p-4 border border-blue-100">
                                <p class="text-xs font-bold text-blue-400 uppercase mb-2">Previsualització:</p>
                                <p class="text-sm text-gray-700 leading-relaxed">
                                    "La Maria mostra una evolució molt positiva. Destaca especialment la seva <span class="bg-yellow-100 px-1">creativitat</span> a l'aula, aportant solucions originals. Tot i que ha millorat notablement en <span class="bg-yellow-100 px-1">matemàtiques</span>, recomanem treballar la concentració..."
                                </p>
                            </div>
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
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" /></svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Informes PDF</h3>
                    <p class="text-gray-600 leading-relaxed">Genera i descarrega informes oficials amb un sol clic. Plantilles personalitzables per a cada escola.</p>
                </div>
                
                <div class="p-8 rounded-2xl bg-gray-50 hover:bg-white hover:shadow-xl transition border border-gray-100 group">
                    <div class="w-14 h-14 rounded-xl bg-purple-100 text-purple-600 flex items-center justify-center mb-6 group-hover:scale-110 transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" /></svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Gestió d'Alumnes</h3>
                    <p class="text-gray-600 leading-relaxed">Tota la informació dels teus alumnes en un sol lloc. Assistència, notes i observacions diàries.</p>
                </div>

                <div class="p-8 rounded-2xl bg-gray-50 hover:bg-white hover:shadow-xl transition border border-gray-100 group">
                    <div class="w-14 h-14 rounded-xl bg-green-100 text-green-600 flex items-center justify-center mb-6 group-hover:scale-110 transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" /></svg>
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