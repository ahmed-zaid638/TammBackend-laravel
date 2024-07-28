<div class="container mx-auto py-12">
    <div class="bg-white rounded-lg p-8 shadow-md">
        <h1 class="text-4xl font-bold  mb-8">Social Media</h1>

        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4"
                role="alert">
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
        @endif

        <form action="{{ route('dashboard.settings.update') }}" method="POST">
            @csrf
            @foreach ($socialMedia as $setting)
                <div class="mb-4">
                    <label for="{{ $setting->key }}" class="block text-lg text-gray-700 mb-2">
                        {{ ucwords(str_replace('_', ' ', $setting->key)) }}
                    </label>
                    <input type="text" id="{{ $setting->key }}" name="{{ $setting->key }}"
                        value="{{ $setting->value }}" class="py-2 px-3 w-full border border-gray-300 rounded-lg" />
                </div>
            @endforeach
            <div class="mt-6">
                <button type="submit" class="btn btn-primary mt-6">
                    Save
                </button>
            </div>
        </form>
    </div>
</div>
