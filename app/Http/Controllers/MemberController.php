<?php 
 
namespace App\Http\Controllers; 
 
use App\Models\Member; 
use Illuminate\Http\Request; 

class MemberController extends Controller 
{ 
    public function index() 
    { 
        $member = Member::get();
        return view('admin.members', ['member' => $member]);
    }
 
    public function create() 
    { 
        return view('admin.form_members', [ 
            'title' => 'Add', 
            'member' => new Member(),
            'route' => route('members.store'), 
            'method' => 'POST',
        ]);
    } 

    public function store(Request $request) 
    { 
        $validated = $request->validate([ 
            'name' => 'required|string',
            'nim' => 'required|numeric',
            'major' => 'required|string',
            'position' => 'required|string',
            'linked' => 'required|url',
            'github' => 'nullable|url',
            'instagram' => 'nullable|url',
            'email' => 'required|email',
            'image' => 'nullable|image',
        ]);
        
        if ($request->hasFile('image'))
        {
            $imageName = $request->file('image')->store('images', 'public');
            $validated['image'] = $imageName;
        }

        Member::create($validated);
        return redirect()->route('Member')->with('success', 'Member berhasil ditambahkan'); 
    } 
 
    public function show(Member $member) 
    { 
        return view('members.show', compact('member')); 
    } 
 
    public function edit(Member $member) 
    { 
        return view('admin.form_members', [ 
            'title' => 'Edit', 
            'member' => $member, 
            'route' => route('members.update', $member), 
            'method' => 'PUT', 
        ]); 
    }

    public function update(Request $request, Member $member) 
    { 
        $validated = $request->validate([ 
            'name' => 'required|string',
            'nim' => 'required|numeric',
            'major' => 'required|string',
            'position' => 'required|string',
            'linked' => 'required|url',
            'github' => 'nullable|url',
            'instagram' => 'nullable|url',
            'email' => 'required|email',
        ]); 
 
        $member->update($validated); 
        return redirect()->route('Member')->with('success', 'Member berhasil diperbarui'); 
    } 

    public function destroy(Member $member) 
    { 
        $member->delete(); 
        return redirect()->route('Member')->with('success', 'Member berhasil dihapus');
    } 

    public function listMembers()
    {
        $member = Member::all();
        return view('layout.members', ['member' => $member]);
    }
}