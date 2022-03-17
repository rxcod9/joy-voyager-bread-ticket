<?php

namespace Joy\VoyagerBreadTicket\Database\Seeders;

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Menu;
use TCG\Voyager\Models\MenuItem;

class MenuItemsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $menu = Menu::where('name', 'admin')->firstOrFail();

        $maxOrder = MenuItem::max('order');
    
        $menuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => __('joy-voyager-bread-ticket::seeders.menu_items.tickets'),
            'url'     => '',
            'route'   => 'voyager.tickets.index',
        ]);
        if (!$menuItem->exists) {
            $menuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-bread voyager-bread-ticket',
                'color'      => null,
                'parent_id'  => null,
                'order'      => $maxOrder++,
            ])->save();
        }
    }
}
