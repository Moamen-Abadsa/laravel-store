<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Ratings;
use App\Models\Store;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Livewire\WithPagination;

class RatingsController extends Controller
{
  public $currentPage = 1;
  
    public function search (Request $request) {
      $search = $request['search'];
      $store = Store::select('*')->where('name', 'like' , '%'.$search.'%')->orwhere('phone', 'like' , '%'.$search.'%')->orwhere('address', 'like' , '%'.$search.'%')->paginate(6)->setPath ( '' );
      return view('adminpanel/ratings/view') ->with('stores', $store);
    }

    public function index () {
      $store =Ratings::select('*')->paginate(6);
      return view('adminpanel/ratings/view')->with('stores', $store);   
   }

   public function index2 () {
    $store =Ratings::select('*')->paginate(6);
    return view('adminpanel/ratings/total')->with('stores', $store);   
 }
  //  public function index2 () {
  //   $Ratings = DB::table('ratings')
  //               ->groupBy('store_id')
  //               ->get();

  //   // $Ratings = Ratings::groupBy('store_id')->get();
  //   return view('adminpanel/ratings/total')->with('Rating', $Ratings);   
//  }
  public function store (Request $request , $id){



    $name = $request['name'];
    $price = $request['price'];

    $store = new Ratings;
    $store->name = $name;
    $store->price = $price;
    $store->store_id = $id;
     $result = $store->save();

    return redirect()->back();

    // $name = $request['name'];
    // $price = $request['price'];
    // // $store = new Ratings;
    // // $store->name = $name;
    // // $store->price = $price;
    // // $store->store_id = $id;
    // // $result = $store->save();
    // // return redirect()->back();
    // $result = Ratings::insert(["store_id" => $id,"name" => $name,"price" => $price]);
    // return redirect('publicwebsite/detailsproduct/'.$id)->with('s', $result);
  }


  // public function setPage($url)
  // {
  //     $this->currentPage = explode('page=', $url)[1];
  //     Paginator::currentPageResolver(function(){
  //         return $this->currentPage;
  //     });
  // }
}