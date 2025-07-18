<?php

namespace Estivenm0\Admin\Services;

use Estivenm0\Admin\MoonShine\Resources\BookingResource;
use Estivenm0\Admin\MoonShine\Resources\CategoryResource;
use Estivenm0\Admin\MoonShine\Resources\CustomerResource;
use Estivenm0\Admin\MoonShine\Resources\ItemResource;
use Estivenm0\Admin\MoonShine\Resources\OfferResource;
use Estivenm0\Admin\MoonShine\Resources\PackageResource;
use MoonShine\MenuManager\MenuGroup;
use MoonShine\MenuManager\MenuItem;
use Sweet1s\MoonshineRBAC\Components\MenuRBAC;

class AdminModule
{
    public function getResources(): array
    {
        return [
            CategoryResource::class,
            CustomerResource::class,
            BookingResource::class,
            PackageResource::class,
            OfferResource::class,
            ItemResource::class,
        ];
    }

    public function getMenu(): array
    {

        return MenuRBAC::menu(
            MenuGroup::make('Travels', [
                MenuItem::make('Categories', CategoryResource::class),

                MenuItem::make('Packages', PackageResource::class),

                MenuItem::make('Offers', OfferResource::class),

                MenuItem::make('Bookings', BookingResource::class),

            ])->icon('s.paper-airplane'),

            MenuItem::make('Customers', CustomerResource::class),
        );
    }
}
