<?php

namespace App\Filament\Resources\CategoryArticleResource\Pages;

use App\Filament\Resources\CategoryArticleResource;
use App\Filament\Resources\СategoryArticleResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewCategoryArticle extends ViewRecord
{
    protected static string $resource = CategoryArticleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }

}
