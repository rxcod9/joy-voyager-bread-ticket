<?php

namespace Joy\VoyagerBreadTicket\Database\Seeders;

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\DataType;

class DataTypesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $dataType = $this->dataType('slug', 'tickets');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'tickets',
                'display_name_singular' => __('joy-voyager-bread-ticket::seeders.data_types.ticket.singular'),
                'display_name_plural'   => __('joy-voyager-bread-ticket::seeders.data_types.ticket.plural'),
                'icon'                  => 'voyager-bread',
                'model_name'            => 'Joy\\VoyagerBreadTicket\\Models\\Ticket',
                // 'policy_name'           => 'Joy\\VoyagerBreadTicket\\Policies\\TicketPolicy',
                // 'controller'            => 'Joy\\VoyagerBreadTicket\\Http\\Controllers\\VoyagerBreadTicketController',
                'generate_permissions'  => 1,
                'description'           => '',
            ])->save();
        }
    }

    /**
     * [dataType description].
     *
     * @param [type] $field [description]
     * @param [type] $for   [description]
     *
     * @return [type] [description]
     */
    protected function dataType($field, $for)
    {
        return DataType::firstOrNew([$field => $for]);
    }
}
