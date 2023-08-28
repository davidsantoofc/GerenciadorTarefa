<?php

namespace Faker\Provider;

use Faker\Calculator\Luhn;

class PhoneNumber extends Base
{
    protected static $formats = ['###-###-###'];

    /**
     * @see https://github.com/giggsey/libphonenumber-for-php/blob/master/src/CountryCodeToRegionCodeMap.php
     * @see https://libphonenumber.appspot.com/phonenumberparser?number=%2B4576597442
     */
    protected static $e164Formats = [
        '+1##########',
        '+7##########',
        '+20##########',
        '+27##########',
        '+30##########',
        '+31##########',
        '+32#########',
        '+33#########',
        '+34#########',
        '+36#########',
        '+39##########',
        '+40#########',
        '+41#########',
        '+43##########',
        '+44##########',
        '+45########',
        '+46##########',
        '+47########',
        '+48##########',
        '+49##########',
        '+51#########',
        '+52##########',
        '+53##########',
        '+54##########',
        '+55#########',
        '+56##########',
        '+57##########',
        '+58##########',
        '+60##########',
        '+61##########',
        '+62##########',
        '+63##########',
        '+64##########',
        '+65##########',
        '+66##########',
        '+81##########',
        '+82##########',
        '+84##########',
        '+86##########',
        '+90##########',
        '+91##########',
        '+92##########',
        '+93#########',
        '+94#########',
        '+95##########',
        '+98##########',
        '+211#########',
        '+212#########',
        '+213#########',
        '+216########',
        '+218#########',
        '+220#######',
        '+221#########',
        '+222########',
        '+223########',
        '+224#########',
        '+225##########',
        '+226########',
        '+227########',
        '+228########',
        '+229########',
        '+230########',
        '+231#########',
        '+232########',
        '+233#########',
        '+234##########',
        '+235########',
        '+236########',
        '+237#########',
        '+238#######',
        '+239#######',
        '+240#########',
        '+241########',
        '+242#########',
        '+243#########',
        '+244#########',
        '+245#########',
        '+246#######',
        '+247######',
        '+248#######',
        '+249#########',
        '+250#########',
        '+251#########',
        '+252#########',
        '+253########',
        '+254##########',
        '+255#########',
        '+256#########',
        '+257########',
        '+258#########',
        '+260#########',
        '+261#########',
        '+262#########',
        '+263##########',
        '+264#########',
        '+265#########',
        '+266########',
        '+267##########',
        '+268#########',
        '+269#######',
        '+290#####',
        '+291#######',
        '+297#######',
        '+298######',
        '+299######',
        '+350########',
        '+351#########',
        '+352##########',
        '+353##########',
        '+354#########',
        '+355#########',
        '+356########',
        '+357########',
        '+358##########',
        '+359#########',
        '+370########',
        '+371########',
        '+372##########',
        '+373########',
        '+374########',
        '+375##########',
        '+376#########',
        '+377#########',
        '+378##########',
        '+380##########',
        '+381##########',
        '+382#########',
        '+383#########',
        '+385#########',
        '+386########',
        '+387#########',
        '+389########',
        '+420#########',
        '+421#########',
        '+423#########',
        '+500#####',
        '+501#######',
        '+502########',
        '+503########',
        '+504########',
        '+505########',
        '+506########',
        '+507##########',
        '+508#########',
        '+509########',
        '+590#########',
        '+591#########',
        '+592#######',
        '+593##########',
        '+594#########',
        '+595##########',
        '+596#########',
        '+597#######',
        '+598##########',
        '+599########',
        '+670########',
        '+672######',
        '+673#######',
        '+674#######',
        '+675########',
        '+676#######',
        '+677#######',
        '+678#######',
        '+679#######',
        '+680#######',
        '+681#########',
        '+682#####',
        '+683#######',
        '+685##########',
        '+686########',
        '+687######',
        '+688#######',
        '+689#########',
        '+690#######',
        '+691#######',
        '+692#######',
        '+800########',
        '+808########',
        '+850##########',
        '+852#########',
        '+853########',
        '+855##########',
        '+856##########',
        '+870#########',
        '+878############',
        '+880##########',
        '+881#########',
        '+882##########',
        '+883#########',
        '+886##########',
        '+888###########',
        '+960##########',
        '+961########',
        '+962#########',
        '+963#########',
        '+964##########',
        '+965########',
        '+966##########',
        '+967#########',
        '+968#########',
        '+970##########',
        '+971##########',
        '+972##########',
        '+973########',
        '+974########',
        '+975########',
        '+976##########',
        '+977##########',
        '+979#########',
        '+992#########',
        '+993########',
        '+994#########',
        '+995#########',
        '+996#########',
        '+998#########',
    ];

    /**
     * @example '555-123-546'
     *
     * @return string
     */
    public function phoneNumber()
    {
        return static::numerify($this->generator->parse(static::randomElement(static::$formats)));
    }

    /**
     * @example +11134567890
     *
     * @return string
     */
    public function e164PhoneNumber()
    {
        return static::numerify($this->generator->parse(static::randomElement(static::$e164Formats)));
    }

    /**
     * International Mobile Equipment Identity (IMEI)
     *
     * @see http://en.wikipedia.org/wiki/International_Mobile_Station_Equipment_Identity
     * @see http://imei-number.com/imei-validation-check/
     *
     * @example '720084494799532'
     *
     * @return int $imei
     */
    public function imei()
    {
        $imei = (string) static::numerify('##############');
        $imei .= Luhn::computeCheckDigit($imei);

        return $imei;
    }
}
