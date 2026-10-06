<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function hello($nama = 'Laravel')
    {
        $data = [
            'nama' => $nama,
            'kelas' => 'Pemrograman Web',
            'pertemuan' => 9,
            'materi' => [
                'Composer',
                'Laravel',
                'Routing',
                'Blade',
                'MVC',
            ],
        ];

        return view('hello', $data);
    }

    public function contact()
    {
        return view('contact');
    }

    public function students()
{
    $students = \App\Models\Student::all();

    return view('students', compact('students'));
}
}