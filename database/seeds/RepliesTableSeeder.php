<?php

use Illuminate\Database\Seeder;

use App\Reply;
class RepliesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $r1 = [

        	'user_id' 		=> 1,
        	'discussion_id' => 1,
        	'content'		=> 'bashbfashbhfasfbkasb khfkashbkfbaskhfbkhsabfkhas bkhfbaskbfkasbfbaskhfbkha sbfbaskhfbhkasbhfkasbkfbaskhfbhaskbfka shbfkashbfkhsb'
        ];

        $r2 = [

        	'user_id' 		=> 2,
        	'discussion_id' => 2,
        	'content'		=> 'bashbfashbhfasfbkasb khfkashbkfbaskhfbkhsabfkhas bkhfbaskbfkasbfbaskhfbkha sbfbaskhfbhkasbhfkasbkfbaskhfbhaskbfka shbfkashbfkhsb'
        ];

        $r3 = [

        	'user_id' 		=> 1,
        	'discussion_id' => 3,
        	'content'		=> 'bashbfashbhfasfbkasb khfkashbkfbaskhfbkhsabfkhas bkhfbaskbfkasbfbaskhfbkha sbfbaskhfbhkasbhfkasbkfbaskhfbhaskbfka shbfkashbfkhsb'
        ];

        $r4 = [

        	'user_id' 		=> 2,
        	'discussion_id' => 4,
        	'content'		=> 'bashbfashbhfasfbkasb khfkashbkfbaskhfbkhsabfkhas bkhfbaskbfkasbfbaskhfbkha sbfbaskhfbhkasbhfkasbkfbaskhfbhaskbfka shbfkashbfkhsb'
        ];

        Reply::create($r1);
        Reply::create($r2);
        Reply::create($r3);
        Reply::create($r4);
    }
}
