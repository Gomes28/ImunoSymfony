<?php

namespace App\Service;

use MercadoPago\Item;
use MercadoPago\Payment;
use MercadoPago\Preference;
use MercadoPago\SDK;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

class MercadoPagoService
{

    public function __construct(ParameterBagInterface $parameterBag)
    {
        SDK::setAccessToken($parameterBag->get('MERCADOPAGO_TOKEN'));
    }


    public function createPreference(){
        return new Preference();
    }

    public function setPayments(Preference $preference){
        $preference->payment_methods = [
            "excluded_payment_types" => [
                ["id" => "ticket"],
                ["id" => "bolet"],
                ["id" => "paypal"],
                ["id" => "mercadopago"],
            ],
            "installments" => 12
        ];
    }

    public function setBackUrls(Preference $preference,$urlSuccess,$urlPending,$urlFailure){
        $preference->back_urls = [
            "success" => $urlSuccess,
            "failure" => $urlFailure,
            "pending" => $urlPending
        ];
        $preference->auto_return = 'approved';
    }

    public function setUrlRedirects(Preference $preference,$urlSuccess,$urlPending,$urlFailure){
        $preference->redirect_urls = [
            "success" => $urlSuccess,
            "failure" => $urlFailure,
            "pending" => $urlPending
        ];
        $preference->auto_return = 'approved';

    }

//    public function setFacebookPix(Preference $preference,$pixcode){
//        $preference->tracks = [
//            [
//                'type' => 'facebook_ad',
//                'values' => [
//                    'pixel_id' => strval($pixcode)
//                ]
//            ]
//        ];
//    }

    public function setExternalReference(Preference $preference,$reference){
        $preference->external_reference = $reference;
    }

    public function setUrlNotification(Preference $preference,$url){
        $preference->notification_url = $url;
    }

    public function createItem($name, $amount, $total_payment){

        $numberFormat = substr_replace($total_payment, '.', -2, 0);
        $item = new Item();
        $item->title = $name;
        $item->quantity = $amount;
        $item->unit_price =  $numberFormat;
        return $item;
    }

    public function findByIdPreference($id)
    {
        return Preference::find_by_id(trim($id));
    }


    public function getPaymentMethods(){
        return SDK::get("/v1/payment_methods");
    }

    public function findById($id)
    {
        return Payment::find_by_id(trim($id));
    }

}