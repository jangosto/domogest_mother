<?php

namespace Domain\Model\Device;

class DeviceCriteria
{
    private ?string $type = null;
    private ?string $provider = null;

    public function filterByType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function filterByProvider(string $provider): self
    {
        $this->provider = $provider;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function getProvider(): ?string
    {
        return $this->provider;
    }
}
