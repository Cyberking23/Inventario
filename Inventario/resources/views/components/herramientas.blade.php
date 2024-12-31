<div class="bg-gray-900 p-6 ">
    <!-- Header -->
    <div class="flex justify-between items-center mb-6">
        <div class="flex space-x-6">
            <h2 class="text-white text-xl font-semibold">Productos</h2>

        </div>
        <button class="text-emerald-400 hover:text-emerald-300 text-sm">View more →</button>
    </div>

    <!-- Market Table -->
    <div class="w-full">
        <!-- Table Header -->
        <div class="grid grid-cols-5 text-gray-400 text-sm mb-4">
            <div class="col-span-1">Coin</div>
            <div class="col-span-1">Price</div>
            <div class="col-span-1">24h Change</div>
            <div class="col-span-1">4h Trend</div>
            <div class="col-span-1">Action</div>
        </div>

        <!-- Table Body -->
        <div class="space-y-4">
            <!-- Bitcoin Row -->
            <div class="grid grid-cols-5 items-center bg-gray-800/50 rounded-lg p-4">
                <div class="col-span-1 flex items-center space-x-3">
                    <div class="w-8 h-8 bg-orange-500 rounded-full flex items-center justify-center">
                        <span class="text-white font-bold">₿</span>
                    </div>
                    <div>
                        <div class="text-white">Bitcoin</div>
                        <div class="text-gray-400 text-sm">BTC</div>
                    </div>
                </div>
                <div class="col-span-1 text-white">$56,826.74</div>
                <div class="col-span-1 text-emerald-400">+2.7%</div>
                <div class="col-span-1">
                    <svg class="w-24 h-12" viewBox="0 0 100 50">
                        <path d="M0 25 L20 20 L40 30 L60 15 L80 35 L100 25" 
                              stroke="rgb(16, 185, 129)" 
                              fill="none" 
                              stroke-width="2"/>
                    </svg>
                </div>
                <div class="col-span-1">
                    <button class="px-4 py-2 bg-emerald-500/10 bg-red-600 rounded-lg hover:bg-emerald-500/20 transition-colors duration-200">
                        Delete
                        </button>
                </div>
            </div>

            <!-- Tether Row -->
            <div class="grid grid-cols-5 items-center bg-gray-800/50 rounded-lg p-4">
                <div class="col-span-1 flex items-center space-x-3">
                    <div class="w-8 h-8 bg-teal-500 rounded-full flex items-center justify-center">
                        <span class="text-white font-bold">T</span>
                    </div>
                    <div>
                        <div class="text-white">Tether</div>
                        <div class="text-gray-400 text-sm">USDT</div>
                    </div>
                </div>
                <div class="col-span-1 text-white">$88.97</div>
                <div class="col-span-1 text-emerald-400">+1.08%</div>
                <div class="col-span-1">
                    <svg class="w-24 h-12" viewBox="0 0 100 50">
                        <path d="M0 25 L20 20 L40 30 L60 25 L80 20 L100 30" 
                              stroke="rgb(16, 185, 129)" 
                              fill="none" 
                              stroke-width="2"/>
                    </svg>
                </div>
                <div class="col-span-1">
                <button class="px-4 py-2 bg-emerald-500/10 bg-red-600 rounded-lg hover:bg-emerald-500/20 transition-colors duration-200">
                        Delete
                </button>
                </div>
            </div>

            <!-- Uniswap Row -->
            <div class="grid grid-cols-5 items-center bg-gray-800/50 rounded-lg p-4">
                <div class="col-span-1 flex items-center space-x-3">
                    <div class="w-8 h-8 bg-pink-500 rounded-full flex items-center justify-center">
                        <span class="text-white font-bold">U</span>
                    </div>
                    <div>
                        <div class="text-white">Uniswap</div>
                        <div class="text-gray-400 text-sm">UNI</div>
                    </div>
                </div>
                <div class="col-span-1 text-white">$0.62</div>
                <div class="col-span-1 text-red-400">-0.42%</div>
                <div class="col-span-1">
                    <svg class="w-24 h-12" viewBox="0 0 100 50">
                        <path d="M0 20 L20 30 L40 15 L60 35 L80 25 L100 30" 
                              stroke="rgb(239, 68, 68)" 
                              fill="none" 
                              stroke-width="2"/>
                    </svg>
                </div>
                <div class="col-span-1">
                <button class="px-4 py-2 bg-emerald-500/10 bg-red-600 rounded-lg hover:bg-emerald-500/20 transition-colors duration-200">
                        Delete
                </button>
                </div>
            </div>
        </div>
    </div>
</div>