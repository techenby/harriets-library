<div class="flex flex-col items-center py-6 bg-gray-100 sm:justify-center sm:py-20 dark:bg-gray-800">
    <div>
        {{ $logo }}
    </div>

    <div class="w-full px-6 py-4 mt-6 overflow-hidden bg-white shadow-md dark:bg-gray-900 sm:max-w-md sm:rounded-lg">
        {{ $slot }}
    </div>
</div>
