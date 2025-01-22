<?php

namespace Qualitas\AfricaQsheForum\Tests;

use PHPUnit\Framework\TestCase;
use Qualitas\AfricaQsheForum\Database;
use PDO;

class DatabaseTest extends TestCase
{
    public function testDatabaseConnection()
    {
        $database = Database::getInstance();
        $connection = $database->getConnection();

        $this->assertInstanceOf(PDO::class, $connection);
    }
}
