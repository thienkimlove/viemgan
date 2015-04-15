<?php namespace App;

use Carbon\Carbon;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Webpatser\Uuid\Uuid;

class Post extends Model implements SluggableInterface {

    use SluggableTrait;

    protected $sluggable = array(
        'build_from' => 'title',
        'save_to'    => 'slug',
    );


    protected $fillable = [
        'title',
        'desc',
        'content',
        'image',
        'category_id',
        'status',
        'hot',
        'right',
        'views',
        'likes',
        'slug',
        'right_block'
    ];

    /**
     * When title change then slug will change.
     * @param $title
     * @internal param $name
     * @internal param $title
     */
   /* public function setTitleAttribute($title)
    {
        $this->attributes['title'] = $title;
        $slug = Str::limit( Str::slug($title), 200, '');
        //check if slug exit.
        if ($this->where('slug', $slug)->first()) {
            $slug = Str::limit( Str::slug($title. ' ' . Uuid::generate()), 200, '');
        }
        $this->attributes['slug'] = $slug;
    }*/

    /**
     * post belong to one category.
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
       return $this->belongsTo('App\Category');
    }

    /**
     * like tags.
     * @param $query
     * @param $tag
     * @return mixed
     */
    public function scopeTagged($query, $tag)
    {
        if (strlen($tag) > 2) {
            $query->where('title', 'LIKE', '%'.$tag.'%');
        }
    }

    /**
     * like tags.
     * @param $query
     * @param bool $case
     * @return mixed
     * @internal param $tag
     */
    public function scopeHot($query, $case = false)
    {
       return ($case) ? $query->where('hot', true) : $query->where('right', true);
    }

    /**
     * get the tags that associated with given post
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }

    /**
     * get the list tags of current post.
     * @return mixed
     */
    public function getTagListAttribute()
    {
        return $this->tags->lists('name');
    }

    /**
     * To solve problem with return empty object and cannot using format() method on published_at.
     * @param $date
     * @return Carbon
     */
    public function getUpdatedAtAttribute($date){
        return Carbon::parse($date)->format('d-m-Y');
    }

}
