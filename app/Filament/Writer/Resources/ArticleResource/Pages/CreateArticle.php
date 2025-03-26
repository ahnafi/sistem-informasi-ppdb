<?php

namespace App\Filament\Writer\Resources\ArticleResource\Pages;

use App\Filament\Writer\Resources\ArticleResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateArticle extends CreateRecord
{
    protected static string $resource = ArticleResource::class;
}
