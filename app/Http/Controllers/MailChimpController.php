<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Config;

class MailChimpController extends Controller
{

    public $mailchimp;
    public $list_id = 'b1321fe9f5';

    public function __construct(\Mailchimp $mailchimp)
    {
        $this->mailchimp = $mailchimp;
    }

    // public function subscribe(Request $request)
    // {
    // 	$this->validate($request, [
	//     	'email' => 'required|email',
    //     ]);

    //     try {

        	
    //         $this->mailchimp
    //         ->lists
    //         ->subscribe(
    //             $this->list_id,
    //             ['email' => $request->input('email')]
    //         );

    //         return redirect()->back()->with('success','Email Subscribed successfully');

    //     } catch (\Mailchimp_List_AlreadySubscribed $e) {
    //         return redirect()->back()->with('error','Email is Already Subscribed');
    //     } catch (\Mailchimp_Error $e) {
    //         return redirect()->back()->with('error','Error from MailChimp');
    //     }
    // }

    public function subscribe()
    {
       	
            $abc = $this->mailchimp
            ->lists
            ->subscribe(
                $this->list_id,
                ['email' => 'sandeepkaur@ucreate.co.in']
            );
            print_r($abc);exit;
            return redirect()->back()->with('success','Email Subscribed successfully');

    }

}