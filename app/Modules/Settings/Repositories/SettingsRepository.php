<?php

namespace App\Modules\Settings\Repositories;

use App\Models\Settings;
use Illuminate\Database\Eloquent\Collection;

class SettingsRepository
{
    /**
     * @return Collection|Settings[]
     */
    public function getSettings(): Collection|array
    {
        return Settings::all();
    }
}
