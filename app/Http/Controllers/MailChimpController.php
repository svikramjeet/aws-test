<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Config;

class MailChimpController extends Controller
{

    public $list_id = 'b1321fe9f5';

    public function subscribe(Request $request)
    {
        $request->validate($request, [
        	'email' => 'required|email',
        ]);
        $input = $request->all();
        $data = [
            'email'     => $input['email'],
            'status'    => 'subscribed',
            'first_name' => $input['first_name']??'',
            'last_name'  => $input['last_name']??''
        ];
        
        $mailchimp_response = $this->syncMailchimp($data);
        if($mailchimp_response == 200){
            return redirect()->back()->with('success','Email Subscribed successfully');
        }
        return redirect()->back()->with('error','Error from MailChimp');

    }
    
    public function syncMailchimp($data) {
        $apiKey = getenv("MAILCHIMP_APIKEY");
    
        $memberId = md5(strtolower($data['email']));
        $dataCenter = substr($apiKey,strpos($apiKey,'-')+1);
        $url = 'https://' . $dataCenter . '.api.mailchimp.com/3.0/lists/' . $this->list_id . '/members/' . $memberId;
    
        $json = json_encode([
            'email_address' => $data['email'],
            'status_if_new'        => $data['status'], // "subscribed","unsubscribed","cleaned","pending"
            'merge_fields'  => [
                'FNAME'     => $data['first_name'],
                'LNAME'     => $data['last_name']
            ]
        ]);
        $ch = curl_init($url);
    
        curl_setopt($ch, CURLOPT_USERPWD, 'user:' . $apiKey);
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $json);                                                                                                                 
    
        $result = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
    
        return $httpCode;
    }

}