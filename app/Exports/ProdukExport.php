<?php

namespace App\Exports;

use App\Models\Produk;
use Maatwebsite\Excel\Concerns\FromCollection;

use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class ProdukExport implements FromCollection, WithHeadings, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {   
        return Produk::all(
            'id',
            'produk',
            'jenis_produk',
            'harga',
            'umkm',
            'terjual',
            'stok',
            'tgl_stok',
            'pendapatan'
        );
    }

    public function headings(): array
    {
        return [
            'ID',
            'Produk',
            'Jenis Produk',
            'Harga',
            'UMKM',
            'Terjual',
            'Stok',
            'Tanggal Stok',
            'Total Pendapatan'
        ];
    }
}
