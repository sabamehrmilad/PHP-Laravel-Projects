<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Comments;
use App\Models\Post;
use App\Models\Slider;
use App\Models\sms;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class ApiController extends Controller
{

    public function get_posts(Request $request) {

        $post = Post::where('categoryId',$request->categoryId)->get();

        if ($post != null)
            return response()->json($post);
        else
            return response()->json([]);
    }

    public function get_category()
    {
        $category=Category::all();
        if ($category !=null)
            return response()->json($category);
        else
            return response()->json([]);
    }

    public function get_slider()
    {
        $slider=Slider::all();
        if ($slider !=null)
            return response()->json($slider);
        else
            return response()->json([]);
    }


   public function set_comment(Request $request)
   {
       $save=new Comments;
       $save->name=$request->name;
       $save->family=$request->family;
       $save->phone=$request->phone;
       $save->comment=$request->comment;
       $save->score=$request->score;
       $save->save();
       return response()->json(['status'=>'true']);

   }


  public function sms_operation(Request $request)
  {
      $validation =Validator::make($request->all(),[
          'phone'=>'required'
      ]);
      if ($validation->fails()) {
          $error = 0;
          return response()->json(['is_new_user' => $error, 'result' => 'شما قبلا ثبت نام کرده اید']);
      } else {
          $code = rand(10000, 99999);
          $sms = new sms;
          $sms->code = $code;
          $sms->phone = $request->phone;
          $sms->save();


          $error = 1;
          $soap = new \SoapClient("http://185.112.33.61/wbs/send.php?wsdl");
          $soap->token = "bcc57c70ac086f6893ff4c1388fc5e4f00214aab";
          $soap->fromNum = '+9850005725029';
          $soap->toNum = array($request->phone);
          $soap->patternID = 14;
          $soap->Content = json_encode(array('code' => $code), JSON_UNESCAPED_UNICODE);
          $soap->Type = 0;
          $array = $soap->SendSMSByPattern($soap->fromNum, $soap->toNum, $soap->Content, $soap->patternID, $soap->Type, $soap->token);
          return response()->json([
              'result' => 'کد ارسال شد.', 'is_new_user' => $error
          ], 200);

      }
  }


      public function ConfirmSMS(Request $request)
  {
      $smsvalidate = sms::where('phone', $request->phone)->latest()->first();


      if ($smsvalidate->code == $request->code) {
          return response()->json(["ConfirmSMS" => true], 200);
      } else {
          return response()->json(["ConfirmSMS" => false]
              , 200);
      }

  }

}
