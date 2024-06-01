<?php

namespace App\Services\Backend;

use App\Models\Backend\ConsultantType;
use App\Services\Service;

class ConsultantTypeService extends Service
{

    public function store($data)
    {
        $status = ConsultantType::create($data);
        return $status;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($ConsultantType,$data)
    {

        $status = $ConsultantType->update($data);
        return $status;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($ConsultantType)
    {
        $title = $ConsultantType->title;
        $status = $ConsultantType->delete();

        return  $status;
    }
}
