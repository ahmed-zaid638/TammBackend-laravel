<x-dashboard.layout.default>
    <div class="panel">
        <div class="flex items-center justify-between mb-5">
            <h5 class="font-semibold text-lg dark:text-white-light">Edit FAQ</h5>
        </div>
        <div class="mb-5">
            <form action="{{ route('dashboard.faqs.update', $faq->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label for="question" class="block text-gray-700 text-sm font-bold mb-2">Question</label>
                    <input type="text" id="question" name="question" placeholder="Enter the question"
                        value="{{ $faq->question }}" class="form-input w-full" required />
                    @error('question')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="answer" class="block text-gray-700 text-sm font-bold mb-2">Answer</label>
                    <textarea id="answer" name="answer" rows="4" placeholder="Enter the answer"
                        class="form-textarea w-full" required>{{ $faq->answer }}</textarea>
                    @error('answer')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary mt-6">Update</button>
            </form>
        </div>
    </div>
</x-dashboard.layout.default>
