@if (session()->has('success'))
{{-- alpineJS --}}
    <div x-data="{ show: true }"  
         x-init="setTimeout(() => show = false, 4000)"
         x-show="show"
         class="fixed bottom-3 right-3 bg-blue-500 py-2 px-4 rounded-xl text-sm text-white">
             <p>{{ session('success') }}</p>
    </div>
@endif