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
            <span class="text-sm font-medium">Security</span>
        </a>

        <a href="" class="flex items-center space-x-3 p-3 rounded-lg cursor-pointer transition-colors duration-200 {{ request()->routeIs('identity-verification') ? 'bg-blue-600 text-white' : 'hover:bg-gray-700 hover:text-white' }}">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                <circle cx="12" cy="7" r="4"></circle>
            </svg>
            <span class="text-sm font-medium">Identity verification</span>
        </a>

        <a href="" class="flex items-center space-x-3 p-3 rounded-lg cursor-pointer transition-colors duration-200 {{ request()->routeIs('api-management') ? 'bg-blue-600 text-white' : 'hover:bg-gray-700 hover:text-white' }}">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M21 2l-2 2m-7.61 7.61a5.5 5.5 0 1 1-7.778 7.778 5.5 5.5 0 0 1 7.777-7.777zm0 0L15.5 7.5m0 0l3 3L22 7l-3-3m-3.5 3.5L19 4"></path>
            </svg>
            <span class="text-sm font-medium">API management</span>
        </a>

        <a href="" class="flex items-center space-x-3 p-3 rounded-lg cursor-pointer transition-colors duration-200 {{ request()->routeIs('sub-accounts') ? 'bg-blue-600 text-white' : 'hover:bg-gray-700 hover:text-white' }}">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                <circle cx="9" cy="7" r="4"></circle>
                <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
            </svg>
            <span class="text-sm font-medium">Sub-accounts</span>
        </a>

        <a href="" class="flex items-center space-x-3 p-3 rounded-lg cursor-pointer transition-colors duration-200 {{ request()->routeIs('export-history') ? 'bg-blue-600 text-white' : 'hover:bg-gray-700 hover:text-white' }}">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                <polyline points="7 10 12 15 17 10"></polyline>
                <line x1="12" y1="15" x2="12" y2="3"></line>
            </svg>
            <span class="text-sm font-medium">Export history</span>
        </a>
    </nav>
</aside>