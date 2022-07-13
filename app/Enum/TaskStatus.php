<?php

namespace App\Enum;
/**
 * Class TaskStatus
 *
 * @author  <feras.bbm@gmail.com>
 * @package App\Enum
 */
enum TaskStatus: int
{
    case  UNSCHEDULED = 0;
    case COMPLETE = 1;
    case CLOSED = 2;
}
