<?php

namespace Fosyl\ReportOne\Report;

use Fosyl\ReportOne\Input;
use Fosyl\ReportOne\Report;

class GenericReport implements Report
{
    /**
     * @var Input
     */
    private $input;

    public function __construct(Input $input)
    {
        $this->input = $input;
    }

    /**
     * @return Input
     */
    public function getInput(): Input
    {
        return $this->input;
    }
}