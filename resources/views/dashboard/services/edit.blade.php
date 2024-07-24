<x-dashboard.layout.default>
    <div class="panel">
        <div class="flex items-center justify-between mb-5">
            <h5 class="font-semibold text-lg dark:text-white-light">Edit Service</h5>
        </div>
        <div class="mb-5">
            <form action="{{ route('dashboard.services.update', $service->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Title</label>
                    <input type="text" id="title" name="title" placeholder="Enter the title" value="{{ old('title', $service->title) }}"
                        class="form-input w-full" required />
                    @error('title')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description</label>
                    <textarea id="description" name="description" rows="4" placeholder="Enter description"
                        class="form-textarea w-full" required>{{ old('description', $service->description) }}</textarea>
                    @error('description')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="icon" class="block text-gray-700 text-sm font-bold mb-2">Icon</label>
                    <input type="file" id="icon" name="icon" class="form-input w-full">
                    <p class="text-gray-500 text-xs mt-1">Leave blank to keep the current icon.</p>
                    @error('icon')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary mt-6">Update</button>
            </form>
        </div>
    </div>
</x-dashboard.layout.default>
