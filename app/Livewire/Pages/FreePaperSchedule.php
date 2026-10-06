<?php

namespace App\Livewire\Pages;

use App\Models\GuidelineAbstract;
use App\Models\SchedulePaper;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Http;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

use function Pest\Laravel\json;

class FreePaperSchedule extends Component
{
    use WithPagination, WithoutUrlPagination;

    public $presentationGuides;

    public $search = '';
    public $perPage = 1;
    public $selectedCategory = '';

    public function mount()
    {
        $this->presentationGuides = GuidelineAbstract::where('category', 'Presentation Guidelines')->orderBy('no_urut', 'asc')->get();
        
    }

    public function filterByCategory($category)
    {
        $this->selectedCategory = $category;
        $this->resetPage(); // Reset pagination ketika filter berubah
    }

    public function resetFilter()
    {
        $this->selectedCategory = '';
        $this->resetPage();
    }

    public function updatedSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $query = SchedulePaper::with('paperCategory')
            ->where('is_active', true);

        // Filter berdasarkan kategori jika dipilih
        if (!empty($this->selectedCategory)) {
            $query->whereHas('paperCategory', function ($q) {
                $q->where('name', $this->selectedCategory);
            });
        }

        // Filter berdasarkan search
        if (!empty($this->search)) {
            $query->where(function ($subQuery) {
                $subQuery->where('code_abstract', 'like', '%' . $this->search . '%')
                    ->orWhere('name_participant', 'like', '%' . $this->search . '%')
                    ->orWhere('title', 'like', '%' . $this->search . '%')
                    ->orWhere('institution', 'like', '%' . $this->search . '%')
                    ->orWhereHas('paperCategory', function ($q) {
                        $q->where('name', 'like', '%' . $this->search . '%');
                    });
            });
        }

        return view('livewire.pages.free-paper-schedule', [
            'paperSchedules' => $query->paginate($this->perPage),
        ]);
    }
}
