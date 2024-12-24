<?php 
 
namespace App\Http\Controllers; 
 
use App\Models\Member; 
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Storage;

class MemberController extends Controller 
{ 
    public function index() 
    { 
        $member = Member::get();
        return view('admin.members', ['member' => $member]);
    }
 
    public function create() 
    { 
        $positions = [
            'Ketua Lab', 'Sekretaris', 'Bendahara', 'Koor. Embedded System',
            'Koor. Integrasi Embedded', 'Koor. Data Sensor', 'Koor. Study Group',
            'Koor. Research Group', 'Koor. Design', 'Koor. Public Relations',
            'Anggota Research'
        ];
        
        return view('admin.form_members', [ 
            'title' => 'Add', 
            'member' => new Member(),
            'positions' => $positions,
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
            'image' => 'nullable|image|dimensions:ratio=1/1',
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
        $positions = [
            'Ketua Lab', 'Sekretaris', 'Bendahara', 'Koor. Embedded System',
            'Koor. Integrasi Embedded', 'Koor. Data Sensor', 'Koor. Study Group',
            'Koor. Research Group', 'Koor. Design', 'Koor. Public Relations',
            'Anggota Research'
        ];

        return view('admin.form_members', [ 
            'title' => 'Edit', 
            'member' => $member,
            'positions' => $positions,
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
            'image' => 'nullable|image|dimensions:ratio=1/1',
        ]);

        if ($request->hasFile('image')) {
            if ($member->image) {
                Storage::delete('public/' . $member->image);
            }
            $imageName = $request->file('image')->store('images', 'public');
            $validated['image'] = $imageName;
        }
 
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