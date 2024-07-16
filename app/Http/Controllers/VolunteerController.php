<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\User;
use App\Models\Volunteer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VolunteerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $volunteer_data = Volunteer::where('user_id', Auth::id())->first();
        return view('Users.Volunteer.volunteerIndex')->with(['volunteerData' => $volunteer_data]);
    }

    public function viewAllMenu()
    {
        $menuData = Menu::all();
        return view('Users.Volunteer.memberMenu')->with(['menuData' => $menuData]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    //GET UPDATE PROFILE
    public function updateProfile($user_id){
        $volunteerData = Volunteer::where('user_id', $user_id)->First();
        $userData = User::where('id', $user_id)->First();

        return view('Users.Volunteer.updateVolunteer2')->with(['volunteerData' => $volunteerData, 'userData' => $userData, ]);
    }
    
    public function saveProfile(Request $request, $user_id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer',
            'gender' => 'required|integer',
            'volunteer_vaccination' => 'required|integer',
            'volunteer_duration' => 'required|string|max:255',
            'volunteer_available' => 'required|array',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:255',
        ]);

        // Update User
        $user = User::where('id', $user_id)->first();
        $user->name = $validated['name'];
        $user->age = $validated['age'];
        $user->gender = $validated['gender'];
        $user->email = $validated['email'];
        $user->phone = $validated['phone'];
        $user->save();

        // Update Volunteer
        $volunteer = Volunteer::where('user_id', $user_id)->first();
        $volunteer->volunteer_vaccination = $validated['volunteer_vaccination'];
        $volunteer->volunteer_duration = $validated['volunteer_duration'];
        $volunteer->volunteer_available = json_encode($validated['volunteer_available']);
        $volunteer->save();

        return redirect()->route('volunteer#updateProfile', $user_id)->with('success', 'Profile updated successfully');
    }
}