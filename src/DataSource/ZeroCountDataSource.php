<?php

namespace Fosyl\ReportOne\DataSource;

use Fosyl\ReportOne\Data;
use Fosyl\ReportOne\DataSource;
use Fosyl\ReportOne\Input;

class ZeroCountDataSource implements DataSource
{
    public function fetch(Input $input): Data
    {
        return new Data\LabeledData([
            'count' => 'Count',
        ], [
            'count' => 0,
        ]);
    }
}