<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class CsvImport implements ToCollection, WithHeadingRow, WithMultipleSheets
{
  use Importable;

  public function collection(Collection $rows)
  {
  }

  public function headingRow(): int
  {
    return 1;
  }

  public function sheets(): array
  {
    return [
      0 => $this
    ];
  }
}
