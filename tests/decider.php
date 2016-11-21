<?php

require dirname(__DIR__) . '/vendor/autoload.php';

class Decider
{

    /**
     * @var \Continuous\Swf\Service
     */
    protected $service;

    public function __construct()
    {
        $awsConfig = \Continuous\Swf\Helper\Config::awsConverter(
            \Continuous\Swf\Helper\Config::getSection('aws')
        );

        $this->sdkAws = new \Aws\Sdk($awsConfig);
        $this->swfClient = $this->sdkAws->createClient('Swf');

        $allConfig = \Continuous\Swf\Helper\Config::getAll();

        $this->service = new \Continuous\Swf\Service(new \Continuous\Swf\ServiceConfig(
            $allConfig->swf->domain,
            $allConfig->identity,
            $this->swfClient,
            'Continuous\\Demo\\Swf'
        ));
    }

    public function decisions()
    {
        $workflow = $this->service->pollWorkflow();
        eval(\Psy\sh());
    }

    public function spaghettiDecider()
    {

    }

    public function bakingPastaDecider()
    {
    }

    public function sauceDecider()
    {
    }
}

$scratch = new Decider();
$scratch->decisions();

