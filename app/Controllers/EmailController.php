<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Email;
use CodeIgniter\HTTP\IncomingRequest;
use Config\View;

class EmailController extends BaseController
{
    public function index()
    {
        $emailModel = model(Email::class);
        $data['emails'] = $emailModel->getAllEmails();

        $data = [
            'emails' => $emailModel->getAllEmails(),
            'title' => "Emails",
        ];

        return (View('templates/header', $data) . View('email/index') . View('templates/footer'));
    }

    public function show($emailId) {
        $emailModel = model(Email::class);
        $data['email'] = $emailModel->getEmailById($emailId);
        return view('/email/view', $data);
    }


    public function edit($emailId) {
        $emailModel = model(Email::class);
        $data['email'] = $emailModel->getEmailById($emailId);

        return view('email/update', $data);
    }

    public function update($id) {
        // Get the data from the request.
        $postRequestData = $this->request->getPost(['to', 'from' ,'title', 'body']);

        $emailModel = model(Email::class);
        $emailModel->update($id ,[
            'to' => $postRequestData['to'],
            'from' => $postRequestData['from'],
            'title' => $postRequestData['title'],
            'body'  => $postRequestData['body'],
        ]);
        return redirect()->to('/email');
    }
    public function create() {
        helper('form');
        return view('/email/create');
    }

    public function store() {
        helper('form');

        $postRequestData = $this->request->getPost(['to', 'from' ,'title', 'body']);

        if (! $this->validateData($postRequestData, [
            'to' => 'min_length[3]|max_length[255]|valid_email|required',
            'from' => 'min_length[3]|max_length[255]|valid_email|required',
            'title' => 'required|min_length[3]|max_length[255]',
            'body'  => 'required|max_length[5000]|min_length[10]',
        ])) {
            // The validation fails, so returns the form.
            return view('email/create');
        }
        $emailModel = model(Email::class);

        $emailModel->save([
            'to' => $postRequestData['to'],
            'from' => $postRequestData['from'],
            'title' => $postRequestData['title'],
            'body'  => $postRequestData['body'],
        ]);

        return view('email/success_message');
    }

    public function destroy($emailId) {
        $emailModel = model(Email::class);
        $emailModel->deleteEmailById($emailId);

        return redirect()->to('/email');
    }
}