<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Genre
 *
 * @property int $id
 * @property string $name
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Lyrics[] $lyrics
 * @property-read int|null $lyrics_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Genre newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Genre newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Genre query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Genre whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Genre whereName($value)
 * @mixin \Eloquent
 */
class Genre extends Model
{
    public function lyrics() {
        return $this->belongsToMany("App\Lyrics");
    }
}
