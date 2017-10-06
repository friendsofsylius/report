<?php

namespace Fosyl\ReportOne\Format;

use Fosyl\ReportOne\Data;
use Fosyl\ReportOne\Format;

class CellFormat implements Format
{
    public function apply(Data $data): string
    {
        $out = '';
        foreach ($data->getLabels() as $field => $label) {
            $out .= "{$label}: {$data->getMetrics()[$field]}";
        }

        return $out;
    }
}
