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
function initReportGeneration() {
    // Obtenir les dades des dels data attributes
    const container = document.getElementById('reportContainer');
    if (!container) return;

    const studentName = container.dataset.studentName || 'l\'alumne/a';
    const course = container.dataset.course || '';
    const style = container.dataset.style || 'Empàtic i positiu';

    // Seleccionar el text segons l'estil
    const reportTextFunction = reportTexts[style] || reportTexts['Empàtic i positiu'];
    const reportText = typeof reportTextFunction === 'function' ?
        reportTextFunction(studentName, course) :
        reportTextFunction;
    const recommendationText = recommendations[style] || recommendations['Empàtic i positiu'];

    // Simular generació amb delay de 3 segons
    setTimeout(() => {
        // Amagar loader
        const loader = document.getElementById('loader');
        if (loader) {
            loader.classList.add('hidden');
        }

        // Mostrar contingut
        const reportContent = document.getElementById('reportContent');
        if (reportContent) {
            reportContent.classList.remove('hidden');
        }

        // Inserir el text generat
        const reportTextElement = document.getElementById('reportText');
        if (reportTextElement) {
            reportTextElement.innerHTML = reportText;
        }

        const recommendationsElement = document.getElementById('recommendations');
        if (recommendationsElement) {
            recommendationsElement.innerHTML = recommendationText;
        }

        // Scroll suau cap amunt
        window.scrollTo({ top: 0, behavior: 'smooth' });

    }, 3000); // 3 segons de delay
}

// Iniciar quan el document estigui carregat
document.addEventListener('DOMContentLoaded', initReportGeneration);

/**
 * Afegir un nou ítem d'avaluació al formulari
 */
function addEvaluationItem() {
    const container = document.getElementById('evaluationItems');

    // Creem l'HTML de la nova fila. 
    // És idèntic al que ja tens, però amb 'eliminarItem(this)'
    const newRow = `
            <div class="flex items-center w-full gap-2 fade-in">
                <input type="text" 
                       name="eval_label[]" 
                       class="flex-1 w-full min-w-0 rounded-lg border-gray-200 bg-gray-50 p-2 text-sm focus:ring-purple-500 focus:bg-white transition" 
                       placeholder="Nou ítem...">
                
                <input type="number" 
                       name="eval_value[]" 
                       min="0" max="10" 
                       class="w-14 flex-shrink-0 rounded-lg border-gray-200 bg-gray-50 p-2 text-sm text-center focus:ring-purple-500" 
                       placeholder="0">
                
                <button type="button" 
                        onclick="eliminarItem(this)" 
                        class="cursor-pointer flex-shrink-0 p-1" 
                        title="Eliminar ítem">
                    <svg xmlns="http://www.w3.org/2000/svg" 
                        class="h-4 w-4 text-red-600 hover:text-red-800 transition-colors" 
                        fill="none" 
                        viewBox="0 0 24 24" 
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                    </svg>
                </button>
            </div>
        `;

    // Afegim la nova fila al final del contenidor
    container.insertAdjacentHTML('beforeend', newRow);

    // Opcional: Posar el focus al nou input creat
    const inputs = container.querySelectorAll('input[type="text"]');
    inputs[inputs.length - 1].focus();
}

// Funció per eliminar la fila
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
            <input type="text" 
                   name="observations[]" 
                   class="flex-1 w-full min-w-0 rounded-lg border-gray-200 bg-gray-50 p-2 text-sm focus:ring-purple-500 focus:bg-white transition" 
                   placeholder="Nova observació...">
            
            <button type="button" 
                    onclick="eliminarItem(this)" 
                    class="cursor-pointer flex-shrink-0 p-1" 
                    title="Eliminar observació">
                <svg xmlns="http://www.w3.org/2000/svg" 
                     class="h-4 w-4 text-red-600 hover:text-red-800 transition-colors" 
                     fill="none" 
                     viewBox="0 0 24 24" 
                     stroke="currentColor">
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