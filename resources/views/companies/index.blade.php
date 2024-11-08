<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Компанії</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 p-8">

<h1 class="text-3xl font-semibold mb-6">Список компаній</h1>

<a href="{{ route('companies.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition duration-300">Створити нову компанію</a>

@if (session('success'))
    <div class="mt-4 bg-green-200 text-green-800 p-4 rounded">
        {{ session('success') }}
    </div>
@endif

<table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden mt-6">
    <thead class="bg-gray-800 text-white">
    <tr>
        <th class="py-3 px-4 text-left">Код</th>
        <th class="py-3 px-4 text-left">Назва компанії</th>
        <th class="py-3 px-4 text-left">Працівники</th>
        <th class="py-3 px-4 text-left">Галузь</th>
        <th class="py-3 px-4 text-left">Адреса</th>
        <th class="py-3 px-4 text-left">Дії</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($companies as $company)
        <tr class="border-t">
            <td class="py-3 px-4">{{ $company->code }}</td>
            <td class="py-3 px-4">{{ $company->name }}</td>
            <td class="py-3 px-4">{{ $company->employees }}</td>
            <td class="py-3 px-4">{{ $company->industry }}</td>
            <td class="py-3 px-4">{{ $company->address }}</td>
            <td class="py-3 px-4">
                <a href="{{ route('companies.edit', $company->id) }}" class="text-blue-500 hover:underline">Редагувати</a> |
                <form action="{{ route('companies.destroy', $company->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-500 hover:underline">Видалити</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

</body>
</html>
