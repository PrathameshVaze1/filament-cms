<?php

namespace App;

use Filament\Support\Contracts\HasLabel;

enum FetureStatus: string implements HasLabel
{
    case Featured = 'Featured';
    case Unfeatured = 'Not Featured';

    public function getLabel(): ?string
    {
        return $this->name;
    }
}
