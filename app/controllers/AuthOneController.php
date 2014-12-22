<?php

class AuthOneController extends BaseController {

    public function getIndex()
    {
        $authUrl = GoogleOAuth::getAuthorizationUri();
        $message = "<a href='$authUrl'>Login with Google</a>";

        die($message);
    }

    public function getSuccess()
    {
        $googleService = GoogleOAuth::consumer();

        if(Input::has("code")){
            $code = Input::get("code");
            $googleService->requestAccessToken($code);
            return Redirect::to("/");
        }

        if(!GoogleOAuth::hasAuthorized()){
            die("Not authorized yet");
        }


        $result = json_decode( $googleService->request( 'https://www.googleapis.com/oauth2/v1/userinfo' ), true );

        $message = 'Your unique Google user id is: ' . $result['id'] . ' and your name is ' . $result['name'];
        die($message. "<br/>");


    }

    public function getLogout()
    {
        GoogleOAuth::logout();
        return Redirect::to("/");
    }


}