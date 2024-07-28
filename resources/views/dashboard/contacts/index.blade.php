<x-dashboard.layout.default>
    <div class="container mx-auto py-12">
        <h1 class="text-4xl font-bold text-center mb-8">Contacts</h1>

        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow-md">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="py-3 px-6 text-left text-gray-600 font-bold">ID</th>
                        <th class="py-3 px-6 text-left text-gray-600 font-bold">Name</th>
                        <th class="py-3 px-6 text-left text-gray-600 font-bold">Nickname</th>
                        <th class="py-3 px-6 text-left text-gray-600 font-bold">Email</th>
                        <th class="py-3 px-6 text-left text-gray-600 font-bold">Phone</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contacts as $contact)
                        <tr>
                            <td class="py-3 px-6">{{ $contact->id }}</td>
                            <td class="py-3 px-6">{{ $contact->name }}</td>
                            <td class="py-3 px-6">{{ $contact->nickname }}</td>
                            <td class="py-3 px-6">{{ $contact->email }}</td>
                            <td class="py-3 px-6">{{ $contact->phonenumber }}</td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-dashboard.layout.default>
