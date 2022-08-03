<?php

namespace App\Http\Controllers;

class PersonController extends Controller
{
    public function index()
    {
        $persons = [
            [
                'id' => 1,
                'name' => 'Us1',
                'age' => 21,
                'job' => 'j1'
            ],
            [
                'id' => 2,
                'name' => 'Us2',
                'age' => 25,
                'job' => 'j2'
            ],
            [
                'id' => 3,
                'name' => 'Us3',
                'age' => 23,
                'job' => 'j3'
            ],
            [
                'id' => 4,
                'name' => 'Us4',
                'age' => 40,
                'job' => 'j4'
            ],
        ];
        return $persons;
    }
}
