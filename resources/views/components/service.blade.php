<a href="" class="py-8 px-4 border border-gray-800 bg-gray-900 rounded-lg shadow-sm flex flex-col items-center justify-center text-center hover:bg-gray-800">
    <div class="font-medium mt-3 text-gray-200">
        {{ $service->title }}
    </div>
    <div class="text-sm mt-1 text-gray-500">
        {{ $service->duration }} minutes
    </div>
    <div class="text-sm mt-1 bg-green-950 border border-green-900 font-medium font-mono tabular-nums px-2 rounded-full text-green-500">
        {{ $service->price }}
    </div>
</a>
