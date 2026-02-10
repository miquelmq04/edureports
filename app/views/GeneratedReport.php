<div class='max-w-4xl mx-auto bg-white rounded-lg shadow-lg p-8 my-8'>
    <!-- Header del informe -->
    <div class='flex justify-between items-start mb-8 pb-6 border-b-2 border-indigo-200'>
        <div>
            <h1 class='text-3xl font-bold text-gray-900 mb-2'>Informe Acadèmic</h1>
            <p class='text-gray-600'>Alumne: <span class='font-semibold'><?php echo $reportData['student_name'] ?></span></p>
            <p class='text-gray-600'>Curs: <span class='font-semibold'><?php echo $reportData['course'] ?></span></p>
        </div>
        <div class='relative'>
            <button onclick='toggleDownloadMenu()' class=' bg-indigo-600 hover:bg-indigo-700 text-white font-semibold px-6 py-3 rounded-lg shadow-md transition flex items-center gap-2'>
                <svg class='w-5 h-5' fill='none' stroke='currentColor' viewBox='0 0 24 24'>
                    <path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4'></path>
                </svg>
                Descarregar
            </button>
            <div id='downloadMenu' class='hidden absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-xl border border-gray-200 z-10'>
                <a href='#' onclick='downloadPDF()' class='block px-4 py-3 hover:bg-indigo-50 text-gray-700 font-medium border-b border-gray-100 rounded-t-lg flex items-center gap-2'>
                    <svg class='w-5 h-5 text-red-500' fill='currentColor' viewBox='0 0 20 20'>
                        <path d='M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4z'></path>
                    </svg>
                    PDF
                </a>
                <a href='#' onclick='downloadWord()' class='block px-4 py-3 hover:bg-indigo-50 text-gray-700 font-medium rounded-b-lg flex items-center gap-2'>
                    <svg class='w-5 h-5 text-blue-500' fill='currentColor' viewBox='0 0 20 20'>
                        <path d='M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4z'></path>
                    </svg>
                    Word
                </a>
            </div>
        </div>
    </div>
    <?php echo $generatedReport; ?>
    <!-- Footer del informe -->
    <div class='mt-8 pt-6 border-t-2 border-gray-200 text-sm text-gray-500 flex justify-between'>
        <span>Data de generació: <?php echo date('d/m/Y') ?></span>
        <span>EduReports - Sistema de Gestió Escolar</span>
    </div>
</div>