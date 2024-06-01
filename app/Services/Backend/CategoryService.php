<?php

namespace App\Services\Backend;

use App\Models\Backend\Category;
use App\Services\Service;

class CategoryService extends Service
{

    public function store($data)
    {
        $status = Category::create($data);
        return $status;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($Category,$data)
    {

        $status = $Category->update($data);
        return $status;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($Category)
    {
        $title = $Category->title;
        $status = $Category->delete();

        return  $status;
    }
}
