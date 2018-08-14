<?php

namespace App\Http\Controllers;

use App\Http\DTO\productsHelper;
use Illuminate\Http\Request;
use App\Http\Repository\productsRepository;
use Validator;

class productController extends Controller
{
    private $productsRepository;

    function __construct(productsRepository $productsRepository)
    {
        $this->productsRepository = $productsRepository;
    }

    function store(Request $request)
    {
        //add article validation
        $rules = [
            'n' => 'required|unique:products,product_name|min:3',
            's' => 'required|numeric|min:1',
            'p' => 'required|numeric|min:0'
        ];
        $input = $request->only(
            'n',
            's',
            'p'
        );
        $messages = [
            'n.required|unique:products,product_name|min:3' => 'The product name is required and minmum three character',
            'required|numeric|min:1' => 'The product price required and should be in integer value',
            'p.required|numeric|min:0' => 'The product price required and should be in integer value',
        ];
        $validator = Validator::make($input, $rules,$messages);
        if ($validator->fails())
            return view('added')->with('error', $validator->errors()->all());
        else {
            $data = productsHelper::prepareCreate($request);
            $this->productsRepository->create($data);
            return view('added')->with('success', true);
        }
    }


    function all()
    {
        $all = $this->productsRepository->all();
        $all = productsHelper::allProducts($all);
        return view('products')->with('products', $all);
    }
}
