<?php

declare(strict_types=1);

namespace Knp\DoctrineBehaviors\Model\Blameable;

trait BlameablePropertiesTrait
{
    protected string|int|object|null $createdBy = null;
    protected string|int|object|null $updatedBy = null;
    protected string|int|object|null $deletedBy = null;
}
