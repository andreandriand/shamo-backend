<?php

namespace App\Http\Controllers\API;

use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Models\TransactionDetail;
use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    public function all()
    {
        $id = request()->input('id');
        $limit = request()->input('limit', 6);
        $status = request()->input('status');

        if ($id) {
            $transaction = Transaction::with(['details.product'])->find($id);

            if ($transaction) {
                return ResponseFormatter::success(
                    $transaction,
                    'Transaction data successfully retrieved'
                );
            } else {
                return ResponseFormatter::error(
                    null,
                    'Transaction data not found',
                    404
                );
            }
        }

        $transaction = Transaction::with(['details.product'])->where('user_id', Auth::user()->id);

        if ($status) {
            $transaction->where('status', $status);
        }

        return ResponseFormatter::success(
            $transaction->paginate($limit),
            'Transaction data successfully retrieved'
        );
    }

    public function checkout(Request $request)
    {
        $request->validate([
            'details' => ['required', 'array'],
            'details.*.product_id' => ['required', 'exists:products,id'],
            'total_price' => ['required'],
            'shipping_price' => ['required'],
            'status' => ['required', 'in:PENDING,SUCCESS,CANCELLED,FAILED,SHIPPING,SHIPPED'],
        ]);

        $transaction = Transaction::create([
            'user_id' => Auth::user()->id,
            'address' => $request->address,
            'total_price' => $request->total_price,
            'shipping_price' => $request->shipping_price,
            'status' => $request->status,
        ]);

        foreach ($request->details as $product) {
            TransactionDetail::create([
                'user_id' => Auth::user()->id,
                'transaction_id' => $transaction->id,
                'product_id' => $product['product_id'],
                'qty' => $product['qty'],
            ]);
        }

        return ResponseFormatter::success(
            $transaction->load('details.product'),
            'Transaction successfully created'
        );
    }
}
