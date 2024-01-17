<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class SliderController extends Controller
{

    public function index(): View
    {
        $sliders = Slider::get();

        return view('admin.sliders.index', compact('sliders'));
    }

    public function create(): View
    {
        return view('admin.sliders.create');
    }

    public function store(SliderRequest $request): RedirectResponse
    {
        if($request->validated()){
            $image = $request->file('image')->update('assets/slider','public');

            $slider->update($request->except('image') + ['image' => $image]);
        }
        Slider::create($request->validated());

        return redirect()->route('admin.sliders.index')->with([
            'message' => 'successfully created !',
            'alert-type' => 'success'
        ]);
    }

    public function edit(Slider $slider): View
    {
        return view('admin.sliders.edit', compact('slider'));
    }

    public function update(SliderRequest $request, Slider $slider): RedirectResponse
    {
        if($request->validated()){
            if($request->image) {
                File::delete('storage/' . $slider->image);
                $image = $request->file('image')->store('assets/slider','public');
                $slider->update($request->except('image') + ['image' => $image]);
            }else {
                $slider->update($request->validated());
            }
        }

        return redirect()->route('admin.sliders.index')->with([
            'message' => 'successfully updated !',
            'alert-type' => 'info'
        ]);
    }

    public function destroy(Slider $slider): RedirectResponse
    {
        $slider->delete();

        return back()->with([
            'message' => 'successfully deleted !',
            'alert-type' => 'danger'
        ]);
    }
}
