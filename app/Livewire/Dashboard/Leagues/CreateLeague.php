<?php

namespace App\Livewire\Dashboard\Leagues;

use App\Livewire\Forms\Dashboard\Leagues\CreateLeagueForm;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\Features\SupportRedirects\Redirector;


class CreateLeague extends Component
{


    /**
     * @var CreateLeagueForm
     */
    public CreateLeagueForm $form;


    /**
     * @return View
     */
    public function render(): View
    {
        return view('livewire.dashboard.leagues.create-league');
    }

    /**
     * @return Redirector
     */
    public function save(): Redirector
    {
        $this->validate();
        $this->form->generateSlug();

        Auth::user()->leagues()->create(
            $this->form->all()
        );

        return redirect()->to(route('dashboard.leagues.index'));
    }
}
