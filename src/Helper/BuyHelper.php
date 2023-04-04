<?php

namespace App\Helper;

use App\Entity\Buy;
use App\Entity\Game;
use App\Entity\Ticket;
use App\Entity\User;

class BuyHelper
{
    static function getTotalPayment($array)
    {
        $total = 0;
        /**
         * @var Ticket $ticket
         */
        foreach ($array as $key => $ticket) $total = $total + $ticket->getAmountPaid();
        return $total;

    }
}