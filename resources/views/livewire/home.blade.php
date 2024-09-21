<div class="space-y-10">
    <div>
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Choose a Professional
        </h2>
        <div class="grid grid-cols-2 md:grid-cols-5 gap-8 mt-6">
            @foreach($employees as $employee)
                <a href="" class="py-8 px-6 bg-gray-900 border border-gray-800 hover:bg-gray-800 shadow-lg rounded-lg flex flex-col items-center justify-center">
                    <img src="{{ $employee?->profile_photo_url }}" alt="{{ $employee->name }}" class="w-20 h-20 rounded-full mb-4">
                    <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200">{{ $employee->name }}</h3>
                </a>
            @endforeach
        </div>
    </div>
    <div>
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Services
        </h2>
        <div class="grid grid-cols-2 md:grid-cols-5 gap-8 mt-6">
            @foreach($services as $service)
                <x-service :service="$service" />
            @endforeach
        </div>
    </div>
</div>
