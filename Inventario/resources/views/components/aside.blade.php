<aside class="w-64 min-h-screen bg-gradient-to-b from-gray-900 to-gray-800 text-gray-300">
    <nav class="p-4 space-y-2">
        <a href="" class="flex items-center space-x-3 p-3 rounded-lg cursor-pointer transition-colors duration-200 {{ request()->routeIs('dashboard') ? 'bg-blue-600 text-white' : 'hover:bg-gray-700 hover:text-white' }}">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <rect x="3" y="3" width="7" height="7"></rect>
                <rect x="14" y="3" width="7" height="7"></rect>
                <rect x="14" y="14" width="7" height="7"></rect>
                <rect x="3" y="14" width="7" height="7"></rect>
            </svg>
            <span class="text-sm font-medium">Dashboard</span>
        </a>

        <a href="" class="flex items-center space-x-3 p-3 rounded-lg cursor-pointer transition-colors duration-200 {{ request()->routeIs('security') ? 'bg-blue-600 text-white' : 'hover:bg-gray-700 hover:text-white' }}">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
            </svg>
            <span class="text-sm font-medium">Añadir Producto</span>
        </a>

       
    </nav>
</aside>