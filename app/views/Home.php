<div class="bg-gradient-to-b from-blue-50 via-white to-white min-h-screen">

    <!-- Hero Section amb Demo Integrada -->
    <section class="pt-12 pb-20 px-4">
        <div class="container mx-auto max-w-6xl">
            <div class="flex flex-col lg:flex-row items-start gap-12">

                <!-- Text i CTA -->
                <div class="lg:w-1/2 text-center lg:text-left space-y-6">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-blue-100 text-blue-700 text-xs font-bold uppercase tracking-wide">
                        <span class="w-2 h-2 rounded-full bg-blue-600 animate-pulse"></span>
                        Informes professionals en minuts, no hores
                    </div>

                    <div class="h-[100px] md:h-[300px] flex flex-col justify-start">
                        <h1 id="dynamicTitle" class="text-4xl md:text-6xl font-extrabold text-gray-900 tracking-tight leading-tight">
                            <span id="titlePart1" class="block">De les teves anotacions</span>
                            <span id="titlePart2" class="block text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-indigo-600">a informes professionals.</span>
                        </h1>
                    </div>

                    <p class="text-lg text-gray-600 max-w-2xl mx-auto lg:mx-0">
                        <strong>Converteix observacions d'aula en informes pedagògics de qualitat en segons.</strong> Usar IA per redactar informes no és fer trampes—és treballar amb intel·ligència. Estalvia hores de feina repetitiva, aconsegueix un vocabulari més professional i dedica el temps que guanyes a allò que realment importa: els teus alumnes.
                    </p>

                    <div class="pt-4 flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                        <button onclick="highlightDemo()" class="px-8 py-3 rounded-xl bg-white border border-gray-200 text-gray-700 font-medium hover:border-gray-300 hover:shadow-md transition cursor-pointer">
                            Com funciona?
                        </button>
                    </div>

                    <div class="pt-8 flex flex-col lg:items-start items-center gap-4">
                        <div class="inline-flex items-center gap-3 text-sm">
                            <div class="flex items-center gap-2 px-3 py-2 rounded-lg bg-green-50 text-green-700">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                                <span class="font-medium">Privacitat garantida</span>
                            </div>
                            <div class="flex items-center gap-2 px-3 py-2 rounded-lg bg-blue-50 text-blue-700">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                                </svg>
                                <span class="font-medium">Estalvia hores</span>
                            </div>
                        </div>
                        <p class="text-xs text-gray-500">Més de 500 mestres ja han recuperat el temps per a allò que realment importa</p>
                    </div>
                </div>

                <!-- Demo Interactiva (Card Principal) -->
                <div id="demoCard" class="lg:w-1/2 w-full relative">
                    <!-- Efectes de fons -->
                    <div class="absolute top-0 right-0 -mr-4 -mt-4 w-72 h-72 bg-purple-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob"></div>
                    <div class="absolute bottom-0 left-0 -ml-4 -mb-4 w-72 h-72 bg-blue-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob animation-delay-2000"></div>

                    <div id="demoHint" class="hidden absolute -top-4 left-1/2 transform -translate-x-1/2 z-20 px-4 py-2 bg-gradient-to-r from-blue-600 to-indigo-600 text-white text-sm font-semibold rounded-full shadow-lg">
                        👇 Prova-ho tu mateix/a!
                    </div>

                    <div id="demoForm" class="relative bg-white rounded-2xl shadow-2xl border border-gray-100 overflow-hidden transition-all duration-300">
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

<script>
    // Canvi dinàmic del títol H1 amb efecte typewriter
    const titles = [{
            part1: "De les teves anotacions",
            part2: "a informes professionals."
        },
        {
            part1: "Dels teus apunts",
            part2: "a textos pedagògics de qualitat."
        },
        {
            part1: "De notes desorganitzades",
            part2: "a informes ben redactats."
        },
        {
            part1: "Del 'no se m'està quiet'",
            part2: "a vocabulari pedagògic."
        },
        {
            part1: "De 30 minuts de feina",
            part2: "a 30 segons de generació."
        }
    ];

    let currentTitleIndex = 0;
    let isTyping = false;

    // Funció per esborrar text lletra a lletra
    function eraseText(element, callback) {
        const text = element.textContent;
        let currentLength = text.length;

        const eraseInterval = setInterval(() => {
            if (currentLength > 0) {
                element.textContent = text.substring(0, currentLength - 1);
                currentLength--;
            } else {
                clearInterval(eraseInterval);
                if (callback) callback();
            }
        }, 30);
    }

    // Funció per escriure text lletra a lletra
    function typeText(element, text, callback) {
        let currentLength = 0;
        element.textContent = '';

        const typeInterval = setInterval(() => {
            if (currentLength < text.length) {
                element.textContent = text.substring(0, currentLength + 1);
                currentLength++;
            } else {
                clearInterval(typeInterval);
                if (callback) callback();
            }
        }, 50);
    }

    function changeTitle() {
        if (isTyping) return;
        isTyping = true;

        const part1Element = document.getElementById('titlePart1');
        const part2Element = document.getElementById('titlePart2');

        // Passar al següent títol
        const nextIndex = (currentTitleIndex + 1) % titles.length;

        // 1. Esborrar part2
        eraseText(part2Element, () => {
            // 2. Esborrar part1
            eraseText(part1Element, () => {
                // 3. Actualitzar l'índex
                currentTitleIndex = nextIndex;

                // Pausa curta abans de començar a escriure
                setTimeout(() => {
                    // 4. Escriure nova part1
                    typeText(part1Element, titles[currentTitleIndex].part1, () => {
                        // 5. Escriure nova part2
                        typeText(part2Element, titles[currentTitleIndex].part2, () => {
                            isTyping = false;
                        });
                    });
                }, 200);
            });
        });
    }

    setInterval(changeTitle, 16000);

    function highlightDemo() {
        const demoCard = document.getElementById('demoCard');
        const demoForm = document.getElementById('demoForm');
        const demoHint = document.getElementById('demoHint');

        demoCard.scrollIntoView({
            behavior: 'smooth',
            block: 'center'
        });

        setTimeout(() => {
            demoHint.classList.remove('hidden');
            demoHint.classList.add('animate-bounce');

            demoForm.classList.add('ring-4', 'ring-blue-400', 'ring-opacity-50', 'scale-105', 'shadow-2xl');
            demoForm.style.animation = 'pulse 1.5s ease-in-out 2';

            setTimeout(() => {
                demoHint.style.opacity = '0';
                demoHint.style.transition = 'opacity 0.5s';

                setTimeout(() => {
                    demoHint.classList.add('hidden');
                    demoHint.style.opacity = '1';
                    demoHint.classList.remove('animate-bounce');
                }, 500);

                demoForm.classList.remove('ring-4', 'ring-blue-400', 'ring-opacity-50', 'scale-105');
                demoForm.style.animation = '';
            }, 4000);
        }, 400);
    }
</script>

<!-- Features Grid -->
<section id="features" class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-bold text-gray-900">La IA sí, però amb garanties</h2>
            <p class="text-gray-500 mt-4">No és qüestió de si usar IA o no, sinó de com fer-ho amb responsabilitat</p>
        </div>

        <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">
            <div class="p-8 rounded-2xl bg-gray-50 hover:bg-white hover:shadow-xl transition border border-gray-100 group">
                <div class="w-14 h-14 rounded-xl bg-blue-100 text-blue-600 flex items-center justify-center mb-6 group-hover:scale-110 transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Les dades dels teus alumnes, protegides</h3>
                <p class="text-gray-600 leading-relaxed">ChatGPT i altres xats públics poden usar les dades que hi escrius per entrenar els seus models. Aquí tota la informació dels alumnes queda <strong>confidencial i segura</strong>. Zero compromisos amb la privacitat de l'aula.</p>
            </div>

            <div class="p-8 rounded-2xl bg-gray-50 hover:bg-white hover:shadow-xl transition border border-gray-100 group">
                <div class="w-14 h-14 rounded-xl bg-purple-100 text-purple-600 flex items-center justify-center mb-6 group-hover:scale-110 transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Paraules que transmeten millor</h3>
                <p class="text-gray-600 leading-relaxed">Passa de "no se m'està quiet" a descripcions pedagògiques constructives. Aconsegueix el <strong>vocabulari professional</strong> que volies usar però no et sortia, amb un to empàtic i respectuós cap a les famílies.</p>
            </div>

            <div class="p-8 rounded-2xl bg-gray-50 hover:bg-white hover:shadow-xl transition border border-gray-100 group">
                <div class="w-14 h-14 rounded-xl bg-green-100 text-green-600 flex items-center justify-center mb-6 group-hover:scale-110 transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Estalvi de temps real</h3>
                <p class="text-gray-600 leading-relaxed">Genera un esborrany en <strong>30 segons</strong> en lloc de 30 minuts. Dedica el temps que guanyes a revisar, personalitzar i afegir el toc humà que només tu pots donar. Usar IA per redactar no és fer trampes, és treballar més intel·ligent.</p>
            </div>
        </div>
    </div>
</section>

<!-- Secció: Del caos a la claredat -->
<section class="py-20 bg-gradient-to-b from-blue-50 to-white">
    <div class="container mx-auto px-4 max-w-5xl">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Del full d'anotacions a l'informe professional</h2>
            <p class="text-gray-600 text-lg">El procés que estalvia hores i millora la comunicació amb les famílies</p>
        </div>

        <div class="grid md:grid-cols-3 gap-8 items-start">
            <!-- Pas 1 -->
            <div class="text-center">
                <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-red-100 to-orange-100 text-red-600 flex items-center justify-center mx-auto mb-4 shadow-lg">
                    <span class="text-2xl font-bold">1</span>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">Les teves notes originals</h3>
                <div class="bg-white p-4 rounded-lg border-2 border-dashed border-gray-200 text-left text-sm text-gray-700 italic">
                    "Participa molt a rotllana però no aguanta el torn. Cal·ligrafia: li costa agafar el llapis. Vestit: encara necessita ajuda"
                </div>
            </div>

            <!-- Fletxa -->
            <div class="hidden md:flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                </svg>
            </div>

            <!-- Pas 2 -->
            <div class="text-center">
                <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-blue-100 to-indigo-100 text-blue-600 flex items-center justify-center mx-auto mb-4 shadow-lg">
                    <span class="text-2xl font-bold">2</span>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">Informe generat (30 segons)</h3>
                <div class="bg-white p-4 rounded-lg border-2 border-blue-200 text-left text-sm text-gray-700 leading-relaxed">
                    La Maria mostra una gran motivació durant les rotllanes, participant activament. Està treballant la gestió dels torns de paraula amb acompanyament. En psicomotricitat fina, progressa en l'adquisició de la pinça, tot i que requereix supervisió per mantenir-la...
                </div>
            </div>
        </div>

        <div class="mt-12 p-6 bg-white rounded-xl shadow-lg border border-gray-100 text-center">
            <div class="flex items-center justify-center gap-3 mb-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-amber-500" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
                </svg>
                <h3 class="text-lg font-bold text-gray-900">Sempre revisa i personalitza</h3>
            </div>
            <p class="text-gray-600">
                La IA t'ofereix un <strong>esborrany professional</strong> en segons, però el toc final sempre l'afegeixes tu.
                Revisa, ajusta el to, afegeix detalls que només tu coneixes. Això no és substituir la teva feina,
                és <strong>multiplicar el temps que dediques a allò que realment importa</strong>.
            </p>
        </div>
    </div>
</section>