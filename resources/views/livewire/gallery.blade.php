<div x-show="open"
    x-cloak
    class="fixed top-0 left-0 w-full h-full flex justify-center bg-gray-700/20">
    <button aria-label="Close" 
            @click="open = false"
            class="absolute top-3 right-3 p-3 bg-gray-300 hover:bg-gray-200 rounded-full">
        Exit
    </button>
    <div x-on:click.away="open = false"
        class="relative p-4 w-full max-w-2xl max-h-full">
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700"> 
            <form wire:submit="save"
                class="p-4 md:p-5 space-y-4">
                <div
                    x-data="{ uploading: false, progress: 0 }"
                    x-on:livewire-upload-start="uploading = true"
                    x-on:livewire-upload-finish="uploading = false"
                    x-on:livewire-upload-error="uploading = false"
                    x-on:livewire-upload-progress="progress = $event.detail.progress"
                >
                <div class="flex items-center">
                    <div>
                        <input type="file" 
                                accept="image/*" 
                                wire:model="photo"/>
                        <div class="flex">
                            <div x-show="uploading">
                                <progress max="100" x-bind:value="progress"></progress>
                            </div>
                            <div wire:loading wire:target="photo">Uploading...</div>
                        </div>
                        @error('photo') <span class="error">{{ $message }}</span> @enderror
                    </div> 
                    <button type="submit" 
                            class="ml-auto bg-blue-500 text-white hover:bg-blue-600 rounded px-3 py-1"> 
                        <span >Upload</span>
                    </button>
                </div>
                @if ($photo) 
                    <img src="{{ $photo->temporaryUrl() }}"
                        class="h-20 w-20">
                @endif
            </form>
            <div class="grid grid-cols-4 gap-2">
                @foreach ($images as $image) 
                    <img src="{{ Storage::url($image) }}" alt="Image">
                @endforeach
            </div>
        </div>  
    </div>
</div>

