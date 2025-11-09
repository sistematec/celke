<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CoursesController extends Controller
{
    // Listar os cursos
    public function index()
    {
        // Carregar a view 
        return view('courses.index');
    }

    public function create(){
        // Carregar a view
        return view('courses.create');
    }

    public function store(Request $request){
        // Carregar a view
        //   dd($request);
        Course::create([    // Importar a Models
            'name' => $request->name
        ]);
        return redirect()->route('courses.index')->with('success','Curso Cadastrado com susesso!');
    }

}
