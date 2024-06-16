<?php

declare(strict_types=1);

namespace Knp\DoctrineBehaviors\Model\Uuidable;

use Ramsey\Uuid\UuidInterface;

trait UuidablePropertiesTrait
{
    protected string|null|UuidInterface $uuid = null;
}
