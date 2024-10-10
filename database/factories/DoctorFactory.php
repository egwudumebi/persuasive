<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;
use App\Models\Doctor;
use Exception;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Patient>
 */
class DoctorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Doctor::class;

    public function definition(): array
    {
        
       
        $status = ['active', 'inactive', 'deceased'];
        $nigerianStatesAndCities = [
            'Abia' => [
                'Aba',
                'Arochukwu',
                'Bende',
                'Igbere',
                'Isiala Ngwa',
                'Isuikwuato',
                'Obingwa',
                'Ohafia',
                'Osisioma',
                'Ugwunagbo',
                'Ukwa East',
                'Ukwa West',
                'Umuahia',
                'Umuahia North',
                'Umuahia South',
                'Umunneochi'
            ],
            'Anambra' => [
                'Awka',
                'Onitsha',
                'Nnewi',
                'Ekwulobia',
                'Obosi',
                'Agulu',
                'Nnobi',
                'Nnokwa',
                'Ihiala',
                'Ojoto',
                'Nnewi North',
                'Nnewi South',
                'Ozubulu',
                'Umunze',
                'Igboukwu',
                'Igbo-Ukwu',
                'Uga',
                'Okija',
                'Atani',
                'Uli',
                'Ihite',
                'Orumba North',
                'Orumba South',
                'Aguleri',
                'Umuleri',
                'Otuocha',
                'Nkpor',
                'Alor',
                'Ihiala',
                'Ifite Dunu',
                'Umuoji',
                'Oko',
                'Amichi',
                'Ekwulobia',
                'Awkuzu'
            ],
            'Ebonyi' => [
                'Abakaliki',
                'Afikpo',
                'Onueke',
                'Ezza',
                'Effium',
                'Ikwo',
                'Ishieke',
                'Izzi',
                'Nkalagu',
                'Uburu',
                'Okposi',
                'Ohaozara',
                'Onicha',
                'Ebonyi',
                'Amasiri',
                'Unwana',
                'Edda',
                'Ivo',
                'Ohaukwu',
                'Ezzamgbo'
            ],
            'Enugu' => [
                'Enugu',
                'Nsukka',
                'Agbani',
                'Awgu',
                'Udi',
                'Oji River',
                'Ezeagu',
                'Ngwo',
                'Nkanu',
                'Achi',
                'Ibagwa-Aka',
                'Nike',
                'Obollo-Afor',
                'Adani',
                'Ugwuoba',
                'Amagunze',
                'Ukehe',
                'Aku',
                'Ihe',
                'Ozalla',
                'Ikem',
                'Mbu',
                'Okpanku',
                'Amagunze',
                'Enugu Ezike',
                'Emene'
            ],
            'Imo' => [
                'Owerri',
                'Orlu',
                'Okigwe',
                'Mbano',
                'Oguta',
                'Mbaise',
                'Umuagwo',
                'Nekede',
                'Obowo',
                'Ngor Okpala',
                'Ohaji',
                'Egbema',
                'Isu',
                'Njaba',
                'Oru East',
                'Oru West',
                'Ideato North',
                'Ideato South',
                'Ihitte Uboma',
                'Ezinihitte',
                'Aboh Mbaise',
                'Ahiazu Mbaise',
                'Isiala Mbano'
            ]
        ];
        // Pick a random state
        $state = $this->faker->randomElement(array_keys($nigerianStatesAndCities));

        // Pick a random city from the chosen state
        $firstname = $this->faker->firstname;
        $city = $this->faker->randomElement($nigerianStatesAndCities[$state]);
        
        $gender = $this->faker->randomElement(['male', 'female']);
        $profileUrl = $gender === 'male'
        ? 'https://randomuser.me/api/portraits/men/' . $this->faker->numberBetween(0, 99) . '.jpg'
        : 'https://randomuser.me/api/portraits/women/' . $this->faker->numberBetween(0, 99) . '.jpg';
        
        return [
            'firstname' => $firstname,
            'lastname' => $this->faker->lastname,
            'email' => $this->faker->unique()->safeEmail,
            'phone' => $this->faker->unique()->phoneNumber(),
            'profile' => $profileUrl,
            'gender' => $gender,
            'about_me' => 'I am Dr. '. $firstname .', a Cardiologist with 15 years of experience. My passion lies in diagnosing and treating heart conditions, ensuring patients receive top-quality care. I completed my medical training at XYZ University and a fellowship at ABC Medical Center. I prioritize a patient-centered approach and stay updated with the latest advancements in cardiology. Outside work, I enjoy community health programs, mentoring, and staying active through hiking and running.',
            // 'edu_qualification' => $this->faker->randomElements($educationalQualifications, 6),
            // 'specialization' => $this->faker->randomElements($specializations, 6),
            'dob' => $this->faker->dateTimeBetween('-70 years', '-18 years')->format('Y-m-d'),
            'address' => $this->faker->streetAddress,
            'city' => $city,
            'state' => $state,
            'country' => 'Nigeria',
            'status' => $this->faker->randomElement($status),
            'email_verified_at' => NULL,
            'password' => Hash::make('password'),
            'remember_token' => NULL,
            'created_at' => now()->subWeek(), // Created a week ago
        ];
    }
}
