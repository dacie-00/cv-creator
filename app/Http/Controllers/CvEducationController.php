<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCvEducationRequest;
use App\Http\Requests\StoreCvWorkExperienceRequest;
use App\Http\Requests\UpdateCvEducationRequest;
use App\Http\Requests\UpdateCvWorkExperienceRequest;
use App\Models\Cv;
use App\Models\CvEducation;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class CvEducationController extends Controller
{
    public function store(StoreCvEducationRequest $request, Cv $cv): RedirectResponse
    {
        $education = CvEducation::query()->make($request->validated());
        $education->cv_id = $cv->id;
        $education->save();

        return redirect(route('cvs.show', $education->cv_id))
            ->with('success', __('Successfully added education.'));
    }

    public function destroy(Cv $cv, CvEducation $education): RedirectResponse
    {
        $education->delete();

        return redirect(route('cvs.edit', $cv))
            ->with('success', __('Successfully deleted education.'));
    }

    public function update(
        UpdateCvEducationRequest $request,
        Cv $cv,
        CvEducation $education
    ): RedirectResponse {
        $education->update($request->validated());

        return redirect(route('cvs.edit', $cv))
            ->with('success', __('Successfully updated education.'));
    }
}
