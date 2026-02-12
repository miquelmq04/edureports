<!-- Header Modern i Professional -->
<header class="bg-white border-b border-gray-200 sticky top-0 z-50 shadow-sm">
    <nav class="container mx-auto px-4 py-4">
        <div class="flex justify-between items-center">
            <!-- Logo i Badge -->
            <div class="flex items-center gap-4">
                <a href="<?= base_url() ?>" class="flex items-center gap-2 group">
                    <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-blue-600 to-indigo-600 flex items-center justify-center text-white text-xl transform group-hover:scale-105 transition">
                        🍎
                    </div>
                    <div class="flex flex-col">
                        <span class="text-xl font-bold text-gray-900">EduReports</span>
                        <span class="text-xs text-gray-500 -mt-1">Informes amb IA</span>
                    </div>
                </a>
            </div>

            <!-- Navegació Desktop -->
            <ul class="hidden md:flex items-center space-x-6 text-sm font-medium">
                <li>
                    <a href="#features" class="text-gray-600 hover:text-blue-600 transition flex items-center gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                        Com funciona
                    </a>
                </li>
                <li>
                    <a href="#" class="text-gray-600 hover:text-blue-600 transition flex items-center gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                        Privacitat
                    </a>
                </li>
                <li>
                    <a href="#" class="text-gray-600 hover:text-blue-600 transition flex items-center gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                        </svg>
                        Recursos
                    </a>
                </li>
                <li>
                    <div class="w-px h-6 bg-gray-200"></div>
                </li>
                <li>
                    <a href="#" class="text-gray-600 hover:text-gray-900 transition font-medium">
                        Inicia sessió
                    </a>
                </li>
                <li>
                    <a href="#" class="px-4 py-2 bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white font-semibold rounded-lg shadow-md transform transition hover:-translate-y-0.5 flex items-center gap-2">
                        Prova gratuïta
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </a>
                </li>
            </ul>

            <!-- Menu Mobile Button -->
            <button class="md:hidden p-2 rounded-lg hover:bg-gray-100 transition" onclick="toggleMobileMenu()">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>

        <!-- Menu Mobile (amagat per defecte) -->
        <div id="mobileMenu" class="hidden md:hidden pt-4 pb-2 border-t border-gray-100 mt-4 space-y-2">
            <a href="#features" class="block py-2 px-4 text-gray-600 hover:bg-gray-50 rounded-lg transition">
                Com funciona
            </a>
            <a href="#" class="block py-2 px-4 text-gray-600 hover:bg-gray-50 rounded-lg transition">
                Privacitat
            </a>
            <a href="#" class="block py-2 px-4 text-gray-600 hover:bg-gray-50 rounded-lg transition">
                Recursos
            </a>
            <div class="border-t border-gray-100 my-2"></div>
            <a href="#" class="block py-2 px-4 text-gray-600 hover:bg-gray-50 rounded-lg transition">
                Inicia sessió
            </a>
            <a href="#" class="block py-2 px-4 bg-gradient-to-r from-blue-600 to-indigo-600 text-white font-semibold rounded-lg text-center">
                Prova gratuïta
            </a>
        </div>
    </nav>
</header>

<script>
    function toggleMobileMenu() {
        const menu = document.getElementById('mobileMenu');
        menu.classList.toggle('hidden');
    }
</script>