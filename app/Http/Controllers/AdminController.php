<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Reservation;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function reservations()
    {
        $res_today = Reservation::whereDay('res_date', now()->day)->get();
        $res_all =Reservation::get();

        return view('reservations',compact('res_today','res_all'));
    }
    protected function add_reservations(Request $request)
    {
        $rules = [
            'time' => 'required',
            'name' => 'required',
            'phone' => 'required',

        ];

        $customMessages = [
            'name.required' => 'Ad Soyad girmelisiniz.',
            'time.required' => 'Saati girmelisiniz.',
            'phone.required' => 'Telefon girmelisiniz',

        ];


        $this->validate($request, $rules, $customMessages);

        $reservation = new Reservation();
        $reservation->name = $request->name;
        $reservation->time = $request->time;
        $reservation->guest_number = $request->guest_number;
        $reservation->email = $request->email;
        $reservation->phone = $request->phone;
        $reservation->message = $request->message;
        $res_date = $request->res_date;
        $res_date = date('Y-m-d', strtotime($res_date));
        $reservation->res_date = $res_date;
        $save = $reservation->save();

        if($save){
                return back()->with('success', 'Rezervasyon oluşturuldu!');

        }

        return back()->with('danger', 'Hiç beklenmeyen bir hata oluştu. Lütfen yeniden deneyiniz.!');

    }
    protected function edit_reservations($id)
{
    $res = Reservation::find($id);

    return view('reservation-edit',compact('res'));

}
    protected function edit_reservation(Request $request,$id)
    {


        $reservation = Reservation::find($id);
        $reservation->name = $request->name;
        $reservation->time = $request->time;
        $reservation->guest_number = $request->guest_number;
        $reservation->email = $request->email;
        $reservation->phone = $request->phone;
        $reservation->message = $request->message;
        $res_date = $request->res_date;
        $res_date = date('Y-m-d', strtotime($res_date));
        $reservation->res_date = $res_date;
        $save = $reservation->save();

        if($save){
            return back()->with('success', 'Rezervasyon değiştirildi.');

        }

        return back()->with('danger', 'Hiç beklenmeyen bir hata oluştu. Lütfen yeniden deneyiniz.!');


    }
    protected function delete_reservations($id)
    {
        $res = Reservation::destroy($id);


        if($res){
            return back()->with('success', 'Rezervasyon silindi!');

        }

        return back()->with('danger', 'Hiç beklenmeyen bir hata oluştu. Lütfen yeniden deneyiniz.!');


    }
    public function test()
    {

        return view('resources.form-advanced');
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
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function show(Menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function edit(Menu $menu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menu $menu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu)
    {
        //
    }
}
