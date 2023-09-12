<?php

namespace App\Observers;

use App\Models\Supplier;
use Illuminate\Support\Facades\DB;

class SupplierObserver
{
    /**
     * Handle the Supplier "created" event.
     */
    public function created(Supplier $supplier): void
    {
        foreach(request('sub_service_id') as $id){
            $existingRecord = DB::table('sub_service_supplier')
            ->where('supplier_id', $supplier->id)
            ->where('sub_service_id', $id)
            ->exists();
            if(!$existingRecord){
                $supplier->sub_services()->attach($id);
            }
        }
    }

    /**
     * Handle the Supplier "updated" event.
     */
    public function updated(Supplier $supplier): void
    {
        //
    }

    /**
     * Handle the Supplier "deleted" event.
     */
    public function deleted(Supplier $supplier): void
    {
        //
    }

    /**
     * Handle the Supplier "restored" event.
     */
    public function restored(Supplier $supplier): void
    {
        //
    }

    /**
     * Handle the Supplier "force deleted" event.
     */
    public function forceDeleted(Supplier $supplier): void
    {
        //
    }
}
