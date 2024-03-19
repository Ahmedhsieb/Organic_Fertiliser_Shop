<?php

namespace App\Http\Repositories\Admin;

use App\Http\Interfaces\Admin\AdminContactsInterface;
use App\Models\contact;

class AdminContactsRepository implements AdminContactsInterface
{

    public function getContact()
    {
        $contacts = contact::get();
        return view('admin.dashboard.contact.contact', compact('contacts'));
    }

    public function deleteContact($id)
    {
        $contact =contact::find($id);
        $contact->delete();
        session()->flash('done', 'Review deleted Successfully!');
        return redirect()->back();
    }
}
