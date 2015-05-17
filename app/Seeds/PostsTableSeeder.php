<?php

/*
 * This file is part of Bootstrap CMS.
 *
 * (c) Graham Campbell <graham@mineuk.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace GrahamCampbell\BootstrapCMS\Seeds;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/**
 * This is the posts table seeder class.
 *
 * @author Graham Campbell <graham@mineuk.com>
 */
class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeding.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->truncate();

        $post = [
            'en_title'      => 'Hello World',
            'en_summary'    => 'This is the first blog post.',
            'en_body'       => 'This is an example blog post.',
            'title'      => '안녕 세상아',
            'summary'    => '첫번째 블로그 포스트.',
            'body'       => 'This is an 예시 blog post.',
            'place'       => '판교야.',
            'en_place'       => 'paannnggyoyoyoyo',
            'user_id'    => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];

        DB::table('posts')->insert($post);
    }
}
