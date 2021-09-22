<?php

namespace App\Traits;

use Illuminate\Support\Arr;

trait AcceptsFiles
{
    /*
     * If specified, the component will fill out the "accept" property depending on
     * which type is requested.
     */
    public $type;

    public function accepts()
    {
        $data = [
            'audio' => 'audio/*',
            'image' => 'image/*',
            'video' => 'video/*',
            'pdf' => '.pdf',
            'csv' => '.csv',
            'spreadsheet', 'excel' => '.csv,application/vnd.ms-excel,application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
            'text' => 'text/plain',
            'html' => 'text/html',
        ];

        return Arr::exists($data, $this->type) ? $data[$this->type] : null;
}
}
