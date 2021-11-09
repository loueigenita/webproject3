<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Book
 * @package App\Models
 * @version October 27, 2021, 7:32 am UTC
 *
 * @property string $title
 * @property string $author
 * @property string $publisher
 * @property string $publish_date
 */
class Book extends Model
{

    use HasFactory;

    public $table = 'books';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'title',
        'author',
        'publisher',
        'publish_date'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'author' => 'string',
        'publisher' => 'string',
        'publish_date' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required|string|max:75',
        'author' => 'required|string|max:100',
        'publisher' => 'required|string|max:100',
        'publish_date' => 'required|string|max:50',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];


}
