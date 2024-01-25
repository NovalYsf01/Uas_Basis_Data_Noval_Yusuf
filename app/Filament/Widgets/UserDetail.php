<?php

namespace App\Filament\Widgets;

use App\Models\Category;
use App\Models\Product;
use App\Models\Tag;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class UserDetail extends BaseWidget
{
    protected function getStats(): array
    {
        $reserve = User::all()->count();
        $user = User::all()->count();
        $tagging = Tag::all()->count();
        $cat = Category::all()->count();
        return [
            Stat::make(' ', $reserve)
            ->description('Total User')
            ->descriptionIcon('heroicon-o-building-storefront')
            ->color('success'),
        Stat::make('Average time on page', $cat),
        ];
    }
}
