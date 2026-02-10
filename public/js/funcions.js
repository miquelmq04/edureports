/**
 * EduReports - Funcions JavaScript
 * Generació d'informes amb simulació d'IA
 */

// Textos generats per IA (simulat)
const reportTexts = {
    'Empàtic i positiu': (studentName) => `
        <p>L'alumne/a <strong>${studentName}</strong> ha mostrat una evolució molt positiva durant aquest període avaluatiu. La seva actitud proactiva i entusiasta cap a l'aprenentatge és digna de mencionar.</p>
        
        <p>En l'àmbit acadèmic, destaca especialment per la seva curiositat intel·lectual i la capacitat d'establir connexions entre diferents àrees de coneixement. Les seves aportacions a classe enriqueixen les discussions i demostren un pensament crític ben desenvolupat.</p>
        
        <p>En les relacions interpersonals, mostra empatia i respecte cap als companys, contribuint positivament a crear un ambient de col·laboració a l'aula. La seva capacitat per treballar en equip i ajudar als altres és exemplar.</p>
    `,
    'Formal i tècnic': (studentName, course) => `
        <p>Durant el present període d'avaluació, l'alumne/a <strong>${studentName}</strong> ha assolit els objectius educatius establerts per al curs de ${course}.</p>
        
        <p>Pel que fa als resultats acadèmics, l'alumne/a demostra un nivell competencial adequat en les diferents àrees curriculars, amb un progrés sostingut en l'adquisició dels continguts establerts.</p>
        
        <p>En l'aspecte comportamental i social, compleix amb les normes de convivència i mostra disposició per al treball cooperatiu amb els seus iguals.</p>
    `
};

const recommendations = {
    'Empàtic i positiu': `
        <ul class="space-y-2 list-none">
            <li class="flex items-start gap-2">
                <span class="text-green-500 mt-1">✓</span>
                <span>Continuar fomentant la seva curiositat natural mitjançant projectes d'investigació autònoma.</span>
            </li>
            <li class="flex items-start gap-2">
                <span class="text-green-500 mt-1">✓</span>
                <span>Reforçar les habilitats de concentració amb tècniques de mindfulness adaptades a la seva edat.</span>
            </li>
            <li class="flex items-start gap-2">
                <span class="text-green-500 mt-1">✓</span>
                <span>Potenciar el seu lideratge positiu assignant-li rols de responsabilitat a l'aula.</span>
            </li>
        </ul>
    `,
    'Formal i tècnic': `
        <ul class="space-y-2 list-none">
            <li class="flex items-start gap-2">
                <span class="text-green-500 mt-1">✓</span>
                <span>Mantenir la línia de treball actual per consolidar els aprenentatges adquirits.</span>
            </li>
            <li class="flex items-start gap-2">
                <span class="text-green-500 mt-1">✓</span>
                <span>Incrementar la pràctica autònoma en aquells continguts que requereixen major automatització.</span>
            </li>
            <li class="flex items-start gap-2">
                <span class="text-green-500 mt-1">✓</span>
                <span>Continuar desenvolupant les competències transversals mitjançant metodologies actives.</span>
            </li>
        </ul>
    `
};

/**
 * Inicia la generació de l'informe
 */
async function initReportGeneration() {
    if (document.getElementById('loadingContainer')) {
        try {
            const url = document.getElementById('loadingContainer').dataset.url;
            const response = await fetch(url);

            if (!response.ok) {
                throw new Error('Error en la red: ' + response.status);
            }
        } catch (error) {
            // 5. Manejo de errores (si falla internet o la URL no existe)
            console.error('Hubo un problema:', error);
            document.getElementById('loadingContainer').innerHTML = "<span style='color:red'>Error: " + error.message + "</span>";
        }
        window.location.href = "http://edureports.test/generated-report";
    }
}

/**
 * Afegir un nou ítem d'avaluació al formulari
 */
function addEvaluationItem() {
    const container = document.getElementById('evaluationItems');

    // Creem l'HTML de la nova fila. 
    // És idèntic al que ja tens, però amb 'eliminarItem(this)'
    const newRow = `
    <div class="flex flex-col gap-3 p-3 border border-gray-200 rounded-lg bg-white shadow-sm">

        <div class="flex items-start gap-2">

            <input type="text"
                name="eval_label[]"
                class="flex-1 min-w-0 rounded-lg border-gray-200 bg-gray-50 p-2 text-sm focus:ring-purple-500 focus:bg-white transition">

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
            class="w-full rounded-lg border-gray-200 bg-gray-50 p-2 text-sm focus:ring-purple-500 focus:bg-white transition resize-y"></textarea>
        </div>

    </div>
        `;

    // Afegim la nova fila al final del contenidor
    container.insertAdjacentHTML('beforeend', newRow);

    // Opcional: Posar el focus al nou input creat
    const inputs = container.querySelectorAll('input[type="text"]');
    inputs[inputs.length - 1].focus();
}

// Funció per eliminar la fila
function eliminarEval(button) {
    // Busquem el pare més proper que tingui la classe 'flex' (la fila sencera) i l'esborrem
    const row = button.closest('.flex-col');
    if (row) {
        row.remove();
    }
}

function eliminarItem(button) {
    // Busquem el pare més proper que tingui la classe 'flex' (la fila sencera) i l'esborrem
    const row = button.closest('.flex');
    if (row) {
        row.remove();
    }
}

/**
 * Afegir un nou ítem d'observació al formulari
 */
function addObservationItem() {
    const container = document.getElementById('observationItems');

    // HTML de la nova fila (sense input numèric)
    const newRow = `
        <div class="flex items-center w-full gap-2 fade-in">
            <textarea
            name="observations[]"
            rows="3"
            class="w-full rounded-lg border-gray-200 bg-gray-50 p-2 text-sm focus:ring-purple-500 focus:bg-white transition resize-y"
            placeholder="Nova observació..."></textarea>
                    
            <button type="button"
                onclick="eliminarItem(this)"
                class="cursor-pointer p-2 text-gray-400 hover:text-red-600 hover:bg-red-50 rounded-lg transition-colors"
                title="Eliminar ítem">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                </svg>
            </button>
        </div>
    `;

    container.insertAdjacentHTML('beforeend', newRow);

    // Posa el focus al nou input creat
    const inputs = container.querySelectorAll('input[type="text"]');
    inputs[inputs.length - 1].focus();
}

function toggleDownloadMenu() {
    const menu = document.getElementById('downloadMenu');
    menu.classList.toggle('hidden');
}

// Tancar el menú si es clica fora
document.addEventListener('click', function(event) {
    const menu = document.getElementById('downloadMenu');
    const button = event.target.closest('button');
    if (!button && !menu.contains(event.target)) {
        menu.classList.add('hidden');
    }
});

function downloadPDF() {
    alert("'Funcionalitat de descàrrega PDF pendent d\\'implementar");
    // TODO: Implementar descàrrega PDF
}

function downloadWord() {
    alert("'Funcionalitat de descàrrega Word pendent d\\'implementar");
    // TODO: Implementar descàrrega Word
}