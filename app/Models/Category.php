<?php

namespace App\Models;

use App\Models\Post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    protected $guarded =['id'];

    public function Post(){
        return $this->hasMany(Post::class);
    }

   
}











// Post::create([
//     'title' =>'Judul Ke tiga',
//    'category_id' => 3,
//     'slug' =>'Judul Ke tiga',
//     'excerpt' => 'lorem judul Ke tiga',
//     'body'=> '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur asperiores fugit velit fuga sapiente architecto in est ipsum obcaecati. Nulla omnis non ullam id dignissimos magnam adipisci facere,</p><p> blanditiis, architecto eos autem repellendus temporibus voluptatibus eum quisquam quas dolore recusandae. Consectetur asperiores distinctio sunt facere quia quibusdam magni harum ad vel doloremque non corporis consequuntur reprehenderit delectus,</p><p> culpa accusamus provident at soluta aperiam ipsa quos voluptas. Dolore, ipsa dolorum harum quas tenetur hic dolor odit commodi officia animi excepturi dolorem veritatis fuga, debitis itaque consequatur enim. Obcaecati aperiam quod molestias reiciendis repellat molestiae minus officiis voluptas</p><p> perferendis tempora odit at consectetur distinctio, architecto saepe nesciunt earum eius odio mollitia explicabo labore nihil beatae? Sunt possimus voluptate laboriosam iusto. Nulla, autem?</p>'
// ])