<?php

namespace Fosyl\ReportOne;

interface View
{
    public function getDataSource(): DataSource;

    public function getFormat(): Format;
}
