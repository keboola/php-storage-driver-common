<?php

declare(strict_types=1);

namespace Keboola\StorageDriver\Controller;

use Retry\BackOff\UniformRandomBackOffPolicy;
use Retry\Policy\SimpleRetryPolicy;
use Retry\RetryProxy;

function retry(callable $callback): mixed
{
    $proxy = new RetryProxy(
        (new SimpleRetryPolicy(10)),
        (new UniformRandomBackOffPolicy(250))
    );
    return $proxy->call($callback);
}
