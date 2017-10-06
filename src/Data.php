<?php

namespace Fosyl\ReportOne;

interface Data
{
    /**
     * @return array
     */
    public function getLabels(): array;

    /**
     * @return array
     */
    public function getMetrics(): array;
}
