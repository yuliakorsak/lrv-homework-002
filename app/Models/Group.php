<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $table = 'groups';

    protected $fillable = [
        'title', // Название группы
        'start_from', // Дата начала обучения
        'is_active', // Начала ли группа своё обучение
    ];

    public function students()
    {
        return $this->hasMany(Student::class);
    }
}
