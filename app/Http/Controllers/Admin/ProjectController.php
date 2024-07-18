<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Technology;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'projects' => Project::all(),
            // 'type' => Type::all() Non è necessario in quanto recupera il nome del type attraverso la RELATIONS delle tabelle
        ];
        return view('admin.index', $data);
        // return 'questo e la rotta index';
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [

            'type' => Type::all(),
            'technologies' => Technology::all(),

        ];
        return view("admin.create", $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $newProject = new Project;
        $newProject->title = $data['title'];
        $newProject->description = $data['description'];
        $newProject->img = Storage::put('uploads', $data['img']);
        $newProject->type_id = $data['type_id'];
        $newProject->save();

        if (isset($data['technologies'])) {
            $newProject->technologies()->attach($data['technologies']);
        }

        return redirect()->route('admin.Project.show', $newProject->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $selectedProject =  Project::findOrFail($id);
        $data = [
            "project" => $selectedProject
        ];
        return view("admin.show", $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $selectedProject =  Project::findOrFail($id);
        $data = [
            "project" => $selectedProject,
            'type' => Type::all(),
            'technologies' => Technology::all(),
            // Questo invece è necessario in quanto bisogna passargli tutti gli ID della tabella TYPE
        ];
        return view("admin.edit", $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $project =  Project::findOrFail($id);
        $data = $request->validate([
            "title" => "required",
            "description" => "required",
            "img" => "required",
            "type_id" => "required"

        ]);

        if ($request->hasFile('img')) {
            // Elimina l'immagine precedente
            if ($project->img) {
                Storage::delete($project->img);
            }

            // Carica la nuova immagine
            $data['img'] = Storage::put('uploads', $request->file('img'));
        }

        // $project->fill($data);
        // $project->save();
        $project->update($data);

        return redirect()->route('admin.Project.show', $project->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $project =  Project::findOrFail($id);
        $project->delete();

        return redirect()->route('admin.Project.index');
    }
}
