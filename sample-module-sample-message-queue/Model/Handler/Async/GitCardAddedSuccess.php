<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\SampleMessageQueue\Model\Handler\Async;

use \Psr\Log\LoggerInterface;

class GitCardAddedSuccess
{
    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * Initialize dependencies.
     *
     * @param LoggerInterface $logger
     */
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    /**
     * Log information about added gift card
     *
     * @param string[] $data
     */
    public function log(array $data)
    {
        $this->logger->debug('ASYNC Handler: Git Card Added Successfully: ' . serialize($data));
    }
}