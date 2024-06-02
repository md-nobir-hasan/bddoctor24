<?php

namespace App\Services\Backend;

use App\Models\Backend\Chamber;
use App\Services\Service;

class ChamberService extends Service
{

    public function store($data)
    {
        $status = Chamber::create($data);
        return $status;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($Chamber,$data)
    {

        $status = $Chamber->update($data);
        return $status;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($Chamber)
    {
        $title = $Chamber->title;
        $status = $Chamber->delete();

        return  $status;
    }
}
