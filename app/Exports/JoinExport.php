<?php

namespace App\Exports;

use App\Models\Join;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class JoinExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
        public function headings(): array
    {
        return [
            '#',
            'الاسم الثلاثي',
            'محل الولادة',
            'تاريخ الولادة',
            'الجنس',
            'التحصيل الدراسي',
            'عنوان السكن',
            'رقم الموبايل',
            'رقم بطاقة الناخب',
            'حساب الفيسبوك',
            'تاريخ الانضمام',
        ];
    }
    public function collection()
    {
        return Join::all();
        
    }
}
