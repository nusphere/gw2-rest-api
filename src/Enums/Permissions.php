<?php

namespace NuSphere\Gw2RestApi\Enums;

enum Permissions: string
{
    case tradingpost = 'tradingpost';
    case characters = 'characters';
    case pvp = 'pvp';
    case progression = 'progression';
    case wallet = 'wallet';
    case guilds = 'guilds';
    case builds = 'builds';
    case account = 'account';
    case inventories = 'inventories';
    case unlocks = 'unlocks';
}
