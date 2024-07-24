<x-dashboard.layout.default>
    <div class="container mx-auto py-12">
        <h1 class="text-4xl font-bold text-center mb-8">FAQs</h1>
        <div class="flex justify-start mb-6">
            <a href="{{ route('dashboard.faqs.create') }}" class="btn btn-primary mt-6">Add FAQ</a>
        </div>
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow-md">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="py-3 px-6 text-left text-gray-600 font-bold">Id</th>
                        <th class="py-3 px-6 text-left text-gray-600 font-bold">Question</th>
                        <th class="py-3 px-6 text-left text-gray-600 font-bold">Answer</th>
                        <th class="py-3 px-6 text-left text-gray-600 font-bold">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($faqs as $faq)
                        <tr>
                            <td class="py-3 px-6">{{ $faq->id }}</td>
                            <td class="py-3 px-6">{{ $faq->question }}</td>
                            <td class="py-3 px-6">{{ $faq->answer }}</td>
                            <td class="py-3 px-6 text-center">
                                <a href="{{ route('dashboard.faqs.edit', $faq->id) }}"
                                    class="text-blue-500 hover:text-blue-700 mr-4">Edit</a>
                                <form action="{{ route('dashboard.faqs.destroy', $faq->id) }}" method="POST"
                                    style="display: inline;" onsubmit="return confirm('Are you sure?');">
                                    @csrf
                                    @method('DELETE')
                                    <button class="text-red-500 hover:text-red-700">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-dashboard.layout.default>
