<?php 
 
namespace App\Http\Controllers; 
 
use App\Models\Publication; 
use Illuminate\Http\Request; 

class PublicationController extends Controller 
{ 
    public function index() 
    { 
        $publication = Publication::get();
        return view('admin.publications', ['publication' => $publication]);
    } 
 
    public function create() 
    { 
        return view('admin.form_publications', [ 
            'title' => 'Add', 
            'publication' => new Publication(),
            'route' => route('publications.store'), 
            'method' => 'POST',
        ]);
    } 

    public function store(Request $request) 
    { 
        $validated = $request->validate([ 
            'title' => 'required|string',
            'author' => 'required|string',
            'year' => 'required|numeric',
            'publisher' => 'required|string',
            'link' => 'required',
        ]);
        Publication::create($validated);
        return redirect()->route('Publication')->with('success', 'Publication berhasil ditambahkan'); 
    } 
 
    public function show(Publication $publication) 
    { 
        return view('publications.show', compact('publication')); 
    } 
 
    public function edit(Publication $publication) 
    { 
        return view('admin.form_publications', [ 
            'title' => 'Edit', 
            'publication' => $publication, 
            'route' => route('publications.update', $publication), 
            'method' => 'PUT', 
        ]); 
    }

    public function update(Request $request, Publication $publication) 
    { 
        $validated = $request->validate([ 
            'title' => 'required|string',
            'author' => 'required|string',
            'year' => 'required|numeric',
            'publisher' => 'required|string',
            'link' => 'required',
        ]); 
 
        $publication->update($validated); 
        return redirect()->route('Publication')->with('success', 'Publication berhasil diperbarui'); 
    } 

    public function destroy(Publication $publication) 
    { 
        $publication->delete(); 
        return redirect()->route('Publication')->with('success', 'Publication berhasil dihapus');
    } 
}