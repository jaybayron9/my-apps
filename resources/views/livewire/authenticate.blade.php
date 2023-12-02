<div x-show="open"
    x-cloak
    class="fixed top-0 left-0 w-full h-full flex justify-center bg-gray-700/20">
    <div x-on:click.away="open = false"
        class="max-w-lg min-w-max h-fit rounded-md p-4 mt-32 bg-gray-50">
        <button aria-label="Close" 
                @click="open = false"
                class="absolute top-3 right-3 p-3 bg-gray-300 hover:bg-gray-200 rounded-full">
            Exit
        </button>
        <form wire:submit="validate_data">
            <div>
                <div class="mb-2">
                    <input type="text"
                            wire:model="firstname"
                            placeholder="First name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    <span class="text-xs text-red-500 font-light">@error('firstname') {{ $message }} @enderror</span>
                </div>
                <div class="mb-2">
                    <input type="text"
                            wire:model="lastname"
                            placeholder="Last name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    <span class="text-xs text-red-500 font-light">@error('lastname') {{ $message }} @enderror</span>
                </div>
                <div class="mb-2">
                    <input type="text"
                            wire:model="username"
                            placeholder="Username"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    <span class="text-xs text-red-500 font-light">@error('username') {{ $message }} @enderror</span>
                </div>
                <div class="mb-2">
                    <input type="text"
                            wire:model="email"
                            placeholder="Email address"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    <span class="text-xs text-red-500 font-light">@error('email') {{ $message }} @enderror</span>
                </div>
                <div class="mb-2">
                    <input type="text"
                            wire:model="phone"
                            placeholder="Phone number"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    <span class="text-xs text-red-500 font-light">@error('phone') {{ $message }} @enderror</span>
                </div>
                <div class="mb-2">
                    <input type="password"
                            wire:model="password"
                            placeholder="********"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    <span class="text-xs text-red-500 font-light">@error('password') {{ $message }} @enderror</span>
                </div>
                <div class="mb-2">
                    <input type="password"
                            wire:model="password_confirmation"
                            name="password_confirmation" 
                            placeholder="********"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    <span class="text-xs text-red-500 font-light">@error('password_confirmation') {{ $message }} @enderror</span>
                </div>
            </div>
            <div class="flex">
                <button type="submit" 
                        wire:loading.attr="disabled" 
                        class="ml-auto bg-blue-500 text-white hover:bg-blue-600 rounded px-3 py-1">
                    <span wire:loading wire:target="validate_data">Submitting...</span>
                    <span wire:loading.remove>Submit</span>
                </button>
            </div>
        </form>  
    </div>
</div>

