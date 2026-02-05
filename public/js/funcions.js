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
    const reportText = typeof reportTextFunction === 'function' 
        ? reportTextFunction(studentName, course) 
        : reportTextFunction;
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
    if (!container) return;
    
    const newItem = document.createElement('div');
    newItem.className = 'flex gap-2';
    newItem.innerHTML = `
        <input type="text" class="w-2/3 rounded-lg border-gray-200 bg-gray-50 p-2 text-sm" placeholder="Extra">
        <select class="w-1/3 rounded-lg border-gray-200 bg-gray-50 p-2 text-sm">
            <option>Malament</option>
            <option>Regular</option>
            <option>Bo</option>
            <option>Molt Bo</option>
        </select>
    `;
    
    container.appendChild(newItem);
}
