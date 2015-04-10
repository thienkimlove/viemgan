<?php namespace App;

use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Webpatser\Uuid\Uuid;

class Category extends Model implements SluggableInterface {

    use SluggableTrait;

    protected $sluggable = array(
        'build_from' => 'name',
        'save_to'    => 'slug',
    );

	protected $fillable = ['name', 'parent_id', 'template', 'slug'];


    protected $appends = ['sub_count'];

    /**
     * When title change then slug will change.
     * @param $name
     * @internal param $title
     */
  /*  public function setNameAttribute($name)
    {
        $this->attributes['name'] = $name;
        $slug =  Str::limit( Str::slug($name), 32, '');
        if ($this->where('slug', $slug)->first()) {
            $slug =  Str::limit( Str::slug($name.' '.Uuid::generate()), 32, '');
        }
        $this->attributes['slug'] = $slug;
    }*/

    /**
     * parent of this category
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function parent()
    {
        return $this->belongsTo('App\Category', 'parent_id', 'id');
    }

    /**
     * sub of this category
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function subCategories()
    {
        return $this->hasMany('App\Category', 'parent_id', 'id');

    }
    /**
     * category have many posts.
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function posts()
    {
       return $this->hasMany('App\Post');
    }

    /**
     * category have many posts.
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function latestThreePosts()
    {
        return $this->hasMany('App\Post')->latest()->limit(3);
    }

    /**
     * three post in homepage.
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function homePageLatestThreePosts()
    {
        return $this->hasMany('App\Post')->hot(true)->limit(3);
    }
}
