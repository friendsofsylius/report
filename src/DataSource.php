<?php

namespace Fosyl\ReportOne;

interface DataSource
{
    public function fetch(Input $input): Data;
}
