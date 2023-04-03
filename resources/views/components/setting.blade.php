@props(['heading'])

<section class="max-w-4xl mx-auto py-8">
    <h1 class="text-xl font-bold mb-6 pb-2 border-b">
     {{ $heading }}
    </h1>

    <div class="flex">
        <aside class="w-48 flex-shrink-0">
            <h4 class="font-semibold mb-6">Links</h4>

            <ul>
                <li class="mb-2">
                    <a href="/admin/posts" class="{{request()->is('admin/dashboard') ? 'text-blue-500' : ''}}">All Posts</a>
                </li>
                <li>
                    <a href="/admin/posts/create" class="{{request()->is('admin/posts/create') ? 'text-blue-500' : ''}}">New Post</a>
                </li>
            </ul>
        </aside>

        <main class="flex-1">            
            <x-panel >

                {{ $slot }}

            </x-panel>
        </main>
    </div>


   </section>