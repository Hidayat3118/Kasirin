<?php

namespace App\Filament\Resources\Transaksis\Pages;

use App\Filament\Resources\Transaksis\TransaksiResource;
use Filament\Resources\Pages\Page;

class BuatTransaksi extends Page
{
    protected static string $resource = TransaksiResource::class;

    protected string $view = 'filament.resources.transaksis.pages.buat-transaksi';
}
