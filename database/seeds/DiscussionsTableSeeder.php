<?php

use Illuminate\Database\Seeder;

use App\Discussion;
class DiscussionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $t1 = 'Implementing OAUTH2 With Laravel Passport';
        $t2 = 'Pagination In Vuejs Not Working Correctly';
        $t3 = 'Vuejs event Listeners For Child Components';
        $t4 = 'Laravel Homestead error - undetected database';


        $d1 = [

        	'title' 	 => $t1,
        	'content'	 => 'faskhasvhkfhkas bashbfashbhfasfbkasb khfkashbkfbaskhfbkhsabfkhasbkhfbaskbfkasbfbaskhfbkhasbfbaskhfbhkasbhfkasbkfbaskhfbhaskbfkashbfkashbfkhsb',
        	'channel_id' => 1,
        	'user_id' 	 => 1,
        	'slug' 		 => str_slug($t1)
        ];

        $d2 = [

        	'title' 	 => $t2,
        	'content'	 => 'faskhasvhkfhkas bashbfashbhfasfbkasb khfkashbkfbaskhfbkhsabfkhasbkhfbaskbfkasbfbaskhfbkhasbfbaskhfbhkasbhfkasbkfbaskhfbhaskbfkashbfkashbfkhsb',
        	'channel_id' => 2,
        	'user_id' 	 => 2,
        	'slug' 		 => str_slug($t2)
        ];

        $d3 = [

        	'title' 	 => $t3,
        	'content'	 => 'faskhasvhkfhkas bashbfashbhfasfbkasb khfkashbkfbaskhfbkhsabfkhasbkhfbaskbfkasbfbaskhfbkhasbfbaskhfbhkasbhfkasbkfbaskhfbhaskbfkashbfkashbfkhsb',
        	'channel_id' => 5,
        	'user_id' 	 => 2,
        	'slug' 		 => str_slug($t3)
        ];

        $d4 = [

        	'title' 	 => $t4,
        	'content'	 => 'faskhasvhkfhkas bashbfashbhfasfbkasb khfkashbkfbaskhfbkhsabfkhasbkhfbaskbfkasbfbaskhfbkhasbfbaskhfbhkasbhfkasbkfbaskhfbhaskbfkashbfkashbfkhsb',
        	'channel_id' => 7,
        	'user_id' 	 => 1,
        	'slug' 		 => str_slug($t4)
        ];

        Discussion::create($d1);
        Discussion::create($d2);
        Discussion::create($d3);
        Discussion::create($d4);
    }
}
