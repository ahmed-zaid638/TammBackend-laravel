<x-dashboard.layout.default>
    <div class="panel">
        <div class="mb-5">
            <form action="{{ route('dashboard.articles.store', 4) }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-4">
                    <label for="title" class="block text-cray-700 text-sm font-bold mb-2">Title</label>
                    <input type="text" id="title" name="title" placeholder="Enter the title"
                        value="{{ old('title') }}" class="form-input w-full" required />
                    @error('title')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>


                <div class="mb-4">
                    <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description</label>
                    <textarea id="description" name="description" rows="4" placeholder="Enter description"
                        class="form-textarea w-full"   value="{{ old('description') }}" required></textarea>
                    @error('description')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>


                <div class="mb-4">
                    <label for="image" class="block text-gray-700 text-sm font-bold mb-2">Image</label>
                    <input type="file" id="image" name="image" class="form-input w-full" accept="file"
                        required>
                    @error('image')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>


                <button type="submit" class="btn btn-primary mt-6">Create</button>
            </form>
        </div>
    </div>
</x-dashboard.layout.default>
