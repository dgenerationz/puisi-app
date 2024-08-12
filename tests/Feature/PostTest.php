<?php

namespace Tests\Feature;

use App\Models\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostTest extends TestCase
{
    
    public function testPostCreate(){

        $post = new Post();
        $post->title = "Judul Pertama";
        $post->category_id = 6;
        $post->slug = "judul-pertama";
        $post->excerpt = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores doloribus fugiat.";
        $post->body =  "Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores doloribus fugiat, impedit id velit quam eos quis omnis maxime dicta temporibus explicabo voluptatum aspernatur, quas iste aliquid illo, illum sapiente harum quae similique vel dolorem ad! Consectetur doloribus quaerat ex exercitationem vero voluptate, praesentium, dignissimos, placeat incidunt fugit aperiam dolor dolores itaque dicta. Commodi totam corporis hic quis maiores eum asperiores, enim qui eligendi provident cum a aut modi consectetur nihil ipsa dolorum. Aliquam non cumque iusto hic reiciendis ab, praesentium laudantium blanditiis, consequatur delectus nihil? Cum enim aperiam commodi! Rem fuga eveniet quos sapiente incidunt impedit accusamus eos dolores.";
        $result = $post->save();
        self::assertTrue($result);

        $post = new Post();
        $post->title = "Judul Kedua";
        $post->category_id = 7;
        $post->slug = "judul-kedua";
        $post->excerpt = "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Commodi corporis impedit quaerat at quae sit fugiat, exercitationem eveniet eius voluptatum ad distinctio atque quod eos nihil.";
        $post->body = "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Commodi corporis impedit quaerat at quae sit fugiat, exercitationem eveniet eius voluptatum ad distinctio atque quod eos nihil. Aliquam corporis eaque, neque aliquid dolore sed error quae quaerat illum ab quisquam ullam fuga esse ipsa aperiam commodi aut a rem dolores itaque.";
        $result = $post->save();
        self::assertTrue($result);

        $post = new Post();
        $post->title = "Judul Post Ke Tiga";
        $post->category_id = 8;
        $post->slug = "judul-ketiga";
        $post->excerpt = "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Pariatur quo beatae eligendi saepe voluptatibus ipsam ducimus repudiandae corrupti odio";
        $post->body = "<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Pariatur quo beatae eligendi saepe voluptatibus ipsam ducimus repudiandae corrupti odio debitis explicabo, ratione eius exercitationem aliquid sapiente voluptatem maiores aspernatur? Illum recusandae, ratione nam officia amet quasi assumenda enim possimus quibusdam eum a repellendus nihil laboriosam temporibus sunt numquam aliquid, tenetur maiores vero. Voluptatum voluptate iusto eveniet porro provident expedita exercitationem praesentium consequatur vitae aspernatur omnis, nulla nisi laboriosam magni nobis tenetur asperiores suscipit quaerat aut ipsum eos vel nemo non. Molestias blanditiis dolore modi dignissimos itaque nam maxime a autem veniam quas eveniet tenetur error impedit, omnis eligendi fugit quia quae voluptate, perferendis obcaecati quis? Dolorum veniam soluta pariatur dolores ipsa. Accusamus vel culpa fugiat nobis eligendi, sed dolorum officia!</p> <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusamus officia quo dicta perferendis? Odio id nesciunt totam, nam praesentium quas dolorum voluptas quisquam ex officiis voluptate illum tempora quasi aliquam quaerat omnis aperiam. Fugiat vitae neque sequi suscipit aliquam! Similique suscipit sunt nulla consectetur ex laboriosam dignissimos repellendus minus tempore.</p>";
        $result = $post->save();
        self::assertTrue($result);

        // Post::create([
        //     "title" => "Judul ke Empat",
        //     "slug" => "judul-keempat",
        //     "excerpt" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia illo aliquid voluptas inventore cumque sapiente sunt maiores asperiores fugit nulla voluptatem totam nam tenetur tempore quibusdam consequuntur doloribus soluta dolores a unde minima.",
        //     "body" => "<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia illo aliquid voluptas inventore cumque sapiente sunt maiores asperiores fugit nulla voluptatem totam nam tenetur tempore quibusdam consequuntur doloribus soluta dolores a unde minima. </p> <p> adipisci, dolorum doloremque fuga. Tempore doloremque, vero nostrum alias, doloribus voluptatum blanditiis sint fuga culpa tenetur ipsam. Ratione recusandae iste laudantium ipsa. Velit placeat, error quam ducimus eos ullam voluptatem ex corporis est corrupti minus laborum aliquam ab ut, consequuntur provident expedita quaerat. Doloremque asperiores nobis facilis tempora, ut fugit aspernatur necessitatibus officia ducimus ad consectetur earum veritatis expedita doloribus nam magnam maxime culpa saepe, rerum ex voluptas! Ex voluptatem minus aspernatur. Quis dolorum, ducimus similique, </p> <p> rem asperiores qui dicta culpa possimus ea ipsa quod itaque, molestias quasi id. Sapiente ullam maxime, eius incidunt aspernatur error tenetur tempora non maiores doloremque, eveniet cumque repellat unde, sed amet nobis alias quos quaerat ipsam suscipit dolorem. Totam, ex ratione.</p>",
        // ]);

        // Post::create([
        //     "title" => "Judul ke Lima",
        //     "slug" => "judul-kelima",
        //     "excerpt" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia illo aliquid voluptas inventore cumque sapiente sunt maiores asperiores fugit nulla voluptatem totam nam tenetur tempore quibusdam consequuntur doloribus soluta dolores a unde minima.",
        //     "body" => "<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia illo aliquid voluptas inventore cumque sapiente sunt maiores asperiores fugit nulla voluptatem totam nam tenetur tempore quibusdam consequuntur doloribus soluta dolores a unde minima. </p> <p> adipisci, dolorum doloremque fuga. Tempore doloremque, vero nostrum alias, doloribus voluptatum blanditiis sint fuga culpa tenetur ipsam. Ratione recusandae iste laudantium ipsa. Velit placeat, error quam ducimus eos ullam voluptatem ex corporis est corrupti minus laborum aliquam ab ut, consequuntur provident expedita quaerat. Doloremque asperiores nobis facilis tempora, ut fugit aspernatur necessitatibus officia ducimus ad consectetur earum veritatis expedita doloribus nam magnam maxime culpa saepe, rerum ex voluptas! Ex voluptatem minus aspernatur. Quis dolorum, ducimus similique, </p> <p> rem asperiores qui dicta culpa possimus ea ipsa quod itaque, molestias quasi id. Sapiente ullam maxime, eius incidunt aspernatur error tenetur tempora non maiores doloremque, eveniet cumque repellat unde, sed amet nobis alias quos quaerat ipsam suscipit dolorem. Totam, ex ratione.</p>",
        // ]);

        // dd(Post::pluck('title'));

    }

    // public function testPostFind(){

    //     // $post = Post::query()->find(115)->update(["title" => "Judul ke Tiga Berubah"]);
    //     // self::assertTrue($post);

    //     $post = Post::where('title', 'Judul ke Tiga Berubah')->update(["excerpt" => "Excerpt post 3 berubah"]);
    //     self::assertNotNull($post);
        
    // }

}
