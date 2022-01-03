<?php

namespace Aerni\LivewireForms\Fields;

use Aerni\LivewireForms\Facades\View;
use Aerni\LivewireForms\Fields\Field;
use Aerni\LivewireForms\Fields\Properties\WithInline;
use Aerni\LivewireForms\Fields\Properties\WithOptions;
use Aerni\LivewireForms\Fields\Properties\WithShowLabel;
use Aerni\LivewireForms\Fields\Properties\WithCastBooleans;
use Aerni\LivewireForms\Fields\Properties\WithInstructions;

class Radio extends Field
{
    use WithCastBooleans,
        WithInline,
        WithInstructions,
        WithOptions,
        WithShowLabel;

    public function viewProperty(): string
    {
        return View::get('fields.radios');
    }
}
