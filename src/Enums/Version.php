<?php

namespace NuSphere\Gw2RestApi\Enums;

enum Version: string
{
    case None = 'None';
    case PlayForFree = 'PlayForFree';
    case GuildWars2 = 'GuildWars2';
    case HearthOfThorns = 'HeartOfThorns';
    case PathOfFire = 'PathOfFire';
    case EndOfDragons = 'EndOfDragons';
}
