<?php
namespace App\Traits;

use Illuminate\Support\Str;

trait HasUuid
{
    public function getRouteKeyName(): string
    {
        return 'uuid';
    }

    static function bootHasUuid()
    {
        static::reating(function($model){
            $model->uuid = self::generateUuid();
        });
    }

    static function generateUuid(): string
    {
        $uuid = Str::uuid();
        while (self::findByUuid($uuid) !== null){
            $uuid = Str::uuid();
        }
        return $uuid;
    }
    static function findByUuid(string $uuid)
    {
        return self::whereUuid($uuid)->first() ?? null;
    }

}