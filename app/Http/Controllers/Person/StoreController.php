<?php

namespace App\Http\Controllers\Person;

use App\Http\Controllers\Controller;
use App\Http\Requests\Person\StoreRequest;
use App\Http\Requests\Person\UpdateRequest;
use App\Models\Person;

class StoreController extends Controller
{
    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        $person = Person::create($data);
        return $person;
    }
}
