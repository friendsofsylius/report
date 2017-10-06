<?php

namespace Fosyl\ReportOne;

interface Input
{
    /**
     * @param string $name
     *
     * @return mixed
     */
    public function getParameter(string $name);
}
