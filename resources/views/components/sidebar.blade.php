<!-- Sidebar -->
<div class="h-screen sticky top-0 flex-shrink-0 w-64 flex flex-col left-0 hover:w-64 md:w-64 bg-blue-900 dark:bg-gray-900 text-white transition-all duration-300 border-none sidebar">
<div class="overflow-y-auto overflow-x-hidden flex flex-col justify-between flex-grow">
    <ul class="flex flex-col py-4 space-y-1">
        <li class="px-5 hidden md:block">
            <div class="flex flex-row items-center h-8">
                <div class="text-sm font-light tracking-wide text-gray-400 uppercase">Main</div>
            </div>
        </li>
        <li>
            <a href="/pegawai"
                class="relative flex flex-row items-center h-11 focus:outline-none {{ $active == 'pegawai' ? 'bg-gray-800 text-teal-300' : '' }} hover:bg-blue-800 dark:hover:bg-gray-800 dark:hover:text-teal-300 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                <span class="inline-flex justify-center items-center ml-4">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                        </path>
                    </svg>
                </span>
                <span class="ml-2 text-sm tracking-wide truncate">Pegawai</span>
            </a>
        </li>
        <li>
            <a href="/golongan"
                class="relative flex flex-row items-center h-11 focus:outline-none {{ $active == 'golongan' ? 'bg-gray-800 text-teal-300' : '' }} hover:bg-blue-800 dark:hover:bg-gray-800 dark:hover:text-teal-300 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                <span class="inline-flex justify-center items-center ml-4">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4">
                        </path>
                    </svg>
                </span>
                <span class="ml-2 text-sm tracking-wide truncate">Golongan</span>
            </a>
        </li>
        <li class="px-5 hidden md:block">
            <div class="flex flex-row items-center mt-5 h-8">
                <div class="text-sm font-light tracking-wide text-gray-400 uppercase">Account</div>
            </div>
        </li>
        <li>
            <div class="flex justify-start">
                <div x-data="{
                    open: false,
                    toggle() {
                        if (this.open) {
                            return this.close()
                        }
                
                        this.$refs.button.focus()
                
                        this.open = true
                    },
                    close(focusAfter) {
                        if (!this.open) return
                
                        this.open = false
                
                        focusAfter && focusAfter.focus()
                    }
                }" x-on:keydown.escape.prevent.stop="close($refs.button)"
                    x-on:focusin.window="! $refs.panel.contains($event.target) && close()"
                    x-id="['dropdown-button']" class="relative">
                    <!-- Button -->
                    
                        
                        <button x-ref="button" x-on:click="toggle()" :aria-expanded="open"
                            :aria-controls="$id('dropdown-button')" type="button"
                            class="flex items-center gap-2 px-5 py-2.5 rounded-md hover:bg-gray-800 hover:text-teal-300">
                            <span class="mr-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                            </span>

                            @auth
                            {{ auth()->user()->username }}
                            @endauth

                            <!-- Heroicon: chevron-down -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>


                    <!-- Panel -->
                    <div x-ref="panel" x-show="open" x-transition.origin.top.left
                        x-on:click.outside="close($refs.button)" :id="$id('dropdown-button')"
                        style="display: none;"
                        class="absolute left-0 mt-2 w-40 rounded-md bg-gray-900 shadow-md">
                        <form action="/logout" method="POST">
                            @csrf
                            <button type="submit"
                            class="relative flex flex-row items-center w-full h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-800 dark:hover:text-red-500 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                            <span class="inline-flex justify-center items-center ml-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-log-out">
                                    <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                    <polyline points="16 17 21 12 16 7"></polyline>
                                    <line x1="21" y1="12" x2="9" y2="12">
                                    </line>
                                </svg>
                            </span>
                            <span class="ml-2 text-sm tracking-wide truncate">Logout</span>
                        </button>
                        </form>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</div>
</div>
<!-- ./Sidebar -->