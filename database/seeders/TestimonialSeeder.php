<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $testimonials = [
            [
                'title' => '',
                'description' => "The Cochran Firm is worth more than 5 stars! I cannot express my gratitude 
                enough for everyone was involved in my case. If you are a person living with disability, 
                you will be accommodated through the whole process. It's not often you find a lawyer and her 
                team ready to service justice, and this, is a firm I highly recommend. Biggest shout out to 
                Anahita and to everyone that worked on my case. Thank you for fighting the good fight.",
            ],
            [
                'title' => '',
                'description' => 'Our Family would like to let Brian T. Dunn, and the rest of the Cochran Firm 
                 know how grateful we are for their professionalism and expertise. It took five years to an put  
                 an end to this Judicial process and deliver justice. We will forever be grateful. Thank you.',
            ],
            [
                'title' => '',
                'description' => 'Incredible experience from start to finish. They earn their accolades for a 
                 reason. Stellar research, response times, investigative processes, negotiations and handled 
                 the entire proceedings without stepping foot in a court room. Our legal counsel was 
                 professional and forthright in every area of this case, and the office staff handled all the 
                 rest. Thank you Cochran Firm and office staff for taking such a terrible experience and 
                 creating such a perfect flow & execution.',
            ]
        ];

        foreach($testimonials as $testimonial){
            Testimonial::create($testimonial);
        }
    }
}
