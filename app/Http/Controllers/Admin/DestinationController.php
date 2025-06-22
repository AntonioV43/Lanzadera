<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\DestinationRequest;
use App\Models\Destination;
use File;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
   
    public function index(): View
    {
        $destinations = Destination::get();

        return view('admin.destinations.index', compact('destinations'));
    }

    public function create(): View
    {
        return view('admin.destinations.create');
    }

    public function store(DestinationRequest $request): RedirectResponse
    {
        if($request->validated()){
            $image = $request->file('image')->store('assets/destinations', 'public');
            Destination::create($request->except('image') + ['image' => $image]);
        }

        return redirect()->route('admin.destinations.index')->with([
            'message' => 'successfully created !',
            'alert-type' => 'success'
        ]);
    }

    public function edit(Destination $destination): View
    {
        return view('admin.destinations.edit', compact('destination'));
    }

    public function update(DestinationRequest $request, Destination $destination): RedirectResponse
    {
        if($request->validated()){
            if($request->image){
                File::delete('storage/' . $destination->image);
                $image = $request->file('image')->store('assets/destinations', 'public');
                $destination->update($request->except('image') + ['image' => $image]);
            }else{
                $destination->update($request->validated());
            }
        }

        return redirect()->route('admin.destinations.index')->with([
            'message' => 'successfully updated !',
            'alert-type' => 'info'
        ]);
    }

    public function destroy(Destination $destination): RedirectResponse
    {
        File::delete('storage/' . $destination->image);
        $destination->delete();

        return back()->with([
            'message' => 'successfully deleted !',
            'alert-type' => 'danger'
        ]);
    }
    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:10240' // max 10MB
        ];
    }
}