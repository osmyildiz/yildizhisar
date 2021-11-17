<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Campaign;
use App\Models\Contact;
use App\Models\Events;
use App\Models\FoodType;
use App\Models\Form;
use App\Models\Menu;
use App\Models\New_Campaign;
use App\Models\Newsletter;
use App\Models\Offer;
use App\Models\Photo;
use App\Models\PhotoCategory;
use App\Models\Reservation;
use App\Models\Wedding;
use Faker\Provider\Image;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;



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
        $menu_all = Menu::orderBy('category','ASC')->paginate(30);
        $kategori_all = FoodType::orderBy('priority','ASC')->get();
        

        return view('admin-menu',compact('menu_all','kategori_all'));
    }
    public function admin_about()
    {
        $about = About::find(1);


        return view('admin-about',compact('about'));
    }
    public function admin_campaign1()
    {
        $campaign = Campaign::find(1);


        return view('admin-campaign1',compact('campaign'));
    }
    public function admin_campaign_new()
    {
        $campaigns = New_Campaign::orderBy('priority','ASC')->get();


        return view('admin-campaign',compact('campaigns'));
    }
    public function admin_wedding()
    {
        $weddings = Wedding::get();


        return view('admin-weddings',compact('weddings'));
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
        $menu->name_tr = $request->name_tr;
        $menu->name_en = $request->name_en;
        $menu->category = $request->category;
        $menu->price_tl = $request->price_tr;
        $menu->price_usd = $request->price_en;
        $menu->description_tr = $request->description_tr;
        $menu->description_en = $request->description_en;
        $save = $menu->save();

        if($save){
                return back()->with('success', 'Menu eklendi!');

        }

        return back()->with('danger', 'Hiç beklenmeyen bir hata oluştu. Lütfen yeniden deneyiniz.!');

    }
    public function add_foodtype(Request $request)
    {


        $foodtype = new FoodType();
        $foodtype->name_tr = $request->name_tr;
        $foodtype->name_en = $request->name_en;
        $foodtype->priority = $request->priority;

        $save = $foodtype->save();

        if($save){
            return back()->with('success', 'Kategori eklendi!');

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

        $data = [
            'subject' => 'İletişim Formu',
            'email1' => $request->email,
            'email' => "info@yildizhisar.com",
            'name' => $request->name,
            'surname' => $request->surname,
            'phone' => $request->phone,
            'message1' => $request->message,
        ];


        Mail::send('frontend.emailcontact', $data, function ($message) use ($data) {
            $message->to($data['email'])
                ->subject($data['subject']);
        });


        if($save){

            return redirect()->back()->with(['message' => 'Mesajınız iletildi!', 'alert' => 'success']);

        }
        return redirect()->back()->with(['message' => 'Beklenmeyen bir hata oluştu. Lütfen yeniden deneyiniz.!', 'alert' => 'danger']);

    }
    public function offer_form(Request $request)
    {

        $offer = new Offer();
        $offer->res_date = $request->res_date;
        $offer->name = $request->name.' '.$request->surname;

        $offer->email = $request->email;
        $offer->time = "";
        $offer->guest_number = $request->guest_number;
        $offer->phone = $request->phone;
        $offer->message = $request->message;
        $offer->offer_name = $request->offer_name;
        $save = $offer->save();

        $data = [
            'subject' => $request->offer_name.' Formu',
            'email1' => $request->email,
            'email' => "info@yildizhisar.com",
            'name' => $request->name.' '.$request->surname,

            'phone' => $request->phone,
            'message1' => $request->message,
            'offer_name' => $request->offer_name,
            'guest_number' => $request->guest_number,
            'res_date' => $request->res_date,

        ];


        Mail::send('frontend.emailoffer', $data, function ($message) use ($data) {
            $message->to($data['email'])
                ->subject($data['subject']);
        });


        if($save){

            return redirect()->back()->with(['message' => 'Mesajınız iletildi, Müşteri temsilcimiz sizinle en kısa zamanda iletişime geçecektir.', 'alert' => 'success']);

        }
        return redirect()->back()->with(['message' => 'Beklenmeyen bir hata oluştu. Lütfen yeniden deneyiniz.!', 'alert' => 'danger']);

    }
    public function add_newsletter(Request $request)
    {

        $check_email = Newsletter::where('email',$request->email)->first();

        if($check_email){
            if($check_email->count()>0){
                $scroll = true;
                return redirect(url()->previous() .'#email')->with(['message1' => 'Emailiniz kaydedildi.', 'alert' => 'warning'])->with('scroll',$scroll);

                }
            }else{
            $newsletter = new Newsletter();
            $newsletter->email = $request->email;
            $save = $newsletter->save();

            $data = [
                'subject' => 'E-bülten Formu',
                'email' => "info@yildizhisar.com",
                'email1' => $request->email,
            ];

            Mail::send('frontend.emailebulten', $data, function ($message) use ($data) {
                $message->to($data['email'])
                    ->subject($data['subject']);
            });




            if($save){

                return redirect()->back()->with(['message1' => 'Emailiniz kaydedildi.', 'alert' => 'success']);

            }
            return redirect()->back()->with(['message1' => 'Beklenmeyen bir hata oluştu. Lütfen yeniden deneyiniz.!', 'alert' => 'danger']);

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
    $kategori_all = FoodType::orderBy('name_tr','ASC')->get();
    $kategori1 = FoodType::find($res->category);


    return view('menu-edit',compact('res','kategori_all','kategori1'));

    }
    public function edit_foodtype($id)
    {
    $res = FoodType::find($id);

    return view('foodtype-edit',compact('res'));

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
        $menu->name_tr = $request->name_tr;
        $menu->name_en = $request->name_en;
        $menu->category = $request->category;
        $menu->price_tl = $request->price_tl;
        $menu->price_usd = $request->price_usd;
        $menu->description_tr =$request->description_tr;
        $menu->description_en =$request->description_en;

        $save = $menu->save();

        if($save){
            return back()->with('success', 'Menu güncellendi.');

        }

        return back()->with('danger', 'Hiç beklenmeyen bir hata oluştu. Lütfen yeniden deneyiniz.!');


    }
    public function update_foodtype(Request $request,$id)
    {


        $foodtype = FoodType::find($id);
        $foodtype->name_tr = $request->name_tr;
        $foodtype->name_en = $request->name_en;
        $foodtype->priority = $request->priority;

        $save = $foodtype->save();

        if($save){
            return back()->with('success', 'Kategori güncellendi.');

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
    public function add_campaign(Request $request)
    {
        $campaign = new New_Campaign();
        $campaign->name_tr = $request->name_tr;

        $campaign->name_en = $request->name_en;
        $campaign->priority = $request->priority;
        $campaign->slug_tr = Str::slug($request->name_tr);
        $campaign->slug_en = Str::slug($request->name_en);

       if($request->hasFile('img1')){
            $id = mt_rand(1000, 9999);
            $imageName = $id."_".time().'.'.$request->img1->extension();

            $request->img1->move(public_path('img'), $imageName);
            $campaign->img1 = "/img/".$imageName;
        }

        $save = $campaign->save();

        if($save){
            return back()->with('success', 'Kampanya eklendi.');

        }

        return back()->with('danger', 'Hiç beklenmeyen bir hata oluştu. Lütfen yeniden deneyiniz.!');


    }
    public function update_campaign_page(Request $request)
    {


        $campaign = Campaign::find(1);
        $campaign->main_text_tr = $request->main_text_tr;
        $campaign->main_text_en = $request->main_text_en;
        $campaign->menu1_tr = $request->menu1_tr;
        $campaign->menu1_en = $request->menu1_en;
        $campaign->menu2_tr = $request->menu2_tr;
        $campaign->menu2_en = $request->menu2_en;

        $campaign->menu1_fiyat_tr = $request->menu1_fiyat_tr;
        $campaign->menu1_fiyat_en = $request->menu1_fiyat_en;

        $campaign->menu2_fiyat_tr = $request->menu2_fiyat_tr;
        $campaign->menu2_fiyat_en = $request->menu2_fiyat_en;

        $campaign->aciklama_tr = $request->aciklama_tr;
        $campaign->aciklama_en = $request->aciklama_en;

        $campaign->pakete_dahil_tr = $request->pakete_dahil_tr;
        $campaign->pakete_dahil_en = $request->pakete_dahil_en;

        $campaign->muzik_tr = $request->muzik_tr;
        $campaign->muzik_en = $request->muzik_en;

        $campaign->dekorasyon_tr = $request->dekorasyon_tr;
        $campaign->dekorasyon_en = $request->dekorasyon_en;

        $campaign->video_tr = $request->video_tr;
        $campaign->video_en = $request->video_en;
        $campaign->karsilama_tr = $request->karsilama_tr;
        $campaign->karsilama_en = $request->karsilama_en;

        $campaign->vestiyer_tr = $request->vestiyer_tr;
        $campaign->vestiyer_en = $request->vestiyer_en;

        $campaign->menu_tadimi_tr = $request->menu_tadimi_tr;
        $campaign->menu_tadimi_en = $request->menu_tadimi_en;

        $campaign->vale_tr = $request->vale_tr;
        $campaign->vale_en = $request->vale_en;

        $campaign->odeme_tr = $request->odeme_tr;
        $campaign->odeme_en = $request->odeme_en;

        $campaign->rezervasyon_tr = $request->rezervasyon_tr;
        $campaign->rezervasyon_en = $request->rezervasyon_en;


        if($request->hasFile('menu1_img')){
            $id = mt_rand(1000, 9999);
            $imageName = $id."_".time().'.'.$request->menu1_img->extension();

        $request->menu1_img->move(public_path('img'), $imageName);
        $campaign->menu1_img = "/img/".$imageName;
        }
        if($request->hasFile('menu2_img')){
            $id = mt_rand(1000, 9999);
            $imageName = $id."_".time().'.'.$request->menu2_img->extension();

            $request->menu2_img->move(public_path('img'), $imageName);
            $campaign->menu2_img = "/img/".$imageName;
        }
        if($request->is_active=="on"){
            $is_active =1;
        }else{
            $is_active =0;
        }

        $campaign->is_active = $is_active;


        $save = $campaign->save();

        if($save){
            return back()->with('success', 'Kampanyalar sayfası güncellendi.');

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
    public function delete_foodtype($id)
    {
        $res = FoodType::destroy($id);


        if($res){
            return back()->with('success', 'Kategori silindi!');

        }

        return back()->with('danger', 'Hiç beklenmeyen bir hata oluştu. Lütfen yeniden deneyiniz.!');


    }
    public function admin_events()
    {
        $events =Events::get();

        return view('admin-events',compact('events'));
    }
    public function edit_event($id)
    {
        $event = Events::find($id);

        return view('event-edit',compact('event'));

    }
    public function edit_event1(Request $request,$id)
    {


        if($request->is_active=="on"){
            $is_active =1;
        }else{
            $is_active =0;
        }

        $event = Events::find($id);
        $event->name_tr = $request->name_tr;
        $event->name_en = $request->name_en;
        $event->main_text_tr = $request->main_text_tr;
        $event->main_text_en = $request->main_text_en;
        $event->priority = $request->priority;
        $event->is_active = $is_active;
        if($request->hasFile('img1')){
            $id = mt_rand(1000, 9999);
            $imageName = $id."_".time().'.'.$request->img1->extension();

            $request->img1->move(public_path('img'), $imageName);
            $event->img1 = "/img/".$imageName;
        }
        $save = $event->save();

        if($save){
            return back()->with('success', 'Etkinlik güncellendi.');

        }

        return back()->with('danger', 'Hiç beklenmeyen bir hata oluştu. Lütfen yeniden deneyiniz.!');


    }
    public function add_event(Request $request)
    {
        $event = new Events();
        $event->name_tr = $request->name_tr;

        $event->name_en = $request->name_en;
        $event->slug_tr = Str::slug($request->name_tr);
        $event->slug_en = Str::slug($request->name_en);
        $event->main_text_tr = $request->main_text_tr;
        $event->main_text_en = $request->main_text_en;
        $event->priority = $request->priority;




        if($request->hasFile('img1')){
            $id = mt_rand(1000, 9999);
            $imageName = $id."_".time().'.'.$request->img1->extension();

            $request->img1->move(public_path('img'), $imageName);
            $event->img1 = "/img/".$imageName;
        }

        $save = $event->save();

        if($save){
            return back()->with('success', 'Etkinlik eklendi.');

        }

        return back()->with('danger', 'Hiç beklenmeyen bir hata oluştu. Lütfen yeniden deneyiniz.!');


    }
    public function edit_campaign($id)
    {
        $campaign = New_Campaign::find($id);

        return view('campaign-edit',compact('campaign'));

    }
    public function edit_wedding($id)
    {
        $wedding = Wedding::find($id);

        return view('wedding-edit',compact('wedding'));

    }
    public function add_wedding(Request $request)
    {
        $wedding = new Wedding();
        $wedding->name_tr = $request->name_tr;
        $wedding->name_en = $request->name_en;
        $wedding->slug_tr = Str::slug($request->name_tr);
        $wedding->slug_en = Str::slug($request->name_en);
        $wedding->main_text_tr = $request->main_text_tr;
        $wedding->main_text_en = $request->main_text_en;
        if($request->hasFile('img1')){
            $id = mt_rand(1000, 9999);
            $imageName = $id."_".time().'.'.$request->img1->extension();

            $request->img1->move(public_path('img'), $imageName);
            $wedding->url = "/img/".$imageName;
        }

        if($request->is_active=="on"){
            $is_active =1;
        }else{
            $is_active =0;
        }

        $wedding->is_active = $is_active;

        $save = $wedding->save();

        if($save){
            return back()->with('success', 'Yeni Organizasyon eklendi.');

        }

        return back()->with('danger', 'Hiç beklenmeyen bir hata oluştu. Lütfen yeniden deneyiniz.!');


    }
    public function update_wedding(Request $request,$id)
    {


        if($request->is_active=="on"){
            $is_active =1;
        }else{
            $is_active =0;
        }

        $wedding = Wedding::find($id);
        $wedding->name_tr = $request->name_tr;
        $wedding->name_en = $request->name_en;
        $wedding->main_text_tr = $request->main_text_tr;
        $wedding->main_text_en = $request->main_text_en;
        if($request->hasFile('img1')){
        $id = mt_rand(1000, 9999);
        $imageName = $id."_".time().'.'.$request->img1->extension();

        $request->img1->move(public_path('img'), $imageName);
        $wedding->url = "/img/".$imageName;
    }

        $wedding->is_active = $is_active;

        $save = $wedding->save();

        if($save){
            return back()->with('success', 'Organizasyon güncellendi.');

        }

        return back()->with('danger', 'Hiç beklenmeyen bir hata oluştu. Lütfen yeniden deneyiniz.!');


    }
    public function update_campaign_new(Request $request,$id)
    {


        if($request->is_active=="on"){
            $is_active =1;
        }else{
            $is_active =0;
        }

        $campaign = New_Campaign::find($id);
        $campaign->name_tr = $request->name_tr;
        $campaign->name_en = $request->name_en;
        $campaign->priority = $request->priority;


        $campaign->is_active = $is_active;
        if($request->hasFile('img1')){
            $id = mt_rand(1000, 9999);
            $imageName = $id."_".time().'.'.$request->img1->extension();

            $request->img1->move(public_path('img'), $imageName);
            $campaign->img1 = "/img/".$imageName;
        }
        $save = $campaign->save();

        if($save){
            return back()->with('success', 'Kampanya güncellendi.');

        }

        return back()->with('danger', 'Hiç beklenmeyen bir hata oluştu. Lütfen yeniden deneyiniz.!');


    }
    public function add_photo_category(Request $request)
    {


        $photo_category = new PhotoCategory();
        $photo_category->name_tr = $request->name_tr;
        $photo_category->name_en = $request->name_en;
        if($request->hasFile('category_img')){
            $id = mt_rand(1000, 9999);
            $imageName = $id."_".time().'.'.$request->category_img->extension();

            $request->category_img->move(public_path('photos'), $imageName);
            $photo_category->kapak_resmi = "/photos/".$imageName;
        }

        $save = $photo_category->save();

        if($save){
            return back()->with('success', 'Kategori eklendi!');

        }

        return back()->with('danger', 'Hiç beklenmeyen bir hata oluştu. Lütfen yeniden deneyiniz.!');

    }
    public function admin_photos($id)
    {
        if($id==0){
            $kategori_all = PhotoCategory::orderBy('name_tr','ASC')->get();

            if(count($kategori_all)>0){
                $kategori1 = $kategori_all[0];
                $photo_all = DB::table('photos')
                    ->join('photo_categories', 'photo_categories.id', '=', 'photos.category_id')
                    ->select('photo_categories.name_tr','photo_categories.name_en','photos.*')
                    ->where('photos.deleted_at',"=",null)
                    ->where('photos.category_id',"=",$kategori_all[0]->id)
                    ->orderBy('photos.category_id','ASC')->paginate(30);

                $data = 1;
                return view('admin-photos',compact('photo_all','kategori_all','kategori1','data'));

            }else{
                $data = 0;
                return view('admin-photos',compact('data'));

            }

        }else{
            $kategori_all = PhotoCategory::orderBy('name_tr','ASC')->get();
            $kategori1 = PhotoCategory::find($id);
            $photo_all = DB::table('photos')
                ->join('photo_categories', 'photo_categories.id', '=', 'photos.category_id')
                ->select('photo_categories.name_tr','photo_categories.name_en','photos.*')
                ->where('photos.deleted_at',"=",null)
                ->where('photos.category_id',"=",$id)
                ->orderBy('photos.category_id','ASC')->paginate(30);

            $data = 1;
            return view('admin-photos',compact('photo_all','kategori_all','kategori1','data'));

        }
    }
    public function update_photo(Request $request,$id)
    {


        if($request->is_active=="on"){
            $is_active =1;
        }else{
            $is_active =0;
        }

        $photo = Photo::find($id);
        if($request->hasFile('img1')){
            $id = mt_rand(1000, 9999);
            $imageName = $id."_".time().'.'.$request->img1->extension();

            $request->img1->move(public_path('photos'), $imageName);
            $photo->url = "/photos/".$imageName;
        }
        $photo->category_id = $request->category;
        $photo->is_active = $is_active;

        $save = $photo->save();

        if($save){
            return back()->with('success', 'Resim güncellendi.');

        }

        return back()->with('danger', 'Hiç beklenmeyen bir hata oluştu. Lütfen yeniden deneyiniz.!');


    }
    public function add_photos(Request $request)
    {



        $request->validate([
            'image' => 'required',
            'image.*' => 'mimes:jpeg,jpg,png,gif,csv,txt,pdf|max:2048'
        ]);

        if($request->category ==0){


            return back()->with('danger', 'Kategori seçiniz!');

        }


        if($file = $request->file('image')){


            foreach($file as $file){
                $id = mt_rand(100, 999);
                $name = $id.'_'.time().'.'.$file->extension();
                $file->move(public_path('photos'), $name);
                $url = "/photos/".$name;
                $save=Photo::insert([
                    'url' => $url,
                    'category_id' => $request->category,
                    'created_at'=>date('Y-m-d'),
                    'updated_at'=>date('Y-m-d')
                ]);

            }


        }


        if($save){
            return back()->with('success', 'Resim(ler) eklendi.');

        }

        return back()->with('danger', 'Hiç beklenmeyen bir hata oluştu. Lütfen yeniden deneyiniz.!');


        //if ($request->ajax()) {
        //    $request->validate([
        //        'file' => 'required|mimes:jpg,jpeg,png,gif|max:5000'
        //    ]);
        //
        //    if ($request->hasFile('file')) ;
        //    {
        //
        //        $photos= new Photo();
        //        $id = mt_rand(100, 999);
        //        $name = $id.'_'.time().'.'.$request->file('file')->extension();
        //        $request->file('file')->move(public_path('photos'), $name);
        //        $data[] = $name;
        //        $photos->img1 = "/photos/".$name;
        //        $photos->category_id = $request->category;
        //        $save = $photos->save();
        //    }
        //}

    }
    public function edit_photo(Request $request,$id)
    {

        $photo = Photo::find($id);
        $kategori = PhotoCategory::where('id',$photo->category_id)->first();
        $kategori_all = PhotoCategory::get();

        return view('photo-edit',compact('photo','kategori_all','kategori'));

    }
    public function delete_photo($id)
    {
        $res = Photo::destroy($id);


        if($res){
            return back()->with('success', 'Resim silindi!');

        }

        return back()->with('danger', 'Hiç beklenmeyen bir hata oluştu. Lütfen yeniden deneyiniz.!');


    }
    public function delete_photo_category($id)
    {
        $res = PhotoCategory::destroy($id);


        if($res){
            return back()->with('success', 'Kategori silindi!');

        }

        return back()->with('danger', 'Hiç beklenmeyen bir hata oluştu. Lütfen yeniden deneyiniz.!');


    }
    public function edit_photocategory($id)
    {
        $res = PhotoCategory::find($id);

        return view('photocategory-edit',compact('res'));

    }
    public function update_photocategory(Request $request,$id)
    {


        $photocategory = PhotoCategory::find($id);
        $photocategory->name_tr = $request->name_tr;
        $photocategory->name_en = $request->name_en;

        $save = $photocategory->save();

        if($save){
            return back()->with('success', 'Kategori güncellendi.');

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
