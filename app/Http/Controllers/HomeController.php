<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Campaign;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Events;
use App\Models\FoodType;
use App\Models\Gallery;
use App\Models\Menu;
use App\Models\New_Campaign;
use App\Models\Photo;
use App\Models\PhotoCategory;
use App\Models\User;
use App\Models\Wedding;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //  $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {

        if (view()->exists($request->path())) {
            return view($request->path());
        }
        return abort(404);
    }

    public function homepage()
    {
        $menus = Menu::selectRaw('menus.*')->join('food_types','food_types.id','=','menus.category')
            ->orderBy('food_types.priority','ASC')->get();
        $food_types = FoodType::orderBy('priority','ASC')->get();
        $menu1 = Menu::selectRaw('menus.*')->join('food_types','food_types.id','=','menus.category')
            ->where('food_types.priority','=',1)->orderBy('menus.priority','ASC')->get();
        $menu2 = Menu::selectRaw('menus.*')->join('food_types','food_types.id','=','menus.category')
            ->where('food_types.priority','=',2)->orderBy('menus.priority','ASC')->get();
        $menu3 = Menu::selectRaw('menus.*')->join('food_types','food_types.id','=','menus.category')
            ->where('food_types.priority','=',3)->orderBy('menus.priority','ASC')->get();
        $menu4 = Menu::selectRaw('menus.*')->join('food_types','food_types.id','=','menus.category')
            ->where('food_types.priority','=',4)->orderBy('menus.priority','ASC')->get();
        $menu5 = Menu::selectRaw('menus.*')->join('food_types','food_types.id','=','menus.category')
            ->where('food_types.priority','=',5)->orderBy('menus.priority','ASC')->get();
        $menu6 = Menu::selectRaw('menus.*')->join('food_types','food_types.id','=','menus.category')
            ->where('food_types.priority','=',6)->orderBy('menus.priority','ASC')->get();
        $menu7 = Menu::selectRaw('menus.*')->join('food_types','food_types.id','=','menus.category')
            ->where('food_types.priority','=',7)->orderBy('menus.priority','ASC')->get();
        $menu8 = Menu::selectRaw('menus.*')->join('food_types','food_types.id','=','menus.category')
            ->where('food_types.priority','=',8)->orderBy('menus.priority','ASC')->get();
        $menu9 = Menu::selectRaw('menus.*')->join('food_types','food_types.id','=','menus.category')
            ->where('food_types.priority','=',9)->orderBy('menus.priority','ASC')->get();
        $menu10 = Menu::selectRaw('menus.*')->join('food_types','food_types.id','=','menus.category')
            ->where('food_types.priority','=',10)->orderBy('menus.priority','ASC')->get();
        $menu11 = Menu::selectRaw('menus.*')->join('food_types','food_types.id','=','menus.category')
            ->where('food_types.priority','=',11)->orderBy('menus.priority','ASC')->get();
        $menu12 = Menu::selectRaw('menus.*')->join('food_types','food_types.id','=','menus.category')
            ->where('food_types.priority','=',12)->orderBy('menus.priority','ASC')->get();

        return view('frontend.homepage',compact('menus','food_types','menu1','menu2','menu3','menu4','menu5','menu6','menu7','menu8','menu9','menu10','menu11','menu12'));

    }

    public function root()
    {
     //   return view('frontend.homepage');
    }

    public function table_rezervations()
    {
        if (app()->getLocale() == "tr") {
            return view('frontend.table_rezervations');
        } else {
            return view('frontend.table_rezervations');
        }

    }

    public function contact()
    {
        $contact = Contact::find(1);

        return view('frontend.contact',compact('contact'));


    }

    public function about()
    {
        $about = About::find(1);
        $categories = Photo::inRandomOrder()->limit(5)->get();


        return view('frontend.about',compact('about','categories'));


    }

    public function wedding()
    {

        return view('frontend.wedding');


    }
    public function campaigns()
    {
        $campaigns = New_Campaign::where('is_active','=',1)->orderBy('priority','ASC')->get();
        return view('frontend.kampanyalar1',compact('campaigns'));


    }
    public function campaigns1()
    {
        $campaign = Campaign::find(1);
        return view('frontend.kampanyalar',compact('campaign'));


    }
    public function nikah()
    {

        return view('frontend.nikah');


    }
    public function sunnet()
    {

        return view('frontend.sunnet');


    }
    public function kina()
    {

        return view('frontend.kina');


    }
    public function nisan()
    {

        return view('frontend.nisan');


    }
    public function dogumgunu()
    {
        return view('frontend.dogumgunu');
    }
    public function babyshower()
    {
        return view('frontend.babyshower');
    }
    public function companydinner()
    {
        return view('frontend.companydinner');
    }
    public function stagparty()
    {
        return view('frontend.stagparty');
    }
    public function toplanti()
    {
        return view('frontend.toplanti');
    }
    public function eventspage($id,$slug)
    {
        $event = Events::find($id);
        return view('frontend.eventpage',compact('event'));
    }
    public function campaignpage($id,$slug)
    {
        $campaign = New_Campaign::find($id);
        return view('frontend.campaignpage',compact('campaign'));
    }
    public function dugun_davet($id,$slug)
    {
        $wedding = Wedding::find($id);
        $header_img = $wedding->url;

        return view('frontend.dugun-davet',compact('wedding','header_img'));
    }

    public function gallery1()
    {
        $kategoriler = PhotoCategory::get();
        if(count($kategoriler)>0){
            $data=1;
            return view('frontend.gallery1', compact('kategoriler','data'));
        }else{
            $data=0;

            return view('frontend.gallery1',compact('data'));
        }


    }
    public function gallery_photos($id)
    {
        $photos = Photo::where('category_id',$id)->get();
        $kategori = PhotoCategory::find($id);
        if(count($photos)>0){
            $data=1;
            return view('frontend.gallery-photos', compact('photos','kategori','data'));

        }else{
            $data=0;
            return view('frontend.gallery-photos', compact('kategori','data'));

        }

    }
    public function gallery()
    {
        $categories = Category::with('images')->get();


        return view('frontend.gallery', compact('categories'));


    }

    public function events()
    {
        $events = Events::where('is_active',1)->orderBy('priority','ASC')->get();

        return view('frontend.events',compact('events'));

    }

    public function restaurant()
    {

        $menus = Menu::selectRaw('menus.*')->join('food_types','food_types.id','=','menus.category')
            ->orderBy('food_types.priority','ASC')->get();
        $food_types = FoodType::orderBy('priority','ASC')->get();
        $menu1 = Menu::selectRaw('menus.*')->join('food_types','food_types.id','=','menus.category')
            ->where('food_types.priority','=',1)->orderBy('menus.priority','ASC')->get();
        $menu2 = Menu::selectRaw('menus.*')->join('food_types','food_types.id','=','menus.category')
            ->where('food_types.priority','=',2)->orderBy('menus.priority','ASC')->get();
        $menu3 = Menu::selectRaw('menus.*')->join('food_types','food_types.id','=','menus.category')
            ->where('food_types.priority','=',3)->orderBy('menus.priority','ASC')->get();
        $menu4 = Menu::selectRaw('menus.*')->join('food_types','food_types.id','=','menus.category')
            ->where('food_types.priority','=',4)->orderBy('menus.priority','ASC')->get();
        $menu5 = Menu::selectRaw('menus.*')->join('food_types','food_types.id','=','menus.category')
            ->where('food_types.priority','=',5)->orderBy('menus.priority','ASC')->get();
        $menu6 = Menu::selectRaw('menus.*')->join('food_types','food_types.id','=','menus.category')
            ->where('food_types.priority','=',6)->orderBy('menus.priority','ASC')->get();
        $menu7 = Menu::selectRaw('menus.*')->join('food_types','food_types.id','=','menus.category')
            ->where('food_types.priority','=',7)->orderBy('menus.priority','ASC')->get();
        $menu8 = Menu::selectRaw('menus.*')->join('food_types','food_types.id','=','menus.category')
            ->where('food_types.priority','=',8)->orderBy('menus.priority','ASC')->get();
        $menu9 = Menu::selectRaw('menus.*')->join('food_types','food_types.id','=','menus.category')
            ->where('food_types.priority','=',9)->orderBy('menus.priority','ASC')->get();
        $menu10 = Menu::selectRaw('menus.*')->join('food_types','food_types.id','=','menus.category')
            ->where('food_types.priority','=',10)->orderBy('menus.priority','ASC')->get();
        $menu11 = Menu::selectRaw('menus.*')->join('food_types','food_types.id','=','menus.category')
            ->where('food_types.priority','=',11)->orderBy('menus.priority','ASC')->get();
        $menu12 = Menu::selectRaw('menus.*')->join('food_types','food_types.id','=','menus.category')
            ->where('food_types.priority','=',12)->orderBy('menus.priority','ASC')->get();

        return view('frontend.restaurant',compact('menus','food_types','menu1','menu2','menu3','menu4','menu5','menu6','menu7','menu8','menu9','menu10','menu11','menu12'));


    }

    public function login_v()
    {
        if (app()->getLocale() == "tr") {
            return view('auth1.login');
        } else {
            return view('auth1.login');
        }

    }

    public function login(Request $request)
    {

        if (auth()->attempt(request(['email', 'password'])) == false) {
            return back()->withErrors([
                'message' => 'The email or password is incorrect, please try again'
            ]);
        }

        return redirect()->to('/panel');


    }


    public function ourMenu()
    {
        return view('frontend.our-menu');
    }

    /*Language Translation*/
    public function lang($locale)
    {
        if ($locale) {
            App::setLocale($locale);
            Session::put('lang', $locale);
            Session::save();
            return redirect()->back()->with('locale', $locale);
        } else {
            return redirect()->back();
        }
    }

    public function updateProfile(Request $request, $id)
    {
        // return $request->all();
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'dob' => ['required', 'date', 'before:today'],
            'avatar' => ['nullable', 'image', 'mimes:jpg,jpeg,png', 'max:1024'],
        ]);

        $user = User::find($id);
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->dob = date('Y-m-d', strtotime($request->get('dob')));

        if ($request->file('avatar')) {
            $avatar = $request->file('avatar');
            $avatarName = time() . '.' . $avatar->getClientOriginalExtension();
            $avatarPath = public_path('/images/');
            $avatar->move($avatarPath, $avatarName);
            if (file_exists(public_path($user->avatar))) {
                unlink(public_path($user->avatar));
            }
            $user->avatar = '/images/' . $avatarName;
        }
        $user->update();
        if ($user) {
            Session::flash('message', 'User Details Updated successfully!');
            Session::flash('alert-class', 'alert-success');
            return response()->json([
                'isSuccess' => true,
                'Message' => "User Details Updated successfully!"
            ], 200); // Status code here
        } else {
            Session::flash('message', 'Something went wrong!');
            Session::flash('alert-class', 'alert-danger');
            return response()->json([
                'isSuccess' => true,
                'Message' => "Something went wrong!"
            ], 200); // Status code here
        }
    }

    public function updatePassword(Request $request, $id)
    {
        $request->validate([
            'current_password' => ['required', 'string'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);

        if (!(Hash::check($request->get('current_password'), Auth::user()->password))) {
            return response()->json([
                'isSuccess' => false,
                'Message' => "Your Current password does not matches with the password you provided. Please try again."
            ], 200); // Status code
        } else {
            $user = User::find($id);
            $user->password = Hash::make($request->get('password'));
            $user->update();
            if ($user) {
                Session::flash('message', 'Password updated successfully!');
                Session::flash('alert-class', 'alert-success');
                return response()->json([
                    'isSuccess' => true,
                    'Message' => "Password updated successfully!"
                ], 200); // Status code here
            } else {
                Session::flash('message', 'Something went wrong!');
                Session::flash('alert-class', 'alert-danger');
                return response()->json([
                    'isSuccess' => true,
                    'Message' => "Something went wrong!"
                ], 200); // Status code here
            }
        }
    }

    public function panel()
    {
        if (app()->getLocale() == "tr") {
            return view('panel');
        } else {
            return view('panel');
        }

    }

}
