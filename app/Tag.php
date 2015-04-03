<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Webpatser\Uuid\Uuid;

class Tag extends Model {

    protected $fillable = ['name'];


    /**
     * When title change then slug will change.
     * @param $name
     * @internal param $title
     * @internal param $name
     * @internal param $title
     */
    public function setNameAttribute($name)
    {
        $this->attributes['name'] = $name;
        $slug = Str::limit( Str::slug($name), 100, '');
        if ($this->where('slug', $slug)->first()){
            $slug = Str::limit( Str::slug($name.' '.Uuid::generate()), 100, '');
        }
        $this->attributes['slug'] =  $slug;
    }

    /**
     * get the posts associated with tag
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function posts()
    {
        return $this->belongsToMany('App\Post')->latest()->paginate(10);
    }

}
