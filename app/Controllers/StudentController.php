<?php

namespace App\Controllers;
use App\Models\StudentModel;

class StudentController extends BaseController
{
    public function index()
    {
        $student = new StudentModel();
        $data['students'] = $student->findAll();
        return view('students/index',$data);
    }
    public function create()
    {
        return view('students/create');
    }
    public function store()
    {
        $student = new StudentModel();
        $data = [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'phone' => $this->request->getPost('phone'),
            'course' => $this->request->getPost('course')
        ];
        $student->save($data);
        session()->setFlashdata('status_text', 'Your student data has been added');
        return redirect('/')
            ->with('status_icon', 'success')
            ->with('status','Student Added Success!!!');
    }
    public function edit($id = null)
    {
        $student = new StudentModel();
        $data['student'] = $student->find($id);
        return view('students/edit',$data);
    }
    public function update($id = null)
    {
        $student = new StudentModel();
        $data = [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'phone' => $this->request->getPost('phone'),
            'course' => $this->request->getPost('course')
        ];
        $student->update($id,$data);
        session()->setFlashdata('status_text', 'Your student Data has been updated');
        return redirect()->to(base_url('/'))
            ->with('status_icon', 'success')
            ->with('status', 'Student Updated Successfully!!!');
    }
    public function delete($id = null)
    {
        $student = new StudentModel();
        $student->delete($id);
        session()->setFlashdata('status_text', 'Your student Data has been deleted');
        return redirect()->back()
            ->with('status_icon', 'error')
            ->with('status', 'Student Deleted Successfully!!!');
    }
}