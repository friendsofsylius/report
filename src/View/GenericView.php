<?php

namespace Fosyl\ReportOne\View;

use Fosyl\ReportOne\DataSource;
use Fosyl\ReportOne\Format;
use Fosyl\ReportOne\View;

class GenericView implements View
{
    /**
     * @var DataSource
     */
    private $dataSource;
    /**
     * @var Format
     */
    private $format;

    public function __construct(DataSource $dataSource, Format $format)
    {
        $this->dataSource = $dataSource;
        $this->format = $format;
    }

    public function getDataSource(): DataSource
    {
        return $this->dataSource;
    }

    public function getFormat(): Format
    {
        return $this->format;
    }
}
