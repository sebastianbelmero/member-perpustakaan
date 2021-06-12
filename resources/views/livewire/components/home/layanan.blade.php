<div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
    <div class="grid gap-8 lg:grid-cols-3 sm:max-w-sm sm:mx-auto lg:max-w-full">
        @foreach ($data['layanan'] as $key => $item)
        <div class="overflow-hidden transition-shadow duration-300 bg-white rounded shadow-sm">
            <img src="{{ $item['img'] }}" class="cover w-full h-64" alt="" />
            <div class="p-5 border border-t-0">
                <span aria-label="Category" title="Visit the East" class="inline-block mb-3 text-2xl font-bold leading-5 transition-colors duration-200 hover:text-deep-purple-accent-700">
                    {{ $key }}
                </span>
                <p class="mb-2 text-gray-700">
                    {{ $item['p'] }}
                </p>
            </div>
        </div>
        @endforeach
    </div>
</div>