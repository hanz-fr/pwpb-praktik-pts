<aside class="flex-shrink-0 w-64 flex flex-col transition-all duration-300" :class="{ '-ml-64': !sidebarOpen }">
    <nav class="flex-1 flex flex-col bg-gray-800 py-4 px-5">
        <ul>
            <li class="flex justify-between my-8">
                <a href="#" class="flex w-fit text-gray-100 text-2xl">
                    <i data-feather="box" class="my-auto"></i>
                    <span class="ml-3 font-mono">SIMS BETA</span>
                </a>
            </li>
        </ul>
        <ul class="space-y-2">
            <li>
                <a href="#"
                    class="{{ $active === 'data_induk' ? 'bg-teal-600 text-white' : 'text-gray-400' }} flex transition-all hover:text-teal-300 items-center p-2 text-base font-medium rounded-lg hover:bg-slate-700">
                    <i data-feather="book"></i>
                    <span class="ml-3">Data Induk Siswa</span>
                </a>
            </li>
            <li>
                <a href="#"
                    class="{{ $active === 'perpindahan' ? 'bg-teal-600 text-white' : 'text-gray-400' }} flex transition-all hover:text-teal-300 items-center p-2 text-base font-medium rounded-lg hover:bg-slate-700">
                    <i data-feather="shuffle"></i>
                    <span class="ml-3">Perpindahan Siswa</span>
                </a>
            </li>
            <li>
                <a href="#"
                    class="{{ $active === 'alumni' ? 'bg-teal-600 text-white' : 'text-gray-400' }} flex transition-all hover:text-teal-300 items-center p-2 text-base font-medium rounded-lg hover:bg-slate-700">
                    <i data-feather="users"></i>
                    <span class="ml-3">Alumni</span>
                </a>
            </li>
            <li>
                <a href="#"
                    class="{{ $active === 'daftar_ulang' ? 'bg-teal-600 text-white' : 'text-gray-400' }} flex transition-all hover:text-teal-300 items-center p-2 text-base font-medium rounded-lg hover:bg-slate-700">
                    <i data-feather="book-open"></i>
                    <span class="ml-3">Daftar Ulang</span>
                </a>
            </li>
        </ul>
    </nav>
</aside>
