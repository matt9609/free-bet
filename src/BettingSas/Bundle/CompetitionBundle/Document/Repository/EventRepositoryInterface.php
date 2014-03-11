<?php

namespace BettingSas\Bundle\CompetitionBundle\Document\Repository;

/**
 * Description of EventRepositoryInterface
 *
 * @author jobou
 */
interface EventRepositoryInterface
{
    /**
     * Find all events which has ended (the end score is known and
     * have not been processed yet)
     */
    public function findAllEndedAndNotProcessedEvent();
}
