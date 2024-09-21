<div class="space-y-10">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        Choose a service from {{ $employee->name }}
    </h2>
    <div class="grid grid-cols-2 md:grid-cols-5 gap-8 mt-6">
        @foreach($employee->services as $service)
            <x-service :service="$service" />
        @endforeach
    </div>
</div>
