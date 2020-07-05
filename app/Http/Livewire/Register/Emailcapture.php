<?php

namespace App\Http\Livewire\Register;

use App\models\Contact;
use Livewire\Component;
use App\Jobs\SendContactEmailJob;
use Spatie\Mailcoach\Models\EmailList;
use Spatie\Mailcoach\Models\Subscriber;

class Emailcapture extends Component
{
    public $email='';
    public $data;

    public function render()
    {
        return view('livewire.register.emailcapture');
    }
    public function register()
    {
        $data = $this->validate([
            'email' => 'required|email|unique:contacts',
        ]);

        //  Contact::create([
        //      'email' => $data['email'],
        //   ]);
        $emailList = EmailList::first();
        
        Subscriber::createWithEmail($data['email'])->subscribeTo($emailList);

       // dispatch(new SendContactEmailJob($data));
        
        return redirect('/');
    }
}
