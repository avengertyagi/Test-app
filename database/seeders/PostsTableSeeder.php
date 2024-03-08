<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $userIds = DB::table('users')->pluck('id')->toArray();

        // for ($i = 0; $i < 10; $i++) {
        //     DB::table('posts')->insert([
        //         'title' => $faker->sentence,
        //         'content' => $faker->paragraph,
        //         'image' => $faker->imageUrl($width = 640, $height = 480),
        //         'user_id' => $faker->randomElement($userIds),
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ]);
        // }

        $blog_posts = array(
            array(
                "title" => "The Power of Positive Thinking",
                "content" => "Positive thinking can lead to a happier and more fulfilling life...",
                "image" => $faker->imageUrl($width = 640, $height = 480),
                "user_id" => $faker->randomElement($userIds),
                "created_at" => "2024-02-10 09:00:00",
                "updated_at" => "2024-02-10 09:15:00"
            ),
            array(
                "title" => "10 Healthy Habits for a Better Lifestyle",
                "content" => "Developing healthy habits can improve both physical and mental well-being...",
                "image" => $faker->imageUrl($width = 640, $height = 480),
                "user_id" => $faker->randomElement($userIds),
                "created_at" => "2024-02-12 11:30:00",
                "updated_at" => "2024-02-12 11:45:00"
            ),
            array(
                "title" => "The Future of Renewable Energy",
                "content" => "Renewable energy sources are poised to play a major role in the future of energy production...",
                "image" => $faker->imageUrl($width = 640, $height = 480),
                "user_id" => $faker->randomElement($userIds),
                "created_at" => "2024-02-15 14:00:00",
                "updated_at" => "2024-02-15 14:15:00"
            ),
            array(
                "title" => "Unlocking Creativity: Tips for Overcoming Writer's Block",
                "content" => "Writer's block can be frustrating, but there are strategies to overcome it...",
                "image" => $faker->imageUrl($width = 640, $height = 480),
                "user_id" => $faker->randomElement($userIds),
                "created_at" => "2024-02-18 16:45:00",
                "updated_at" => "2024-02-18 17:00:00"
            ),
            array(
                "title" => "The Benefits of Regular Exercise",
                "content" => "Regular exercise can improve physical health, mood, and cognitive function...",
                "image" => $faker->imageUrl($width = 640, $height = 480),
                "user_id" => $faker->randomElement($userIds),
                "created_at" => "2024-02-20 10:00:00",
                "updated_at" => "2024-02-20 10:15:00"
            ),
            array(
                "title" => "Exploring the World of Virtual Reality",
                "content" => "Virtual reality technology is transforming various industries...",
                "image" => $faker->imageUrl($width = 640, $height = 480),
                "user_id" => $faker->randomElement($userIds),
                "created_at" => "2024-02-22 12:30:00",
                "updated_at" => "2024-02-22 12:45:00"
            ),
            array(
                "title" => "The Importance of Sleep for Mental Health",
                "content" => "Adequate sleep is crucial for maintaining optimal mental health...",
                "image" => $faker->imageUrl($width = 640, $height = 480),
                "user_id" => $faker->randomElement($userIds),
                "created_at" => "2024-02-25 08:15:00",
                "updated_at" => "2024-02-25 08:30:00"
            ),
            array(
                "title" => "10 Easy Ways to Reduce Stress",
                "content" => "Stress management techniques can help improve overall well-being...",
                "image" => $faker->imageUrl($width = 640, $height = 480),
                "user_id" => $faker->randomElement($userIds),
                "created_at" => "2024-02-27 13:00:00",
                "updated_at" => "2024-02-27 13:15:00"
            ),
            array(
                "title" => "The Impact of Social Media on Society",
                "content" => "Social media platforms have both positive and negative effects on society...",
                "image" => $faker->imageUrl($width = 640, $height = 480),
                "user_id" => $faker->randomElement($userIds),
                "created_at" => "2024-02-29 16:30:00",
                "updated_at" => "2024-02-29 16:45:00"
            ),
            array(
                "title" => "How to Start a Successful Online Business",
                "content" => "Tips and strategies for launching and growing an online business...",
                "image" => $faker->imageUrl($width = 640, $height = 480),
                "user_id" => $faker->randomElement($userIds),
                "created_at" => "2024-03-02 09:45:00",
                "updated_at" => "2024-03-02 10:00:00"
            )
        );

        DB::table('posts')->insert($blog_posts);
    }
}
