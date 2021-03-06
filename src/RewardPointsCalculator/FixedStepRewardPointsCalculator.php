<?php
/*
 * This file is part of reward plugin for sylius.
 *
 * (c) Ahmed Kooli
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
declare(strict_types=1);

namespace SnakeTn\Reward\RewardPointsCalculator;


class FixedStepRewardPointsCalculator implements RewardPointsCalculatorInterface
{
    /**
     * @var int
     */
    private $stepAmount;

    /**
     * @var int
     */
    private $numberOfRewardPointsToEarnPerStep;

    public function __construct(int $stepAmount, int $numberOfRewardPointsToEarnPerStep)
    {
        $this->stepAmount = $stepAmount;
        $this->numberOfRewardPointsToEarnPerStep = $numberOfRewardPointsToEarnPerStep;
    }

    public function calculate(int $totalAmount): int
    {
        return (int)($totalAmount / $this->stepAmount) * $this->numberOfRewardPointsToEarnPerStep;
    }

}
