<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // CREATE SUPER ADMIN
        \App\Models\User::factory()->create([
            'name' => 'Hongde Admin',
            'email' => 'hongde.admin@mail.com',
            'password' => bcrypt('hongde_admin@123'),
        ]);



        // CREATE CATEGORY
        $categories = [
            [
                'id' => 1,
                'name' => 'Language Training Centers',
                'slug' => 'language-training-centers',
                'image' => 'img/category/training-centers.jpg',
                'description' => 'Provide structured programs for learning Chinese, such as YCT and HSK-based training, focusing on language proficiency, cultural immersion, and certifications.'
            ],
            [
                'id' => 2,
                'name' => 'Cultural and Educational Camps',
                'slug' => 'cultural-and-educational-camps',
                'image' => 'img/category/camps.jpg',
                'description' => 'Offer immersive experiences to learn about Chinese culture, language, and traditions through activities, language classes, and historical site visits.'
            ],
            [
                'id' => 3,
                'name' => 'Educational Support and Resources',
                'slug' => 'educational-support-and-resources',
                'image' => 'img/category/support.jpg',
                'description' => 'Includes services related to Chinese language education, such as scholarship centers, teacher certification, training, and educational material suppliers.'
            ]
        ];

        
        foreach ($categories as $category) {
            \App\Models\Category::factory()->create($category);
        }

        // CREATE PROGRAM
        $programs = [
            [
                'title' => 'HSK & YCT Based Chinese Language Training Center',
                'slug' => 'hsk-and-yct-based-chinese-language-training-center',
                'image' => 'programs/training-centers.jpg',
                'description' => "This program offers Mandarin classes based on the YCT and HSK international standards for students aged 6 years old/1st grade of elementary school to working professionals. The classes can be designed according to the students' needs, such as Mandarin for studying in China, Mandarin for work, and Mandarin for specific professions. There are 6 levels for YCT and 6 levels for HSK, with class fees starting from Rp 550,000 per month.",
                "category_id" => 1
            ],
            [
                'title' => 'HSK Test Preparation Center',
                'slug' => 'hsk-test-preparation-center',
                'image' => 'programs/training-centers.jpg',
                'description' => "This program provides special classes for preparing for the HSK international exam from level 1 to 9. The classes focus on discussing techniques and ways to work on HSK exam questions and require shorter time and lower fees compared to Mandarin classes.",
                "category_id" => 1
            ],
            [
                'title' => 'YCT Based Chinese Language Training Center',
                'slug' => 'yct-based-chinese-language-training-center',
                'image' => 'programs/training-centers.jpg',
                'description' => "This program offers Mandarin classes based on the YCT and HSK international standards for students aged 6 years old/1st grade of elementary school to working professionals. The classes can be designed according to the students' needs, such as Mandarin for studying in China, Mandarin for work, and Mandarin for specific professions. There are 6 levels for YCT and 6 levels for HSK, with class fees starting from Rp 550,000 per month.",
                "category_id" => 1
            ],
            [
                'title' => 'Summer & Winter Camp',
                'slug' => 'summer-and-winter-camp',
                'image' => 'programs/training-centers.jpg',
                'description' => "This program offers study visits to China in collaboration with the Chinese government and educational institutions. The camps are held during summer and winter holidays, around June and December. Participants can learn various Chinese cultures, taste traditional food, visit schools and museums, and participate in other cultural activities. During the study visit, participants can also take several classes taught by Chinese teachers, such as Mandarin, singing, traditional dance, handicrafts, calligraphy, and others.",
                "category_id" => 2
            ],
            [
                'title' => 'Chinese Wonderland Camp',
                'slug' => 'chinese-wonderland-camp',
                'image' => 'programs/training-centers.jpg',
                'description' => "This program invites Chinese language and culture experts from China to Indonesia to hold a cultural camp. The activities will be held in Indonesia with teachers directly from China. Participants can learn Mandarin, singing, traditional dance, handicrafts, calligraphy, and others.",
                "category_id" => 2
            ],
            [
                'title' => 'Online Chinese Cultural Camp',
                'slug' => 'online-chinese-cultural-camp',
                'image' => 'programs/training-centers.jpg',
                'description' => "In addition to the Summer & Winter Camp and Chinese Wonderland Camp held offline, Hongde College also holds an Online Chinese Cultural Camp to serve students from various regions in Indonesia. The online cultural camp offers Mandarin language learning, handicrafts, calligraphy, and others. All activities will be taught by teachers from China, and the necessary materials for learning will be sent to the participants' address.",
                "category_id" => 2
            ],
            [
                'title' => 'Scholarship Center',
                'slug' => 'scholarship-center',
                'image' => 'programs/training-centers.jpg',
                'description' => "Hongde College provides and can assist Indonesian students in applying for scholarships, especially in China. There are scholarships from Chinese Government Scholarships (CGS), Confucius Institute Scholarships (CIS), and others. Students can consult with professional teachers before applying for scholarships. Through interviews and several tests, teachers at Hongde College will provide recommendations and suitable solutions for students' study plans.",
                "category_id" => 3
            ],
            [
                'title' => 'Chinese Teacher Certification and Training Center',
                'slug' => 'chinese-teacher-certification-and-training-center',
                'image' => 'programs/training-centers.jpg',
                'description' => "Hongde College has teachers who have graduated from S1 and S1 Mandarin Teacher majors, and also have a Certificate for Teachers of Chinese to Speakers of Other Languages (CTCSOL). Hongde College provides professional training services to Mandarin language teachers to improve the quality of Mandarin language teachers in Indonesia.",
                "category_id" => 3
            ],
            [
                'title' => 'HSK Based Teaching Material Supply',
                'slug' => 'hsk-based-teaching-material-supply',
                'image' => 'programs/training-centers.jpg',
                'description' => "Hongde College is the sole licensee in the Riau Islands Province for the sale of Mandarin teaching materials entitled Panduan Persiapan YCT (Level 1-6) and HSK (Level 1-6), as well as Hanyu Huihua (Level 1-4).",
                "category_id" => 3
            ],
        ];

        
        foreach ($programs as $program) {
            \App\Models\Program::factory()->create($program);
    }
}
}