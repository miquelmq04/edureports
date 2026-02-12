<!-- Logo/Brand -->
<div class="p-6 border-b border-gray-200">
    <div class="flex items-center gap-2">
        <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-blue-600 to-indigo-600 flex items-center justify-center text-white text-xl flex-shrink-0">
            🍎
        </div>
        <div class="sidebar-text overflow-hidden transition-all duration-300">
            <h2 class="font-bold text-gray-900 whitespace-nowrap">EduReports</h2>
            <p class="text-xs text-gray-500 whitespace-nowrap">Dashboard</p>
        </div>
    </div>
</div>

<!-- Navegació -->
<nav class="flex-1 p-4 space-y-2 overflow-y-auto">

    <!-- Accions Ràpides -->
    <div>
        <a href="<?= base_url('generate-report') ?>" class="flex items-center gap-3 px-3 py-2.5 text-white bg-gradient-to-r from-blue-600 to-indigo-600 rounded-lg transition hover:shadow-lg group mb-2" title="Crear informe">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
            </svg>
            <span class="sidebar-text font-medium text-sm whitespace-nowrap overflow-hidden transition-all duration-300">Crear informe</span>
        </a>
    </div>

    <!-- Informes (amb submenu) -->
    <div>
        <button onclick="toggleSubmenu('informes')" class="w-full flex items-center justify-between px-3 py-2.5 text-gray-700 hover:bg-gray-100 rounded-lg transition group">
            <div class="flex items-center gap-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                </svg>
                <span class="sidebar-text font-medium text-sm whitespace-nowrap overflow-hidden transition-all duration-300">Informes</span>
            </div>
            <svg id="informes-arrow" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 flex-shrink-0 transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
        </button>
        <div id="submenu-informes" class="hidden ml-8 mt-1 space-y-1">
            <a href="#" class="flex items-center gap-2 px-3 py-2 text-sm text-gray-600 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                </svg>
                <span class="sidebar-text">Historial</span>
            </a>
            <a href="#" class="flex items-center gap-2 px-3 py-2 text-sm text-gray-600 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z" />
                </svg>
                <span class="sidebar-text">Plantilles</span>
            </a>
        </div>
    </div>

    <!-- Les Meves Classes (amb submenu) -->
    <div>
        <button onclick="toggleSubmenu('classes')" class="w-full flex items-center justify-between px-3 py-2.5 text-gray-700 hover:bg-gray-100 rounded-lg transition group">
            <div class="flex items-center gap-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                </svg>
                <span class="sidebar-text font-medium text-sm whitespace-nowrap overflow-hidden transition-all duration-300">Les meves classes</span>
            </div>
            <svg id="classes-arrow" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 flex-shrink-0 transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
        </button>
        <div id="submenu-classes" class="hidden ml-4 mt-1 space-y-1">
            <a href="#" class="flex items-center justify-between px-3 py-2 text-gray-600 hover:bg-gray-100 rounded-lg transition group">
                <div class="flex items-center gap-2">
                    <div class="w-6 h-6 rounded-lg bg-purple-100 text-purple-600 flex items-center justify-center text-xs font-bold flex-shrink-0">
                        I3
                    </div>
                    <span class="sidebar-text text-sm">Infantil 3 anys</span>
                </div>
                <span class="sidebar-text text-xs text-gray-400 flex-shrink-0">18</span>
            </a>
            <a href="#" class="flex items-center justify-between px-3 py-2 text-gray-600 hover:bg-gray-100 rounded-lg transition group">
                <div class="flex items-center gap-2">
                    <div class="w-6 h-6 rounded-lg bg-blue-100 text-blue-600 flex items-center justify-center text-xs font-bold flex-shrink-0">
                        I4
                    </div>
                    <span class="sidebar-text text-sm">Infantil 4 anys</span>
                </div>
                <span class="sidebar-text text-xs text-gray-400 flex-shrink-0">22</span>
            </a>
            <a href="#" class="flex items-center justify-between px-3 py-2 text-gray-600 hover:bg-gray-100 rounded-lg transition group">
                <div class="flex items-center gap-2">
                    <div class="w-6 h-6 rounded-lg bg-green-100 text-green-600 flex items-center justify-center text-xs font-bold flex-shrink-0">
                        I5
                    </div>
                    <span class="sidebar-text text-sm">Infantil 5 anys</span>
                </div>
                <span class="sidebar-text text-xs text-gray-400 flex-shrink-0">20</span>
            </a>
            <a href="#" class="flex items-center gap-2 px-3 py-2 text-sm text-blue-600 hover:bg-blue-50 rounded-lg transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                </svg>
                <span class="sidebar-text">Afegir classe</span>
            </a>
        </div>
    </div>

    <!-- Entrenar la IA -->
    <div>
        <a href="#" class="flex items-center gap-3 px-3 py-2.5 text-gray-700 hover:bg-purple-50 hover:text-purple-700 rounded-lg transition group" title="Entrenar la IA">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
            </svg>
            <span class="sidebar-text font-medium text-sm whitespace-nowrap overflow-hidden transition-all duration-300">Personalitza la IA</span>
        </a>
    </div>

    <!-- Configuració -->
    <div>
        <a href="#" class="flex items-center gap-3 px-3 py-2.5 text-gray-700 hover:bg-gray-100 rounded-lg transition group" title="Configuració">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>
            <span class="sidebar-text font-medium text-sm whitespace-nowrap overflow-hidden transition-all duration-300">Configuració</span>
        </a>
    </div>
</nav>

<script>
    function toggleSubmenu(menuId) {
        const submenu = document.getElementById('submenu-' + menuId);
        const arrow = document.getElementById(menuId + '-arrow');

        if (submenu.classList.contains('hidden')) {
            submenu.classList.remove('hidden');
            arrow.style.transform = 'rotate(180deg)';
        } else {
            submenu.classList.add('hidden');
            arrow.style.transform = 'rotate(0deg)';
        }
    }
</script>

<!-- Footer Sidebar -->
<div class="p-4 border-t border-gray-200">
    <div class="flex items-center gap-3 px-2">
        <div class="w-9 h-9 rounded-full bg-gradient-to-br from-blue-500 to-purple-500 flex items-center justify-center text-white text-sm font-bold flex-shrink-0">
            M
        </div>
        <div class="sidebar-text flex-1 overflow-hidden transition-all duration-300">
            <p class="text-sm font-medium text-gray-900 whitespace-nowrap">Mestre/a</p>
            <p class="text-xs text-gray-500 whitespace-nowrap">mestre@escola.cat</p>
        </div>
    </div>
</div>