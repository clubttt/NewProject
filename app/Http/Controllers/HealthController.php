<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 12/12/2558
 * Time: 17:23
 */

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;

class HealthController extends Controller
{
    public function index() ///��Ǩ�ͺ������ʹ�Թ���ͼ�����
    {
        if (\Auth::user()->isAdmin(\Auth::user()->name)) {
            return redirect()->action('HealthController@admin');
        } else if (\Auth::user()->isPatient(\Auth::user()->name)) {
            return redirect()->action('HealthController@userpatients');
        } else {
            return redirect('auth/login');
        }
    }

    public function admin() //������ʹ�Թ�������
    {
        $patients = User::where('name', '!=', 'Admin')->get();
        return view('page/admin')->with(['userpatients' => $patients]);

    }
    public function userpatients()
    {
        return redirect('page/user');
    }

}