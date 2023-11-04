<?php

namespace App\Helper;

use App\Models\AppSettings;

class AdditionalResources {
  /** 
  * @uses appInfoData get frontend and backend app info data.
  */
  public static function appInfo(string|NULL $key = null){
    $app_info = AppSettings::latest('id')->first();

    $title = isset($app_info->title) ? $app_info->title : 'Laravel';
    $home_title = isset($app_info->home_title) ? $app_info->home_title : '';
    $faq_title = isset($app_info->faq_title) ? $app_info->faq_title : '';
    $services_title = isset($app_info->services_title) ? $app_info->services_title : '';
    $about_title = isset($app_info->about_title) ? $app_info->about_title : '';
    $search_title = isset($app_info->search_title) ? $app_info->search_title : '';
    $footer_text = isset($app_info->basic_title_five) ? $app_info->basic_title_five : '';
    $services_title_one = isset($app_info->services_title_one) ? $app_info->services_title_one : '';
    $services_title_two = isset($app_info->services_title_two) ? $app_info->services_title_two : '';
    $address = isset($app_info->basic_title_one) ? $app_info->basic_title_one : '';
    $basic_title_two = isset($app_info->basic_title_two) ? $app_info->basic_title_two : '';
    $office_time = isset($app_info->basic_title_three) ? $app_info->basic_title_three : '';
    $processing_page_title = isset($app_info->basic_title_four) ? $app_info->basic_title_four : '';

    $logo = isset($app_info->logo) ? asset($app_info->logo) : '';
    $secondary_logo = isset($app_info->secondary_logo) ? asset($app_info->secondary_logo) : '';
    $favicon = isset($app_info->favicon) ? asset($app_info->favicon) : '';
    $banner_image = isset($app_info->banner_image) ? asset($app_info->banner_image) : '';
    $wave_image = isset($app_info->banner_animation_image) ? asset($app_info->banner_animation_image) : '';
    $map_image = isset($app_info->map_image) ? asset($app_info->map_image) : '';
    $footer_image = isset($app_info->footer_image) ? asset($app_info->footer_image) : '';
    $running_bike_image = isset($app_info->footer_animation_image) ? asset($app_info->footer_animation_image) : '';

    $facebook = isset($app_info->facebook) ? $app_info->facebook : '#';
    $youtube = isset($app_info->youtube) ? $app_info->youtube : '#';
    $whatsapp = isset($app_info->whatsapp) ? $app_info->whatsapp : '#';
    $twitter = isset($app_info->twitter) ? $app_info->twitter : '#';
    $linkedin = isset($app_info->linkedin) ? $app_info->linkedin : '#';
    $pinterest = isset($app_info->pinterest) ? $app_info->pinterest : '#';
    $map_url = isset($app_info->map_url) ? $app_info->map_url : '#';
    $phone_one = isset($app_info->phone_one) ? $app_info->phone_one : '#';
    $phone_two = isset($app_info->phone_two) ? $app_info->phone_two : '#';
    $email = isset($app_info->email) ? $app_info->email : '';
    $meta_title = isset($app_info->meta_title) ? $app_info->meta_title : '';
    $meta_keyword = isset($app_info->meta_keyword) ? $app_info->meta_keyword : '';
    $meta_description = isset($app_info->meta_description) ? $app_info->meta_description : '';

    $data = ['title'=> $title, 'home_title'=> $home_title, 'faq_title'=> $faq_title, 'services_title'=> $services_title, 'about_title'=> $about_title, 'search_title'=> $search_title, 'footer_text'=> $footer_text, 'services_title_one'=> $services_title_one, 'services_title_two'=> $services_title_two, 'address'=> $address, 'basic_title_two'=> $basic_title_two, 'office_time'=> $office_time, 'processing_page_title'=> $processing_page_title, 'logo'=> $logo, 'secondary_logo'=> $secondary_logo, 'favicon'=> $favicon, 'banner_image'=> $banner_image, 'wave_image'=> $wave_image, 'map_image'=> $map_image, 'footer_image'=> $footer_image, 'running_bike_image'=> $running_bike_image, 'facebook'=> $facebook, 'youtube'=> $youtube, 'whatsapp'=> $whatsapp, 'twitter'=> $twitter, 'linkedin'=> $linkedin, 'pinterest'=> $pinterest, 'map_url'=> $map_url, 'phone_one'=> $phone_one, 'phone_two'=> $phone_two, 'email'=> $email, 'meta_title'=> $meta_title, 'meta_keyword'=> $meta_keyword, 'meta_description'=> $meta_description];

    if($key){
      return isset($data[$key]) ? $data[$key] : 'undefined';
    }

    return $data;
  } 
}
