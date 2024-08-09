<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeamController extends Controller
{
    private function getIsAdmin()
    {
        return Auth::check() && Auth::user()->usertype === "1";
    }

    public function index()
    {
        $user = Auth::user();
        $isAdmin = $this->getIsAdmin();
        $teams = Team::all();


        return view("admin.teams.index", compact("user", "isAdmin", "teams"));
    }

    public function create()
    {

        $user = Auth::user();
        $isAdmin = $this->getIsAdmin();

        return view('admin.teams.create', compact('user', 'isAdmin'));
    }

    public function store(Request $request)
    {
        $user = Auth::user();
        $isAdmin = $this->getIsAdmin();

        $request->validate([
            'name' => 'required',
            'role' => 'required',
            'contact_no' => 'required',
            'email' => 'required|email',
            'description' => 'nullable',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $imageName = time() . '.' . $image->getClientOriginalExtension();

            $photoPath = Team::getPhotoPath();
            $image->move($photoPath, $imageName);

            $data['photo'] = $imageName;
        }

        Team::create($data);

        return redirect()->route('teams.index')->with('success', 'Team member created successfully.');
    }

    public function edit(Team $team)
    {
        $user = Auth::user();
        $isAdmin = $this->getIsAdmin();
        return view('admin.teams.edit', compact('team', 'user', 'isAdmin'));
    }

    public function update(Request $request, Team $team)
    {
        $user = Auth::user();
        $isAdmin = $this->getIsAdmin();

        $request->validate([
            'name' => 'required',
            'role' => 'required',
            'contact_no' => 'nullable',
            'email' => 'nullable',
            'description' => 'nullable',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $imageName = time() . '.' . $image->getClientOriginalExtension();

            $photoPath = Team::getPhotoPath($team->photo);

            if (file_exists($photoPath) && !is_dir($photoPath)) {
                unlink($photoPath);
            }

            $image->move(Team::getPhotoPath(), $imageName);

            $data['photo'] = $imageName;
        }


        $team->update($data);

        return redirect()->route('teams.index')->with('success', 'Team member updated successfully.');
    }

    public function destroy(Team $team)
    {
        $user = Auth::user();
        $isAdmin = $this->getIsAdmin();

        $photoPath = Team::getPhotoPath($team->photo);

        if (file_exists($photoPath)) {
            unlink($photoPath);
        }

        $team->delete();

        return redirect()->route('teams.index')->with('success', 'Team member deleted successfully.');
    }
}
