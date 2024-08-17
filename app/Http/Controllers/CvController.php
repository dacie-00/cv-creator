<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCvRequest;
use App\Http\Requests\UpdateCvRequest;
use App\Models\Cv;
use Illuminate\Http\RedirectResponse;
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

    public function edit(): View
    {
        return view('cvs/edit');
    }

    public function update(Cv $cv, UpdateCvRequest $request): RedirectResponse
    {
        $cv->update($request->validated());

        return redirect(route('cvs.show', $cv))->with('success', __('Successfully updated CV.'));
    }
}
