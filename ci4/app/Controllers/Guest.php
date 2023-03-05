<?php
namespace App\Controllers;
use App\Models\GuestModel;
class Guest extends BaseController
{
    public function index()
    {
        $model = model(GuestModel::class);
		$data = [
            'guest'  => $model->getGuest(),
            'title' => 'This is My Masterclass',
        ];
        return view('templates/header', $data)
             . view('pages/Masterclass')
             . view('templates/footer');
    }
    public function create()
    {
        helper('form');

        // Checks whether the form is submitted.
        if (! $this->request->is('post')) {
            // The form is not submitted, so returns the form.
            return view('templates/header', ['title' => 'Join The Masterclass'])
                . view('pages/Validation')
                . view('templates/footer');
        }

        $post = $this->request->getPost(['NAME', 'EMAIL', 'WEBSITE', 'COMMENT', 'GENDER']);

        // Checks whether the submitted data passed the validation rules.
        if (! $this->validateData($post, [
            'NAME' => 'required|max_length[255]|min_length[3]',
            'EMAIL' => 'required|max_length[255]|min_length[3]',
            'WEBSITE' => 'required|max_length[255]|min_length[3]',			
            'COMMENT'  => 'required|max_length[5000]|min_length[10]',
            'GENDER' => 'required|max_length[255]|min_length[3]',			
        ])) {
            // The validation fails, so returns the form.
            return view('templates/header', ['title' => 'Join The Masterclass'])
                . view('pages/Validation')
                . view('templates/footer');
        }

        $model = model(GuestModel::class);

        $model->save([
            'NAME' => $post['NAME'],
            'EMAIL'  => $post['EMAIL'],
            'WEBSITE'  => $post['WEBSITE'],
            'COMMENT'  => $post['COMMENT'],
            'GENDER'  => $post['GENDER'],
        ]);

        return view('templates/header', ['title' => 'Join The Masterclass'])
            . view('pages/masterclass')
            . view('templates/footer');
    }
}