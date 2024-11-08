<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Company</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 p-8">

<h1 class="text-3xl font-semibold mb-6">Редагувати компанію</h1>

<form action="{{ route('companies.update', $company->id) }}" method="POST" class="bg-white p-6 rounded shadow-lg max-w-lg mx-auto">
    @csrf
    @method('PUT')

    <!-- Поле Code (read-only) -->
    <div class="mb-4">
        <label for="code" class="block text-lg font-medium text-gray-700">Код (ID)</label>
        <input type="text" id="code" name="code" value="{{ $company->code }}" class="w-full p-2 border border-gray-300 rounded bg-gray-100" readonly>
    </div>

    <div class="mb-4">
        <label for="name" class="block text-lg font-medium text-gray-700">Назва</label>
        <input type="text" id="name" name="name" value="{{ $company->name }}" class="w-full p-2 border border-gray-300 rounded" required>
    </div>

    <div class="mb-4">
        <label for="employees" class="block text-lg font-medium text-gray-700">Працівники</label>
        <input type="number" id="employees" name="employees" value="{{ $company->employees }}" class="w-full p-2 border border-gray-300 rounded" required>
    </div>

    <div class="mb-4">
        <label for="industry" class="block text-lg font-medium text-gray-700">Галузь</label>
        <input type="text" id="industry" name="industry" value="{{ $company->industry }}" class="w-full p-2 border border-gray-300 rounded" required>
    </div>

    <div class="mb-4">
        <label for="address" class="block text-lg font-medium text-gray-700">Адреса</label>
        <input type="text" id="address" name="address" value="{{ $company->address }}" class="w-full p-2 border border-gray-300 rounded" required>
    </div>

    <button type="submit" class="bg-blue-500 text-white p-2 rounded w-full hover:bg-blue-600 transition duration-300">Оновити</button>
</form>
</body>
</html>
