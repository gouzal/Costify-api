<?php

namespace App\Repositories\Interfaces;

use Illuminate\Http\Request;

interface IRepository
{

    public function all(Request $request);

    public function store(Request $request);

    public function update(Request $request, $id);

    public function destroy($id);

    public function show($id);

}
