<x-dashboard.layout.default>
    <div class="container mx-auto py-12">
        <h1 class="text-4xl font-bold text-center mb-8">Articles</h1>
        <div class="flex justify-start mb-6">
            <a href="{{ route('dashboard.articles.create') }}" class="btn btn-primary mt-6">Add Article</a>
        </div>
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow-md">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="py-3 px-6 text-left text-gray-600 font-bold">Id</th>
                        <th class="py-3 px-6 text-left text-gray-600 font-bold">Title</th>
                        <th class="py-3 px-6 text-left text-gray-600 font-bold">Description</th>
                        <th class="py-3 px-6 text-left text-gray-600 font-bold">Image</th>
                        <th class="py-3 px-6 text-left text-gray-600 font-bold">Date</th>

                        <th class="py-3 px-6 text-left text-gray-600 font-bold">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($articles as $article)
                        <tr>
                            <td class="py-3 px-6">{{ $article->id }}</td>
                            <td class="py-3 px-6">{{ $article->title }}</td>
                            <td class="py-3 px-6">{{ $article->description }}</td>
                            <td class="py-3 px-6 text-center">
                                <img src="{{ asset('storage/' . $article->image) }}" alt="{{ $article->title }}" class="w-12 h-12">
                            </td>
                            <td class="py-3 px-6">{{ $article->created_at->locale('ar')->translatedFormat('d M Y') }}
                            </td>

                            <td class="py-3 px-6 text-center">
                                <a href="{{ route('dashboard.articles.edit', $article->id) }}"
                                    class="text-blue-500 hover:text-blue-700 mr-4">Edit</a>
                                <form action="{{ route('dashboard.articles.destroy', $article->id) }}" method="POST"
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
