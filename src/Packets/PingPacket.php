<?php
/**
 * Minecraft Status Query Query
 *
 * @link        https://github.com/PServerYT/Minecraft-Status-Query-PHP
 * @author      Ben Oliver Mallow <admin@service-pcube.net>
 * @copyright   Copyright (c) 2023 Ben OliverMallow
 * @license     https://github.com/PServerYT/Minecraft-Status-Query-PHP/blob/main/LICENSE
 */
namespace MinecraftServerStatus\Packets;

class PingPacket extends Packet {

    public function __construct () {
        parent::__construct(0);
    }
}