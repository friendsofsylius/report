<?php

namespace Fosyl\ReportOne\Data;

use Fosyl\ReportOne\Data;

class LabeledData implements Data
{
    /**
     * @var array
     */
    private $labels;

    /**
     * @var array
     */
    private $metrics;

    /**
     * @param array $labels
     * @param array $metrics
     */
    public function __construct(array $labels = [], array $metrics = [])
    {
        $this->labels = $labels;
        $this->metrics = $metrics;
    }

    /**
     * @return array
     */
    public function getLabels(): array
    {
        return $this->labels;
    }

    /**
     * @return array
     */
    public function getMetrics(): array
    {
        return $this->metrics;
    }
}
