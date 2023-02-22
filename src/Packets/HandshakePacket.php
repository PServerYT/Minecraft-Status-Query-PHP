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

class HandshakePacket extends Packet {

    public function __construct ($host, $port, $protocol, $nextState) {
        parent::__construct(0);
        $this->addUnsignedChar($protocol);
        $this->addString($host);
        $this->addUnsignedShort($port);
        $this->addUnsignedChar($nextState);
    }
}