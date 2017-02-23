<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DBTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        // Turn off Foreign Key checks.
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');

        // Users and related - 5

        Schema::create('users', function(Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->bigIncrements('id',20)->unsigned();
            $table->string('username', 255)->nullable();
            $table->enum('status', ['closed', 'open'])->nullable();
            $table->string('full_name', 255)->nullable();
            $table->string('cnic', 15)->nullable();
            $table->string('email', 255)->nullable();
            $table->string('password', 255)->nullable();
            $table->string('url', 255)->nullable();
            $table->string('profile_picture', 255)->nullable();
            $table->string('contact_number', 255)->nullable();
            $table->enum('user_role', ['admin', 'staff', 'auctioneer', 'bidder'])->nullable();
            $table->bigInteger('updated_by', false, true)->unsigned()->nullable();
            $table->dateTime('deleted_at')->nullable();
            $table->dateTime('created_at')->nullable();
            $table->dateTime('updated_at')->nullable();

        });
        Schema::create('invoices', function(Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->bigIncrements('id',20)->unsigned();
            $table->double('amount', 10,2)->nullable();
            $table->longText('description')->nullable();
            $table->enum('status', ['paid', 'cancelled', 'pending', 'draft'])->nullable();
            $table->bigInteger('uid', false, true)->unsigned()->nullable();
            $table->enum('payment_method', ['cash', 'cc', 'bank'])->nullable();
            $table->enum('payment_for', ['account', 'bid'])->nullable();
            $table->bigInteger('auction_id', false, true)->unsigned()->nullable();
            $table->dateTime('deleted_at')->nullable();
            $table->dateTime('created_at')->nullable();
            $table->dateTime('updated_at')->nullable();

            $table->index('uid','invoices.uid_idx');

            $table->foreign('uid')
                ->references('id')->on('users')
                ->onDelete('no action')
                ->onUpdate('no action');

        });
        Schema::create('inspectionRequests', function(Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->bigIncrements('id',20)->unsigned();
            $table->bigInteger('uid', 20)->unsigned()->nullable();
            $table->bigInteger('car_id', 20)->unsigned()->nullable();
            $table->date('date_of_inspection')->nullable();
            $table->time('time_of_inspection')->nullable();
            $table->dateTime('deleted_at')->nullable();
            $table->dateTime('created_at')->nullable();
            $table->dateTime('updated_at')->nullable();

            $table->index('uid','inspectionRequests.uid_idx');

            $table->foreign('uid')
                ->references('id')->on('users')
                ->onDelete('no action')
                ->onUpdate('no action');

        });
        Schema::create('biddings', function(Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->bigIncrements('id',20)->unsigned();
            $table->bigInteger('uid', 20)->unsigned()->nullable();
            $table->double('bid_amount', 10,2)->nullable();
            $table->bigInteger('auction_id', 20)->unsigned()->nullable();;
            $table->dateTime('deleted_at')->nullable();
            $table->dateTime('created_at')->nullable();
            $table->dateTime('updated_at')->nullable();


            $table->index('uid','biddings.uid_idx');

            $table->foreign('uid')
                ->references('id')->on('users')
                ->onDelete('no action')
                ->onUpdate('no action');



        });
        Schema::create('userMetas', function(Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->bigIncrements('id',20)->unsigned();
            $table->bigInteger('uid', 20)->unsigned()->nullable();
            $table->longText('meta_key')->nullable();
            $table->longText('meta_value')->nullable();
            $table->dateTime('deleted_at')->nullable();
            $table->dateTime('created_at')->nullable();
            $table->dateTime('updated_at')->nullable();


            $table->index('uid','um.uid_idx');

            $table->foreign('uid')
                ->references('id')->on('users')
                ->onDelete('no action')
                ->onUpdate('no action');

        });



        // Cars and related - 10
        Schema::create('auctions', function(Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->bigIncrements('id',20)->unsigned();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->time('start_time')->nullable();
            $table->time('end_time')->nullable();
            $table->bigInteger('car_id', 20)->unsigned()->nullable();
            $table->double('bid_starting_amount', 10,2)->nullable();
            $table->bigInteger('winner_user_id', 20)->unsigned()->nullable();
            $table->double('average_bid', 10,2)->nullable();
            $table->dateTime('deleted_at')->nullable();
            $table->dateTime('created_at')->nullable();
            $table->dateTime('updated_at')->nullable();

            $table->index('car_id','auctions.car_id_idx');

            $table->foreign('car_id')
                ->references('id')->on('cars')
                ->onDelete('no action')
                ->onUpdate('no action');

        });
        Schema::create('carMetas', function(Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->bigIncrements('id',20)->unsigned();
            $table->bigInteger('car_id', 20)->unsigned()->nullable();
            $table->longText('meta_key')->nullable();
            $table->longText('meta_value')->nullable();
            $table->dateTime('deleted_at')->nullable();
            $table->dateTime('created_at')->nullable();
            $table->dateTime('updated_at')->nullable();


            $table->index('car_id','cm.car_id_idx');

            $table->foreign('car_id')
                ->references('id')->on('cars')
                ->onDelete('no action')
                ->onUpdate('no action');


        });
        Schema::create('carFeatures', function(Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id',9)->unsigned();
            $table->bigInteger('car_id', 20)->unsigned()->nullable();
            $table->increments('feature_id', 9)->unsigned()->nullable();
            $table->dateTime('deleted_at')->nullable();
            $table->dateTime('created_at')->nullable();
            $table->dateTime('updated_at')->nullable();

            $table->index('car_id','carFeatures.car_id_idx');
            $table->index('feature_id','carFeatures.feature_id_idx');

            $table->foreign('feature_id')
                ->references('id')->on('features')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('car_id')
                ->references('id')->on('cars')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
        Schema::create('features', function(Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id',9)->unsigned();
            $table->string('title', 255)->nullable();
            $table->string('icon_path', 255)->nullable();
            $table->dateTime('deleted_at')->nullable();
            $table->dateTime('created_at')->nullable();
            $table->dateTime('updated_at')->nullable();

        });
        Schema::create('engineTypes', function(Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id',9)->unsigned();
            $table->string('title', 255)->nullable();
            $table->dateTime('deleted_at')->nullable();
            $table->dateTime('created_at')->nullable();
            $table->dateTime('updated_at')->nullable();

        });
        Schema::create('carCategories', function(Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->bigIncrements('id',20)->unsigned();
            $table->bigInteger('car_id',20)->unsigned()->nullable();
            $table->bigInteger('category_id',20)->unsigned()->nullable();
            $table->dateTime('deleted_at')->nullable();
            $table->dateTime('created_at')->nullable();
            $table->dateTime('updated_at')->nullable();

            $table->index('car_id','carCaregories.car_id_idx');
            $table->index('category_id','carCategories.category_id_idx');

            $table->foreign('car_id')
                ->references('id')->on('cars')
                ->onDelete('no action')
                ->onUpdate('no action');


            $table->foreign('category_id')
                ->references('id')->on('categories')
                ->onDelete('no action')
                ->onUpdate('no action');

        });
        Schema::create('models', function(Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id',9)->unsigned();
            $table->integer('car_company_id',9)->unsigned()->nullable();
            $table->string('model_name',255)->nullable();
            $table->dateTime('deleted_at')->nullable();
            $table->dateTime('created_at')->nullable();
            $table->dateTime('updated_at')->nullable();

            $table->index('car_company_id','models.car_company_id_idx');

            $table->foreign('car_company_id')
                ->references('id')->on('carCompanies')
                ->onDelete('no action')
                ->onUpdate('no action');

        });
        Schema::create('cars', function(Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->bigIncrements('id',20)->unsigned();
            $table->bigInteger('uid',20)->nullable()->unsigned();
            $table->string('title',255)->nullable();
            $table->double('average_price',10,2)->nullable();
            $table->double('minimum_price',10,2)->nullable();
            $table->date('manufacturing_year')->nullable();
            $table->integer('model', 9)->nullable()->unsigned();
            $table->integer('engine_type', 9)->nullable()->unsigned();
            $table->string('trim', 255)->nullable();
            $table->string('exterior_color', 7)->nullable();
            $table->string('interior_color', 7)->nullable();
            $table->enum('grade', ['A', 'B', 'C', 'D'])->nullable();
            $table->integer('kilometers', 10)->nullable()->unsigned();
            $table->string('engine_number', 255)->nullable();
            $table->string('chassis_number', 255)->nullable();
            $table->string('number_plate', 255)->nullable();
            $table->string('city_of_registration', 255)->nullable();
            $table->enum('transmission', ['automatic', 'manual'])->nullable();
            $table->string('body_type', 255)->nullable();
            $table->string('drivetrain', 255)->nullable();
            $table->dateTime('deleted_at')->nullable();
            $table->dateTime('created_at')->nullable();
            $table->dateTime('updated_at')->nullable();


            $table->index('engine_type','cars.engine_type_idx');
            $table->index('model','cars.model_idx');
            $table->index('uid','cars.uid_idx');

            $table->foreign('engine_type')
                ->references('id')->on('engineTypes')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('model')
                ->references('id')->on('models')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('engine_type')
                ->references('uid')->on('users')
                ->onDelete('no action')
                ->onUpdate('no action');


        });
        Schema::create('carCompanies', function(Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id',9)->unsigned();
            $table->string('company_name',255)->nullable();
            $table->dateTime('deleted_at')->nullable();
            $table->dateTime('created_at')->nullable();
            $table->dateTime('updated_at')->nullable();

        });
        Schema::create('categories', function(Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->bigIncrements('id',20)->unsigned();
            $table->string('category',255)->nullable();
            $table->bigInteger('category_parent_id',20)->nullable()->unsigned();
            $table->dateTime('deleted_at')->nullable();
            $table->dateTime('created_at')->nullable();
            $table->dateTime('updated_at')->nullable();

        });


        // General Tables - 2
        Schema::create('notifications', function(Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->bigIncrements('id',20)->unsigned();
            $table->tinyInteger('is_read')->nullable();
            $table->bigInteger('user_id',20)->unsigned()->nullable();
            $table->string('short_msg',100)->nullable();
            $table->longText('long_msg')->nullable();
            $table->dateTime('deleted_at')->nullable();
            $table->dateTime('created_at')->nullable();
            $table->dateTime('updated_at')->nullable();

        });
        Schema::create('generalSettings', function(Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->bigIncrements('id',20)->unsigned();
            $table->longText('key')->nullable()->unique();
            $table->longText('value')->nullable();
            $table->tinyInteger('is_default')->nullable()->default(0);
            $table->dateTime('deleted_at')->nullable();
            $table->dateTime('created_at')->nullable();
            $table->dateTime('updated_at')->nullable();

        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Users and related - 5
        Schema::drop('users');
        Schema::drop('invoices');
        Schema::drop('inspectionRequests');
        Schema::drop('biddings');
        Schema::drop('userMetas');


        // Cars and related - 10
        Schema::drop('auctions');
        Schema::drop('carMetas');
        Schema::drop('carFeatures');
        Schema::drop('features');
        Schema::drop('engineTypes');
        Schema::drop('carCategories');
        Schema::drop('models');
        Schema::drop('cars');
        Schema::drop('carCompanies');
        Schema::drop('categories');


        // General Tables - 2
        Schema::drop('notifications');
        Schema::drop('generalSettings');

    }
}
