<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithProperties;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;


use Illuminate\Support\Facades\DB;
use App\User;

class UsersExport implements 
    FromCollection,
    WithHeadings, 
    ShouldAutoSize, 
    WithMapping,
    WithEvents

{
    private $id;

    public function forId($id)
    {
        $this->id = $id;

        return $this;
    }

    use Exportable;

    public function collection()
    {

        $result = DB::select('SELECT id,name,email FROM users where id = :id', ['id'=>$this->id]);
     
        return collect($result);
    }

    public function map($result): array
    {
        return [
            $result->id,
            $result->name,
            $result->email
        ];
    }

    public function headings(): array
    {
        return [
            'Id',
            'NAME',
            'EMAIL'
        ];
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class    => function(AfterSheet $event) {
                $cellRange = 'A1:C1'; // All headers                
                $event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setSize(12);
                $event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setBold(true);
            },
        ];
    }

}
