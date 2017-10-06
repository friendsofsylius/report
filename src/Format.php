<?php

namespace Fosyl\ReportOne;

interface Format
{
    public function apply(Data $data): string;
}
