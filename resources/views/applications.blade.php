<x-layout.app class="bg-gray-400"> 
    <main class="container mx-auto mt-10">
        <div class="flex gap-5">
            <div x-data="{ 
                    open: false, 
                    title: 'Calculator',
                    input: '', 
                }">
                <button type="button" 
                        x-on:click="open = !open"
                        x-text="title"
                        class="bg-gray-200 border border-gray-400 rounded-md px-4 py-1 shadow-md font-semibold active:bg-gray-100">
                </button> 
                <livewire:calculator-form />
            </div> 
            <div x-data="{
                    open: false,
                    title: 'Authentication'
                }">
                <button type="button" 
                        x-on:click="open = !open"
                        x-text="title"
                        class="bg-gray-200 border border-gray-400 rounded-md px-4 py-1 shadow-md font-semibold active:bg-gray-100">
                </button> 
                <livewire:authenticate />
            </div>
            <div x-data="{
                    open: false,
                    title: 'Weather'
                }">
                <button type="button" 
                        x-on:click="open = !open"
                        x-text="title"
                        class="bg-gray-200 border border-gray-400 rounded-md px-4 py-1 shadow-md font-semibold active:bg-gray-100">
                </button> 
                <livewire:weather />
            </div> 
            <div x-data="{
                    open: false,
                    title: 'Todo List'
                }">
                <button type="button"
                        x-text="title"
                        x-on:click="open = !open"
                        class="bg-gray-200 border border-gray-400 rounded-md px-4 py-1 shadow-md font-semibold active:bg-gray-100"> 
                </button>
                <livewire:todo />
            </div>
            <div x-data="{
                    open: false,
                    title: 'Gallery'
                }">
                <button type="button"
                        x-text="title"
                        x-on:click="open = !open"
                        class="bg-gray-200 border border-gray-400 rounded-md px-4 py-1 shadow-md font-semibold active:bg-gray-100"> 
                </button>
                <livewire:gallery />
            </div>
        </div> 
    </main>
</x-layout.app>