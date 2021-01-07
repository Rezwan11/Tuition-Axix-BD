<?php

namespace App\Http\Controllers;

use App\Models\Donate;
use App\Models\Flightbook;
use App\Models\Post;
use Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('front.profile.profile');
    }



    public function posts()
    {

        $posts=Post::where('user_id',Auth::id())->get();
        return  view('front.profile.post',compact('posts'));
    }


    public function add_post()
    {
        return  view('front.profile.add-post');
    }


    public function store_post(Request $request)
    {
        request()->validate([
            'title'=>'required|string|max:191',
            'thumnail'=>'required',
            'attachment'=>'nullable',
            'description'=>'required',
        ]);


        $tname=$request->file('thumnail')->getClientOriginalName();
        $thum_name = time().$tname;
        $request->file('thumnail')->move('./uploads/post/', $thum_name);

        if ($request->hasFile('attachment')) {
            $aname=$request->file('attachment')->getClientOriginalName();
            $attach_name = time().$aname;
            $request->file('attachment')->move('./uploads/attachment/', $attach_name);
        }
       

        $post=new Post();
        $post->user_id=Auth::id();
        $post->title=$request->title;
        $post->thumnail=$thum_name;
        $post->attachment=$attach_name;
        $post->description=$request->description;
        $post->type='User';
        $post->status=0;
        $post->save();


        return back()->with('success','Your post saved successfully!.Your post status is pending.');
       


    }


    public function flight_book(Request $request)
    {
       

        $book=new Flightbook();
        $book->user_id=\Auth::id();
        $book->flight_id=$request->flight_id;
        $book->flight_type_id=$request->flight_type_id;
        $book->flight_type=$request->flight_type;
        $book->class=$request->class;
        $book->from_country=$request->from_country;
        $book->to_country=$request->to_country;
        $book->price=$request->price;
        $book->person=$request->person;
        $book->date=$request->date;

        $book->save();


        return redirect('/my-flight')->with('success','Your flight booking request send successfully!.');

    }



    public function my_flight()
    {
       $myflights=Flightbook::where('user_id',Auth::id())->get();
       return  view('front.profile.my-flight',compact('myflights'));
    }




}
