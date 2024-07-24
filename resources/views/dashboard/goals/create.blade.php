<x-dashboard.layout.default>
    <div class="panel">
        <div class="flex items-center justify-between mb-5">
            <h5 class="font-semibold text-lg dark:text-white-light">Add New Goal</h5>
        </div>
        <div class="mb-5">
            <form action="{{ route('dashboard.goals.store', 4) }}" method="POST">
                @csrf

                <div class="mb-4">
                    <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Title</label>
                    <input type="text" id="title" name="title" placeholder="Enter the title"
                        value="{{ old('title') }}" class="form-input w-full" required />
                    @error('title')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>


                <button type="submit" class="btn btn-primary mt-6">Create</button>
            </form>
        </div>
    </div>
</x-dashboard.layout.default>
