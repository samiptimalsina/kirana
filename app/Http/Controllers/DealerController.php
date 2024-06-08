<?php

namespace App\Http\Controllers;

use App\Models\Dealer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DealerController extends Controller
{
    private function getIsAdmin()
    {
        return Auth::check() && Auth::user()->usertype === "1";
    }

    public function index()
    {
        $dealers = Dealer::all();
        $user = Auth::user();
        $isAdmin = $this->getIsAdmin();
        return view('admin.dealers.index', compact('dealers', 'user', 'isAdmin'));
    }

    public function create()
    {
        $user = Auth::user();
        $isAdmin = $this->getIsAdmin();
        return view('admin.dealers.create', compact('user', 'isAdmin'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'contact_no' => 'required',
            'contact_person' => 'required',
            'address' => 'required',
            'proprietor_name' => 'required',
            'google_address' => 'required',
        ]);

        Dealer::create($request->all());

        return redirect()->route('dealers.index')
            ->with('success', 'Dealer created successfully.');
    }

    public function show(Dealer $dealer)
    {
        return view('dealers.show', compact('dealer'));
    }

    public function edit(Dealer $dealer)
    {
        $user = Auth::user();
        $isAdmin = $this->getIsAdmin();
        return view('admin.dealers.edit', compact('dealer', 'user', 'isAdmin'));
    }

    public function update(Request $request, Dealer $dealer)
    {
        $request->validate([
            'name' => 'required',
            'contact_no' => 'required',
            'contact_person' => 'required',
            'address' => 'required',
            'proprietor_name' => 'required',
            'google_address' => 'required',
        ]);

        $dealer->update($request->all());

        return redirect()->route('dealers.index')
            ->with('success', 'Dealer updated successfully');
    }

    public function destroy(Dealer $dealer)
    {
        $dealer->delete();

        return redirect()->route('dealers.index')
            ->with('success', 'Dealer deleted successfully');
    }
}
