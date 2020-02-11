<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use App\models\UserModel;


class UserController extends Controller
{
    public function login(Request $request)
    {
        //Logueate con email o con el username
        $login = $request->input('login');
        $field = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        $request->merge([$field => $login]);
        $credentials = $request->only($field, 'password');
        try {
            if (!$token = JWTAuth::attempt($credentials)) {
                return response()->json(['error' => 'invalid_credentials'], 400);
            }
        } catch (JWTException $e) {
            return response()->json(['error' => 'could_not_create_token'], 500);
        }
        return response()->json(compact('token'));
    }
    public function getUsusarioAutenticado()
    {
        try {
            if (!$user = JWTAuth::parseToken()->authenticate()) {
                return response()->json(['user_not_found'], 404);
            }
        } catch (Tymon\JWTAuth\Exceptions\TokenExpiredException $e) {
            return response()->json(['token_expired'], $e->getStatusCode());
        } catch (Tymon\JWTAuth\Exceptions\TokenInvalidException $e) {
            return response()->json(['token_invalid'], $e->getStatusCode());
        } catch (Tymon\JWTAuth\Exceptions\JWTException $e) {
            return response()->json(['token_absent'], $e->getStatusCode());
        }
        return response()->json(compact('user'));
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'isbusiness' => 'required|boolean',
            'avatar' => 'image|mimes:jpeg,png,jpg,svg|max:2048',
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors()->toJson(), 400);
        }
        $user = UserModel::create([
            'username' => $request->get('username'),
            'email' => $request->get('email'),
            'password' => Hash::make($request->get('password')),
            'isbusiness' => $request->get('isbusiness'),
        ]);

        if (request()->avatar != null) {
            $avatarName = $user->id . '_avatar' . time() . '.' . request()->avatar->getClientOriginalExtension();
            $request->avatar->storeAs('avatars', $avatarName);
            $user->avatar = $avatarName;
            $user->save();
        }

        $token = JWTAuth::fromUser($user);
        return response()->json(compact('user', 'token'), 201);
    }

    public function logout(Request $request)
    {
        JWTAuth::invalidate($request);
        /*  auth()->logout();
        return response()->json(['message' => 'Successfully logged out']); */
    }

    public function checkToken()
    {
        return JWTAuth::getToken();
    }

    public function editarPerfil(Request $request)
    {
        //var_dump( $request->all());
        //id nombre email  password  newPassword  

        $validator = Validator::make($request->all(), [
            'nombre' => 'nullable|string|max:255',
            'email' => 'nullable|string|email|max:255|unique:users',
            'password' => 'nullable|string|min:6'
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors()->toJson(), 400);
        }

        $nombre =  $request->get('nombre');
        if ($nombre != null ||  $nombre != "") {
            UserModel::where('id', $request->get('id'))->update(array('username' => $nombre));
        }

        $email =  $request->get('email');
        if ($email != null ||  $email != "") {
            UserModel::where('id', $request->get('id'))->update(array('email' => $email));
        }
        //UserModel::where('id', $request->get('id'))->update(array('confirmado' => 1));
        $hashedPassword = UserModel::where('id', $request->get('id'))->value('password');
        if (Hash::check($request->get('password'), $hashedPassword)) {
            $password = Hash::make($request->get('password'));
            UserModel::where('id', $request->get('id'))->update(array('password' => $password));
        }
    }

    public function destroyUser($id)
    {
        if ($id != null) {
            UserModel::where('id', '=', $id)->delete();
        }
    }

    public function getAllUsers()
    {
        $users = UserModel::all();
        return $users;
    }

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
