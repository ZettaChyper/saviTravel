<?php

namespace Database\Seeders;

use App\Models\Destination;
use App\Models\Package;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create admin user
        User::firstOrCreate(
            ['email' => 'admin@savitravel.com'],
            [
                'name' => 'Admin',
                'password' => Hash::make('password'),
            ]
        );

        // Create Sri Lankan destinations
        $destinations = [
            [
                'name' => 'Sigiriya',
                'slug' => 'sigiriya',
                'short_description' => 'Explore the ancient rock fortress rising 200m above the jungle, featuring stunning frescoes and panoramic views.',
                'full_description' => "Sigiriya, the 'Lion Rock', is a UNESCO World Heritage Site and one of Sri Lanka's most iconic landmarks. This ancient rock fortress, built by King Kashyapa in the 5th century AD, rises dramatically 200 meters above the surrounding plains.\n\nClimb to the summit to explore the remains of an ancient palace complex, marvel at the famous 'Sigiriya Damsels' frescoes, and enjoy breathtaking 360-degree views of the lush Sri Lankan landscape. The site also features impressive landscaped gardens and ancient hydraulic systems that showcase the advanced engineering of ancient Sri Lanka.",
                'country' => 'Sri Lanka',
                'image' => 'sigiriya.jpg',
                'is_featured' => true,
                'is_active' => true,
            ],
            [
                'name' => 'Kandy',
                'slug' => 'kandy',
                'short_description' => 'Visit the sacred Temple of the Tooth Relic and experience the cultural heart of Sri Lanka.',
                'full_description' => "Kandy, the last royal capital of Sri Lanka, is a UNESCO World Heritage city nestled among hills in the heart of the island. The city is home to the sacred Temple of the Tooth Relic (Sri Dalada Maligawa), one of Buddhism's most venerated sites.\n\nExperience the famous Esala Perahera festival, explore the beautiful Royal Botanical Gardens in Peradeniya, and immerse yourself in the rich cultural heritage of the Kandyan Kingdom. The city's colonial architecture, vibrant markets, and scenic Kandy Lake make it a must-visit destination.",
                'country' => 'Sri Lanka',
                'image' => 'temple.jpg',
                'is_featured' => true,
                'is_active' => true,
            ],
            [
                'name' => 'Galle Fort',
                'slug' => 'galle-fort',
                'short_description' => 'Wander through the charming streets of this UNESCO World Heritage colonial fort.',
                'full_description' => "Galle Fort, built by the Portuguese in the 16th century and later fortified by the Dutch, is a living testament to Sri Lanka's colonial past. This UNESCO World Heritage Site features cobblestone streets, colonial architecture, and a vibrant arts scene.\n\nExplore boutique shops, art galleries, and cafés housed in centuries-old buildings. Walk along the ancient ramparts at sunset, visit the iconic lighthouse, and discover hidden gems in this beautifully preserved colonial town on Sri Lanka's southern coast.",
                'country' => 'Sri Lanka',
                'image' => 'galle-fort.jpg',
                'is_featured' => true,
                'is_active' => true,
            ],
            [
                'name' => 'Ella',
                'slug' => 'ella',
                'short_description' => 'A scenic hill town known for stunning views, tea plantations, and the famous Nine Arch Bridge.',
                'full_description' => "Ella is a charming hill town nestled in Sri Lanka's central highlands, offering some of the most spectacular scenery in the country. Famous for the iconic Nine Arch Bridge, this laid-back destination is perfect for hikers, nature lovers, and those seeking serenity.\n\nClimb Little Adam's Peak or Ella Rock for panoramic views, visit tea factories to learn about Ceylon tea production, and experience the famous scenic train ride through misty mountains. The cool climate, friendly locals, and relaxed atmosphere make Ella a favorite among travelers.",
                'country' => 'Sri Lanka',
                'image' => 'ella.jpg',
                'is_featured' => true,
                'is_active' => true,
            ],
            [
                'name' => 'Yala National Park',
                'slug' => 'yala-national-park',
                'short_description' => 'Sri Lanka\'s premier wildlife destination, home to leopards, elephants, and diverse wildlife.',
                'full_description' => "Yala National Park is Sri Lanka's most visited and second-largest national park, renowned for having one of the highest leopard densities in the world. This diverse ecosystem encompasses lagoons, grasslands, monsoon forests, and rocky outcrops.\n\nEmbark on thrilling safari adventures to spot leopards, elephants, sloth bears, crocodiles, and over 200 bird species. The park's unique combination of beach, jungle, and wildlife makes it an unforgettable safari destination just a few hours from the southern coast.",
                'country' => 'Sri Lanka',
                'image' => 'yala.jpg',
                'is_featured' => true,
                'is_active' => true,
            ],
            [
                'name' => 'Mirissa',
                'slug' => 'mirissa',
                'short_description' => 'A tropical beach paradise perfect for whale watching, surfing, and relaxation.',
                'full_description' => "Mirissa is a crescent-shaped beach paradise on Sri Lanka's southern coast, famous for being one of the best whale watching destinations in the world. From November to April, blue whales and sperm whales can be spotted just offshore.\n\nBeyond whale watching, Mirissa offers golden sandy beaches, excellent surfing waves, fresh seafood at beachfront restaurants, and vibrant nightlife. The iconic Coconut Tree Hill provides the perfect backdrop for sunset photos, making Mirissa a must-visit for beach lovers.",
                'country' => 'Sri Lanka',
                'image' => 'mirissa.jpg',
                'is_featured' => true,
                'is_active' => true,
            ],
            [
                'name' => 'Nuwara Eliya',
                'slug' => 'nuwara-eliya',
                'short_description' => 'Known as "Little England" - a cool retreat with tea plantations and colonial charm.',
                'full_description' => "Nuwara Eliya, often called 'Little England', is a picturesque hill station located at 1,868m elevation. The cool climate, Tudor-style buildings, and manicured gardens create an atmosphere reminiscent of the English countryside.\n\nVisit the surrounding tea estates to learn about world-famous Ceylon tea, explore the beautiful Gregory Lake, and discover the stunning Horton Plains National Park nearby. The misty mountains, waterfalls, and strawberry farms make Nuwara Eliya a refreshing escape from the tropical heat.",
                'country' => 'Sri Lanka',
                'image' => 'nuwara-eliya.jpg',
                'is_featured' => false,
                'is_active' => true,
            ],
            [
                'name' => 'Anuradhapura',
                'slug' => 'anuradhapura',
                'short_description' => 'Explore the ruins of an ancient civilization spanning over 1,400 years.',
                'full_description' => "Anuradhapura, one of the ancient capitals of Sri Lanka, is a UNESCO World Heritage Site that served as the political and religious center of Theravada Buddhism for over a millennium. The city is home to some of the oldest continuously maintained structures in the world.\n\nVisit the sacred Sri Maha Bodhi, the oldest documented tree in the world, marvel at massive ancient stupas like Ruwanwelisaya and Jetavanaramaya, and explore the remains of palaces and monasteries that tell the story of a great civilization.",
                'country' => 'Sri Lanka',
                'image' => 'anuradhapura.jpg',
                'is_featured' => false,
                'is_active' => true,
            ],
            [
                'name' => 'Polonnaruwa',
                'slug' => 'polonnaruwa',
                'short_description' => 'The medieval capital featuring well-preserved ruins and impressive stone sculptures.',
                'full_description' => "Polonnaruwa, Sri Lanka's medieval capital, is a UNESCO World Heritage Site showcasing some of the best-preserved ancient ruins in the country. The city flourished as the capital from the 11th to 13th centuries AD.\n\nExplore the Royal Palace complex, the impressive Gal Vihara with its giant Buddha statues carved from granite, and the well-preserved Quadrangle. The compact nature of the site makes it easy to explore by bicycle, offering an intimate look at medieval Sri Lankan architecture and artistry.",
                'country' => 'Sri Lanka',
                'image' => 'polonnaruwa.jpg',
                'is_featured' => false,
                'is_active' => true,
            ],
            [
                'name' => 'Dambulla Cave Temple',
                'slug' => 'dambulla',
                'short_description' => 'A magnificent complex of cave temples with ancient murals and Buddha statues.',
                'full_description' => "The Dambulla Cave Temple, a UNESCO World Heritage Site, is the largest and best-preserved cave temple complex in Sri Lanka. Dating back to the 1st century BC, the five caves contain over 150 Buddha statues and stunning ancient murals covering 2,100 square meters.\n\nClimb to the temple complex for panoramic views of the surrounding countryside, including a clear view of Sigiriya Rock. The caves' incredible artwork and spiritual atmosphere make this an essential stop on any cultural tour of Sri Lanka.",
                'country' => 'Sri Lanka',
                'image' => 'dambulla.jpg',
                'is_featured' => false,
                'is_active' => true,
            ],
        ];

        foreach ($destinations as $destinationData) {
            Destination::firstOrCreate(
                ['slug' => $destinationData['slug']],
                $destinationData
            );
        }

        // Create Sri Lankan travel packages
        $packages = [
            [
                'title' => 'Cultural Triangle Explorer',
                'slug' => 'cultural-triangle-explorer',
                'short_description' => 'Discover Sri Lanka\'s ancient kingdoms - Sigiriya, Polonnaruwa, and Anuradhapura in 5 unforgettable days.',
                'full_description' => "Embark on a journey through Sri Lanka's glorious past with our Cultural Triangle Explorer package.\n\nDay 1: Arrival in Colombo, transfer to Dambulla. Evening visit to Dambulla Cave Temple.\nDay 2: Full day at Sigiriya Rock Fortress. Afternoon village tour and elephant safari.\nDay 3: Explore Polonnaruwa ancient city by bicycle. Transfer to Anuradhapura.\nDay 4: Full day at Anuradhapura - visit Sri Maha Bodhi, Ruwanwelisaya, and Jetavanaramaya.\nDay 5: Transfer back to Colombo for departure.\n\nInclusions:\n- 4 nights accommodation (4-star hotels)\n- Daily breakfast\n- Air-conditioned private vehicle\n- Professional English-speaking guide\n- All entrance fees\n- Village tour with lunch\n- Bicycle rental at Polonnaruwa",
                'price' => 699.00,
                'duration' => '5 Days / 4 Nights',
                'location' => 'Cultural Triangle, Sri Lanka',
                'featured_image' => 'sigiriya.jpg',
                'destination_id' => 1,
                'is_featured' => true,
                'is_active' => true,
            ],
            [
                'title' => 'Hill Country & Tea Trails',
                'slug' => 'hill-country-tea-trails',
                'short_description' => 'Experience the scenic beauty of Sri Lanka\'s highlands, tea plantations, and the famous train journey.',
                'full_description' => "Escape to the cool highlands and discover the beauty of Ceylon tea country.\n\nDay 1: Kandy arrival. Visit Temple of the Tooth Relic and enjoy cultural dance show.\nDay 2: Morning at Royal Botanical Gardens. Scenic drive to Nuwara Eliya via tea estates.\nDay 3: Explore Nuwara Eliya - Gregory Lake, Victoria Park, Hakgala Gardens.\nDay 4: Famous scenic train ride from Nanu Oya to Ella (4 hours of stunning views).\nDay 5: Ella exploration - Nine Arch Bridge, Little Adam's Peak. Transfer to Colombo.\n\nInclusions:\n- 4 nights accommodation\n- Daily breakfast\n- Scenic train tickets (1st class observation)\n- Tea factory visit with tasting\n- Cultural dance show\n- All transfers and entrance fees",
                'price' => 549.00,
                'duration' => '5 Days / 4 Nights',
                'location' => 'Kandy, Nuwara Eliya, Ella',
                'featured_image' => 'train.jpg',
                'destination_id' => 4,
                'is_featured' => true,
                'is_active' => true,
            ],
            [
                'title' => 'Wildlife Safari Adventure',
                'slug' => 'wildlife-safari-adventure',
                'short_description' => 'Track leopards at Yala and witness elephant gatherings at Minneriya in this exciting wildlife package.',
                'full_description' => "Get up close with Sri Lanka's incredible wildlife on this exciting safari adventure.\n\nDay 1: Arrival in Colombo. Transfer to Habarana. Evening jeep safari at Minneriya/Kaudulla National Park (famous for elephant gathering).\nDay 2: Morning safari at Hurulu Eco Park. Afternoon village experience and coracle boat ride.\nDay 3: Transfer to Yala. Afternoon safari at Yala National Park.\nDay 4: Early morning and afternoon safaris at Yala National Park - leopard tracking.\nDay 5: Morning beach time at Mirissa. Transfer to Colombo for departure.\n\nInclusions:\n- 4 nights accommodation (safari lodges)\n- All meals\n- 5 jeep safaris\n- Expert wildlife trackers\n- All national park fees\n- Village experience",
                'price' => 899.00,
                'duration' => '5 Days / 4 Nights',
                'location' => 'Minneriya, Yala, Mirissa',
                'featured_image' => 'elephant.jpg',
                'destination_id' => 5,
                'is_featured' => true,
                'is_active' => true,
            ],
            [
                'title' => 'Southern Beach Escape',
                'slug' => 'southern-beach-escape',
                'short_description' => 'Relax on pristine beaches, explore Galle Fort, and go whale watching in Mirissa.',
                'full_description' => "Unwind on Sri Lanka's beautiful southern coast with this perfect beach getaway.\n\nDay 1: Transfer from Colombo to Galle. Afternoon walking tour of Galle Fort.\nDay 2: Beach day in Unawatuna. Optional surfing lesson or snorkeling.\nDay 3: Transfer to Mirissa. Early morning whale watching excursion.\nDay 4: Free day at Mirissa beach. Optional cooking class or spa day.\nDay 5: Visit Coconut Tree Hill for sunrise. Transfer to Colombo airport.\n\nInclusions:\n- 4 nights beachfront accommodation\n- Daily breakfast\n- Whale watching excursion\n- Galle Fort walking tour\n- All transfers\n- Beach equipment",
                'price' => 599.00,
                'duration' => '5 Days / 4 Nights',
                'location' => 'Galle, Unawatuna, Mirissa',
                'featured_image' => 'sri-lanka-beach.jpg',
                'destination_id' => 3,
                'is_featured' => true,
                'is_active' => true,
            ],
            [
                'title' => 'Complete Sri Lanka Discovery',
                'slug' => 'complete-sri-lanka-discovery',
                'short_description' => 'The ultimate 10-day journey covering ancient sites, wildlife, hill country, and beaches.',
                'full_description' => "Experience the best of Sri Lanka in one comprehensive package.\n\nDay 1: Arrive Colombo, transfer to Negombo.\nDay 2: Drive to Sigiriya. Climb the iconic rock fortress.\nDay 3: Explore Polonnaruwa by bicycle. Safari at Minneriya.\nDay 4: Dambulla Cave Temple. Drive to Kandy via spice garden.\nDay 5: Kandy city tour - Temple of the Tooth, Botanical Gardens.\nDay 6: Scenic train journey to Ella. Nine Arch Bridge at sunset.\nDay 7: Ella Rock hike. Transfer to Yala.\nDay 8: Full day safari at Yala National Park.\nDay 9: Morning at Mirissa beach. Whale watching (seasonal).\nDay 10: Galle Fort tour. Transfer to Colombo for departure.\n\nInclusions:\n- 9 nights accommodation (mix of boutique hotels and lodges)\n- Daily breakfast, select lunches and dinners\n- Private air-conditioned vehicle throughout\n- Professional guide\n- All entrance fees and activities\n- Scenic train tickets\n- Yala safari and whale watching",
                'price' => 1599.00,
                'duration' => '10 Days / 9 Nights',
                'location' => 'All Sri Lanka',
                'featured_image' => 'sri-lanka-hero.jpg',
                'destination_id' => 1,
                'is_featured' => true,
                'is_active' => true,
            ],
            [
                'title' => 'Romantic Sri Lanka Honeymoon',
                'slug' => 'romantic-sri-lanka-honeymoon',
                'short_description' => 'Create unforgettable memories with your special one on this romantic 7-day honeymoon package.',
                'full_description' => "Celebrate your love in the enchanting island of Sri Lanka.\n\nDay 1: VIP airport meet and greet. Transfer to boutique hotel in Colombo. Welcome dinner.\nDay 2: Transfer to Kandy. Private temple blessing ceremony. Evening cultural show.\nDay 3: Scenic transfer to tea country. Couples spa treatment at luxury resort.\nDay 4: Private picnic at World's End, Horton Plains. Romantic dinner.\nDay 5: Transfer to Ella. Private dinner with valley views.\nDay 6: Transfer to beach resort in Bentota. Sunset cruise on Madu River.\nDay 7: Beach morning. Transfer to airport.\n\nInclusions:\n- 6 nights luxury accommodation\n- All meals (couple's dining experiences)\n- Private temple blessing\n- Couples spa treatment\n- Sunset river cruise\n- Private transfers in luxury vehicle\n- Flower decorations and honeymoon amenities",
                'price' => 1299.00,
                'duration' => '7 Days / 6 Nights',
                'location' => 'Kandy, Hill Country, Bentota',
                'featured_image' => 'temple.jpg',
                'destination_id' => 2,
                'is_featured' => false,
                'is_active' => true,
            ],
            [
                'title' => 'Ayurveda & Wellness Retreat',
                'slug' => 'ayurveda-wellness-retreat',
                'short_description' => 'Rejuvenate your mind and body with authentic Ayurvedic treatments in a serene setting.',
                'full_description' => "Experience the healing power of traditional Sri Lankan Ayurveda.\n\nThis 7-day wellness retreat includes:\n\n- Consultation with Ayurvedic physician\n- Personalized treatment plan\n- Daily Ayurvedic treatments (2-3 hours)\n- Yoga and meditation sessions\n- Ayurvedic cooking classes\n- Herbal garden tours\n- Nature walks\n\nTreatments may include:\n- Abhyanga (oil massage)\n- Shirodhara (oil pouring therapy)\n- Panchakarma (detoxification)\n- Herbal steam baths\n- Reflexology\n\nInclusions:\n- 6 nights at Ayurvedic resort\n- Full board Ayurvedic meals\n- All treatments as prescribed\n- Daily yoga classes\n- Cooking class\n- Airport transfers",
                'price' => 999.00,
                'duration' => '7 Days / 6 Nights',
                'location' => 'Beruwala, Sri Lanka',
                'featured_image' => 'default-package.jpg',
                'destination_id' => null,
                'is_featured' => false,
                'is_active' => true,
            ],
            [
                'title' => 'Adventure & Adrenaline',
                'slug' => 'adventure-adrenaline',
                'short_description' => 'White water rafting, hiking, surfing, and more - for thrill-seekers who want action!',
                'full_description' => "Get your adrenaline pumping with this action-packed adventure package!\n\nDay 1: Arrive Colombo. Transfer to Kitulgala.\nDay 2: White water rafting on Kelani River. Waterfall trekking and abseiling.\nDay 3: Transfer to Ella. Afternoon rock climbing session.\nDay 4: Early morning Ella Rock hike. Zipline experience. Train to Nanu Oya.\nDay 5: Transfer to Arugam Bay. Evening surf lesson.\nDay 6: Full day surfing and beach activities.\nDay 7: Transfer to Colombo for departure.\n\nInclusions:\n- 6 nights accommodation\n- White water rafting\n- Waterfall abseiling\n- Rock climbing session\n- Zipline experience\n- Surf lessons and board rental\n- Ella Rock guided hike\n- All transfers and equipment",
                'price' => 849.00,
                'duration' => '7 Days / 6 Nights',
                'location' => 'Kitulgala, Ella, Arugam Bay',
                'featured_image' => 'ella.jpg',
                'destination_id' => 4,
                'is_featured' => false,
                'is_active' => true,
            ],
        ];

        foreach ($packages as $packageData) {
            Package::firstOrCreate(
                ['slug' => $packageData['slug']],
                $packageData
            );
        }
    }
}
