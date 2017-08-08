<?php

namespace App;


class Todo extends Model
{
    public function user() {
        return $this->belongsTo(User::class);
    }
}
