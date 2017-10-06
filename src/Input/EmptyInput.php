<?php

namespace Fosyl\ReportOne\Input;

use Fosyl\ReportOne\Input;

class EmptyInput implements Input
{
    /**
     * @param string $name
     *
     * @return mixed
     */
    public function getParameter(string $name)
    {
        return null;
    }
}
