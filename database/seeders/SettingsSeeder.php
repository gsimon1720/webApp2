<?php

namespace Database\Seeders;

use App\Models\Settings;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $settings = [
            ["key"=>"site_name","value"=>"Eventify"],
            ['key'=>'site_description','value'=>'Laravel'],
            ['key'=>'site_keywords','value'=>'Lravel'],
            ['key'=>'site_author','value'=>'laravel'],
            ['key'=>'site_email','value'=>'laravel'],
            ['key'=>'site_phone','value'=>'laravel'],
            ['key'=>'site_address','value'=>'laravel'],
            ['key'=>'site_logo','value'=>'laravel'],
            ['key'=>'site_favicon','value'=>'laravel'],
            ['key'=>'site_google_analytics','value'=>'laravel'],
            ['key'=>'site_google_map','value'=>'laravel'],
            ['key'=>'site_google_map_key','value'=>'laravel'],
            ['key'=>'site_copyright','value'=>'laravel'],
            ['key'=>'site_currency','value'=>'laravel'],
            ['key'=>'facebook_link','value'=>'https://www.facebook.com/mywebsite'],
            ['key'=>'twitter_link','value'=>'https://www.twitter.com/mywebsite'],
            ['key'=>'linkedin_link','value'=>'https://www.linkedin.com/mywebsite'],
            ['key'=>'instagram_link','value'=>'https://www.instagram.com/mywebsite'],
            ['key'=>'maintenance_mode','value'=>'0'],
            ['key'=>'maintenance_mode_text','value'=>'laravel'],
        ];

        foreach($settings as $setting){
            Settings::updateOrCreate(
                ['key'=>$setting['key']],
                ['value'=>$setting['value']]
            );
        }
        
    }
}
