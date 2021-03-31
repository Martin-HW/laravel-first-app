<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

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

    public function store(Request $request)
    {
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
        $curso->name = $request->name;
        $curso->description = $request->description;
        $curso->categoria = $request->categoria;
        
        $curso->save();

        return redirect()->route('cursos.show', $curso);
    }
}
