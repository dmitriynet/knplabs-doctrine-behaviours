<?php

declare(strict_types=1);

namespace Knp\DoctrineBehaviors\Model\Blameable;

trait BlameableMethodsTrait
{
    public function setCreatedBy(object|int|string|null $user): void
    {
        $this->createdBy = $user;
    }

    public function setUpdatedBy(object|int|string|null $user): void
    {
        $this->updatedBy = $user;
    }

    public function setDeletedBy(object|int|string|null $user): void
    {
        $this->deletedBy = $user;
    }

    public function getCreatedBy(): object|int|string|null
    {
        return $this->createdBy;
    }

    public function getUpdatedBy(): object|int|string|null
    {
        return $this->updatedBy;
    }

    public function getDeletedBy(): object|int|string|null
    {
        return $this->deletedBy;
    }
}
