<?php

namespace Database\Seeders;

 use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Listing;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$user = \App\Models\User::factory()->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // $user = User::factory()->create([
        //     'name' => 'John Doe',
        //     'email' => 'john@gmail.com'
        // ]);

        // Listing::factory(3)->create([
        //     'user_id' => $user->id
        // ]);

        // Listing::create([
        //     'title' => 'Laravel Senior Developer', 
        //     'user_id' => $user->id,
        //     'tags' => 'laravel, javascript',
        //     'company' => 'Acme Corp',
        //     'location' => 'Boston, MA',
        //     'email' => 'email1@email.com',
        //     'website' => 'https://www.acme.com',
        //     'description' => 'As a Laravel Developer at our company, you will: Liaise with fellow backend and front end developers. Design and implement web applications that use the Laravel framework. Implement server side logic to process front inputs. Identify and fix bugs that are found within code.'
        // ]);

        // Listing::create([
        //     'title' => 'Full-Stack Engineer',
        //     'user_id' => $user->id,
        //     'tags' => 'laravel, backend ,api',
        //     'company' => 'Stark Industries',
        //     'location' => 'New York, NY',
        //     'email' => 'email2@email.com',
        //     'website' => 'https://www.starkindustries.com',
        //     'description' => 'A Full Stack Developer is a relatively new role which brings together the skills and roles for what were traditionally known as web designer and web developer. Web designer worked on the design of the site, and the web developer worked on the code. As the web has grown more and more complex, and customers are seeking more complex solutions for their on-line presence, the two roles have become more specialised and technical. '
        //   ]);
    }
}
