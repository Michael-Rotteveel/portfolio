<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    public function content(){
        return $this->BelongsToMany('App\Content', 'page_content', 'page_id', 'content_id');
    }

}
