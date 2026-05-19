<?php

namespace App\Livewire\Pages;

use App\Models\Faculty as ModelsFaculty;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('PDS PA - Faculties')]
class Faculty extends Component
{
    public $searchTerm = "";

    public function render()
    {
        // $indofaculties = ModelsFaculty::where('is_active', true)->where('country', 'indonesia')->with('schedules')->orderBy('name', 'asc')->get();
        // $foreignfaculties = ModelsFaculty::where('is_active', true)->where('country', '!=', 'indonesia')->with('schedules')->orderBy('name', 'asc')->get();
        $queryIndo = ModelsFaculty::where('is_active', true)->with('schedules')->where('country', 'Indonesia');
        $queryForeign = ModelsFaculty::where('is_active', true)->with('schedules')->where('country', '!=', 'Indonesia');
        if (strlen($this->searchTerm) >= 3) {
            $queryIndo->where(function ($q) {
                $q->where('name', 'like', '%' . $this->searchTerm . '%');
            });
        }
        if (strlen($this->searchTerm) >= 3) {
            $queryForeign->where(function ($q) {
                $q->where('name', 'like', '%' . $this->searchTerm . '%');
            });
        }
        $indofaculties = $queryIndo
            ->orderBy('name', 'asc')
            ->paginate(48);

        $foreignfaculties = $queryForeign
            ->orderBy('name', 'asc')
            ->paginate(48);

        return view('livewire.pages.faculty', ['indofaculties' => $indofaculties, 'foreignfaculties' => $foreignfaculties]);
    }
}
