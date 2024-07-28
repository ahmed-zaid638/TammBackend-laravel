<x-dashboard.layout.default>
    <div class="container mx-auto py-12">
        <h1 class="text-4xl font-bold text-center mb-8">Sliders</h1>
        <div class="flex justify-start mb-6">
            <a href="{{ route('dashboard.sliders.create') }}" class="btn btn-primary mt-6">Add Slider</a>
        </div>
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow-md">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="py-3 px-6 text-left text-gray-600 font-bold">Id</th>
                        <th class="py-3 px-6 text-left text-gray-600 font-bold">Title</th>
                        <th class="py-3 px-6 text-left text-gray-600 font-bold">Description</th>
                        <th class="py-3 px-6 text-left text-gray-600 font-bold">Image</th>
                        <th class="py-3 px-6 text-left text-gray-600 font-bold">URL</th>
                        <th class="py-3 px-6 text-left text-gray-600 font-bold">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sliders as $slider)
                        <tr>
                            <td class="py-3 px-6">{{ $slider->id }}</td>
                            <td class="py-3 px-6">{{ $slider->title }}</td>
                            <td class="py-3 px-6">{{ $slider->description }}</td>
                            <td class="py-3 px-6 text-center">
                                <img src="{{  $slider->image }}" alt="img" class="w-12">
                            </td>
                            <td class="py-3 px-6">
                                <a href="{{ $slider->url }}" target="_blank" class="text-blue-500 hover:text-blue-700">{{ $slider->url }}</a>
                            </td>
                            <td class="py-3 px-6 text-center">
                                <a href="{{ route('dashboard.sliders.edit', $slider->id) }}"
                                    class="text-blue-500 hover:text-blue-700 mr-4">Edit</a>
                                <form action="{{ route('dashboard.sliders.destroy', $slider->id) }}" method="POST"
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
