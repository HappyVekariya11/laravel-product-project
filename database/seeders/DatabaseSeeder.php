<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use App\Models\User;
use App\Models\Category;
use App\Models\Dosa;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {    //for any 10 records entry  
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
      
        Schema::disableForeignKeyConstraints();
        Dosa::truncate();
        User::truncate();
        Category::truncate();
        
        Schema::enableForeignKeyConstraints();
        
       //for same user for all data
        $user=User::factory()->create([
            'name'=>'john doe'
        ]);


        //for randome value of dosa
        Dosa::factory(15)->create([
            'user_id'=>$user->id
        ]);

    //     $user=User::factory()->create();

    //    $personal= Category::create([
    //         'name'=>'Personal',
    //         'slug'=>'personal'
    //     ]);
        
    //     $family=Category::create([
    //         'name'=>'Family',
    //         'slug'=>'family'
    //     ]);
        
          
    //     $work=Category::create([
    //         'name'=>'Work',
    //         'slug'=>'work'
    //     ]);
 


    //     Dosa::create([
    //         'user_id'=>$user->id,
    //         'category_id'=>$personal->id,
    //         'title'=> 'My Personal Post',
    //         'slug'=> 'my-personal-post',
    //         'excerpt'=>'We may have our differences, but nothing’s more important than family.',
    //         'body'=>'We may have our differences, but nothing’s more important than family.'
        

    //     ]);





        // Dosa::create([
        //     'user_id'=>$user->id,
        //     'category_id'=>$family->id,
        //     'title'=> 'My Family Post',
        //     'slug'=> 'my-family-post',
        //     'excerpt'=>'We may have our differences, but nothing’s more important than family.',
        //     'body'=>'We may have our differences, but nothing’s more important than family.'
        

        // ]);


        // Dosa::create([
        //     'user_id'=>$user->id,
        //     'category_id'=>$work->id,
        //     'title'=> 'My Work Post',
        //     'slug'=> 'my-work-post',
        //     'excerpt'=>'We may have our differences, but nothing’s more important than family.',
        //     'body'=>'We may have our differences, but nothing’s more important than family.'
        

        // ]);
    }
}
