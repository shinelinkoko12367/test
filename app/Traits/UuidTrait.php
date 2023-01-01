<?php

namespace App\Traits;
use Illuminate\Support\Str;

trait UuidTrait
{
    public function generate()
    {
        return Str::uuid()->string();
    }
}