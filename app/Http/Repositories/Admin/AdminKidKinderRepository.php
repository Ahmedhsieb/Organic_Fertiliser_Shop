<?php

namespace App\Http\Repositories\Admin;

use App\Http\Interfaces\Admin\AdminKidKinderInterface;
use App\Http\Traits\ImagesTrait;
use App\Models\kidkinder;
use App\Models\social;
use Illuminate\Support\Facades\Validator;

class AdminKidKinderRepository implements AdminKidKinderInterface
{

    use ImagesTrait;

    public function getData()
    {
        $kidkinder = kidkinder::first();
//        dd($kidkinder->id);
        $socials = social::get();
        return view('admin.dashboard.kidkinder.kidkinder', compact('kidkinder', 'socials'));
    }

    public function editData()
    {
        $kidkinder = kidkinder::first();
//        dd('..');
        return view('admin.dashboard.kidkinder.edit', compact('kidkinder'));
    }

    public function updateData($request)
    {

        $validation = Validator::make($request->all(), [
//            'id' => 'exists:kidkinders,id',
            'address' => 'required',
            'desc' => 'required',
            'open_hours' => 'required',
            'open_days' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);

        if($validation->fails()){
            session()->flash('errors', $validation->errors());
            return redirect()->back();
        }

        $kidkinder = kidkinder::find($request->id);

        if (!is_null($request->img)){
            $fileName =  time() . '_kidkinder.'.$request->img->extension();
            $this->uploadImage($request->img, $fileName, 'Home', $kidkinder->img);
        }

        //$kidkinder->img  ==>  Images/admin/Home/1696201379_kidkinder.png we need to explode it
        $oldFileName = explode('/', $kidkinder->img);
        $oldFileName = $oldFileName[3];

        $kidkinder->update([
            'address' => $request->address,
            'desc' => addslashes($request->desc),
            'open_hours' => $request->open_hours,
            'open_days' => $request->open_days,
            'phone' =>  $request->phone,
            'email' => $request->email,
            'img' => (isset($fileName)) ? $fileName : $oldFileName
        ]);

        session()->flash('done', 'KidKinder Updated Successfully!');

        return redirect(route('admin.kidkinder.kidkinder'));
    }

    public function editSingleData($data)
    {
        $kidkinder = kidkinder::first();

        if ($data == 'about'){
            $kidkinder = $kidkinder->desc;
            $tag = 'Description';
            $col = 'desc';
        }elseif ($data == 'email'){
            $kidkinder = $kidkinder->email;
            $tag = 'Email';
            $col = 'email';
        }elseif ($data == 'phone'){
            $kidkinder = $kidkinder->phone;
            $tag = 'Phone';
            $col = 'phone';
        }elseif ($data == 'open_hours'){
            $kidkinder = $kidkinder->open_hours;
            $tag = 'Open Hours';
            $col = 'open_hours';
        }elseif ($data == 'open_days'){
            $kidkinder = $kidkinder->open_days;
            $tag = 'Open Days';
            $col = 'open_days';
        }

        return view('admin.dashboard.kidkinder.edit_single', compact('kidkinder', 'tag', 'col'));
    }

    public function updateSingleData($request)
    {
        $validation = Validator::make($request->all(), [
            'kidkinder' => 'required'
        ]);

        if($validation->fails()){
            session()->flash('errors', $validation->errors());
            return redirect()->back();
        }

        $kidkinder = kidkinder::first();

        if ($request->data == 'desc'){
            $kidkinder->update([
                'desc' => $request->kidkinder,
            ]);
        }elseif ($request->data == 'email'){
            $kidkinder->update([
                'email' => $request->kidkinder,
            ]);
        }elseif ($request->data == 'phone'){
            $kidkinder->update([
                'phone' => $request->kidkinder,
            ]);
        }elseif ($request->data == 'open_hours'){
            $kidkinder->update([
                'open_hours' => $request->kidkinder,
            ]);
        }elseif ($request->data == 'open_days'){
            $kidkinder->update([
                'open_days' => $request->kidkinder,
            ]);
        }

        session()->flash('done', 'KidKinder Updated Successfully!');

        return redirect(route('admin.kidkinder.kidkinder'));
    }



    ###############################################
    ###########   Social Links   ##################
    ###############################################

    public function addData()
    {
        return view('admin.dashboard.kidkinder.add');
    }

    public function storeData($request)
    {
//        dd($request->title);
        $validation = Validator::make($request->all(), [
            'social_key' => 'required',
            'social_value' => 'required',

        ]);

        if($validation->fails()){
            session()->flash('errors', $validation->errors());
            return redirect()->back();
        }

        social::create([
            'social_key' => strtolower($request->social_key),
            'social_value' => addslashes($request->social_value),
        ]);

        session()->flash('done', 'Social Links Created Successfully!');

        return redirect()->back();
    }
    public function editSocial()
    {
        $socials = social::get();
//        dd('..');
        return view('admin.dashboard.kidkinder.social', compact('socials'));
    }

    public function editSocialData($id)
    {
        $social = social::find($id);
//        dd('..');
        return view('admin.dashboard.kidkinder.edit_social', compact('social'));
    }

    public function updateSocialData($request)
    {
        $validation = Validator::make($request->all(), [
            'social_key' => 'required',
            'social_value' => 'required',

        ]);

        if($validation->fails()){
            session()->flash('errors', $validation->errors());
            return redirect()->back();
        }

        $social = social::find($request->id);

        $social->update([
            'social_key' => strtolower($request->social_key),
            'social_value' => addslashes($request->social_value),
        ]);

        session()->flash('done', 'Social Links Updated Successfully!');

        return redirect(route('admin.kidkinder.edit.social'));
    }

    public function deleteData($id)
    {
        $social =social::find($id);
        $social->delete();
        session()->flash('done', 'Social Link deleted Successfully!');
        return redirect()->back();
    }

}
