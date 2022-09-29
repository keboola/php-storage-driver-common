<?php

declare(strict_types=1);

use GPBMetadata\Proto\Backend;
use GPBMetadata\Proto\Bucket;
use GPBMetadata\Proto\Common;
use GPBMetadata\Proto\Credentials;
use GPBMetadata\Proto\Info;
use GPBMetadata\Proto\Project;
use GPBMetadata\Proto\Table;
use GPBMetadata\Proto\Workspace;
use Keboola\StorageDriver\Controller\ControllerExecutorWorkflow;
use Keboola\StorageDriver\Controller\ControllerKillWorkflow;
use Temporal\WorkerFactory;

require __DIR__ . '/../vendor/autoload.php';

Backend::initOnce();
Bucket::initOnce();
Common::initOnce();
Credentials::initOnce();
Info::initOnce();
Project::initOnce();
Table::initOnce();
Workspace::initOnce();

// factory initiates and runs task queue specific activity and workflow workers
$factory = WorkerFactory::create();

// Worker that listens on a task queue and hosts both workflow and activity implementations.
$worker = $factory->newWorker(
    'driver-controller'
);

$worker->registerWorkflowTypes(
    ControllerExecutorWorkflow::class,
    ControllerKillWorkflow::class
);

// start primary loop
$factory->run();
