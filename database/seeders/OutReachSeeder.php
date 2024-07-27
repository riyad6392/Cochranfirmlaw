<?php

namespace Database\Seeders;

use App\Models\OutReach;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class OutReachSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $outReachs =
        [
            [
                'title' => '2015 African American Arts Festival',
                'posted_by' => 'Cochran Firm California',
                'image' => 'storage/out_reach/out_reach4.webp',
                'description' => '<p><span style="color: rgb(102, 102, 102); font-family: Montserrat; font-size: 19px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 500; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">For the 8th consecutive year, The Cochran Firm hosted a booth for it’s annual participation in the Los Angeles Taste of Soul street festival. &nbsp;The 2015 Taste of Soul was attended by celebrities and politicians such as LA Mayor Eric Garcetti, Yolanda Adams, Attorney General Kamala Harris, and Senator Isadore Hall. &nbsp;The Cochran Firm booth hosts thousands of visitors throughout the day with giveaways and legal advice. &nbsp;&nbsp;The Taste of Soul serves as one of the great ways our staff is able to interact with community members and leaders. &nbsp;We are proud to sponsor and participate in Taste of Soul!</span></p>',
                'short_description' => 'The Cochran Firm once again participated in the African American Arts Festival as a sponsor with a booth offering free legal advice. ',
                'redirect_site_url' => 'https://www.cbsnews.com/news/darris-love-actor-believes-his-race-was-a-factor-in-arrest-at-gunpoint-glendale-galleria-california/',
                'created_at' => date('2021-08-16 H:i:s'),
                'updated_at' => date('2021-08-16 H:i:s'),
            ],
            [
                'title' => '2015 Free Legal Clinic',
                'posted_by' => 'Cochran Firm California',
                'image' => 'storage/out_reach/out_reach2.webp',
                'description' => '<p><span style="color: rgb(102, 102, 102); font-family: Montserrat; font-size: 19px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 500; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">Legal Clinics provide a venue to meet with Attorneys for the sole purpose of seeking legal guidance. &nbsp;The Cochran Firm is proud to sponsor such events in the Greater Los Angeles area. &nbsp;In March of 2015, Resurrection Church of Los Angeles hosted a Cochran Firm Legal Clinic open to both members of the church and of the local community. &nbsp;Attorneys from the firm sit with each individual and give both advice and referrals to assist in a variety of legal matters. &nbsp;Legal Clinics are another part of the Cochran Firm’s commitment to community outreach.</span></p>',
                'short_description' => 'Legal Clinics provide a venue to meet with Attorneys for the sole purpose of seeking legal guidance.  The Cochran Firm is proud to sponsor such events in the Greater Los Angeles area.',
                'redirect_site_url' => '',
                'created_at' => date('2021-08-16 H:i:s'),
                'updated_at' => date('2021-08-16 H:i:s'),
            ],
            [
                'title' => '2014 Taste of Soul Festival',
                'posted_by' => 'Cochran Firm California',
                'image' => 'storage/out_reach/out_reach3.webp',
                'description' => '<p><img src="https://cochranfirmlaw.com/storage/out_reach/out_reach3.webp" alt="" class="" width="1080" height="9999" style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 14px; text-size-adjust: 100%; vertical-align: baseline; background: rgba(249, 248, 246, 0.48); max-width: 100%; height: auto; color: rgb(102, 102, 102); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 500; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;"></p><div class="entry-content in-the-news-content" style="box-sizing: border-box; margin: 0px; padding: 60px 0px 0px; border: 0px; outline: 0px; font-size: 19px; text-size-adjust: 100%; vertical-align: baseline; background: rgba(249, 248, 246, 0.48); counter-reset: footnotes 0; font-family: Montserrat; line-height: 27px; color: rgb(102, 102, 102); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 500; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;"><div class="postcontent" style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 19px; text-size-adjust: 100%; vertical-align: baseline; background: transparent;"><p style="box-sizing: border-box; margin: 0px; padding: 0px 0px 1em; border: 0px; outline: 0px; font-size: 19px; text-size-adjust: 100%; vertical-align: baseline; background: transparent;">The Cochran Firm, in partnership with 94.7 the Wave, has been a sponsor of the annual Los Angeles area festival Taste of Soul since 2008. &nbsp;The event brings together over 300,000 Angelinos for a day of great food and great music. &nbsp;The Cochran Firm booth hosts thousands of visitors throughout the day with giveaways and legal advice. &nbsp;&nbsp;The Taste of Soul serves as one of the great ways our staff is able to interact with community members and leaders. &nbsp;We are proud to sponsor and participate in Taste of Soul!</p></div></div>',
                'short_description' => 'The Cochran Firm, in partnership with 94.7 the Wave, has been a sponsor of the annual Los Angeles area festival Taste of Soul since 2008.',
                'redirect_site_url' => 'https://twitter.com/CochranfirmCA',
                'created_at' => date('2021-08-16 H:i:s'),
                'updated_at' => date('2021-08-16 H:i:s'),
            ],
            [
                'title' => '2015 African American Arts Festival',
                'posted_by' => 'Cochran Firm California',
                'image' => 'storage/out_reach/out_reach4.webp',
                'description' => '<p><span style="color: rgb(102, 102, 102); font-family: Montserrat; font-size: 19px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 500; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">For the 8th consecutive year, The Cochran Firm hosted a booth for it’s annual participation in the Los Angeles Taste of Soul street festival. &nbsp;The 2015 Taste of Soul was attended by celebrities and politicians such as LA Mayor Eric Garcetti, Yolanda Adams, Attorney General Kamala Harris, and Senator Isadore Hall. &nbsp;The Cochran Firm booth hosts thousands of visitors throughout the day with giveaways and legal advice. &nbsp;&nbsp;The Taste of Soul serves as one of the great ways our staff is able to interact with community members and leaders. &nbsp;We are proud to sponsor and participate in Taste of Soul!</span></p>',
                'short_description' => 'The Cochran Firm once again participated in the African American Arts Festival as a sponsor with a booth offering free legal advice.',
                'redirect_site_url' => 'https://www.cbsnews.com/news/darris-love-actor-believes-his-race-was-a-factor-in-arrest-at-gunpoint-glendale-galleria-california/',
                'created_at' => date('2021-08-16 H:i:s'),
                'updated_at' => date('2021-08-16 H:i:s'),
            ],
        ];

        foreach ($outReachs as $outReach) {
            OutReach::create($outReach);
        }
    }
}
