<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\ibadah1;
use App\ibadah2;
use App\kuota;
use DB;


class HomeController extends Controller
{
	public function index()
	{
//  kuota 1

		$users = DB::table('kuotas')
		->select('kuota1')
		->first();

		$count_user = '';

		foreach ($users as $key => $val) {
			$count_user = $val;
		}

		$count = ibadah1::count();

		$quota = $count_user - $count;

		//  kuota 2

		$users2 = DB::table('kuotas')
		->select('kuota2')
		->first();

		$count_user2 = '';

		foreach ($users2 as $key2 => $val2) {
			$count_user2 = $val2;
		}

		$count2 = ibadah2::count();

		$quota2 = $count_user2 - $count2;


		return view('home', ['quota' => $quota, 'quota2' => $quota2]);
	}
	public function code()
	{

		$datas = DB::table('users')->where('id', \DB::raw("(select max(`id`) from users)"))->get();

		$data = 'test';

		return view('qrcode', ['data' => $data, 'datas' => $datas]);
	}

	public function dashboard()
	{
		$data = DB::table('users')->get();


		return view('homeadmin', compact('data'));	
	}
	public function adm()
	{
		return view('lgadmin');
	}

	public function ir1 (Request $request){

		$nik = $request->nik;
		$d = DB::table('users')
		->where('nik','like',"%".$nik."%")
		->get()->first();

		$nik = $d->nik;
		$nama = $d->name;
		$email = $d->email;


		DB::table('ibadah1s')->insert(
			['nik' => $nik , 'name' => $nama , 'email' => $email]
		);

		return view('qrcode', ['nik' => $nik]);
	}

	public function ir2 (Request $request){

		$nik = $request->nik;
		$d = DB::table('users')
		->where('nik','like',"%".$nik."%")
		->get()->first();

		$nik = $d->nik;
		$nama = $d->name;
		$email = $d->email;


		DB::table('ibadah2s')->insert(
			['nik' => $nik , 'name' => $nama , 'email' => $email]
		);

		return view('qrcode', ['nik' => $nik]);
	}

} 