<?php

namespace App\Exports;

use App\Nilai_Individu;
use App\Project ;
use App\Quiz ;
use App\User ;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;

class NilaiExport implements FromView , WithEvents
{
    public $data;
    public function __construct($data = ""){

      $this->data = $data;
    }
    public function registerEvents(): array
{
    return [
        AfterSheet::class    => function(AfterSheet $event) {
           $column = ['A','B','C','D','E','F','G','H','I'];
           foreach($column as $col) {
               $event->sheet->getDelegate()->getColumnDimension($col)->setWidth(40);
           }
        }
    ];
}

    public function view(): View
    {

        return view('quiz.index', ['data' => $this->data ] );

    }
}
