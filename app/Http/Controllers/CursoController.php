<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCurso;

class CursoController extends Controller
{
    public function index()
    {

        $cursos = Curso::paginate();

        return view('cursos.index', compact('cursos'));
    }

    public function create()
    {
        return view('cursos.create');
    }

    public function store(StoreCurso $request)
    {
        // $request->validate([
        //     'name' => 'required|max:10',
        //     'description' => 'required|min:10',
        //     'categoria' => 'required'
        // ]);
        
        // return $request->all();
        $curso = new Curso();

        $curso->name = $request->name;
        $curso->description = $request->description;
        $curso->categoria = $request->categoria;

        $curso->save();

        // return view('cursos.show', compact('curso'));

        return redirect()->route('cursos.show', $curso); // $curso->id
    }

    public function show(Curso $curso)
    {
        return view('cursos.show', compact('curso')); //['curso' => $curso]
    }

    public function edit(Curso $curso)
    {
        return view('cursos.edit', compact('curso'));
    }

    public function update(Request $request,Curso $curso)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'categoria' => 'required'
        ]);
        
        $curso->name = $request->name;
        $curso->description = $request->description;
        $curso->categoria = $request->categoria;
        
        $curso->save();

        return redirect()->route('cursos.show', $curso);
    }
}
