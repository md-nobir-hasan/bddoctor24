<?php

namespace App\Services\Backend;

use App\Models\Backend\Degree;
use App\Services\Service;

class DegreeService extends Service
{

    public function store($data)
    {
        $status = Degree::create($data);
        return $status;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($Degree,$data)
    {

        $status = $Degree->update($data);
        return $status;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($Degree)
    {
        $title = $Degree->title;
        $status = $Degree->delete();

        return  $status;
    }
}
