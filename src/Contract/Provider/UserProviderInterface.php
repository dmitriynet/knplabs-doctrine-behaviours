<?php

declare(strict_types=1);

namespace Knp\DoctrineBehaviors\Contract\Provider;

interface UserProviderInterface
{
    public function provideUser(): object|string|null;

    public function provideUserEntity(): ?string;
}
