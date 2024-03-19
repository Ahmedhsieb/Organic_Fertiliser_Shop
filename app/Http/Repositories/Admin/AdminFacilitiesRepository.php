<?php

namespace App\Http\Repositories\Admin;

use App\Http\Interfaces\Admin\AdminFacilitiesInterface;
use App\Http\Traits\ImagesTrait;
use App\Models\facility;
use Illuminate\Support\Facades\Validator;

class AdminFacilitiesRepository implements AdminFacilitiesInterface
{

    use ImagesTrait;

    public function getFacilities()
    {
        $facilities = facility::get();
        return view('admin.dashboard.facility.facility', compact('facilities'));
    }

    public function addFacilities()
    {
        return view('admin.dashboard.facility.add');
    }

    public function storeFacilities($request)
    {
//        dd($request->title);
        $validation = Validator::make($request->all(), [
            'title' => 'required',
            'desc' => 'required',
            'icon' => 'required',
        ]);

        if($validation->fails()){
            session()->flash('errors', $validation->errors());
          return redirect()->back();
        }


        $fileName =  time() . '_facility.'.$request->icon->extension();
        $this->uploadImage($request->icon, $fileName, 'facilities');


        facility::create([
            'title' => $request->title,
            'desc' => $request->desc,
            'icon' => $fileName,
        ]);

        session()->flash('done', 'Facility Created Successfully!');

        return redirect(route('admin.facility.facility'));
    }

    public function editFacilities($id)
    {
        $facility = facility::find($id);
//        dd('..');
        return view('admin.dashboard.facility.edit', compact('facility'));
    }

    public function updateFacilities($request)
    {

        $validation = Validator::make($request->all(), [
            'id' => 'exists:facilities,id',
            'title' => 'required',
            'desc' => 'required',
        ]);

        if($validation->fails()){
            session()->flash('errors', $validation->errors());
            return redirect()->back();
        }

        $facility = facility::find($request->id);

        if (!is_null($request->icon)){
            $fileName =  time() . '_facility.'.$request->icon->extension();
            $this->uploadImage($request->icon, $fileName, 'facilities', $facility->icon);
        }

        //$facility->icon  ==>  Images/admin/facilities/1696201379_facility.png we need to explode it
        $oldFileName = explode('/', $facility->icon);
        $oldFileName = $oldFileName[3];

        $facility->update([
            'title' => $request->title,
            'desc' => $request->desc,
            'icon' => (isset($fileName)) ? $fileName : $oldFileName
        ]);

        session()->flash('done', 'Facility Updated Successfully!');

        return redirect(route('admin.facility.facility'));
    }

    public function deleteFacilities($id)
    {
        $facility =facility::find($id);
        unlink(public_path($facility->icon));
        $facility->delete();
        session()->flash('done', 'Facility deleted Successfully!');
        return redirect()->back();
    }
}
