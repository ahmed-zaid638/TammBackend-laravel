<x-dashboard.layout.default>
    <div class="panel">
        <div class="mb-5">
            <form action="{{ route('dashboard.faqs.store' , 4) }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-4">
                    <label for="question" class="block text-gray-700 text-sm font-bold mb-2">Question</label>
                    <input type="text" id="question" name="question" placeholder="Enter the question"
                        value="{{ old('question') }}" class="form-input w-full" required />
                    @error('question')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="answer" class="block text-gray-700 text-sm font-bold mb-2">Answer</label>
                    <textarea id="answer" name="answer" rows="4" placeholder="Enter the answer"
                        class="form-textarea w-full" required>{{ old('answer') }}</textarea>
                    @error('answer')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary mt-6">Create</button>
            </form>
        </div>
    </div>
</x-dashboard.layout.default>
