<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Fluent; 

function getMockUsers() {
return [
    new Fluent([
        'id' => 1, 
        'name' => 'Liam Henderson', 
        'email' => 'liam.henderson@example-studio.com', 
        'bio' => 'Senior Graphic Designer with 10 years of experience in branding and minimalism.', 
        'contact' => '+1 (555) 123-4567', 
        'role' => 'Creative Lead',
        'image' => '/profile-images\woman.jpg'
    ]),
    new Fluent([
        'id' => 2, 
        'name' => 'Priya Patel', 
        'email' => 'p.patel@technova.io', 
        'bio' => 'Full-stack developer obsessed with clean code and AI integration.', 
        'contact' => '+1 (555) 987-6543', 
        'role' => 'Tech Innovator',
        'image' => '/profile-images\woman.jpg'
    ]),
    new Fluent([
        'id' => 3, 
        'name' => 'Marcus Thorne', 
        'email' => 'marcus@thorne-wellness.net', 
        'bio' => 'Certified holistic health coach and yoga instructor.', 
        'contact' => '+44 20 7946 0123', 
        'role' => 'Wellness Coach',
        'image' => '/profile-images\woman.jpg'
    ]),
    new Fluent([
        'id' => 4, 
        'name' => 'Elena Rodriguez', 
        'email' => 'e.rodriguez@globalcorp.com', 
        'bio' => 'CFO with a track record of scaling startups to IPO.', 
        'contact' => '+1 (555) 222-3344', 
        'role' => 'Corporate Executive',
        'image' => '/profile-images\woman.jpg'
    ]),
    new Fluent([
        'id' => 5, 
        'name' => 'Dr. Kenji Tanaka', 
        'email' => 'k.tanaka@university.edu', 
        'bio' => 'Professor of Marine Biology. Researcher focusing on coral reef restoration.', 
        'contact' => '+81 3-1234-5678', 
        'role' => 'Academic',
        'image' => '/profile-images\woman.jpg'
    ]),
    // new Fluent([
    //     'id' => 6, 
    //     'name' => 'Sarah Jenkins', 
    //     'email' => 'sarah@hearthandclay.com', 
    //     'bio' => 'Ceramicist and small business owner specializing in hand-thrown pottery.', 
    //     'contact' => '+1 (555) 888-9900', 
    //     'role' => 'Artisan',
    //     'image' => '/profile-images\woman.jpg'
    // ]),
    // new Fluent([
    //     'id' => 7, 
    //     'name' => 'Ahmed Al-Fayed', 
    //     'email' => 'ahmed.logs@freightfast.com', 
    //     'bio' => 'Supply chain manager ensuring global delivery efficiency.', 
    //     'contact' => '+971 4 123 4567', 
    //     'role' => 'Logistician',
    //     'image' => '/profile-images\woman.jpg'
    // ]),
    // new Fluent([
    //     'id' => 8, 
    //     'name' => 'Chloe Dubois', 
    //     'email' => 'c.dubois@pressdaily.fr', 
    //     'bio' => 'Investigative journalist covering environmental policy.', 
    //     'contact' => '+33 1 23 45 67 89', 
    //     'role' => 'Journalist',
    //     'image' => '/profile-images\woman.jpg'
    // ]),
    // new Fluent([
    //     'id' => 9, 
    //     'name' => 'Diego Silva', 
    //     'email' => 'chef.diego@bistrosol.com', 
    //     'bio' => 'Executive Chef specializing in fusion cuisine.', 
    //     'contact' => '+55 21 91234-5678', 
    //     'role' => 'Chef',
    //     'image' => '/profile-images\woman.jpg'
    // ]),
    // new Fluent([
    //     'id' => 10, 
    //     'name' => 'Isabella Moretti', 
    //     'email' => 'i.moretti@blueprint.it', 
    //     'bio' => 'Sustainable architect focusing on green urban living spaces.', 
    //     'contact' => '+39 06 1234 5678', 
    //     'role' => 'Architect',
    //     'image' => '/profile-images\woman.jpg'
    // ]),
];
}

Route::get('/', function () {
    return redirect()->route('users.index');
});

Route::get('/users', function () {
    $users = getMockUsers();
    return view('users.index', compact('users'));
})->name('users.index');

Route::get('/manage-users', function () {
    return view('users.manage');
})->name('users.manage');


Route::get('/users/{id}', function ($id) {
    $users = getMockUsers();
    $user = collect($users)->firstWhere('id', $id);
    
    if (!$user) {
        abort(404);
    }

    return view('users.show', compact('user'));
})->name('users.show');