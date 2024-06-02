<?php

namespace App\Services\Backend;

use App\Models\Backend\Doctor;
use App\Services\Service;

class DoctorService extends Service
{

    public function store($data)
    {
        $status = Doctor::create($data);
        return $status;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($Doctor,$data)
    {

        $status = $Doctor->update($data);
        return $status;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($Doctor)
    {
        $title = $Doctor->title;
        $status = $Doctor->delete();

        return  $status;
    }
}
