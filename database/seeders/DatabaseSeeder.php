<?php

namespace Database\Seeders;

use App\Models\answers;
use App\Models\mini_game_answers;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        answers::create([
            'answer'=>'"a","p","p","l","e"'
        ]);
        answers::create([
            'answer'=>'"s","w","o","r","d"'
        ]);
        answers::create([
            'answer'=>'"a","n","i","m","a","l"'
        ]);
        answers::create([
            'answer'=>'"r","e","d"'
        ]);
        answers::create([
            'answer'=>'"a","n","d"'
        ]);
        answers::create([
            'answer'=>'"m","o","t","h","e","r"'
        ]);
        answers::create([
            'answer'=>'"f","a","t","h","e","r"'
        ]);
        answers::create([
            'answer'=>'"b","a","n","a","n,","a"'
        ]);
        answers::create([
            'answer'=>'"c","h","e","r","r","y"'
        ]);
        answers::create([
            'answer' => '"d", "r", "a", "g", "o", "n", "f", "r", "u", "i", "t"'
        ]);
        
        answers::create([
            'answer' => '"e", "l", "d", "e", "r", "b", "e", "r", "r", "y"'
        ]);
        
        answers::create([
            'answer' => '"f", "i", "g"'
        ]);
        
        answers::create([
            'answer' => '"g", "r", "a", "p", "e"'
        ]);
        
        answers::create([
            'answer' => '"k", "i", "w", "i"'
        ]);
        
        answers::create([
            'answer' => '"l", "e", "m", "o", "n"'
        ]);
        
        answers::create([
            'answer' => '"m", "a", "n", "g", "o"'
        ]);
        
        answers::create([
            'answer' => '"n", "e", "c", "t", "a", "r", "i", "n", "e"'
        ]);
        
        answers::create([
            'answer' => '"o", "r", "a", "n", "g", "e"'
        ]);
        
        answers::create([
            'answer' => '"p", "a", "p", "a", "y", "a"'
        ]);
        
        answers::create([
            'answer' => '"q", "u", "i", "n", "c", "e"'
        ]);
        
        answers::create([
            'answer' => '"r", "a", "s", "p", "b", "e", "r", "r", "y"'
        ]);
        
        answers::create([
            'answer' => '"s", "t", "r", "a", "w", "b", "e", "r", "r", "y"'
        ]);
        
        answers::create([
            'answer' => '"t", "a", "n", "g", "e", "r", "i", "n", "e"'
        ]);
        
        answers::create([
            'answer' => '"w", "a", "t", "e", "r", "m", "e", "l", "o", "n"'
        ]);
        
        answers::create([
            'answer' => '"b", "l", "u", "e", "b", "e", "r", "r", "y"'
        ]);
        
        answers::create([
            'answer' => '"b", "l", "a", "c", "k", "b", "e", "r", "r", "y"'
        ]);
        
        answers::create([
            'answer' => '"p", "i", "n", "e", "a", "p", "p", "l", "e"'
        ]);
        
        answers::create([
            'answer' => '"a", "p", "r", "i", "c", "o", "t"'
        ]);
        
        answers::create([
            'answer' => '"c", "a", "n", "t", "a", "l", "o", "u", "p", "e"'
        ]);
        
        answers::create([
            'answer' => '"p", "o", "m", "e", "g", "r", "a", "n", "a", "t", "e"'
        ]);
        
        answers::create([
            'answer' => '"p", "e", "r", "s", "i", "m", "m", "o", "n"'
        ]);
        
        answers::create([
            'answer' => '"p", "l", "u", "m"'
        ]);
        
        answers::create([
            'answer' => '"p", "e", "a", "c", "h"'
        ]);
        
        answers::create([
            'answer' => '"c", "o", "c", "o", "n", "u", "t"'
        ]);
        
        answers::create([
            'answer' => '"c", "r", "a", "n", "b", "e", "r", "r", "y"'
        ]);
        
        answers::create([
            'answer' => '"g", "o", "o", "s", "e", "b", "e", "r", "r", "y"'
        ]);
        
        answers::create([
            'answer' => '"g", "u", "a", "v", "a"'
        ]);
        
        answers::create([
            'answer' => '"l", "y", "c", "h", "e", "e"'
        ]);
        
        answers::create([
            'answer' => '"m", "a", "n", "d", "a", "r", "i", "n"'
        ]);
        
        answers::create([
            'answer' => '"m", "u", "l", "b", "e", "r", "r", "y"'
        ]);
        
        answers::create([
            'answer' => '"p", "a", "s", "s", "i", "o", "n", "f", "r", "u", "i", "t"'
        ]);
        
        answers::create([
            'answer' => '"s", "t", "a", "r", "f", "r", "u", "i", "t"'
        ]);
        
        answers::create([
            'answer' => '"g", "r", "a", "p", "e", "f", "r", "u", "i", "t"'
        ]);
        
        answers::create([
            'answer' => '"j", "a", "c", "k", "f", "r", "u", "i", "t"'
        ]);
        
        answers::create([
            'answer' => '"l", "o", "g", "a", "n", "b", "e", "r", "r", "y"'
        ]);
        
        answers::create([
            'answer' => '"p", "e", "a", "r"'
        ]);
        
        answers::create([
            'answer' => '"s", "o", "u", "r", "s", "o", "p"'
        ]);
        
        answers::create([
            'answer' => '"k", "u", "m", "q", "u", "a", "t"'
        ]);
        
        answers::create([
            'answer' => '"d", "u", "r", "i", "a", "n"'
        ]);
        
        answers::create([
            'answer' => '"l", "o", "n", "g", "a", "n"'
        ]);
        
        answers::create([
            'answer' => '"r", "a", "m", "b", "u", "t", "a", "n"'
        ]);
        
        answers::create([
            'answer' => '"s", "a", "t", "s", "u", "m", "a"'
        ]);
        
        answers::create([
            'answer' => '"t", "a", "m", "a", "r", "i", "n", "d"'
        ]);
        
        answers::create([
            'answer' => '"p", "o", "m", "e", "l", "o"'
        ]);
        
       
    }
}
