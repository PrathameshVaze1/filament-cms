<?php

namespace App;

use Filament\Support\Contracts\HasLabel;

enum PublishStatus: string implements HasLabel
{
    case Published = 'Published';
    case UnPublished = 'Unpublished';

    public function getLabel(): ?string
    {
        return $this->name;
    }
}
