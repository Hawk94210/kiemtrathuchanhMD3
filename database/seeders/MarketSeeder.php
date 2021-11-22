<?php

namespace Database\Seeders;

use App\Models\Market;
use Illuminate\Database\Seeder;

class MarketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $market = new Market();
        $market->name = 'Hoàng Nguyễn';
        $market->phone = '098733222';
        $market->email = 'hoangnguyen@gmail.com';
        $market->address = 'Cầu Giấy,Hà Nội';
        $market->manager = 'Lê Văn Hoàng';
        $market->status = 'Hoạt động';
        $market->save();


    }
}
