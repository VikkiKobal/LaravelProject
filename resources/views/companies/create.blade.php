<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Створити нову компанію</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 text-gray-900 font-sans antialiased">

<div class="max-w-4xl mx-auto p-6 bg-white shadow-md rounded-md mt-10">
    <h1 class="text-2xl font-semibold text-center mb-6">Створити нову компанію</h1>

    <form action="{{ route('companies.store') }}" method="POST">
        @csrf

        <div class="mb-4">
            <label for="code" class="block text-lg font-medium">Код</label>
            <input type="text" id="code" name="code" required
                   class="mt-2 p-2 border border-gray-300 rounded-md w-full focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
        </div>

        <div class="mb-4">
            <label for="name" class="block text-lg font-medium">Назва</label>
            <input type="text" id="name" name="name" required
                   class="mt-2 p-2 border border-gray-300 rounded-md w-full focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
        </div>

        <div class="mb-4">
            <label for="employees" class="block text-lg font-medium">Працівники</label>
            <input type="number" id="employees" name="employees" required
                   class="mt-2 p-2 border border-gray-300 rounded-md w-full focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
        </div>

        <div class="mb-4">
            <label for="industry" class="block text-lg font-medium">Галузь</label>
            <input type="text" id="industry" name="industry" required
                   class="mt-2 p-2 border border-gray-300 rounded-md w-full focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
        </div>

        <div class="mb-4">
            <label for="address" class="block text-lg font-medium">Адреса</label>
            <input type="text" id="address" name="address" required
                   class="mt-2 p-2 border border-gray-300 rounded-md w-full focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
        </div>

        <button type="submit"
                class="w-full py-3 mt-4 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
            Зберегти
        </button>
    </form>
</div>

</body>
</html>
