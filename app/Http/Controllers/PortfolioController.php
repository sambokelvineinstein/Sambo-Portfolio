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
            'email' => 'sambokelvin636@gmail.com',
            'phone' => '+63 920 619 7123',
            'github' => 'https://github.com/sambokelvineinstein/Sambo-Portfolio',
            'education' => [
                'college' => [
                    'program' => 'BS Information Technology',
                    'school' => 'Data Center College of the Philippines - Bangued',
                    'year' => 'Expected Graduation: 2027'
                ],
                'senior_high' => [
                    'track' => 'HUMSS - Humanities and Social Sciences',
                    'school' => 'Little Flower High School',
                    'year' => 'Graduated: 2021'
                ],
                'elementary' => [
                    'school' => 'Calot Elementary School',
                    'year' => 'Graduated: 2015'
                ]
            ],
            'skills' => ['PHP', 'Laravel', 'MySQL', 'JavaScript', 'Tailwind CSS', 'VB.NET', 'Git & GitHub'],
            'certifications' => [
                'Online Safety Through Netiquette - DICT Region II Webinar',
            ]
        ];

        return view('portfolio', compact('profile'));
    }
}