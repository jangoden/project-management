<?php

namespace App\Filament\Widgets;

use App\Models\Category;
use App\Models\Post;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class PostStatsOverview extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Posts', Post::count())
                ->description('Total number of posts')
                ->icon('heroicon-o-document-text'),
            Stat::make('Total Categories', Category::count())
                ->description('Total number of categories')
                ->icon('heroicon-o-tag'),
            Stat::make('Published Posts', Post::where('status', 'published')->count())
                ->description('Number of published posts')
                ->icon('heroicon-o-check-circle'),
        ];
    }
}
