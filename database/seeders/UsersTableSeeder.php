namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            ['name' => 'Hari Prasad', 'email' => 'hari@example.com', 'password' => Hash::make('password'), 'age' => 28, 'city' => 'Kathmandu'],
            ['name' => 'Sita Kumari', 'email' => 'sita@example.com', 'password' => Hash::make('password'), 'age' => 22, 'city' => 'Pokhara'],
            ['name' => 'Ravi Kumar', 'email' => 'ravi@example.com', 'password' => Hash::make('password'), 'age' => 30, 'city' => 'Lalitpur'],
            ['name' => 'Priya Shah', 'email' => 'priya@example.com', 'password' => Hash::make('password'), 'age' => 25, 'city' => 'Biratnagar'],
            ['name' => 'Manoj Sharma', 'email' => 'manoj@example.com', 'password' => Hash::make('password'), 'age' => 32, 'city' => 'Chitwan'],
            ['name' => 'Anjali Thapa', 'email' => 'anjali@example.com', 'password' => Hash::make('password'), 'age' => 26, 'city' => 'Bhairahawa'],
            ['name' => 'Dipendra Rai', 'email' => 'dipendra@example.com', 'password' => Hash::make('password'), 'age' => 35, 'city' => 'Butwal'],
            ['name' => 'Rashmi Gurung', 'email' => 'rashmi@example.com', 'password' => Hash::make('password'), 'age' => 29, 'city' => 'Dharan'],
            ['name' => 'Kamal Adhikari', 'email' => 'kamal@example.com', 'password' => Hash::make('password'), 'age' => 38, 'city' => 'Itahari'],
            ['name' => 'Nisha Joshi', 'email' => 'nisha@example.com', 'password' => Hash::make('password'), 'age' => 31, 'city' => 'Bhaktapur'],
            ['name' => 'Suraj Dhimal', 'email' => 'suraj@example.com', 'password' => Hash::make('password'), 'age' => 27, 'city' => 'Nepalgunj'],
            ['name' => 'Pooja Lama', 'email' => 'pooja@example.com', 'password' => Hash::make('password'), 'age' => 24, 'city' => 'Hetauda'],
        ]);
    }
}
