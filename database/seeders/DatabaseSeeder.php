<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Post;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //User::factory(10000)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Uztaisi Post

        Post::factory()->create([
            "title" => "My first blog post",
            "category_id" => 1,
        ]);
    }
}


// Jāuztaisa Post modelis
// ar migrāciju:
//    - title
//    - category_id







// Laravel ORM noteikumu








// 1. Tu pats neko nemaini datubāzē










// 2. Tu modeļa nosaukumu raksti
//    ar Lielo burtu vienskaitlī











// 3. Migrācijā, tabulā Laravel
//    izveidot mazo sākumburtu un
//    daudzskaitli