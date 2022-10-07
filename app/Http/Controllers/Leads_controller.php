<?php

namespace App\Http\Controllers;

use AmoCRM\Client\AmoCRMApiClient;
use League\OAuth2\Client\Token\AccessTokenInterface;
use AmoCRM\Exceptions\AmoCRMoAuthApiException;
use App\Models\Leads;



class Leads_controller extends Controller
{
    public function getData()
    {


        //Auth
        $client_id = env("AMOCRM_CLIENT_ID");
        $client_secret = env("AMOCRM_CLIENT_SECRET");
        $redirect_uri = env("AMOCRM_CLIENT_REDIRECT_URI");
        $base_domain = env("AMOCRM_BASE_DOMAIN");
        $code = urldecode(env("AMOCRM_CODE_AUTHORIZATION"));

        $apiClient = new AmoCRMApiClient($client_id, $client_secret, $redirect_uri);
        //OAuth
        try {
            $oauth = $apiClient->getOAuthClient();
            $oauth->setBaseDomain($base_domain);
            $accessToken = $oauth->getAccessTokenByCode($code);
            $apiClient->setAccessToken($accessToken)->onAccessTokenRefresh(
                function (AccessTokenInterface $accessToken, string $baseDomain) {
                    saveToken(
                        [
                            'accessToken' => $accessToken->getToken(),
                            'refreshToken' => $accessToken->getRefreshToken(),
                            'expires' => $accessToken->getExpires(),
                            'baseDomain' => $baseDomain,
                        ]
                    );
                }
            );

            //Get Data
            $data_leads = $apiClient->leads()->get();

            return $data_leads;
        } catch (AmoCRMoAuthApiException $e) {
            echo $e->getMessage();
        }
    }

    public function updateDB()
    {
        $COUNT_INSERT = 0;
        $COUNT_UPDATE = 0;
        //Api Data
        $api_leads_data = $this->getData();

        if (!$api_leads_data) {
            return;
        }

        $leads = new Leads;

        foreach ($api_leads_data as $api_lead_data) {

            if (!Leads::find($api_lead_data->id)) {
                $leads->insert_record($api_lead_data);
                $COUNT_INSERT += 1;
            }

            $leads->update_record($api_lead_data);
            $COUNT_UPDATE += 1;
        }
        $variable = (object) array("COUNT_INSERT" => $COUNT_INSERT, "COUNT_UPDATE" => $COUNT_UPDATE);
        return $variable;
    }
}
