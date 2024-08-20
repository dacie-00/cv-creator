<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCvWorkExperienceRequest;
use App\Http\Requests\UpdateCvWorkExperienceRequest;
use App\Models\Cv;
use App\Models\CvWorkExperience;
use Illuminate\Http\RedirectResponse;

class CvWorkExperienceController extends Controller
{
    public function store(StoreCvWorkExperienceRequest $request, Cv $cv): RedirectResponse
    {
        $workExperience = CvWorkExperience::query()->make($request->validated());
        $workExperience->cv_id = $cv->id;
        $workExperience->save();

        return redirect(route('cvs.edit', $workExperience->cv_id))
            ->with('success', __('Successfully added work experience.'));
    }

    public function destroy(Cv $cv, CvWorkExperience $workExperience): RedirectResponse
    {
        $workExperience->delete();

        return redirect(route('cvs.edit', $cv))
            ->with('success', __('Successfully deleted work experience.'));
    }

    public function update(
        UpdateCvWorkExperienceRequest $request,
        Cv $cv,
        CvWorkExperience $workExperience
    ): RedirectResponse {
        $workExperience->update($request->validated());

        return redirect(route('cvs.edit', $cv))
            ->with('success', __('Successfully updated work experience.'));
    }
}
