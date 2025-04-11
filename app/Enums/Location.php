<?php

namespace app\Enums;

/**
 * Physical locations that content can be located in
 */
enum Location: string
{
    case RoomA = 'Room A';
    // Future rooms added here
    case Zone1 = 'Zone 1';
    // Future zones added here
    case Library = 'Library';
    // Additional locations added here
}
