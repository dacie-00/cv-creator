<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCvRequest;
use App\Http\Requests\UpdateCvRequest;
use App\Models\Cv;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class CvController extends Controller
{
    public function index(): View
    {
        return view('cvs/index', ['cvs' => Cv::all()]);
    }

    public function create(): View
    {
        return view('cvs/create');
    }

    public function show(Cv $cv): View
    {
        return view('cvs/show', ['cv' => $cv]);
    }

    public function store(StoreCvRequest $request): RedirectResponse
    {
        $cv = Cv::query()->make($request->validated());
        $cv->user_id = auth()->id();
        $cv->save();

        return redirect(route('cvs.index'))->with('success', __('Successfully created new CV.'));
    }

    public function destroy(Cv $cv): RedirectResponse
    {
        $cv->delete();

        return redirect(route('cvs.index'))->with('success', __('Successfully deleted CV.'));
    }

    public function edit(Cv $cv): View
    {
        return view('cvs/edit', ['cv' => $cv]);
    }

    public function update(Cv $cv, UpdateCvRequest $request): RedirectResponse
    {
        $validated = $request->validated();
        if ($image = $request->file('image')) {
            Storage::disk('local')->putFileAs('public/', $image, $cv->id . '.' . $image->guessClientExtension());
            Arr::set($validated, 'image', $cv->id . $image->getExtension());
        }
        $cv->update($validated);

        return redirect(route('cvs.edit', $cv))->with('success', __('Successfully updated CV.'));
    }
}
