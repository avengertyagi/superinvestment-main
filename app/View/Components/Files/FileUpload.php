<?php

declare(strict_types=1);

namespace App\View\Components\Files;

use App\Traits\AcceptsFiles;
use App\Traits\HandlesValidationErrors;
use Illuminate\Support\Str;
use Illuminate\View\Component;

class FileUpload extends Component
{
    use HandlesValidationErrors;
    use AcceptsFiles;

    protected static array $assets = ['alpine'];
    public $extraAttributes = '';
    public $id = null;

    protected $canShowUploadProgress = null;

    public $multiple;

    public $displayUploadProgress;

    public $label;

    public $name;

    public function __construct(
        $name = null,
        null|string $id = null,
        $label = 'form-components::messages.file_upload_label',
        $multiple = false,
        $type = null,
        // Display the file upload progress if using livewire.
        // Only applies if a "wire:model" attribute is set.
        $displayUploadProgress = true,
        $showErrors = true,
        $extraAttributes = ''
    ) {
        $this->id = $id;
        $this->extraAttributes = $extraAttributes;
        $this->id = $this->id ?? $this->name;
        $this->showErrors = $showErrors;
        $this->type = $type;

        $this->label = __($label);
    }



public function canShowUploadProgress($attributes): bool
{
    if (! is_null($this->canShowUploadProgress)) {
        return $this->canShowUploadProgress;
    }

    if (! $this->displayUploadProgress) {
        return $this->canShowUploadProgress = false;
    }

    if (! $attributes->hasStartsWith('wire:model')) {
        return $this->canShowUploadProgress = false;
    }

    return $this->canShowUploadProgress = true;
}

public function render()
{
    return view('components.files.file-upload');
}
}
