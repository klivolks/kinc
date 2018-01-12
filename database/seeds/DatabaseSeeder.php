<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('languages')->insert([
			'id'=>1, 'lname'=>'English(US)', 'url'=>'https://fonts.klubsta.com/eurasia', 'family'=>'eurasia', 'created_at'=>date('Y-m-d H:i:s'), 'updated_at'=>date('Y-m-d H:i:s')
		]);
		DB::table('languages')->insert([
			'id'=>2, 'lname'=>'Malayalam', 'url'=>'https://fonts.klubsta.com/Manjari', 'family'=>'Manjari', 'created_at'=>date('Y-m-d H:i:s'), 'updated_at'=>date('Y-m-d H:i:s')
		]);
		DB::table('countrys')->insert([
			'id'=>1, 'country_name'=>'India', 'isd_code'=>'91', 'continent'=>'Asia', 'core_language'=>1, 'created_at'=>date('Y-m-d H:i:s'), 'updated_at'=>date('Y-m-d H:i:s')
		]);
		DB::table('klubs')->insert([
			'id'=>1,'kname'=>'Innowiz Technologies','rname'=>'Innowiz Technologies','created_at'=>date('Y-m-d H:i:s'), 'updated_at'=>date('Y-m-d H:i:s'),'founder'=>0,'founded_on'=>'2014-10-01','klubtype'=>1,'IsActive'=>'Y','address'=>'Trivandrum'
		]);
		$token=sha1(time().'1');
		DB::table('apis')->insert([
			'id'=>1,'key'=>$token,'domain'=>'listincs.com','count'=>0,'user_id'=>1,'created_at'=>date('Y-m-d H:i:s'), 'updated_at'=>date('Y-m-d H:i:s')
		]);
    }
}
