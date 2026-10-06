<?php

namespace App\Filament\Clusters\ScientificSchedule\Resources\SchedulePaperResource\Pages;

use App\Filament\Clusters\ScientificSchedule\Resources\SchedulePaperResource;
use Filament\Actions;
use Filament\Actions\Imports\Importer;
use Filament\Resources\Pages\ListRecords;
use Filament\Actions\ImportAction;

class ListSchedulePapers extends ListRecords
{
    protected static string $resource = SchedulePaperResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ImportAction::make()
                ->Importer(\App\Filament\Imports\SchedulePaperImporter::class),
            Actions\CreateAction::make(),
        ];
    }
}
