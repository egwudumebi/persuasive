<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;
use App\Models\Patient;
use Exception;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Patient>
 */
class PatientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Patient::class;

    public function definition(): array
    {
        // Define the random image

        // Ensure the profiles/patients directory exists
        // if (!file_exists(public_path('profiles/patients'))) {
        //     mkdir(public_path('profiles/patients'), 0777, true);
        // }

        // Generate the image and get the file name
        // $imageName = Faker::create()->image(public_path('profiles/patients'), 640, 480, null, false);
        // if ($imageName === false) {
        //     throw new Exception('Image generation Failed');
        // } else {
        //     $imagePath = 'profiles/patients/' . $imageName;
        // }

        // Create a list for random selection of "bg"
        $bloodGroups = ['A+', 'A-', 'B+', 'B-', 'AB+', 'AB-', 'O+', 'O-'];
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
        $city = $this->faker->randomElement($nigerianStatesAndCities[$state]);
        $firstname = $this->faker->firstname;
        // $colors = [  "f0f8ff",  "faebd7",  "00ffff",  "7fffd4",  "f0ffff",  "f5f5dc",  "ffe4c4",  "000000",  "ffebcd",  "0000ff",  "8a2be2",  "a52a2a",  "deb887",  "5f9ea0",  "7fff00",  "d2691e",  "ff7f50",  "6495ed",  "fff8dc",  "dc143c",  "00ffff",  "00008b",  "008b8b",  "b8860b",  "a9a9a9",  "006400",  "bdb76b",  "8b008b",  "556b2f",  "ff8c00",  "9932cc",  "8b0000",  "e9967a",  "8fbc8f",  "483d8b",  "2f4f4f",  "00ced1",  "9400d3",  "ff1493",  "00bfff",  "696969",  "1e90ff",  "b22222",  "fffaf0",  "228b22"];
        // $selectedColour = $this->faker->randomElement($colors);
        $gender = $this->faker->randomElement(['male', 'female']);
        $profileUrl = $gender === 'male'
            ? 'https://randomuser.me/api/portraits/men/' . $this->faker->numberBetween(0, 99) . '.jpg'
            : 'https://randomuser.me/api/portraits/women/' . $this->faker->numberBetween(0, 99) . '.jpg';
        return [
            'firstname' => $firstname,
            'lastname' => $this->faker->lastname,
            'email' => $this->faker->unique()->safeEmail,
            'phone' => $this->faker->unique()->phoneNumber(),
            // 'profile' => $imagePath,
            // 'profile' => "https://fakeimg.pl/512x512/". $selectedColour ."/?text=" . $firstname . "&font=lobster",
            'profile' => $profileUrl,
            'gender' => $gender,
            'dob' => $this->faker->dateTimeBetween('-100 years', '-18 years')->format('Y-m-d'),
            'bg' => $this->faker->randomElement($bloodGroups),
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
