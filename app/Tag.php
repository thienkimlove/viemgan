<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model {

    protected $fillable = ['name'];

    /**
     * get the posts associated with tag
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function posts()
    {
        return $this->belongsToMany('App\Post');
    }

}
