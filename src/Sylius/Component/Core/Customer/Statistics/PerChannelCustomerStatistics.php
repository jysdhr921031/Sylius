<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Sylius\Component\Core\Customer\Statistics;

use Sylius\Component\Core\Model\ChannelInterface;

/**
 * @author Jan Góralski <jan.goralski@lakion.com>
 */
final class PerChannelCustomerStatistics
{
    /**
     * @var int
     */
    private $ordersCount;

    /**
     * @var int
     */
    private $ordersValue;

    /**
     * @var ChannelInterface
     */
    private $channel;

    /**
     * @param int $ordersCount
     * @param int $ordersValue
     * @param ChannelInterface $channel
     *
     * @throws \InvalidArgumentException
     */
    public function __construct(int $ordersCount, int $ordersValue, ChannelInterface $channel)
    {
        $this->ordersCount = $ordersCount;
        $this->ordersValue = $ordersValue;
        $this->channel = $channel;
    }

    /**
     * @return int
     */
    public function getOrdersCount(): int
    {
        return $this->ordersCount;
    }

    /**
     * @return int
     */
    public function getOrdersValue(): int
    {
        return $this->ordersValue;
    }

    /**
     * @return ChannelInterface
     */
    public function getChannel(): ChannelInterface
    {
        return $this->channel;
    }

    /**
     * @return int
     */
    public function getAverageOrderValue(): int
    {
        return (int) round($this->ordersValue / $this->ordersCount);
    }
}
