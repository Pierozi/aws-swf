<?php

namespace Continuous\Demo\Swf\BakingPasta;

use Aws\Result;
use Continuous\Swf\Entity\Workflow;

/**
 * Class BakingPastaWorkflow
 * @package Continuous\Demo\Swf\BakingPasta
 */
class BakingPastaWorkflow extends Workflow
{
    public function process(Result $result)
    {
        // TODO: Implement process() method.
    }

    public function setResult()
    {
        // TODO: Implement setResult() method.
    }

    public function extract() :array
    {
        // TODO: Implement extract() method.

        return [
        ];
    }

    public function hydrate(array $data)
    {
        // TODO: Implement hydrate() method.
    }
}