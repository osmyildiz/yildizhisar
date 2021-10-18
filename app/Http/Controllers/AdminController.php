<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contact;
use App\Models\Form;
use App\Models\Menu;
use App\Models\Newsletter;
use App\Models\Reservation;
use Illuminate\Contracts\Session\Session;
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
        $res_today = Reservation::whereDay('res_date', now()->day)->paginate(10);
        $res_all =Reservation::get();

        return view('admin-reservations',compact('res_today','res_all'));
    }
    public function admin_forms()
    {
        $all_forms = Form::orderBy('created_at','DESC')->paginate(20);


        return view('admin-forms',compact('all_forms'));
    }
    public function admin_newsletter()
    {
        $all_newsletter = Newsletter::orderBy('created_at','DESC')->paginate(20);


        return view('admin-newsletter',compact('all_newsletter'));
    }
    public function admin_menu()
    {
        $menu_all = Menu::orderBy('category','ASC')->paginate(30); ;
        

        return view('admin-menu',compact('menu_all'));
    }
    public function admin_about()
    {
        $about = About::find(1);


        return view('admin-about',compact('about'));
    }
    public function admin_contact()
    {
        $contact = Contact::find(1);


        return view('admin-contact',compact('contact'));
    }
    public function add_reservations(Request $request)
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
    public function add_menu(Request $request)
    {


        $menu = new Menu();
        $menu->name = $request->name;
        $menu->category = $request->category;
        $menu->price = $request->rice;
        $menu->description = $request->description;
        $save = $menu->save();

        if($save){
                return back()->with('success', 'Menu eklendi!');

        }

        return back()->with('danger', 'Hiç beklenmeyen bir hata oluştu. Lütfen yeniden deneyiniz.!');

    }
    public function add_reservation_web(Request $request)
    {

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

            return redirect()->back()->with(['message' => 'Rezervasyon oluşturuldu!', 'alert' => 'success']);

        }
        return redirect()->back()->with(['message' => 'beklenmeyen bir hata oluştu. Lütfen yeniden deneyiniz.!', 'alert' => 'danger']);

    }
    public function add_form_web(Request $request)
    {

        $form = new Form();
        $form->name = $request->name;
        $form->surname = $request->surname;
        $form->email = $request->email;
        $form->phone = $request->phone;
        $form->message = $request->message;
        $save = $form->save();

        if($save){

            return redirect()->back()->with(['message' => 'Mesajınız iletildi!', 'alert' => 'success']);

        }
        return redirect()->back()->with(['message' => 'Beklenmeyen bir hata oluştu. Lütfen yeniden deneyiniz.!', 'alert' => 'danger']);

    }
    public function add_newsletter(Request $request)
    {
        $check_email = Newsletter::where('email',$request->email)->first();
        if($check_email->count()>0){
            $scroll = true;
            return redirect(url()->previous() .'#email')->with(['message' => 'Emailiniz kaydedildi.', 'alert' => 'warning'])->with('scroll',$scroll);
        }else{
            $newsletter = new Newsletter();
            $newsletter->email = $request->email;
            $save = $newsletter->save();

            if($save){

                return redirect()->back()->with(['message' => 'Emailiniz kaydedildi.', 'alert' => 'success']);

            }
            return redirect()->back()->with(['message' => 'Beklenmeyen bir hata oluştu. Lütfen yeniden deneyiniz.!', 'alert' => 'danger']);

        }

    }
    public function edit_reservations($id)
{
    $res = Reservation::find($id);

    return view('reservation-edit',compact('res'));

}
    public function edit_menu($id)
{
    $res = Menu::find($id);

    return view('menu-edit',compact('res'));

}
    public function edit_reservation(Request $request,$id)
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
    public function update_menu(Request $request,$id)
    {


        $menu = Menu::find($id);
        $menu->name = $request->name;
        $menu->category = $request->category;
        $menu->price = $request->price;
        $menu->description =$request->description;

        $save = $menu->save();

        if($save){
            return back()->with('success', 'Menu güncellendi.');

        }

        return back()->with('danger', 'Hiç beklenmeyen bir hata oluştu. Lütfen yeniden deneyiniz.!');


    }
    public function update_about_page(Request $request)
    {


        $about = About::find(1);
        $about->about_first_text_tr = $request->about_first_text_tr;
        $about->about_first_text_en = $request->about_first_text_en;
        $about->middle_text_tr = $request->middle_text_tr;
        $about->middle_text_en = $request->middle_text_en;

        if($request->hasFile('img1')){
            $id = mt_rand(1000, 9999);
            $imageName = $id."_".time().'.'.$request->img1->extension();

        $request->img1->move(public_path('img'), $imageName);
        $about->img1 = "/img/".$imageName;
        }
        if($request->hasFile('img2')){
            $id = mt_rand(1000, 9999);
            $imageName = $id."_".time().'.'.$request->img2->extension();

            $request->img2->move(public_path('img'), $imageName);
            $about->img2 = "/img/".$imageName;
        }
        if($request->hasFile('img3')){
            $id = mt_rand(1000, 9999);
            $imageName = $id."_".time().'.'.$request->img3->extension();

            $request->img3->move(public_path('img'), $imageName);
            $about->img3 = "/img/".$imageName;
        }

        $save = $about->save();

        if($save){
            return back()->with('success', 'Hakkımızda sayfası güncellendi.');

        }

        return back()->with('danger', 'Hiç beklenmeyen bir hata oluştu. Lütfen yeniden deneyiniz.!');


    }
    public function update_contact_page(Request $request)
    {


        $contact = Contact::find(1);
        $contact->working_hours_weekdays_tr = $request->working_hours_weekdays_tr;
        $contact->working_hours_weekdays_en = $request->working_hours_weekdays_en;
        $contact->working_hours_weekend_tr = $request->working_hours_weekend_tr;
        $contact->working_hours_weekend_en = $request->working_hours_weekend_en;
        $contact->phone = $request->phone;
        $contact->address = $request->address;
        $contact->contact_us_email_1 = $request->contact_us_email_1;
        $contact->contact_us_email_text_tr_1 = $request->contact_us_email_text_tr_1;
        $contact->contact_us_email_text_en_1 = $request->contact_us_email_text_en_1;
        $contact->contact_us_email_2 = $request->contact_us_email_2;
        $contact->contact_us_email_text_tr_2 = $request->contact_us_email_text_tr_2;
        $contact->contact_us_email_text_en_2 = $request->contact_us_email_text_en_2;

        $save = $contact->save();

        if($save){
            return back()->with('success', 'İletişim sayfası güncellendi.');

        }

        return back()->with('danger', 'Hiç beklenmeyen bir hata oluştu. Lütfen yeniden deneyiniz.!');


    }
    public function delete_reservations($id)
    {
        $res = Reservation::destroy($id);


        if($res){
            return back()->with('success', 'Rezervasyon silindi!');

        }

        return back()->with('danger', 'Hiç beklenmeyen bir hata oluştu. Lütfen yeniden deneyiniz.!');


    }
    public function delete_menu($id)
    {
        $res = Menu::destroy($id);


        if($res){
            return back()->with('success', 'Menu silindi!');

        }

        return back()->with('danger', 'Hiç beklenmeyen bir hata oluştu. Lütfen yeniden deneyiniz.!');


    }
    public function test()
    {

        return view('resources.tables-responsive');
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
