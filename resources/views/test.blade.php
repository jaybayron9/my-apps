<x-layout.app>
    <style>
        [x-cloak] {
            display: none
        }
    </style>
    <div class="container mx-auto mt-6 max-w-sm">
        <div x-data="{
            open: false, 
            name: 'Brad',
            search: '',
            posts: [
                {title: 'Post One'},
                {title: 'Post Two'},
                {title: 'Post Three'},
                {title: 'Post Four'}
            ]
        }">
            <button 
                x-on:click="open = !open"
                :class="open ? 'bg-blue-800' : 'bg-slate-700'"
                class="bg-slate-700 text-white px-4 py-2 rounded-xl">Toggle</button>
            <div x-show="open" x-transition x-cloak>
                <p class="bg-gray-200 p-4 my-6 rounded">
                    Hello this is my message
                </p>
            </div>
    
            <div class="my-4">
                The value of name is <span x-text="name" class="font-bold"></span>
            </div>

            <div x-effect="console.log(open)"></div>

            <input 
                x-model="search"
                type="text" 
                class="border p-2 w-full mb-2 mt-6"
                placeholder="Search for something"
            />
            <p>
                <span class="font-bold">Searching for:</span>
                <span x-text="search"></span>
            </p>

            {{-- x-if --}}
            <template x-if="open">
                <div class="bg-gray-50 p-2 mt-8">
                    Template based on a condition
                </div>
            </template>

            {{-- x-for --}}
            <h3 class="text-2xl mt-6 mb-3 font-bold">Posts</h3>
            <template x-for="post in posts">
                <div x-text="post.title"></div>
            </template>
            <button @click="posts.push({title: 'New Post'})" class="bg-blue-500 text-white px-4 py-2 rounded-lg mt-4">
                Add Post
            </button>

            {{-- x-ref --}}
            <div class="my-6">
                <div x-ref="text">Hello World</div>

                <button 
                    @click="$refs.text.remove()" 
                    class="bg-black text-white p-2 rounded-lg">
                    Click
                </button>
            </div> 

            {{-- x-html --}}
            <div x-html="(await axios.get('/api/users')).data"></div>

            {{-- $el --}}
            <button x-on:click="$el.innerHTML = 'Hello World'" class="mt-4 p-4 border">Replace Text</button>

            {{-- x-init & $watch --}}
            <div x-init="$watch('posts', value => console.log(value))"></div>

            {{-- $dispatch --}}
            <div @notify="alert('You have been notified')">
                <button @click="$dispatch('notify')" class="bg-green-700 text-white p-4 rounded-lg">
                    Notify
                </button>
            </div>

            {{-- $data --}}
            <button @click="getLatestPost($data.posts)" class="bg-orange-800 text-white mt-6 p-2 rounded-lg">
                Get Latest Post
            </button>
        </div>
    </div> 

    <footer x-data class="text-center mt-10"> 
        <p>Copyright &copy; <span x-text="new Date().getFullYear()"></span></p>
    </footer>

    <script>
        function getLatestPost(posts) {
            console.log(posts.slice(-1).pop());
        }
    </script>
</x-layout.app>