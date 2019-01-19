<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testimony extends Model
{
    /**
     * Undocumented variable
     *
     * @var string
     */
    protected $table = 'testimony';
    /**
     * Undocumented variable
     *
     * @var array
     */
    protected $fillable = ['username', 'testimony', 'location'];
}
