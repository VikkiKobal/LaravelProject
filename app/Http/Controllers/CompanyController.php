<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Routing\Controller;

class CompanyController extends Controller
{
    use AuthorizesRequests;

    public function __construct()
    {
        $this->middleware('auth'); // Переконайтесь, що користувач авторизований перед доступом до контролера
    }

    public function index()
    {
        $companies = Company::with('creator')->get();
        return view('companies.index', compact('companies'));
    }



    public function create()
    {
        $this->authorize('create', Company::class); // Перевірка дозволу на створення компанії
        return view('companies.create');
    }

    public function show($id)
    {
        $company = Company::findOrFail($id);
        $this->authorize('view', $company); // Перевірка дозволу на перегляд компанії

        return view('companies.show', compact('company'));
    }

    public function edit($id)
    {
        $company = Company::findOrFail($id);
        $this->authorize('update', $company); // Перевірка дозволу на редагування компанії

        return view('companies.edit', compact('company'));
    }

    public function update(Request $request, $id)
    {
        $company = Company::findOrFail($id);
        $this->authorize('update', $company); // Перевірка дозволу на оновлення компанії

        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $company->update($request->all());
        return redirect()->route('companies.index')->with('success', 'Company updated successfully.');
    }

    public function destroy($id)
    {
        $company = Company::findOrFail($id);
        $this->authorize('delete', $company); // Перевірка дозволу на видалення компанії

        $company->delete();
        return redirect()->route('companies.index')->with('success', 'Company deleted successfully.');
    }
}
