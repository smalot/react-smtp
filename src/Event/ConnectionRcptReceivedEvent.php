<?php

namespace SamIT\React\Smtp\Event;

use SamIT\React\Smtp\Auth\MethodInterface;
use SamIT\React\Smtp\Connection;
use Symfony\Component\EventDispatcher\Event;

/**
 * Class ConnectionRcptReceivedEvent
 * @package SamIT\React\Smtp\Event
 */
class ConnectionRcptReceivedEvent extends Event
{
    /**
     * @var Connection
     */
    protected $connection;

    /**
     * @var string
     */
    protected $mail;

    /**
     * @var string
     */
    protected $name;

    /**
     * ConnectionRcptReceivedEvent constructor.
     * @param Connection $connection
     * @param string $mail
     * @param string $name
     */
    public function __construct(Connection $connection, $mail, $name)
    {
        $this->connection = $connection;
        $this->mail = $mail;
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}
