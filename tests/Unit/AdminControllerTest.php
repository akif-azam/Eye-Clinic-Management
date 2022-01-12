<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class AdminController extends TestCase
{
    use DatabaseMigrations;

    public function test_AdminAddView()
    {
        $adminuser = User::create(['name'=>'Test User', 'email'=>'test@gmail.com', 'password'=>'1234']);
        $this->actingAs($adminuser);
        $response = $this->get('/add_doctor_view');
        $response->assertStatus(200);
    }
    public function test_showappointment()
    {
        $adminuser = User::create(['name' => 'Test User', 'email' => 'test@gmail.com', 'password' => '1234']);
        $this->actingAs($adminuser);
        $response = $this->get('/showappointment');
        $response->assertStatus(200);
    }

    public function test_showdoctor()
    {
        $adminuser = User::create(['name' => 'Test User', 'email' => 'test@gmail.com', 'password' => '1234']);
        $this->actingAs($adminuser);
        $response = $this->get('/showdoctor');
        $response->assertStatus(200);
    }

    public function test_showoperation()
    {
        $adminuser = User::create(['name' => 'Test User', 'email' => 'test@gmail.com', 'password' => '1234']);
        $this->actingAs($adminuser);
        $response = $this->get('/showoperation');
        $response->assertStatus(200);
    }

    public function test_approve()
    {
        $adminuser = User::create(['name' => 'Test User', 'email' => 'test@gmail.com', 'password' => '1234']);
        $this->actingAs($adminuser);
        $response = $this->get('/approve/{id}');
        $response->assertStatus(500);
    }

    public function test_cancel()
    {
        $adminuser = User::create(['name' => 'Test User', 'email' => 'test@gmail.com', 'password' => '1234']);
        $this->actingAs($adminuser);
        $response = $this->get('/cancelled/{id}');
        $response->assertStatus(500);
    }

    public function test_deletedoctor()
    {
        $adminuser = User::create(['name' => 'Test User', 'email' => 'test@gmail.com', 'password' => '1234']);
        $this->actingAs($adminuser);
        $response = $this->get('/deletedoctor/{id}');
        $response->assertStatus(500);
    }

    public function test_updatedoctor()
    {
        $adminuser = User::create(['name' => 'Test User', 'email' => 'test@gmail.com', 'password' => '1234']);
        $this->actingAs($adminuser);
        $response = $this->get('/updatedoctor/{id}');
        $response->assertStatus(500);
    }

    public function test_AdminUploadDoctor()
    {
        $adminuser = User::create(['name'=>'Test User', 'email'=>'test@gmail.com', 'password'=>'1234']);
        $this->actingAs($adminuser);
        $response = $this->post('/upload_doctor', array(
            'name'=>'Test Doctor',
            'number'=>'1234',
            'speciality'=>'Killing',
            'room'=>'301'
        ));
        $response->assertStatus(419);
    }

    public function test_editdoctor()
    {
        $adminuser = User::create(['name' => 'Test User', 'email' => 'test@gmail.com', 'password' => '1234']);
        $this->actingAs($adminuser);
        $response = $this->post('/editdoctor/{id}', array(
            'name' => 'Test Doctor',
            'number' => '1234',
            'speciality' => 'HEaling',
            'room' => '301'
        ));
        $response->assertStatus(419);
    }
}
