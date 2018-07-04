<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Auth;

// Models
use App\Models\User;
use App\Models\Transaction;

class TransactionController extends Controller
{
    public function index() {
        // $transaction = Transaction::all();
        return view('admin.Transaction.transactiontable ');
    }

    public function userData(Request $request) {
        $user = User::select('id', 'username as text')->where('role', 'Employee');        
        if($request->has('q')) {
            $q = $request->query('q');
            $user = $user->where('username', 'like', $q.'%');
        }
        $user = $user->get();
        $data['results'] = $user;
        return $data;
    }

    public function form() {
        return view('admin.Transaction.transactionform');
    }

    public function transaction(Request $request) {
        $validator = Validator::make($request->all(), [
            'type' => 'required',
            'amount' => 'required',
            'user_id' => 'required'
        ]);
        if ($validator->fails()) {
            return back()
                    ->withErrors($validator);
        }
        $user = User::find($request->user_id);
        if($request->type == 'Deposit') {
            // Jika Deposit cek jumlah deposit
           $cukup = $request->amount >= $user->employee->deposit_tab;
           if($cukup) {
                $errors['amount'] = 'Deposit Kelebihan';
                return redirect()->back()->withErrors($errors);
           }
           $user->employee->deposit_tab = $user->employee->deposit_tab - $request->amount;
           $user->employee->save();
        } else {
            $cukup = $request->amount >= $user->employee->commission;
            if($cukup) {
                $errors['amount'] = 'Commission Kelebihan';
                return redirect()->back()->withErrors($errors);
            }
            $user->employee->deposit_tab = $user->employee->deposit_tab - $request->amount;
            $user->employee->save();
        }
        $transaction = new Transaction;
        $transaction->user_id = $request->user_id;
        $transaction->amount = $request->amount;
        $transaction->type = $request->type;
        $transaction->admin = Auth::user()->id;
        $transaction->save();
        return redirect()->route('transactiontable');
        // $errors['email'] =  'Credential wrong';
        // return redirect()->back()
        // ->withErrors($errors);  
    }

    public function transactionData() {
        $transaction = Transaction::select(
            'transactions.id',
            'users.username',
            'transactions.amount',
            'transactions.type',
            'transactions.created_at'
        )->join('users', 'users.id', '=', 'transactions.user_id')->get();
        return $transaction;
    }
}
