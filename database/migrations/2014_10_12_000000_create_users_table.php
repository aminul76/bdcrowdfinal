<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('business_name')->nullable();
            $table->string('business_type')->nullable();
            $table->string('registration_number')->nullable();
            $table->string('business_identification_number')->nullable();
            $table->string('business_address')->nullable();
            $table->string('business_bistrict')->nullable();
            $table->string('business_thana')->nullable();
            $table->string('business_post_code')->nullable();
            $table->string('business_country')->nullable();
            $table->string('business_email')->nullable();

            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();

            $table->string('date_of_birth')->nullable(); 
            $table->string('phone')->nullable();
            $table->string('image')->nullable();
            $table->string('address')->nullable();
            $table->string('profession')->nullable();

            $table->string('persent_village')->nullable();
            $table->string('persent_thana')->nullable();
            $table->string('persent_district')->nullable();
            $table->string('persent_post_code')->nullable();


            $table->string('parmanent_village')->nullable();            
            $table->string('parmanent_district')->nullable();
            $table->string('parmanent_thana')->nullable();
            $table->string('parmanent_post_code')->nullable();


            $table->string('country')->nullable();

           
            $table->string('national_id')->nullable();

            $table->string('national_front')->nullable();

            $table->string('national_back')->nullable();

            $table->string('tin')->nullable();

            $table->string('passport_number')->nullable();

            $table->string('bank_country')->nullable();

            $table->string('bank_name')->nullable();

            $table->string('account_holder_name')->nullable();

            $table->string('branch_district')->nullable();

            $table->string('branch_name')->nullable();

            $table->string('routing_number')->nullable();

            $table->string('swift_code')->nullable();
            

            $table->string('role')->default(2);
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('password_text')->nullable();
            $table->rememberToken();
            $table->timestamps();









        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
