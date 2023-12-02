<div x-show="open"  
    x-cloak
    class="fixed top-0 left-0 w-full h-full flex justify-center bg-gray-700/20">
    <div @click.away="open = false"
        class="min-w-[23%] max-w-md h-fit rounded-md p-4 mt-44 bg-gray-50">
        <button aria-label="Close" 
                @click="open = false"
                class="absolute top-3 right-3 p-3 bg-gray-300 hover:bg-gray-200 rounded-full">
            Exit
        </button>
        <div class="flex w-full"> 
            <h3>{{ $title }}</h3>
            <button type="button"
                    x-on:click="input = input.slice(0, -1)"
                    class="ml-auto text-sm mb-1 text-red-700 px-4 py-1 bg-gray-200 font-semibold rounded-md border border-gray-300">
                Del
            </button> 
        </div>
        <input type="text" 
                wire:model="input"
                x-model="input"
                class="mb-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" />
        <div class="grid grid-cols-4">
            <div class="col-span-3 grid grid-cols-3 gap-2">
            @foreach (array_reverse($numbers) as $number)
                <button type="button"
                        x-on:click="input += '{{ $number }}'"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    {{ $number }}
                </button> 
            @endforeach
            @foreach ($symbols as $symbol)
                <button type="button"
                        x-on:click="if ('{{ $symbol }}' === '=') {
                                        input = String(eval(input))
                                    } else {
                                        if (input.indexOf('.') === -1 || '{{ $symbol }}' !== '.') { 
                                            input += '{{ $symbol !== '=' ? $symbol : '' }}'; 
                                        }
                                    }"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    {{ $symbol }}
                </button> 
            @endforeach
            </div>
            <div class="col-span-1 grid grid-cols-1 gap-2 ml-2">
            @foreach ($operators as $operator)
                <button type="button" 
                        x-on:click="if (['+', '-', '*', '/'].includes('{{ $operator }}')) {
                                        let lastChar = input.slice(-1);
                                        if (!['+', '-', '*', '/'].includes(lastChar)) {
                                            input += '{{ $operator }}';
                                        }
                                    } else {
                                        input += '{{ $operator }}';
                                    }"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    {{ $operator }}
                </button> 
            @endforeach
            </div> 
        </div>
    </div>
</div>