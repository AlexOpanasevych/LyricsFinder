<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Lyrics
 *
 * @property int $id
 * @property string $name
 * @property string $text
 * @property \Illuminate\Database\Eloquent\Collection|\App\Author[] $author
 * @property string $musician
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read int|null $author_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Genre[] $genre
 * @property-read int|null $genre_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Lyrics newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Lyrics newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Lyrics query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Lyrics whereAuthor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Lyrics whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Lyrics whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Lyrics whereMusician($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Lyrics whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Lyrics whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Lyrics whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Lyrics extends Model
{
    public $id;
    public $text;
    public $author;
    public $musician;
    public $name;

    public function author() {
        return $this->hasMany('App\Author');
    }

    public function genre() {
        return $this->hasMany('App\Genre');
    }


}
