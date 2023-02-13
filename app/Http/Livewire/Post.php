<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post as Posts;
class Post extends Component
{
    public $posts, $lastname, $firstname,$address, $year, $course, $post_id;
    public $updatePost = false;

    protected $listeners = [
        'deletePost'=>'destroy'
    ];

    // Validation Rules
    protected $rules = [
        'lastname'        =>'required',
        'firstname'       =>'required',
        'address'         =>'required',
        'year'            =>'required',
        'course'          =>'required'

    ];

    public function render()
    {
        $this->posts = Posts::select('id','lastname','firstname','address','year','course')->get();
        return view('livewire.post');
    }

    public function resetFields(){
        $this->lastname = '';
        $this->firstname = '';
        $this->address = '';
        $this->year= '';
        $this->course = '';
    }

    public function store(){

        // Validate Form Request
        $this->validate();

        try{
            // Create Post
            Posts::create([
                'lastname'=>$this->lastname,
                'firstname'=>$this->firstname,
                'address'=>$this->address,
                'year'=>$this->year,
                'course'=>$this->course


            ]);

            // Set Flash Message
            session()->flash('success','List of Student Created Successfully!!');

            // Reset Form Fields After Creating Post
            $this->resetFields();
        }catch(\Exception $e){
            // Set Flash Message
            session()->flash('error','Something goes wrong while creating post!!');

            // Reset Form Fields After Creating Post
            $this->resetFields();
        }
    }

    public function edit($id){
        $post = Posts::findOrFail($id);
        $this->lastname = $post->lastname;
        $this->firstname = $post->firstname;
        $this->address = $post->address;
        $this->year = $post->year;
        $this->course = $post->course;
        $this->post_id = $post->id;
        $this->updatePost = true;
    }

    public function cancel()
    {
        $this->updatePost = false;
        $this->resetFields();
    }

    public function update(){

        // Validate request
        $this->validate();

        try{

            // Update post
            Posts::find($this->post_id)->fill([
                'lastname'=>$this->lastname,
                'firstname'=>$this->firstname,
                'address'=>$this->address,
                'year'=>$this->year,
                'course'=>$this->course

            ])->save();

            session()->flash('success','List of student Updated Successfully!!');

            $this->cancel();
        }catch(\Exception $e){
            session()->flash('error','Something goes wrong while updating post!!');
            $this->cancel();
        }
    }

    public function destroy($id){
        try{
            Posts::find($id)->delete();
            session()->flash('success',"List of Student Deleted Successfully!!");
        }catch(\Exception $e){
            session()->flash('error',"Something goes wrong while deleting post!!");
        }
    }
}
