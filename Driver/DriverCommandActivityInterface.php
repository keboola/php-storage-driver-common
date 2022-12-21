<?php

declare(strict_types=1);

namespace Keboola\StorageDriver\Driver;

use Keboola\StorageDriver\Command\Common\DriverRequest;
use Keboola\StorageDriver\Command\Common\DriverResponse;
use Temporal\Activity;

/**
 * @Activity\ActivityInterface(prefix="StorageDriver.")
 */
interface DriverCommandActivityInterface
{
    /**
     * @Activity\ActivityMethod(name="ExecuteCommand")
     */
    public function executeCommand(
        DriverRequest $req
    ): DriverResponse;
}
