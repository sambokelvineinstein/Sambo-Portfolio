<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $profile = [
            'name' => 'Laurence Andrew',
            'title' => 'Full-Stack Web Developer',
            'avatar' => 'https://via.placeholder.com/150', // Replace with real profile image path in public/images/
            'email' => 'laurenceandrew@example.com',
            'phone' => '+63 912 345 6789',
            'github' => 'https://github.com/YOUR_GITHUB_USERNAME',
            'linkedin' => 'https://linkedin.com/in/YOUR_PROFILE',
            'school' => 'Data Center College of the Philippines - Bangued',
            'program' => 'BS Information Technology',
            'graduation' => 'Expected Graduation: 2027',
            'skills' => ['PHP', 'Laravel', 'MySQL', 'JavaScript', 'Tailwind CSS', 'VB.NET', 'Git & GitHub'],
            'certifications' => [
                'Civil Service Eligibility (CSE)',
                'Web Development Short Course - DCCP',
                'Laravel Framework Fundamentals'
            ]
        ];

        return view('portfolio', compact('profile'));
    }
}