<?php

namespace App\Users;

use Core\DataHolder;

class User extends DataHolder
{

    const ROLE_ADMIN = 0;
    const ROLE_USER = 1;

    protected function getRole()
    {
        return $this->role ?? null;
    }

    protected function setRole(int $role)
    {
        $this->role = $role;
    }

    protected function setUsername(string $value): void
    {
        $this->userName = $value;
    }

    protected function getUsername(): ?string
    {
        return $this->userName ?? null;
    }

    protected function setEmail(string $value): void
    {
        $this->email = $value;
    }

    /**
     * @return string|null
     */
    protected function getEmail(): ?string
    {
        return $this->email ?? null;
    }

    protected function setPassword(string $value): void
    {
        $this->password = $value;
    }

    protected function getPassword(): ?string
    {
        return $this->password ?? null;
    }

    protected function getId()
    {
        return $this->id ?? null;
    }

    protected function setId(int $id)
    {
        $this->id = $id;
    }

}