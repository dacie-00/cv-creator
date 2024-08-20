<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCvLanguageRequest;
use App\Http\Requests\UpdateCvLanguageRequest;
use App\Models\Cv;
use App\Models\CvLanguage;
use Illuminate\Http\RedirectResponse;

class CvLanguageController extends Controller
{
    public function store(StoreCvLanguageRequest $request, Cv $cv): RedirectResponse
    {
        $language = CvLanguage::query()->make($request->validated());
        $language->cv_id = $cv->id;
        $language->save();

        return redirect(route('cvs.show', $language->cv_id))
            ->with('success', __('Successfully added language.'));
    }

    public function destroy(Cv $cv, CvLanguage $language): RedirectResponse
    {
        $language->delete();

        return redirect(route('cvs.edit', $cv))
            ->with('success', __('Successfully deleted language.'));
    }

    public function update(
        UpdateCvLanguageRequest $request,
        Cv $cv,
        CvLanguage $language
    ): RedirectResponse {
        $language->update($request->validated());

        return redirect(route('cvs.edit', $cv))
            ->with('success', __('Successfully updated language.'));
    }
}
