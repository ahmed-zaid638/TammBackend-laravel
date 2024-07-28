
    <div class="container mx-auto py-12">

        <div class="bg-white rounded-lg p-8 shadow-md">
            <h1 class="text-4xl font-bold  mb-8">Email Options</h1>
            @if (session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                    <span class="block sm:inline">{{ session('success') }}</span>
                </div>
            @endif

            <form action="{{ route('dashboard.settings.update') }}" method="POST">
                @csrf
                <div class="grid  grid-cols-[auto,1fr] gap-x-10 gap-y-2">
                    @foreach ($emailSettings as $setting)
                        <div class="flex items-center">
                            <label for="{{ $setting->key }}" class="text-lg text-gray-700">
                                {{ ucwords(str_replace('_', ' ', $setting->key)) }}
                            </label>
                        </div>
                        <div>
                            @if ($setting->id == 21 || $setting->id == 22)
                                {{-- Radio options --}}
                                <div class="flex items-center space-x-4">
                                    <label class="inline-flex items-center">
                                        <input type="radio" name="{{ $setting->key }}" value="option1"
                                            {{ $setting->value == 'option1' ? 'checked' : '' }} class="form-radio">
                                        <span class="ml-2">Option 1</span>
                                    </label>
                                    <label class="inline-flex items-center">
                                        <input type="radio" name="{{ $setting->key }}" value="option2"
                                            {{ $setting->value == 'option2' ? 'checked' : '' }} class="form-radio">
                                        <span class="ml-2">Option 2</span>
                                    </label>
                                    @error($setting->key)
                                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                            @else
                                <input type="text" id="{{ $setting->key }}" name="{{ $setting->key }}"
                                    value="{{ $setting->value }}"
                                    class="py-2 px-3 w-full border border-gray-300 rounded-lg" />
                            @endif
                        </div>
                    @endforeach
                </div>

                <div class="mt-6">
                    <button type="submit" class="btn btn-primary mt-6">Save</button>
                </div>
            </form>
        </div>
    </div>

