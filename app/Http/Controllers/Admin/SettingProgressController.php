<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use  App\Http\Controllers\Admin\SettingController;
use App\SettingMailProviderInfo,App\SettingAddress,App\SettingWatsapp;
use App\SettingPhone,App\SettingSocialMedia,App\SettingEmail;
use Auth;
class SettingProgressController extends Controller
{

   public function __constract()
   {

   }

	public static function create($request,$model)
	{
		$create_base_info = $model->create([
								'title_ar'=>$request['title_ar'],
					            'title_en'=>$request['title_en'],
					            'content_ar'=>$request['content_ar'],
					            'content_en'=>$request['content_en'],
					            'meta_tags'=>$request['meta_tags'],
					            'extirnal_code'=>$request['extirnal_code'],
					            'created_by'=>Auth::id()
							]);
		SettingProgressController::store_mail_provider($request,$model->first()->id);
		SettingProgressController::store_email($request,$model->first()->id);
		SettingProgressController::store_phones($request,$model->first()->id);
		SettingProgressController::store_whatsapp($request,$model->first()->id);
		SettingProgressController::store_address($request,$model->first()->id);
		SettingProgressController::store_social_media_chanels($request,$model->first()->id);

		return $create_base_info;
	}

	public static function update($request,$model)
	{
		$update_base_info =  $model->find($model->first()->id)->update([
												'title_ar'=>$request['title_ar'],
									            'title_en'=>$request['title_en'],
									            'content_ar'=>$request['content_ar'],
									            'content_en'=>$request['content_en'],
									            'meta_tags'=>$request['meta_tags'],
									            'extirnal_code'=>$request['extirnal_code'],
									            'created_by'=>Auth::id()
											]);
		SettingProgressController::store_mail_provider($request,$model->first()->id);
		SettingProgressController::store_email($request,$model->first()->id);
		SettingProgressController::store_phones($request,$model->first()->id);
		SettingProgressController::store_whatsapp($request,$model->first()->id);
		SettingProgressController::store_address($request,$model->first()->id);
		SettingProgressController::store_social_media_chanels($request,$model->first()->id);
		return $update_base_info;
	}

	public static function store_mail_provider($request,$setting_id)
	{

	if (SettingMailProviderInfo::count() > 0 ) {
		$delete_latest = SettingMailProviderInfo::where('setting_id',$setting_id)->forceDelete();
	}
	$insert_mail_info =	SettingMailProviderInfo::create([
			 		'setting_id'=>$setting_id,
				    'MAIL_DRIVER'=>$request['mail_driver'],
				    'MAIL_HOST'=>$request['mail_host'],
				    'MAIL_USERNAME'=>$request['mail_username'],
				    'MAIL_PASSWORD'=>$request['mail_password'],
				    'MAIL_port'=>$request['mail_port'],
					]);

		return $insert_mail_info;
	}


	public static function store_address($request,$setting_id)
	{
		if (SettingAddress::count() > 0 ) {
			$delete_latest = SettingAddress::where('setting_id',$setting_id)->forceDelete();
		}

		foreach ($request['address'] as $key => $address) {
			$create_address = SettingAddress::create([
				 'address_ar'=>$address,
	            'setting_id'=>$setting_id
			]);
		}
		return "Okay";
	}
	
	public static function store_email($request,$setting_id)
	{
		if (SettingEmail::count() > 0 ) {
			$delete_latest = SettingEmail::where('setting_id',$setting_id)->forceDelete();
		}
		foreach ($request['email'] as $key => $email) {
			$create_email = SettingEmail::create([
				'email'=>$email,
	            'setting_id'=>$setting_id
			]);
		}
		return "Okay";
	}

	public static function store_phones($request,$setting_id)
	{
		if (SettingPhone::count() > 0 ) {
			$delete_latest = SettingPhone::where('setting_id',$setting_id)->forceDelete();
		}
		
		foreach ($request['phone'] as $key => $phone) {
			$create_phone = SettingPhone::create([
				 'phone'=>$phone,
	            'setting_id'=>$setting_id
			]);
		}
		return "Okay";
	}

	public static function store_whatsapp($request,$setting_id)
	{
		if (SettingWatsapp::count() > 0 ) {
			$delete_latest = SettingWatsapp::where('setting_id',$setting_id)->forceDelete();
		}
		
		foreach ($request['whatsapp'] as $key => $whatsapp) {
			$create_phone = SettingWatsapp::create([
				 'whatsapp'=>$whatsapp,
	            'setting_id'=>$setting_id
			]);
		}
		return "Okay";
	}


	public static function store_social_media_chanels($request,$setting_id)
	{
		if (SettingSocialMedia::count() > 0 ) {
			$delete_latest = SettingSocialMedia::where('setting_id',$setting_id)->forceDelete();
		}
		
		foreach ($request['name_media_ar'] as $key => $brand_ar) {
			$create_phone = SettingSocialMedia::create([
				'setting_id'=>$setting_id,
	            'name_ar'=>$request['name_media_ar'][$key],
	            'name_en'=>$request['name_media_en'][$key],
	            'icon'=>@$request['icon'][$key],
	            'url'=>$request['url'][$key]
			]);
		}
		return "Okay";
	}
}
