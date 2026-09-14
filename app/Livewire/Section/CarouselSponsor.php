<?php

namespace App\Livewire\Section;

use App\Models\Sponsor;
use Livewire\Component;

class CarouselSponsor extends Component
{
    public function render()
    {
        $sponsors = Sponsor::where('is_Active', true)->orderBy('no_urut', 'asc')->get();
        return view('livewire.section.carousel-sponsor', [
            'sponsors' => $sponsors
        ]);
    }
}
