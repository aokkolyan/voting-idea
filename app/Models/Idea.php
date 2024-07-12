<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;


class Idea extends Model
{
    use HasFactory ,Sluggable;
    
    protected $guarded = [];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function status()
    {
        return $this->belongsTo(Status::class);
    }
    public function votes()
    {
        return $this->belongsToMany(User::class,'votes');
    }
    public function getStatusClass()
    {
        $allStatuses = [
            'Open' => 'bg-gray-200',
            'Considering' => 'bg-purple text-white',
            'In Progress' => 'bg-yellow  text-white',
            'Impremented' => 'bg-green text-white',
            'Closed' => 'bg-red text-white',  // Add other status colors as needed  (e.g., 'New', 'Deferred', 'Obsolete')  and update the array accordingly.
        ];
        
        return $allStatuses[$this->status->name];

        // if($this->status->name == 'Open') {
        //     return 'bg-gray-200';
        // } elseif ($this->status->name == 'Considering') {
        //     return ' bg-purple text-white ';
        // } elseif ($this->status->name == 'In Progress') {
        //     return ' bg-yellow  text-white';
        // } elseif ($this->status->name == 'Impremented') {
        //     return ' bg-green text-white';
        // }  elseif ($this->status->name == 'Closed') {
        //     return ' bg-red text-white';
        // } 
        // return 'bg-gray-200';
        
    }
    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
