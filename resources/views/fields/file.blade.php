@if ($field->show_label)
    <div class="mb-1">
        <label for="{{ $field->id }}" class="block text-sm font-medium text-gray-700">
            {{ $field->label }}
        </label>
    </div>
@endif

<div>
    <input
        id="{{ $field->id }}"
        name="{{ $field->id }}"
        type="file"
        wire:model.{{ $field->wire_model_modifier }}="{{ $field->key }}"
        @if ($field->multiple) multiple @endif

        @if (! $errors->has($field->key))
            class="block w-full"
        @else
            class="block w-full text-red-800"
            aria-invalid="true"
            aria-describedby="{{ $field->id }}-error"
        @endif

    />
</div>

@include($this->component->getView('error'))
