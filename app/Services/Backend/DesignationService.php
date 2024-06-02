<?php

namespace App\Services\Backend;

use App\Models\Backend\Designation;
use App\Services\Service;

class DesignationService extends Service
{

    public function store($data)
    {
        $status = Designation::create($data);
        return $status;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($Designation,$data)
    {

        $status = $Designation->update($data);
        return $status;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($Designation)
    {
        $title = $Designation->title;
        $status = $Designation->delete();

        return  $status;
    }
}
