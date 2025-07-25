<?php

use Illuminate\Support\Facades\Route;

Route::post('paypal', 'Paypal\ProcessController@ipn')->name('Paypal');
Route::get('paypal-sdk', 'PaypalSdk\ProcessController@ipn')->name('PaypalSdk');
Route::post('perfect-money', 'PerfectMoney\ProcessController@ipn')->name('PerfectMoney');
Route::post('stripe', 'Stripe\ProcessController@ipn')->name('Stripe');
Route::post('stripe-js', 'StripeJs\ProcessController@ipn')->name('StripeJs');
Route::post('stripe-v3', 'StripeV3\ProcessController@ipn')->name('StripeV3');
Route::post('skrill', 'Skrill\ProcessController@ipn')->name('Skrill');
Route::post('paytm', 'Paytm\ProcessController@ipn')->name('Paytm');
Route::post('payeer', 'Payeer\ProcessController@ipn')->name('Payeer');
Route::post('paystack', 'Paystack\ProcessController@ipn')->name('Paystack');
Route::get('flutterwave/{trx}/{type}', 'Flutterwave\ProcessController@ipn')->name('Flutterwave');
Route::post('razorpay', 'Razorpay\ProcessController@ipn')->name('Razorpay');
Route::post('instamojo', 'Instamojo\ProcessController@ipn')->name('Instamojo');
Route::get('blockchain', 'Blockchain\ProcessController@ipn')->name('Blockchain');
Route::post('coinpayments', 'Coinpayments\ProcessController@ipn')->name('Coinpayments');
Route::post('coinpayments-fiat', 'CoinpaymentsFiat\ProcessController@ipn')->name('CoinpaymentsFiat');
Route::post('coingate', 'Coingate\ProcessController@ipn')->name('Coingate');
Route::post('coinbase-commerce', 'CoinbaseCommerce\ProcessController@ipn')->name('CoinbaseCommerce');
Route::get('mollie', 'Mollie\ProcessController@ipn')->name('Mollie');
Route::post('cashmaal', 'Cashmaal\ProcessController@ipn')->name('Cashmaal');
Route::post('mercado-pago', 'MercadoPago\ProcessController@ipn')->name('MercadoPago');
Route::post('authorize', 'Authorize\ProcessController@ipn')->name('Authorize');
Route::get('nmi', 'NMI\ProcessController@ipn')->name('NMI');
Route::any('btc-pay', 'BTCPay\ProcessController@ipn')->name('BTCPay');
Route::post('now-payments-hosted', 'NowPaymentsHosted\ProcessController@ipn')->name('NowPaymentsHosted');
Route::post('now-payments-checkout', 'NowPaymentsCheckout\ProcessController@ipn')->name('NowPaymentsCheckout');
Route::post('2checkout', 'TwoCheckout\ProcessController@ipn')->name('TwoCheckout');
Route::any('checkout', 'Checkout\ProcessController@ipn')->name('Checkout');
Route::post('sslcommerz', 'SslCommerz\ProcessController@ipn')->name('SslCommerz');
Route::post('aamarpay', 'Aamarpay\ProcessController@ipn')->name('Aamarpay');
Route::get('binance', 'Binance\ProcessController@ipn')->name('Binance');

