<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class HomeControllerTest extends TestCase
{
    use DatabaseMigrations;

    public function test_HomeMyAppointment()
    {
        $adminuser = User::create(['name' => 'Test User', 'email' => 'test@gmail.com', 'password' => '1234']);
        $this->actingAs($adminuser);
        $response = $this->get('/myappointment');
        $response->assertStatus(200);
    }

    public function test_HomeMyOperation()
    {
        $adminuser = User::create(['name' => 'Test User', 'email' => 'test@gmail.com', 'password' => '1234']);
        $this->actingAs($adminuser);
        $response = $this->get('/myoperation');
        $response->assertStatus(200);
    }

    public function test_HomeCancelAppointment()
    {
        $adminuser = User::create(['name' => 'Test User', 'email' => 'test@gmail.com', 'password' => '1234']);
        $this->actingAs($adminuser);
        $response = $this->get('/cancel_appoint/{id}');
        $response->assertStatus(500);
    }

    public function test_HomeCancelOperation()
    {
        $adminuser = User::create(['name' => 'Test User', 'email' => 'test@gmail.com', 'password' => '1234']);
        $this->actingAs($adminuser);
        $response = $this->get('/cancel_operation/{id}');
        $response->assertStatus(500);
    }

    public function test_HomeAppointment()
    {
        $adminuser = User::create(['name' => 'Test User', 'email' => 'test@gmail.com', 'password' => '1234']);
        $this->actingAs($adminuser);
        $response = $this->post('/appointment', array(
            'name' => 'Test Doctor',
            'number' => '1234',
            'email' => 'test@gmail.com',
            'message' => 'abcd',
            'doctor' => 'test',
            'status' => 'null',
            'date' => '301'
        ));
        $response->assertStatus(419);
    }
    public function test_HomeOperation()
    {
        $adminuser = User::create(['name' => 'Test User', 'email' => 'test@gmail.com', 'password' => '1234']);
        $this->actingAs($adminuser);
        $response = $this->post('/operation', array(
            'name' => 'Test Doctor',
            'number' => '1234',
            'email' => 'test@gmail.com',
            'message' => 'abcd',
            'doctor' => 'test',
            'status' => 'null',
            'date' => '301'
        ));
        $response->assertStatus(419);
    }


}
