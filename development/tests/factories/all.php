<?php
/**
 * Created by PhpStorm.
 * User: abcd
 * Date: 12/16/2016
 * Time: 12:08 PM
 */



$factory(\Modules\Users\Entities\UserModel::class, function ($faker) {

    $firstName = $faker->firstName;
    $lastName = $faker->lastName;
    $password = 'secret';

    return [
        'username' => $faker->userName,
        'status'       =>  $faker->randomElement(['closed', 'open']),
        'full_name' => $firstName . ' ' . $lastName,
        'cnic'      => $faker->numberBetween(11111,99999) . '-' . $faker->numberBetween(1111111,9999999) . '-' . $faker->numberBetween(0, 9),
        'email' => $faker->email,
        'password' => bcrypt($password),
        'url' => $faker->url,
        'profile_picture' => $faker->imageUrl(400,400, 'people'),
        'contact_number' => '0' . $faker->numberBetween(300,350) . '-' . $faker->numberBetween(1000000,9999999),
        'user_role'       =>  $faker->randomElement(['admin', 'staff', 'auctioneer', 'bidder']),
        'updated_by'      => null,
        'deleted_at' => null,
        'created_at' => Carbon\Carbon::now('Asia/Karachi'),
        'updated_at' => Carbon\Carbon::now('Asia/Karachi')
    ];
});


$factory(\Modules\Cars\Entities\CarsModel::class, function ($faker) {


    $users_des = \Modules\Users\Entities\UserModel::orderBy('id', 'desc')->get();
    $users_asc = \Modules\Users\Entities\UserModel::orderBy('id', 'asc')->get();

    $engine_types_des = \Modules\EngineTypes\Entities\EngineTypeModel::orderBy('id', 'desc')->get();
    $engine_types_asc = \Modules\EngineTypes\Entities\EngineTypeModel::orderBy('id', 'asc')->get();


    $car_models_des = \Modules\CarModels\Entities\CarModelsModel::orderBy('id', 'desc')->get();
    $car_models_asc = \Modules\CarModels\Entities\CarModelsModel::orderBy('id', 'asc')->get();



    //dd($users_des[0]->id);


    $min_price = $faker->numberBetween(200000, 3000000);
    $average_price = $faker->numberBetween(300000+$min_price, 9999999);



    return [
        'uid' => mt_rand($users_asc[0]->id, $users_des[0]->id),
        'title' =>  $faker->userName . ' car',
        'average_price' => $average_price,
        'minimum_price' =>  $min_price,
        'manufacturing_year'    =>  \Carbon\Carbon::create($faker->year),
        'model' => mt_rand($car_models_asc[0]->id, $car_models_des[0]->id),
        'engine_type'   =>  mt_rand($engine_types_asc[0]->id, $engine_types_des[0]->id),
        'trim'          =>  $faker->randomElement(['LE', 'XLE', 'Limited', "ABC"]),
        'exterior_color'    => $faker->hexColor,
        'interior_color'    =>  $faker->hexColor,
        'grade'          =>  $faker->randomElement(['A', 'B', 'C', "D"]),
        'kilometers'    => $faker->numberBetween(800, 99999),
        'engine_number' => $faker->randomLetter . $faker->numberBetween(1, 9999999),
        'chassis_number'    => $faker->randomLetter . $faker->randomLetter . $faker->randomLetter . $faker->numberBetween(1, 99959),
        'number_plate'    => $faker->randomLetter . $faker->randomLetter . $faker->randomLetter . $faker->numberBetween(1, 9999),
        'city_of_registration'    => $faker->randomElement(['Lahore', 'Karachi', 'Islamabad', 'Peshawar', 'Multan', 'Sialkot', 'Sukkhur', 'Rawalpindi']),
        'transmission'    => $faker->randomElement(['automatic', 'manual']),
        'body_type'    => $faker->randomElement(['Hatchback', 'Sedan', 'MUV/SUV', 'Coupe', 'Convertible', 'Wagon', 'Van', 'Jeep' ]),
        'drivetrain'    => $faker->randomElement(['FWD', 'RWD', 'MUV/SUV', '4WD' ]),
        'deleted_at' => null,
        'created_at' => Carbon\Carbon::now('Asia/Karachi'),
        'updated_at' => Carbon\Carbon::now('Asia/Karachi')
    ];
});



$factory(\Modules\CarModels\Entities\CarModelsModel::class, function ($faker) {

    $companies_des = \Modules\CarCompanies\Entities\CarCompaniesModel::orderBy('id', 'desc')->get();
    $companies_asc = \Modules\CarCompanies\Entities\CarCompaniesModel::orderBy('id', 'asc')->get();

    return [
        'car_company_id' => mt_rand($companies_asc[0]->id, $companies_des[0]->id),
        'model_name' =>  $faker->randomElement(['Hyundai Galloper', 'Hyundai Santa Fe', 'Hyundai Accent Variants', 'Toyota Aygo', 'Toyota Avalon']),

        'deleted_at' => null,
        'created_at' => Carbon\Carbon::now('Asia/Karachi'),
        'updated_at' => Carbon\Carbon::now('Asia/Karachi')
    ];
});


$factory(\Modules\CarCompanies\Entities\CarCompaniesModel::class, function ($faker) {

    return [
        'company_name' => $faker->randomElement(['Hyundai', 'Toyota']),
        'deleted_at' => null,
        'created_at' => Carbon\Carbon::now('Asia/Karachi'),
        'updated_at' => Carbon\Carbon::now('Asia/Karachi')
    ];
});



$factory(\Modules\EngineTypes\Entities\EngineTypeModel::class, function ($faker) {

    return [
        'title' => $faker->randomElement(['External combustion (EC)', 'Internal Combustion (IC)', 'Diesel Engine', 'Petrol Engine']),
        'deleted_at' => null,
        'created_at' => Carbon\Carbon::now('Asia/Karachi'),
        'updated_at' => Carbon\Carbon::now('Asia/Karachi')
    ];
});








































/*$factory('App\Bank_Account',  [
        'user_id' => 'factory:App\User',
        'bank_name' => 'Bank ' . $faker->name . ' LTD',
        'account_number'    =>  $faker->bankAccountNumber,
        'name_on_cc'        =>  $faker->name,
        'cc_number'         =>  $faker->year,
        'cvv'               =>  mt_rand(1000, 9999),
        'sale_price'               =>  $faker->numberBetween(50, 999999) . '.' . $pointValue,
        'weight'        =>  $faker->numberBetween(0,5),
        'weight_unit'   =>  $faker->randomElement(['g' ,'kg', 'mg']),
        'sku'   =>  $faker->isbn10,
        'availability'  =>  '',
        'is_featured'   =>  mt_rand(0, 1),
        'is_free_shipping'  =>  mt_rand(0,1),
        'discount'  =>  $faker->image(dir, w, h, c, b),







    ]
 );*/


$factory('App\User_Meta', function ($faker) {
    // One key per user

    $test_meta_keys = ['companyName', 'fax', 'companyAddress', 'TAX_ID'];

    if ( ! isset($_SESSION['usermeta_iteration']))
        $_SESSION['usermeta_iteration'] = '0';

    if ($_SESSION['usermeta_iteration'] == 0){
        $value = $faker->company;
    }else if ($_SESSION['usermeta_iteration'] == 1){
        $value = $faker->phoneNumber;
    }else if ($_SESSION['usermeta_iteration'] == 2){
        $value = $faker->address;
    }else if ($_SESSION['usermeta_iteration'] == 3){
        $value = $faker->swiftBicNumber;
    }

    $arr  = [
        'user_id' => 'factory:App\User',
        'meta_key' => $test_meta_keys[$_SESSION['usermeta_iteration']],
        'meta_value'    =>  $value,
        'deleted_at' => null,
        'created_at' => Carbon\Carbon::now('Asia/Karachi'),
        'updated_at' => Carbon\Carbon::now('Asia/Karachi')
    ];

    $_SESSION['usermeta_iteration']++;

    if ($_SESSION['usermeta_iteration'] > 3){
        $_SESSION['usermeta_iteration'] = '0';
    }

    /*$arr = array();
    for ($i = 0; $i < sizeof($test_meta_keys); $i++){

        if ($i == 0){
            $value = $faker->company;
        }else if ($i == 1){
            $value = $faker->phoneNumber;
        }else if ($i == 2){
            $value = $faker->address;
        }else if ($i == 3){
            $value = $faker->swiftBicNumber;
        }


        $child_arr = [
            'user_id' => 'factory:App\User',
            'meta_key' => $test_meta_keys[$i],
            'meta_value'    =>  $value,
            'deleted_at' => null,
            'created_at' => Carbon\Carbon::now('Asia/Karachi'),
            'updated_at' => Carbon\Carbon::now('Asia/Karachi')
        ];

        $arr[] = $child_arr;
    }*/

    return $arr;
} );


$factory('App\Post', function ($faker) {
    // One key per user

    $user = App\User::firstOrFail();


    $title = $faker->name;
    $slug = str_replace(' ', '-', $title . '_' . $faker->numberBetween(10,1000));

    $slug = str_replace('.', '', $slug);


    $image_url = array();
    for($i = 0; $i < 10; $i++){
        $image_url[] = $faker->imageUrl(640);
    }

    $json_images = json_encode($image_url);

    exit;

    $arr  = [
        'user_id' => $user->id,
        'title'         =>  $title,
        'short_description' =>  $faker->text(80),
        'content'           =>  $faker->text(400),
        'slug'              =>  $slug,
        'featured_image'    =>  $faker->imageUrl(800,800,'fashion'),
        'images'            =>  $json_images,
        'status'            =>  mt_rand(1,4),
        'comment_count'     =>  '0',
        'deleted_at' => null,
        'created_at' => Carbon\Carbon::now('Asia/Karachi'),
        'updated_at' => Carbon\Carbon::now('Asia/Karachi')
    ];

    if ($_SESSION['usermeta_iteration'] > 3){
        $_SESSION['usermeta_iteration'] = '0';
    }

    return $arr;
} );

$factory('App\User_Role', function ($faker) {

    $records = DB::table('user_roles')->get();

    if (! (sizeof($records) >= 4 ) ) {

        $roles = ['administrator', 'member', 'team', 'inactive'];

        if (!isset($_SESSION['iteration']))
            $_SESSION['iteration'] = '0';

        $arr = ['role' => $roles[$_SESSION['iteration']],
            'deleted_at' => null,
            'created_at' => Carbon\Carbon::now('Asia/Karachi'),
            'updated_at' => Carbon\Carbon::now('Asia/Karachi')
        ];

        $_SESSION['iteration']++;

        if ($_SESSION['iteration'] > 3) {
            $_SESSION['iteration'] = 0;
        }

        return $arr;
    }
} );




$factory('App\Post_Status', function ($faker) {

    $records = DB::table('post_statuses')->get();

    if (! (sizeof($records) >= 4 ) ) {

        $post_statuses = ['published', 'draft', 'private', 'pending review'];


        if (!isset($_SESSION['post_status_iteration']))
            $_SESSION['post_status_iteration'] = '0';

        $arr = ['status_title' => $post_statuses[$_SESSION['post_status_iteration']],
            'deleted_at' => null,
            'created_at' => Carbon\Carbon::now('Asia/Karachi'),
            'updated_at' => Carbon\Carbon::now('Asia/Karachi')
        ];

        $_SESSION['post_status_iteration']++;

        if ($_SESSION['post_status_iteration'] > 3) {
            $_SESSION['post_status_iteration'] = 0;
        }

        return $arr;
    }
} );

$factory('App\Comment', function ($faker) {

    $post_des = DB::table('posts')->orderBy('id', 'desc')->get();
    $post_asc = DB::table('posts')->orderBy('id', 'asc')->get();

    $user_des = DB::table('users')->orderBy('id', 'desc')->get();
    $user_asc = DB::table('users')->orderBy('id', 'asc')->get();

    //var_export($post_des[0]->id);


    $arr = [
        'comment' => $faker->text(mt_rand(10,250)),
        'post_id'   =>  mt_rand($post_asc[0]->id, $post_des[0]->id),
        'user_id'   =>  mt_rand($user_asc[0]->id, $user_des[0]->id),
        'is_approved'   =>  mt_rand(0,1),
        'deleted_at' => null,
        'created_at' => Carbon\Carbon::now('Asia/Karachi'),
        'updated_at' => Carbon\Carbon::now('Asia/Karachi')
    ];

    return $arr;
} );


$factory('App\Category', function ($faker) {

    $records = DB::table('categories')->get();

    if (! (sizeof($records) >= 7 ) ) {
        //var_export($post_des[0]->id);

        $categories = [
            'people',
            'nature',
            'business',
            'city',
            'food',
            'transport',
            'abstract',
        ];

        if (!isset($_SESSION['categories_iteration']))
            $_SESSION['categories_iteration'] = '0';


        $arr = [
            'category' => $categories[$_SESSION['categories_iteration']],
            'category_image'   =>  $faker->imageUrl(640, 640, $categories[$_SESSION['categories_iteration']]),
            'deleted_at' => null,
            'created_at' => Carbon\Carbon::now('Asia/Karachi'),
            'updated_at' => Carbon\Carbon::now('Asia/Karachi')
        ];

        $_SESSION['categories_iteration']++;

        if ($_SESSION['categories_iteration'] > 7){
            $_SESSION['categories_iteration'] = 0;
        }

        return $arr;
    }


} );


$factory('App\Post_Category', function ($faker) {

    $post_des = DB::table('posts')->orderBy('id', 'desc')->get();
    $post_asc = DB::table('posts')->orderBy('id', 'asc')->get();

    $cat_des = DB::table('categories')->orderBy('id', 'desc')->get();
    $cat_asc = DB::table('categories')->orderBy('id', 'asc')->get();

    $arr = [
        'post_id' => mt_rand($post_asc[0]->id, $post_des[0]->id),
        'category_id'   =>  mt_rand($cat_asc[0]->id, $cat_des[0]->id),
        'deleted_at' => null,
        'created_at' => Carbon\Carbon::now('Asia/Karachi'),
        'updated_at' => Carbon\Carbon::now('Asia/Karachi')
    ];

    return $arr;
} );


$factory('App\Product', function ($faker) {

    $post_des = DB::table('posts')->orderBy('id', 'desc')->get();
    $post_asc = DB::table('posts')->orderBy('id', 'asc')->get();

    $availability_des = DB::table('product_availability')->orderBy('id', 'desc')->get();
    $availability_asc = DB::table('product_availability')->orderBy('id', 'asc')->get();

    $discount_sch_des = DB::table('discount_schemes')->orderBy('id', 'desc')->get();
    $discount_sch_asc = DB::table('discount_schemes')->orderBy('id', 'asc')->get();


    if (!isset($_SESSION['product_iteration']))
        $_SESSION['product_iteration'] = '1';

    if ($_SESSION['product_iteration'] % 3 == 0){
        $discount_scheme = mt_rand($discount_sch_asc[0]->id, $discount_sch_des[0]->id);
    }else {
        $discount_scheme = null;
    }

    $pointValue = mt_rand(0, 10) / 10;
    if ($pointValue == 0){
        $pointValue = 0.1;
    }

    $pid = mt_rand($post_asc[0]->id, $post_des[0]->id);

    $post = \App\Post::find($pid);
    $post->post_type = 'product';
    $post->save();

    $arr = [
        'post_id'       => $pid,
        'sale_price'    =>  $faker->numberBetween(50, 999999) * $pointValue,
        'weight'        =>  $faker->numberBetween(0.1 ,5),
        'weight_unit'   =>  $faker->randomElement(['g' ,'kg', 'mg']),
        'availability'  =>  mt_rand($availability_asc[0]->id, $availability_des[0]->id),
        'is_featured'   =>  mt_rand(0, 1),
        'is_free_shipping'  =>  mt_rand(0,1),
        'discount'  =>  $faker->randomElement(['0', rand(0,25)]),
        'discount_unit'  =>  $faker->randomElement(['fixed', 'percentage']),
        'discount_scheme_id'  =>  $discount_scheme,
        'deleted_at' => null,
        'created_at' => Carbon\Carbon::now('Asia/Karachi'),
        'updated_at' => Carbon\Carbon::now('Asia/Karachi')
    ];

    $_SESSION['product_iteration']++;

    return $arr;
} );

$factory('App\ProductAvailability', function ($faker) {


    $titles = ['available', 'disconnected', 'not available'];

    if (!isset($_SESSION['availability_iteration']))
        $_SESSION['availability_iteration'] = '0';


    $arr = [
        'availability_title'       => $titles[$_SESSION['availability_iteration']],
        'deleted_at' => null,
        'created_at' => Carbon\Carbon::now('Asia/Karachi'),
        'updated_at' => Carbon\Carbon::now('Asia/Karachi')
    ];

    $_SESSION['availability_iteration']++;

    if ($_SESSION['availability_iteration'] > 2){
        $_SESSION['availability_iteration'] = 0;
    }

    return $arr;
} );

$factory('App\Discount_Scheme', function ($faker) {


    $discountFrom =
        [
            // time starting from 15:49:**              //REF:  http://www.epochconverter.com/
            $faker->dateTime('1481971750'),         //  17/12/2016
            $faker->dateTime('1482230950'),         //  20/12/2016
            $faker->dateTime('1482662950'),         //  25/12/2016
            $faker->dateTime('1483267750'),         //  01/01/2017
        ];


    $discountTo =
        [
            // time starting from 15:49:**
            $faker->dateTime('1483267750'),         //  01/01/2017
            $faker->dateTime('1483094950'),         //  30/12/2016
            $faker->dateTime('1484477350'),         //  15/01/2017
            $faker->dateTime('1484045350'),         //  10/01/2017
        ];



    $arr = [
        'title'  =>  $faker->text(rand(5, 30)),
        'discount_from' =>  $faker->randomElement($discountFrom),
        'discount_to' =>  $faker->randomElement($discountTo),
        'discount_unit' =>  $faker->randomElement(['fixed', 'percentage']),
        'discount_value' =>  rand(3,25),
        'status' =>  mt_rand(0,1),
        'deleted_at' => null,
        'created_at' => Carbon\Carbon::now('Asia/Karachi'),
        'updated_at' => Carbon\Carbon::now('Asia/Karachi')
    ];


    return $arr;
} );


$factory('App\SKU', function ($faker) {

    $products_desc = DB::table('products')->orderBy('id', 'desc')->get(['id']);
    $products_asc = DB::table('products')->orderBy('id', 'asc')->get(['id']);

    $pointValue = mt_rand(0, 10) / 10;
    if ($pointValue == 0){
        $pointValue = 0.1;
    }

    if (! isset($_SESSION['sku_arr']))
        $_SESSION['sku_arr'] = array();

    do{
        $id = rand($products_desc[0]->id, $products_asc[0]->id);

    }while ( in_array( $id, $_SESSION['sku_arr'] ) );


    $_SESSION['sku_arr'][] = $id;

    $arr = [
        'product_id'  =>  $id,
        'sku' =>  str_replace('.', '', $faker->text(5)) . '-' . $faker->numberBetween(100000, 999999),
        'price' =>  $faker->numberBetween(50, 999999) * $pointValue,
        'quantity' =>  mt_rand(0, 150),
        'deleted_at' => null,
        'created_at' => Carbon\Carbon::now('Asia/Karachi'),
        'updated_at' => Carbon\Carbon::now('Asia/Karachi')
    ];


    return $arr;
} );


$factory('App\Variant', function ($faker) {

    $variant =  ['color', 'size', 'style', 'stuff'];

    $products_desc = DB::table('products')->orderBy('id', 'desc')->get();
    $products_asc = DB::table('products')->orderBy('id', 'asc')->get();


    if (! isset($_SESSION['variant_arr']))
        $_SESSION['variant_arr'] = array();


    $id = mt_rand($products_asc[0]->id, $products_desc[0]->id);
    while( in_array( $id, $_SESSION['variant_arr'] ) ){
        $id = mt_rand($products_asc[0]->id, $products_desc[0]->id);
    }

    $_SESSION['variant_arr'][] = $id;

    $arr = [
        'product_id'  =>  $id,
        'name' =>  $variant[mt_rand(0, 3)],
        'deleted_at' => null,
        'created_at' => Carbon\Carbon::now('Asia/Karachi'),
        'updated_at' => Carbon\Carbon::now('Asia/Karachi')
    ];




    return $arr;
} );


$factory('App\VariantOption', function ($faker) {

    $variant =  ['color', 'size', 'style', 'stuff'];
    $variant_value =  array (
        $variant[0] =>  array (
            'red', 'pink', 'silver', 'blue'
        ),

        $variant[1] =>  array (
            'medium', 'large', 'small', 'xxl'
        ),

        $variant[2] =>  array (
            'indian', 'Pakistani', 'new fashion', 'sindhi'
        ),

        $variant[3] =>  array (
            'soft', 'normal', 'hard', 'extra soft'
        )
    );

    $variant_desc = DB::table('variants')->orderBy('id', 'desc')->get();
    $variant_asc = DB::table('variants')->orderBy('id', 'asc')->get();

    do{

        $id = rand($variant_asc[0]->id, $variant_desc[0]->id);

        $variantName = DB::table('variants')->where('id', '=', $id)->get();
        $variant_val = $variant_value[$variantName[0]->name][mt_rand(0,3)];
        $res = DB::table('variant_options')->where([ ['variant_id', '=', $id], ['value', '=', $variant_val] ])->get();

    }
    while( !empty($res) );

    $arr = [
        'variant_id'  =>  $id,
        'value' =>  $variant_val,
        'sku_id' =>  null,
        'deleted_at' => null,
        'created_at' => Carbon\Carbon::now('Asia/Karachi'),
        'updated_at' => Carbon\Carbon::now('Asia/Karachi')
    ];


    return $arr;
} );


$factory('App\ProductFreeShipping', function ($faker) {

    $product_desc = DB::table('products')->orderBy('id', 'desc')->get();
    $product_asc = DB::table('products')->orderBy('id', 'asc')->get();

    $arr = [
        'product_id'  =>  mt_rand($product_asc[0]->id, $product_desc[0]->id),
        'country_id' =>  null,
        'region_id' =>  null,
        'city_id'   =>  null,
        'deleted_at' => null,
        'created_at' => Carbon\Carbon::now('Asia/Karachi'),
        'updated_at' => Carbon\Carbon::now('Asia/Karachi')
    ];


    return $arr;

});



$factory('App\CourierMethod', function ($faker) {

    $company_name = [
        'DHL', 'TCS', 'FedEx'
    ];

    $companyURL = [
        'http://www.dhl.com/en/express/tracking.shtml',
        'http://www.tcscouriers.com/pk/tracking/Default.aspx',
        'https://www.fedex.com/apps/fedextrack/'
    ];


    if (! isset($_SESSION['courier_methods_iteration']))
        $_SESSION['courier_methods_iteration'] = 0;

    $arr = [
        'courier_name'  => $company_name[$_SESSION['courier_methods_iteration']] ,
        'tracking_url' =>  $companyURL[$_SESSION['courier_methods_iteration']],
        'deleted_at' => null,
        'created_at' => Carbon\Carbon::now('Asia/Karachi'),
        'updated_at' => Carbon\Carbon::now('Asia/Karachi')
    ];




    $_SESSION['courier_methods_iteration']++ ;
    if ($_SESSION['courier_methods_iteration'] > 2)
        $_SESSION['courier_methods_iteration'] = 0;


    return $arr;


});


$factory('App\PaymentMethod', function ($faker) {

    $methods = array(
        'PayPal', 'COD', 'Check'
    );


    if (! isset($_SESSION['payment_methods_iteration']))
        $_SESSION['payment_methods_iteration'] = 0;

    $arr = [
        'title'  => $methods[$_SESSION['payment_methods_iteration']] ,
        'deleted_at' => null,
        'created_at' => Carbon\Carbon::now('Asia/Karachi'),
        'updated_at' => Carbon\Carbon::now('Asia/Karachi')
    ];

    $_SESSION['payment_methods_iteration']++ ;
    if ($_SESSION['payment_methods_iteration'] > 2)
        $_SESSION['payment_methods_iteration'] = 0;


    return $arr;

});


$factory('App\OrderStatus', function ($faker) {

    $order_statuses = array(
        'cancelled', 'pending', 'shipped'
    );


    if (! isset($_SESSION['orderStatus_iteration']))
        $_SESSION['orderStatus_iteration'] = 0;

    $arr = [
        'status_value'  => $order_statuses[$_SESSION['orderStatus_iteration']] ,
        'deleted_at' => null,
        'created_at' => Carbon\Carbon::now('Asia/Karachi'),
        'updated_at' => Carbon\Carbon::now('Asia/Karachi')
    ];

    $_SESSION['orderStatus_iteration']++ ;
    if ($_SESSION['orderStatus_iteration'] > 2)
        $_SESSION['orderStatus_iteration'] = 0;


    return $arr;

});


$factory('App\Country', function ($faker) {

    // php artisan db seed --CountryTableSeeder
    $countries = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");


    if (! isset($_SESSION['countries_iteration']))
        $_SESSION['countries_iteration'] = 0;

    $arr = [
        'country_name'  => $countries[$_SESSION['countries_iteration']] ,
        'deleted_at' => null,
        'created_at' => Carbon\Carbon::now('Asia/Karachi'),
        'updated_at' => Carbon\Carbon::now('Asia/Karachi')
    ];

    $_SESSION['countries_iteration']++ ;
    if ($_SESSION['countries_iteration'] > 2){}
        //$_SESSION['countries_iteration'] = 0;

    return $arr;

});

$factory('App\City', function ($faker) {
    $cities = [
        'Pakistan'  =>
            [
                'Punjab'    => ['Lahore', 'Islamabad', 'Faislabad'],
                'Sindh'    => ['Karachi', 'Sukkur', 'Larkana']
            ],
        'Saudi Arabia'  =>
            [
                'Riyadh'    => ['Layla', 'Riyadh', 'Al-Kharj'],
                'Asir'    => ['Abha', 'Habala', 'Al-Namas']
            ],
        'UK'  =>
            [
                'London'    => ['Newham', 'Redbridge', 'Kingston'],
                'South East'    => ['SE-ABC', 'SE-CDE', 'SE-EFG']
            ],
    ];


    if (! isset($_SESSION['cities_iteration'])){
        $_SESSION['cities_iteration'] = $_SESSION['cityid'] = 0;
    }


    if ($_SESSION['cities_iteration'] < 6){
        $region = 'Punjab';
        $r = 'Punjab';

        if ($_SESSION['cities_iteration'] >= 3){
            $region = 'Sindh';
            $r = 'Sindh';
        }

        $regID = App\Region::where('state_region', $region)->get()->toArray();
        $regID = $regID[0]['id'];

        $arr = [
            'region_id'  => $regID,
            'city_name'  => $cities['Pakistan'][$r][$_SESSION['cityid']] ,
            'deleted_at' => null,
            'created_at' => Carbon\Carbon::now('Asia/Karachi'),
            'updated_at' => Carbon\Carbon::now('Asia/Karachi')
        ];

        $_SESSION['cityid']++;

        if ($_SESSION['cityid'] > 2)
            $_SESSION['cityid'] = 0;


        return $arr;
    }else if ($_SESSION['cities_iteration'] >= 6 && $_SESSION['cities_iteration'] < 12){
        $region = 'Riyadh';
        $r = 'Riyadh';

        if ($_SESSION['cities_iteration'] >= 9){
            $region = 'Asir';
            $r = 1;
        }

        $regID = App\Region::where('state_region', $region)->get()->toArray();
        $regID = $regID[0]['id'];

        $arr = [
            'region_id'  => $regID,
            'city_name'  => $cities['Saudi Arabia'][$r][$_SESSION['cityid']] ,
            'deleted_at' => null,
            'created_at' => Carbon\Carbon::now('Asia/Karachi'),
            'updated_at' => Carbon\Carbon::now('Asia/Karachi')
        ];

        $_SESSION['cityid']++;

        if ($_SESSION['cityid'] > 2)
            $_SESSION['cityid'] = 0;


        return $arr;

    }else if ($_SESSION['cities_iteration'] >= 12 && $_SESSION['cities_iteration'] < 18){
        $region = 'London';
        $r = 'London';

        if ($_SESSION['cities_iteration'] >= 15){
            $region = 'South East';
            $r = 'South East';
        }

        $regID = App\Region::where('state_region', $region)->get()->toArray();
        $regID = $regID[0]['id'];

        $arr = [
            'region_id'  => $regID,
            'city_name'  => $cities['UK'][$r][$_SESSION['cityid']] ,
            'deleted_at' => null,
            'created_at' => Carbon\Carbon::now('Asia/Karachi'),
            'updated_at' => Carbon\Carbon::now('Asia/Karachi')
        ];

        $_SESSION['cityid']++;

        if ($_SESSION['cityid'] > 2)
            $_SESSION['cityid'] = 0;


        return $arr;
    }

    $_SESSION['cities_iteration']++ ;
    if ($_SESSION['cities_iteration'] > 18)
        $_SESSION['cities_iteration'] = 0;

});

$factory('App\Region', function ($faker) {

    $regionArr = [
        'Pakistan'  =>  ['Punjab', 'Sindh'],
        'Saudi Arabia'  =>  ['Riyadh', 'Asir'],
        'UK'  =>  ['London', 'South East'],
    ];


    if (! isset($_SESSION['regions_iteration'])){
        $_SESSION['regions_iteration'] = 0;
    }

    $arr = array();

    if ($_SESSION['regions_iteration'] < 2){
        $countryName = 'Pakistan';

        $cid_arr = App\Country::where('country_name', $countryName)->get();
        Log::info("CID is " . $cid_arr);

        $cid = $cid_arr[0]->id;


        $arr = [
            'country_id'  => $cid,
            'state_region'  => $regionArr[$countryName][$_SESSION['regions_iteration']] ,
            'deleted_at' => null,
            'created_at' => Carbon\Carbon::now('Asia/Karachi'),
            'updated_at' => Carbon\Carbon::now('Asia/Karachi')
        ];



    }else if ($_SESSION['regions_iteration'] >= 2 && $_SESSION['regions_iteration'] < 4){
        $countryName = 'Saudi Arabia';

        $cid_arr = App\Country::where('country_name', $countryName)->get();
        $cid = $cid_arr[0]->id;


        $arr = [
            'country_id'  => $cid,
            'state_region'  => $regionArr[$countryName][$_SESSION['regions_iteration'] - 2] ,
            'deleted_at' => null,
            'created_at' => Carbon\Carbon::now('Asia/Karachi'),
            'updated_at' => Carbon\Carbon::now('Asia/Karachi')
        ];


    }else if ($_SESSION['regions_iteration'] >= 4 && $_SESSION['regions_iteration'] < 6){
        $countryName = 'UK';

        $cid_arr = App\Country::where('country_name', $countryName)->get();
        $cid = $cid_arr[0]->id;

        // ------------------------------LOGS-------------------------

        /*$sess = $_SESSION['regions_iteration'];
        $sess_dif = $_SESSION['regions_iteration'] - 4;

        $data = file_get_contents('log.txt');

        $data .= "\n\n--------START-------\nSession : "
            . $sess . "\n---------------\nSessDiff: " . $sess_dif
            . "\n-------END--------\n";

        file_put_contents('log.txt', $data);*/

        // -------------------------------------------------------


        $arr = [
            'country_id'  => $cid,
            'state_region'  => $regionArr[$countryName][$_SESSION['regions_iteration'] - 4] ,
            'deleted_at' => null,
            'created_at' => Carbon\Carbon::now('Asia/Karachi'),
            'updated_at' => Carbon\Carbon::now('Asia/Karachi')
        ];


    }

    $_SESSION['regions_iteration']++ ;
    if ($_SESSION['regions_iteration'] > 5){}
        //$_SESSION['regions_iteration'] = 0;

    return $arr;

});


$factory('App\ShippingMethod', function ($faker) {

    $methods = ['Express', 'Standard', 'Same Day'];
    $minDays = [ 5,10,0];
    $maxDays = [9,15,2];
    $globalRate = [60,30,90];

    if (! isset($_SESSION['shipping_methods_iteration']))
        $_SESSION['shipping_methods_iteration'] = 0;

    $arr = [
        'title'  => $methods[$_SESSION['shipping_methods_iteration']] ,
        'min_days'  => $minDays[$_SESSION['shipping_methods_iteration']] ,
        'max_days'  => $maxDays[$_SESSION['shipping_methods_iteration']] ,
        'global_rate'  => $globalRate[$_SESSION['shipping_methods_iteration']] ,
        'deleted_at' => null,
        'created_at' => Carbon\Carbon::now('Asia/Karachi'),
        'updated_at' => Carbon\Carbon::now('Asia/Karachi')
    ];

    $_SESSION['shipping_methods_iteration']++ ;
    if ($_SESSION['shipping_methods_iteration'] > 2)
        $_SESSION['shipping_methods_iteration'] = 0;

    return $arr;

});


$factory('App\ShippingRate', function ($faker) {

    $shippingMethods = App\ShippingMethod::all();
    $min_shippingMethods = $shippingMethods[0]->id;
    $max_shippingMethods = $shippingMethods[sizeof($shippingMethods) -1]->id;


    $city_ids = App\City::all();
    $min_city_ids = $city_ids[0]->id;
    $max_city_ids = $city_ids[sizeof($city_ids) -1]->id;

    $discountSchemes = App\Discount_Scheme::all();
    $min_discountSchemes = $discountSchemes[0]->id;
    $max_discountSchemes = $discountSchemes[sizeof($discountSchemes) -1]->id;

    $shipping_id = mt_rand($min_shippingMethods, $max_shippingMethods);
    $city_id = mt_rand($min_city_ids, $max_city_ids);

    if (! isset($_SESSION['discount_id_iteration']))
        $_SESSION['discount_id_iteration'] = 1;


    if ($_SESSION['discount_id_iteration'] % 3 == 0)
        $discount_scheme_id = mt_rand($min_discountSchemes, $max_discountSchemes);
    else
        $discount_scheme_id = null;

    $pointValue = mt_rand(0, 10) / 10;
    if ($pointValue == 0){
        $pointValue = 0.1;
    }


    $price = $faker->numberBetween(100, 99999) * $pointValue;
    $weight_from = $faker->numberBetween(1, 200) * $pointValue;
    $weight_to = $faker->numberBetween(1, 200) * $pointValue;

    if ($weight_from >= $weight_to){
        $weight_to = 200;
        $weight_from--;
    }

    if ($weight_from <= 0){
        $weight_from = 0.1;
    }

    $weight_unit = $faker->randomElement( ['g', 'kg', 'mg'] );
    $is_free_shipping = $faker->randomElement( [0,1] );

    $arr = [
        'shipping_method_id'  => $shipping_id ,
        'city_id'  => $city_id ,
        'price'  => $price ,
        'weight_from'  => $weight_from ,
        'weight_to'  => $weight_to ,
        'weight_unit'   => $weight_unit,
        'discount_scheme_id'  => $discount_scheme_id ,
        'is_free_shipping'  => $is_free_shipping ,
        'deleted_at' => null,
        'created_at' => Carbon\Carbon::now('Asia/Karachi'),
        'updated_at' => Carbon\Carbon::now('Asia/Karachi')
    ];

    $_SESSION['discount_id_iteration']++;

    return $arr;

});



$factory('App\Order', function ($faker) {

    $users = App\Product::all();
    $min_user_id = $users[0]->id;
    $max_user_id = $users[sizeof($users) -1]->id;


    $courier_methods = App\CourierMethod::all();
    $min_courier_methods = $courier_methods[0]->id;
    $max_courier_methods = $courier_methods[sizeof($courier_methods) -1]->id;


    $payment_methods = App\PaymentMethod::all();
    $min_payment_methods = $payment_methods[0]->id;
    $max_payment_methods = $payment_methods[sizeof($payment_methods) -1]->id;


    $order_stats = App\OrderStatus::all();
    $min_order_stats = $order_stats[0]->id;
    $max_order_stats = $order_stats[sizeof($order_stats) -1]->id;


    $shippingMethods = App\ShippingMethod::all();
    $min_shippingMethod = $shippingMethods[0]->id;
    $max_ShippingMethod = $shippingMethods[sizeof($shippingMethods) -1]->id;


    $pointValue = mt_rand(0, 10) / 10;
    if ($pointValue == 0){
        $pointValue = 0.1;
    }

    $val = 'User nai jo form fill kia ho ga. ya jo form auto fill hoa ho ga. aur hmary pas values aye gi.';

    $user_id = mt_rand($min_user_id, $max_user_id);
    $billing_info = json_encode($val);
    $shipping_info = json_encode($val);
    $payment_info = json_encode($val);;

    $shipping_method = mt_rand($min_shippingMethod, $max_ShippingMethod);
    $order_status_id = mt_rand($min_order_stats, $max_order_stats);;
    $payment_method_id = mt_rand($min_payment_methods, $max_payment_methods);
    $order_number = $faker->numberBetween(10000000, 99999999);
    $cart_amount = $faker->numberBetween(100, 999999) * $pointValue;
    $payable_amount = $faker->numberBetween(100, 999999) * $pointValue;
    $sales_tax = $faker->randomElement(['0', rand(0,25)]);
    $sales_tax_unit = $faker->randomElement(['percent', 'fixed']);
    $tracking_number = $faker->numberBetween(10000000, 99999999);
    $courier_method_id =  mt_rand($min_courier_methods, $max_courier_methods);;
    $order_date = \Carbon\Carbon::now('Asia/Karachi')->addDay(mt_rand(-20, 0));
    $is_order_shipped = mt_rand(0,1);
    $is_paid = mt_rand(0,1);

    $invoice_path = 'assets/invoices/' . $order_number . '.pdf';

    $arr = [
        'user_id'  => $user_id ,
        'billing_info' =>  $billing_info,
        'shipping_info' =>  $shipping_info,
        'payment_information' =>  $payment_info,
        'invoice_path' =>  $invoice_path,
        'shipping_method' =>  $shipping_method,
        'order_status_id' =>  $order_status_id,
        'payment_method_id' =>  $payment_method_id,
        'order_number' =>  $order_number,
        'cart_amount' =>  $cart_amount,
        'payable_amount' =>  $payable_amount,
        'sales_tax' =>  $sales_tax,
        'sales_tax_unit' =>  $sales_tax_unit,
        'tracking_number' =>  $tracking_number,
        'courier_method_id' =>  $courier_method_id,
        'order_date' =>  $order_date,
        'is_order_shipped' =>  $is_order_shipped,
        'is_paid' =>  $is_paid,
        'deleted_at' => null,
        'created_at' => Carbon\Carbon::now('Asia/Karachi'),
        'updated_at' => Carbon\Carbon::now('Asia/Karachi')
    ];

    return $arr;

});