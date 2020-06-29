<?php

namespace App\Helper;

trait CompanySize
{
    function get_company_size($select = null) {
        $sizes = array(
            "0" => "1-5 employees",
            "1" => "6-10 employee",
            "2" => "11-20 employees",
            "3" => "51-100 employees",
            "4" => "101-200 employees",
            "5" => "201-500 employees",
            "6" => "501-1000 employees",
            "7" => "1001-5000 employees",
            "8" => "5001-10000 employees",
            "9" => "10001-20000 employees",
            "10" => "More than 20000"
        );
        return $sizes;
    }

//    function getCountrySelectOptions($select = null) {
//        $countries = $this->get_countries();
//        $country = "<option value=''>Select Country</option>";
//        foreach ($countries as $value) {
//            if ($select != NULL && $select == $value) {
//                $country .= "<option value='$value'  selected>" . $value . "</option>";
//            } else {
//                $country .= "<option value='$value'>" . $value . "</option>";
//            }
//        }
//        return $country;
//    }
}
