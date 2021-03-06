<?php

namespace Emonkak\Database\Tests;

use Emonkak\Database\PDO;

/**
 * @covers \Emonkak\Database\PDOStatement
 */
class PDOStatementTest extends AbstractPDOStatementTest
{
    protected function preparePdo()
    {
        return new PDO('sqlite::memory:', null, null, [
            \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
        ]);
    }
}
