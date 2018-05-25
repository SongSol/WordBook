<?php
namespace App\Http\Controllers;
include_once "Snoopy.class.php";
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Mockery\Exception;
use Snoopy;

class DictionaryController extends Controller
{
    private $snoopy;
    public function __construct()
    {
        $this->snoopy = new Snoopy();
    }

    public function search ($word) {
        $url = "http://m.jpdic.naver.com/search.nhn?range=all&q=".$word."&sm=jpd_hty"; // json 결과
        $this->snoopy->fetch($url);
        preg_match('/<span class="pin">(.*?)<\/span><\/ol>/is', $this->snoopy->results, $text);
        if ($text == []) {
            preg_match('/<span class="pin">(.*?)<\/span>(.*?)<\/span>(.*?)<\/span>/is', $this->snoopy->results, $text);
        }
        return response()->json($text[0]);
    }

    public function translate(Request $request) {
        $client_id = "AXMdIMUlU60UrZxEGuYc";
        $client_secret = "isNo5ortNW";
        $encText = $request->get('text');
        if ($request->get('select') == 'jp') {
            $postvars = "source=ko&target=ja&text=".$encText;
        }
        else if ($request->get('select') == 'kr') {
            $postvars = "source=ja&target=ko&text=".$encText;
        }
        $url = "https://openapi.naver.com/v1/papago/n2mt";
        $is_post = true;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, $is_post);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch,CURLOPT_POSTFIELDS, $postvars);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        $headers = array();
        $headers[] = "X-Naver-Client-Id: ".$client_id;
        $headers[] = "X-Naver-Client-Secret: ".$client_secret;
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        $response = curl_exec ($ch);
        $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close ($ch);
        if($status_code == 200) {
            /*echo $response;*/
            return response()->json(json_decode($response,true));
        } else {
            echo "Error 내용:".$response;
        }
    }
}
