<?php

class Login_Model extends Model
{
    public function __construct()
    {
        parent::__construct();
    }


    /**
     * Funkcia vracia asociativne pole s udajmi o uzivatelovi.
     * V pripade, ze nie je uspesny login vracia prazdne pole.
     */
    public function run($username, $password)
    {
        $resultArr = array();

        /**
        * Created by Joe of ExchangeCore.com
        */
        if (!empty($username) && !empty($password)) {

            $adServer = "ldap://inetpsa.com";

            $ldap = ldap_connect($adServer);
            $ldaprdn = 'inetpsa' . "\\" . $username;   //!!!!!!!!!!!!!!!!!!!!!!!!!

            ldap_set_option($ldap, LDAP_OPT_PROTOCOL_VERSION, 3);
            ldap_set_option($ldap, LDAP_OPT_REFERRALS, 0);

            $bind = @ldap_bind($ldap, $ldaprdn, $password);


            if ($bind) {
                $filter="(sAMAccountName=$username)";
                $ldapResult = ldap_search($ldap, "dc=inetpsa,dc=com", $filter); //!!!!!!!!!!!!!!!!!!!!!!!!!
                
                ldap_sort($ldap, $ldapResult, "sn");
                $userInfo = ldap_get_entries($ldap, $ldapResult);

                @ldap_close($ldap);

                $resultArr = array(
                    'username' => $userInfo[0]['displaynameprintable'][0],
                    'department' => $userInfo[0]['department'][0],
                    'employeeID' => $userInfo[0]['employeeid'][0],
                    'employeeNum' => $userInfo[0]['employeenumber'][0],
                    'mailAddress' => $userInfo[0]['mail'][0]
                );
            }
        }

        return $resultArr;
    }
}