<?php

namespace App\Services\Backend;

use App\Models\Backend\District;
use App\Services\Service;

class DistrictService extends Service
{

    public function store($data)
    {
        $status = District::create($data);
        return $status;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($District,$data)
    {

        $status = $District->update($data);
        return $status;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($District)
    {
        $title = $District->title;
        $status = $District->delete();

        return  $status;
    }
}
