<x-dashboard.layout.default>
    <div class="container mx-auto py-12">

        <div class="flex justify-start mb-6">
            <a href="{{ route('dashboard.services.create') }}" class="btn btn-primary mt-6">Add Service</a>
        </div>

        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow-md">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="py-3 px-6 text-left text-gray-600 font-bold">Id</th>
                        <th class="py-3 px-6 text-left text-gray-600 font-bold">Icon</th>
                        <th class="py-3 px-6 text-left text-gray-600 font-bold">Title</th>
                        <th class="py-3 px-6 text-left text-gray-600 font-bold">Description</th>
                        <th class="py-3 px-6 text-left text-gray-600 font-bold">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($services as $service)
                        <tr>
                            <td class="py-3 px-6 text-center">{{ $service->id }}</td>
                            <td class="py-3 px-6 text-center">
                                <img src="{{ $service->icon }}" alt="{{ $service->title }}" class="w-12 h-12">
                            </td>
                            <td class="py-3 px-6">{{ $service->title }}</td>
                            <td class="py-3 px-6">{{ $service->description }}</td>
                            <td class="py-3 px-6 text-center">
                                <a href="{{ route('dashboard.services.edit', $service->id) }}" class="text-blue-500 hover:text-blue-700 mr-4">Edit</a>

                                <form id="delete-form-{{ $service->id }}" action="{{ route('dashboard.services.destroy', $service->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" onclick="handleDelete({{ $service->id }})" class="text-red-500 hover:text-red-700">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function handleDelete(serviceId) {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('delete-form-' + serviceId).submit();
                }
            });
        }
    </script>
</x-dashboard.layout.default>
