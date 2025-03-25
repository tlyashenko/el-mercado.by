<?php

namespace App\Modules\Settings\Services;

use App\Modules\Settings\Enums\OptionEnum;
use App\Modules\Settings\Repositories\SettingsRepository;
use Illuminate\Database\Eloquent\Collection;

class SettingsService
{
    public function __construct(private readonly SettingsRepository $settingsRepository) {}

    private array|Collection $_cached = [];

    public function getSettings(): Collection|array
    {
        return $this->settingsRepository->getSettings();
    }

    public function getOption(OptionEnum $option)
    {
        if (!$this->_cached)
            $this->_cached = $this->getSettings();

        return $this->_cached->firstWhere('option', $option)?->value;
    }
}
