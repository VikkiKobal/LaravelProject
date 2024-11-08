<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    // Показати всі компанії
    public function index()
    {
        $companies = Company::all(); // Отримуємо всі компанії з бази
        return view('companies.index', compact('companies')); // Повертаємо дані до представлення
    }

    // Показати форму для створення нової компанії
    public function create()
    {
        return view('companies.create');
    }

    // Зберегти нову компанію
    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required|unique:companies',
            'name' => 'required',
            'employees' => 'required|integer',
            'industry' => 'required',
            'address' => 'required',
        ]);

        Company::create($request->all()); // Створюємо нову компанію
        return redirect()->route('companies.index'); // Перенаправляємо на список компаній
    }

    // Показати інформацію про одну компанію
    public function show($id)
    {
        $company = Company::find($id);
        return view('companies.show', compact('company'));
    }


    // Показати форму для редагування компанії
    public function edit($id)
    {
        $company = Company::findOrFail($id); // Знаходимо компанію по ID
        return view('companies.edit', compact('company')); // Повертаємо дані до представлення
    }

    // Оновити компанію
    public function update(Request $request, $id)
    {
        $request->validate([
            'code' => 'required|unique:companies,code,' . $id,
            'name' => 'required',
            'employees' => 'required|integer',
            'industry' => 'required',
            'address' => 'required',
        ]);

        $company = Company::findOrFail($id); // Знаходимо компанію по ID
        $company->update($request->all()); // Оновлюємо компанію
        return redirect()->route('companies.index'); // Перенаправляємо на список компаній
    }

    // Видалити компанію
    public function destroy($id)
    {
        $company = Company::findOrFail($id); // Знаходимо компанію по ID
        $company->delete(); // Видаляємо компанію
        return redirect()->route('companies.index'); // Перенаправляємо на список компаній
    }
}
