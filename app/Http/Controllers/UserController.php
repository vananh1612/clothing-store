<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use \Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    public function getLogin(){
        return view('register_login.login');
    }
   //xử lí đăng nhập 
    public function postLogin(Request $request) {
        // Kiểm tra dữ liệu nhập vào
        $rules = [
            'email' =>'required|email',
            'password' => 'required|min:6'
        ];
        //thông báo lỗi chi tiết 
        $messages = [
            'email.required' => 'Email là trường bắt buộc',
            'email.email' => 'Email không đúng định dạng',
            'password.required' => 'Mật khẩu là trường bắt buộc',
            'password.min' => 'Mật khẩu phải chứa ít nhất 6 ký tự',
        ];
        //kiểm tra , xử lí , thông báo 
        $validator = Validator::make($request->all(), $rules, $messages);
        
        
        if ($validator->fails()) {
            // Điều kiện dữ liệu không hợp lệ sẽ chuyển về trang đăng nhập và thông báo lỗi
            return redirect()->route('register')->withErrors($validator)->withInput();
        } else {
            // Nếu dữ liệu hợp lệ sẽ kiểm tra trong csdl
            $email = $request->input('email');
            $password = $request->input('password');
     
            if( Auth::attempt(['email' => $email, 'password' =>$password])) {
                // Kiểm tra đúng email và mật khẩu sẽ chuyển trang
                return redirect(route('admin.list'));
            } else {
                // Kiểm tra không đúng sẽ hiển thị thông báo lỗi
                Session::flash('error', 'Email hoặc mật khẩu không đúng!');
                return redirect()->route('login');
            }
        }
    }
    //thêm vào db 
    protected function create(array $data)
    {
	return User::create([
		'name' => $data['name'],
		'email' => $data['email'],
		'phone'=>$data['phone'],
		'password' => bcrypt($data['password']),
        'confirm_password' => bcrypt($data['password']),//tạo mật khẩu có độ bảo mật cao 
	]);
}

//hàm kiểm tra dữ liệu nhập vào có đung shay không , check lỗi 
    protected function validator(Request $request)
  {
    $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'phone' => 'required|string|max:11',
        'password' => 'required|string|min:6|confirmed',
    ];
    $messages = [
        'name.required' => 'Họ và tên là trường bắt buộc',
        'name.max' => 'Họ và tên không quá 255 ký tự',
        'email.required' => 'Email là trường bắt buộc',
        'email.email' => 'Email không đúng định dạng',
        'email.max' => 'Email không quá 255 ký tự',
        'email.unique' => 'Email đã tồn tại',
        'phone.required' => 'Phone là trường bắt buộc ',
        'phone.max' => 'Email không quá 11 ký tự',
        'password.required' => 'Mật khẩu là trường bắt buộc',
        'password.min' => 'Mật khẩu phải chứa ít nhất 6 ký tự',
        'password.confirmed' => 'Xác nhận mật khẩu không đúng',
    ];
//xử lí bắt lỗi và thống báo lỗi 
    $validator = Validator::make($request->all(), $rules, $messages);
    return $validator;
}
    public function getRegister() {
        return view('register_login.register');
    }

    //xử lí đăng kí
    public function postRegister(Request $request) {
        // Kiểm tra dữ liệu vào
        $allRequest  = $request->all();	
        $validator = validator($allRequest);
          
        if ($validator->fails()) {
            // Dữ liệu vào không thỏa mãn điều kiện sẽ thông báo lỗi
            return redirect()->route('register')->withErrors($validator)->withInput();
        } else {   
            // Dữ liệu vào hợp lệ sẽ thực hiện tạo người dùng dưới csdl
            if( $this->create($allRequest)) {
                // Insert thành công sẽ hiển thị thông báo
                Session::flash('success', 'Đăng ký người dùng thành công!');
                return redirect()->route('register');
            } else {
                // Insert thất bại sẽ hiển thị thông báo lỗi
                Session::flash('error', 'Đăng ký người dùng thất bại!');
                return redirect()->route('register');
            }
        }
    }
    
}
