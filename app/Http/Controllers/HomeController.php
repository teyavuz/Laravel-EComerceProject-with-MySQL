<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;

class HomeController extends Controller
{
    public function redirect()
    {
        $usertype=Auth::user()->usertype;

        if($usertype=='1')
        {
            return view('admin.home');
        }

        else
        {
            $data = product::paginate(3);

            $user = auth()->user();

            $count = cart::where('phone',$user->phone)->count();
        
            return view('user.home',compact('data','count'));
        }
    }

    public function ourproducts()
    {
        $usertype=Auth::user()->usertype;

        if($usertype=='1')
        {
            return view('admin.home');
        }

        if($usertype=='0')
        {
            $data = product::paginate(6);

            $user = auth()->user();

            $count = cart::where('phone',$user->phone)->count();
        
            return view('user.ourproducts',compact('data','count'));
        }
        else
        {
            return view('user.ourproducts',compact('data'));
        }
        
    }

    public function whoweare()
    {
        $usertype=Auth::user()->usertype;

        if($usertype=='1')
        {
            return view('admin.home');
        }

        if($usertype=='0')
        {
            $data = product::paginate(6);

            $user = auth()->user();

            $count = cart::where('phone',$user->phone)->count();
        
            return view('user.whoweare',compact('data','count'));
        }
        else
        {
            return view('user.whoweare',compact('data'));
        }
    }


public function index()
{

    if(Auth::id())
    {
        return redirect('redirect');
    }

    else
    {
        $data = product::paginate(3);
        
        return view('user.home',compact('data'));
    }
}

public function search(Request $request)
{
    $search=$request->search;

    if($search=='')
    {
        $data = product::paginate(3);
        
        return view('user.home',compact('data'));
    }

    $data=product::where('title','Like','%'.$search.'%')->get();

    return view('user.home',compact('data'));
}

public function addcart(Request $request, $id)
{

    if(Auth::id())
    {
        $user=auth()->user();
        $product=product::find($id);

        $cart=new cart;
        $cart->name=$user->name;
        $cart->phone=$user->phone;
        $cart->adress=$user->adress;
        $cart->product_title=$product->title;
        $cart->price=$product->price;
        $cart->quantity=$request->quantify;
        $cart->save();

        return redirect()->back()->with('message','Ürün Sepetinize Eklendi!');


        return redirect()->back();
    }

    else
    {
        return redirect('login');
    }
}

public function showcart()
{

    $user=auth()->user();

    $cart=cart::where('phone',$user->phone)->get();

        $count=cart::where('phone',$user->phone)->count();
    return view('user.showcart',compact('count','cart'));
}

public function deletecart($id)
{
    $data=cart::find($id);

    $data->delete();

    return redirect()->back()->with('message','Ürün Sepetinizden Silindi!');
}

public function confirmorder(Request $request)
{
    $user=auth()->user();

    $name=$user->name;
    $phone=$user->phone;
    $adress=$user->adress;

    foreach($request->productname as $key=>$productname)
    {
        $order=new order;

        $order->product_name=$request->productname[$key];
        $order->price=$request->price[$key];
        $order->quantity=$request->quantity[$key];

        $order->name=$name;
        $order->phone=$phone;
        $order->adress=$adress;

        $order->status="Teslim edilmedi";

        $order->save();
    }

    DB::table('carts')->where('phone',$phone)->delete();
    return redirect()->back();
}

}
