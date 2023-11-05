<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\AboutDetails;
use App\Models\AboutFaq;
use App\Models\Accordion;
use App\Models\Admin\DeliveryDetails;
use App\Models\Branch;
use App\Models\Contact;
use App\Models\DeliveryItem;
use App\Models\DeliveryPrice;
use App\Models\DeliveryWeightSetup;
use App\Models\Faq;
use App\Models\MainAreaSetup;
use App\Models\Privacy;
use App\Models\ProcessingDetails;
use App\Models\Services;
use App\Models\ServicesTag;
use App\Models\TermsAndCondition;
use App\Models\Testimonial;

class FrontpageController extends Controller
{  
    public function Home()
    { 
        $services = Services::where("status", true)->orderBy("serial", "asc")->get();
        $accordions = Accordion::where("status", true)->orderBy("serial", "asc")->get();
        $testimonials = Testimonial::where("status", true)->orderBy("serial", "asc")->get();
        $delivery_details = DeliveryDetails::where('status', true)->orderBy("serial", "asc")->get();
        $processing_details = ProcessingDetails::where("status", true)->orderBy("serial", "asc")->get();
        $areas = MainAreaSetup::with('sub_areas')->where('status', true)->orderBy('serial', 'asc')->get();

        $about_details = AboutDetails::latest('id')->first();

        $delivery_items = DeliveryItem::where('status', true)->get();
        $delivery_weights = DeliveryWeightSetup::where('status', true)->get();
        $delivery_prices = DeliveryPrice::where('status', true)->get();
        
        $delivery_all_items = DeliveryItem::with('delivery_prices')->where('status', true)->get();
        
        return view('frontend.home', compact('services', 'processing_details', 'areas', 'accordions', 'testimonials', 'about_details', 'delivery_items', 'delivery_weights', 'delivery_prices', 'delivery_all_items', 'delivery_details'));
    }

    public function services()
    {
        return view('frontend.services');
    }

    public function faq()
    {
        $faqs = Faq::where("status", true)->orderBy("serial", "asc")->get();
        return view('frontend.faq', compact('faqs'));
    }

    public function about()
    {
        $about_details = AboutDetails::latest('id')->first();
        $about_faqs = AboutFaq::where("status", true)->orderBy("serial", "asc")->get();

        return view('frontend.about', compact('about_details', 'about_faqs'));
    }

    public function contact()
    {
        $about_details = AboutDetails::latest('id')->first();
        $branches = Branch::where('status', true)->orderBy('serial', 'asc')->get();

        return view('frontend.contact', compact('about_details', 'branches'));
    }

    public function privacy(){
        $heading_description = Privacy::where('serial', 1)->first()->description;
        $privacies = Privacy::whereNot('serial', 1)->orderBy('serial', 'asc')->get();

        return view('frontend.privacy', compact('heading_description', 'privacies'));
    }

    public function termsAndConditions(){
        $delivery_all_items = DeliveryItem::with('delivery_prices')->where('status', true)->get();
        $terms_and_conditions = TermsAndCondition::where('status', true)->orderBy('serial', 'asc')->get();

        return view('frontend.terms-and-conditions', compact('terms_and_conditions', 'delivery_all_items'));
    }

    public function merchantRegister(){
        return view('frontend.merchant-register');
    }

    public function marketingAgentRegister(){
        return view('frontend.marketing-agent-register');
    }

    public function riderRegister(){
        return view('frontend.rider-register');
    }
    
    public function deliveryManRegister(){
        return view('frontend.delivery-man-register');
    }
    
    public function deliveryAgentRegister(){
        return view('frontend.delivery-agent-register');
    }
    
}
