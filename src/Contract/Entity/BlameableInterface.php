<?php

declare(strict_types=1);

namespace Knp\DoctrineBehaviors\Contract\Entity;

interface BlameableInterface
{
    public function setCreatedBy(object|int|string|null $user): void;

    public function setUpdatedBy(object|int|string|null $user): void;

    public function setDeletedBy(object|int|string|null $user): void;

    public function getCreatedBy(): object|int|string|null;

    public function getUpdatedBy(): object|int|string|null;

    public function getDeletedBy(): object|int|string|null;
}