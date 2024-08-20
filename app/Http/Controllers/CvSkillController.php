<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCvSkillRequest;
use App\Http\Requests\UpdateCvSkillRequest;
use App\Models\Cv;
use App\Models\CvSkill;
use Illuminate\Http\RedirectResponse;

class CvSkillController extends Controller
{
    public function store(StoreCvSkillRequest $request, Cv $cv): RedirectResponse
    {
        $skill = CvSkill::query()->make($request->validated());
        $skill->cv_id = $cv->id;
        $skill->save();

        return redirect(route('cvs.show', $skill->cv_id))
            ->with('success', __('Successfully added skill.'));
    }

    public function destroy(Cv $cv, CvSkill $skill): RedirectResponse
    {
        $skill->delete();

        return redirect(route('cvs.edit', $cv))
            ->with('success', __('Successfully deleted skill.'));
    }

    public function update(
        UpdateCvSkillRequest $request,
        Cv $cv,
        CvSkill $skill
    ): RedirectResponse {
        $skill->update($request->validated());

        return redirect(route('cvs.edit', $cv))
            ->with('success', __('Successfully updated skill.'));
    }
}
