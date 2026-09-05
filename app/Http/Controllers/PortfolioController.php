<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $profile = [
            'name' => 'Kelvin Einstein Sambo',
            'title' => 'Web Developer',
            'avatar' => 'images/profile.jpg',
            'email' => 'laurenceandrew@example.com',
            'phone' => '+63 912 345 6789',
            'github' => 'https://github.com/sambokelvineinstein/Sambo-Portfolio',
            'education' => [
                'college' => [
                    'program' => 'BS Information Technology',
                    'school' => 'Data Center College of the Philippines - Bangued',
                    'year' => 'Expected Graduation: 2027'
                ],
                'senior_high' => [
                    'track' => 'TVL - Information and Communications Technology (ICT)',
                    'school' => 'Data Center College of the Philippines - Bangued',
                    'year' => 'Graduated: 2023'
                ],
                'elementary' => [
                    'school' => 'Bangued Central School',
                    'year' => 'Graduated: 2017'
                ]
            ],
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