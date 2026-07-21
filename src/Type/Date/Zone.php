<?php declare(strict_types = 1);

/**
 * This file is part of the FireHub Project ecosystem
 *
 * @author Danijel Galić <danijel.galic@outlook.com>
 * @copyright 2026-present The FireHub Project - All rights reserved
 * @license https://opensource.org/license/Apache-2-0 Apache License, Version 2.0
 *
 * @php-version >=8.1
 * @package Runtime
 */

namespace FireHub\Core\Type\Date;

/**
 * ### Supported time zones
 *
 * Represents supported IANA time zone identifiers used throughout the FireHub ecosystem.
 *
 * This enumeration provides a type-safe representation of timezone identifiers and prevents
 * usage of raw timezone strings across Core and Runtime layers.
 * @since 1.0.0
 */
enum Zone:string {


    /* * ============================================================
     * Africa
     * ============================================================ */

    /**
     * ### Africa/Abidjan time zone
     * @since 1.0.0
     */
    case AFRICA_ABIDJAN = 'Africa/Abidjan';

    /**
     * ### Africa/Accra time zone
     * @since 1.0.0
     */
    case AFRICA_ACCRA = 'Africa/Accra';

    /**
     * ### Africa/Addis Ababa time zone
     * @since 1.0.0
     */
    case AFRICA_ADDIS_ABABA = 'Africa/Addis_Ababa';

    /**
     * ### Africa/Algiers time zone
     * @since 1.0.0
     */
    case AFRICA_ALGIERS = 'Africa/Algiers';

    /**
     * ### Africa/Asmara time zone
     * @since 1.0.0
     */
    case AFRICA_ASMARA = 'Africa/Asmara';

    /**
     * ### Africa/Bamako time zone
     * @since 1.0.0
     */
    case AFRICA_BAMAKO = 'Africa/Bamako';

    /**
     * ### Africa/Bangui time zone
     * @since 1.0.0
     */
    case AFRICA_BANGUI = 'Africa/Bangui';

    /**
     * ### Africa/Banjul time zone
     * @since 1.0.0
     */
    case AFRICA_BANJUL = 'Africa/Banjul';

    /**
     * ### Africa/Bissau time zone
     * @since 1.0.0
     */
    case AFRICA_BISSAU = 'Africa/Bissau';

    /**
     * ### Africa/Blantyre time zone
     * @since 1.0.0
     */
    case AFRICA_BLANTYRE = 'Africa/Blantyre';

    /**
     * ### Africa/Brazzaville time zone
     * @since 1.0.0
     */
    case AFRICA_BRAZZAVILLE = 'Africa/Brazzaville';

    /**
     * ### Africa/Bujumbura time zone
     * @since 1.0.0
     */
    case AFRICA_BUJUMBURA = 'Africa/Bujumbura';

    /**
     * ### Africa/Cairo time zone
     * @since 1.0.0
     */
    case AFRICA_CAIRO = 'Africa/Cairo';

    /**
     * ### Africa/Casablanca time zone
     * @since 1.0.0
     */
    case AFRICA_CASABLANCA = 'Africa/Casablanca';

    /**
     * ### Africa/Ceuta time zone
     * @since 1.0.0
     */
    case AFRICA_CEUTA = 'Africa/Ceuta';

    /**
     * ### Africa/Conakry time zone
     * @since 1.0.0
     */
    case AFRICA_CONAKRY = 'Africa/Conakry';

    /**
     * ### Africa/Dakar time zone
     * @since 1.0.0
     */
    case AFRICA_DAKAR = 'Africa/Dakar';

    /**
     * ### Africa/Dar es Salaam time zone
     * @since 1.0.0
     */
    case AFRICA_DAR_ES_SALAAM = 'Africa/Dar_es_Salaam';

    /**
     * ### Africa/Djibouti time zone
     * @since 1.0.0
     */
    case AFRICA_DJIBOUTI = 'Africa/Djibouti';

    /**
     * ### Africa/Douala time zone
     * @since 1.0.0
     */
    case AFRICA_DOUALA = 'Africa/Douala';

    /**
     * ### Africa/El Aaiun time zone
     * @since 1.0.0
     */
    case AFRICA_EL_AAIUN = 'Africa/El_Aaiun';

    /**
     * ### Africa/Freetown time zone
     * @since 1.0.0
     */
    case AFRICA_FREETOWN = 'Africa/Freetown';

    /**
     * ### Africa/Gaborone time zone
     * @since 1.0.0
     */
    case AFRICA_GABORONE = 'Africa/Gaborone';

    /**
     * ### Africa/Harare time zone
     * @since 1.0.0
     */
    case AFRICA_HARARE = 'Africa/Harare';

    /**
     * ### Africa/Johannesburg time zone
     * @since 1.0.0
     */
    case AFRICA_JOHANNESBURG = 'Africa/Johannesburg';

    /**
     * ### Africa/Juba time zone
     * @since 1.0.0
     */
    case AFRICA_JUBA = 'Africa/Juba';

    /**
     * ### Africa/Kampala time zone
     * @since 1.0.0
     */
    case AFRICA_KAMPALA = 'Africa/Kampala';

    /**
     * ### Africa/Khartoum time zone
     * @since 1.0.0
     */
    case AFRICA_KHARTOUM = 'Africa/Khartoum';

    /**
     * ### Africa/Kigali time zone
     * @since 1.0.0
     */
    case AFRICA_KIGALI = 'Africa/Kigali';

    /**
     * ### Africa/Kinshasa time zone
     * @since 1.0.0
     */
    case AFRICA_KINSHASA = 'Africa/Kinshasa';

    /**
     * ### Africa/Lagos time zone
     * @since 1.0.0
     */
    case AFRICA_LAGOS = 'Africa/Lagos';

    /**
     * ### Africa/Libreville time zone
     * @since 1.0.0
     */
    case AFRICA_LIBREVILLE = 'Africa/Libreville';

    /**
     * ### Africa/Lome time zone
     * @since 1.0.0
     */
    case AFRICA_LOME = 'Africa/Lome';

    /**
     * ### Africa/Luanda time zone
     * @since 1.0.0
     */
    case AFRICA_LUANDA = 'Africa/Luanda';

    /**
     * ### Africa/Lubumbashi time zone
     * @since 1.0.0
     */
    case AFRICA_LUBUMBASHI = 'Africa/Lubumbashi';

    /**
     * ### Africa/Lusaka time zone
     * @since 1.0.0
     */
    case AFRICA_LUSAKA = 'Africa/Lusaka';

    /**
     * ### Africa/Malabo time zone
     * @since 1.0.0
     */
    case AFRICA_MALABO = 'Africa/Malabo';

    /**
     * ### Africa/Maputo time zone
     * @since 1.0.0
     */
    case AFRICA_MAPUTO = 'Africa/Maputo';

    /**
     * ### Africa/Maseru time zone
     * @since 1.0.0
     */
    case AFRICA_MASERU = 'Africa/Maseru';

    /**
     * ### Africa/Mbabane time zone
     * @since 1.0.0
     */
    case AFRICA_MBABANE = 'Africa/Mbabane';

    /**
     * ### Africa/Mogadishu time zone
     * @since 1.0.0
     */
    case AFRICA_MOGADISHU = 'Africa/Mogadishu';

    /**
     * ### Africa/Monrovia time zone
     * @since 1.0.0
     */
    case AFRICA_MONROVIA = 'Africa/Monrovia';

    /**
     * ### Africa/Nairobi time zone
     * @since 1.0.0
     */
    case AFRICA_NAIROBI = 'Africa/Nairobi';

    /**
     * ### Africa/Ndjamena time zone
     * @since 1.0.0
     */
    case AFRICA_NDJAMENA = 'Africa/Ndjamena';

    /**
     * ### Africa/Niamey time zone
     * @since 1.0.0
     */
    case AFRICA_NIAMEY = 'Africa/Niamey';

    /**
     * ### Africa/Nouakchott time zone
     * @since 1.0.0
     */
    case AFRICA_NOUAKCHOTT = 'Africa/Nouakchott';

    /**
     * ### Africa/Ouagadougou time zone
     * @since 1.0.0
     */
    case AFRICA_OUAGADOUGOU = 'Africa/Ouagadougou';

    /**
     * ### Africa/Porto-Novo time zone
     * @since 1.0.0
     */
    case AFRICA_PORTO_NOVO = 'Africa/Porto_Novo';

    /**
     * ### Africa/Sao Tome time zone
     * @since 1.0.0
     */
    case AFRICA_SAO_TOME = 'Africa/Sao_Tome';

    /**
     * ### Africa/Tripoli time zone
     * @since 1.0.0
     */
    case AFRICA_TRIPOLI = 'Africa/Tripoli';

    /**
     * ### Africa/Tunis time zone
     * @since 1.0.0
     */
    case AFRICA_TUNIS = 'Africa/Tunis';

    /**
     * ### Africa/Windhoek time zone
     * @since 1.0.0
     */
    case AFRICA_WINDHOEK = 'Africa/Windhoek';


    /* * ============================================================
     * America
     * ============================================================ */

    /**
     * ### America/Adak time zone
     * @since 1.0.0
     */
    case AMERICA_ADAK = 'America/Adak';

    /**
     * ### America/Anchorage time zone
     * @since 1.0.0
     */
    case AMERICA_ANCHORAGE = 'America/Anchorage';

    /**
     * ### America/Anguilla time zone
     * @since 1.0.0
     */
    case AMERICA_ANGUILLA = 'America/Anguilla';

    /**
     * ### America/Antigua time zone
     * @since 1.0.0
     */
    case AMERICA_ANTIGUA = 'America/Antigua';

    /**
     * ### America/Araguaina time zone
     * @since 1.0.0
     */
    case AMERICA_ARAGUAINA = 'America/Araguaina';

    /**
     * ### America/Argentina/Buenos Aires time zone
     * @since 1.0.0
     */
    case AMERICA_ARGENTINA_BUENOS_AIRES = 'America/Argentina/Buenos_Aires';

    /**
     * ### America/Argentina/Catamarca time zone
     * @since 1.0.0
     */
    case AMERICA_ARGENTINA_CATAMARCA = 'America/Argentina/Catamarca';

    /**
     * ### America/Argentina/Cordoba time zone
     * @since 1.0.0
     */
    case AMERICA_ARGENTINA_CORDOBA = 'America/Argentina/Cordoba';

    /**
     * ### America/Argentina/Jujuy time zone
     * @since 1.0.0
     */
    case AMERICA_ARGENTINA_JUJUY = 'America/Argentina/Jujuy';

    /**
     * ### America/Argentina/La Rioja time zone
     * @since 1.0.0
     */
    case AMERICA_ARGENTINA_LA_RIOJA = 'America/Argentina/La_Rioja';

    /**
     * ### America/Argentina/Mendoza time zone
     * @since 1.0.0
     */
    case AMERICA_ARGENTINA_MENDOZA = 'America/Argentina/Mendoza';

    /**
     * ### America/Argentina/Rio Gallegos time zone
     * @since 1.0.0
     */
    case AMERICA_ARGENTINA_RIO_GALLEGOS = 'America/Argentina/Rio_Gallegos';

    /**
     * ### America/Argentina/Salta time zone
     * @since 1.0.0
     */
    case AMERICA_ARGENTINA_SALTA = 'America/Argentina/Salta';

    /**
     * ### America/Argentina/San Juan time zone
     * @since 1.0.0
     */
    case AMERICA_ARGENTINA_SAN_JUAN = 'America/Argentina/San_Juan';

    /**
     * ### America/Argentina/San Luis time zone
     * @since 1.0.0
     */
    case AMERICA_ARGENTINA_SAN_LUIS = 'America/Argentina/San_Luis';

    /**
     * ### America/Argentina/Tucuman time zone
     * @since 1.0.0
     */
    case AMERICA_ARGENTINA_TUCUMAN = 'America/Argentina/Tucuman';

    /**
     * ### America/Argentina/Ushuaia time zone
     * @since 1.0.0
     */
    case AMERICA_ARGENTINA_USHUAIA = 'America/Argentina/Ushuaia';

    /**
     * ### America/Aruba time zone
     * @since 1.0.0
     */
    case AMERICA_ARUBA = 'America/Aruba';

    /**
     * ### America/Asunción time zone
     * @since 1.0.0
     */
    case AMERICA_ASUNCION = 'America/Asuncion';

    /**
     * ### America/Atikokan time zone
     * @since 1.0.0
     */
    case AMERICA_ATIKOKAN = 'America/Atikokan';

    /**
     * ### America/Bahia time zone
     * @since 1.0.0
     */
    case AMERICA_BAHIA = 'America/Bahia';

    /**
     * ### America/Bahia Banderas time zone
     * @since 1.0.0
     */
    case AMERICA_BAHIA_BANDERAS = 'America/Bahia_Banderas';

    /**
     * ### America/Barbados time zone
     * @since 1.0.0
     */
    case AMERICA_BARBADOS = 'America/Barbados';

    /**
     * ### America/Belém time zone
     * @since 1.0.0
     */
    case AMERICA_BELEM = 'America/Belem';

    /**
     * ### America/Belize time zone
     * @since 1.0.0
     */
    case AMERICA_BELIZE = 'America/Belize';

    /**
     * ### America/Blanc-Sablon time zone
     * @since 1.0.0
     */
    case AMERICA_BLANC_SABLON = 'America/Blanc-Sablon';

    /**
     * ### America/Boa Vista time zone
     * @since 1.0.0
     */
    case AMERICA_BOA_VISTA = 'America/Boa_Vista';

    /**
     * ### America/Bogotá time zone
     * @since 1.0.0
     */
    case AMERICA_BOGOTA = 'America/Bogota';

    /**
     * ### America/Boise time zone
     * @since 1.0.0
     */
    case AMERICA_BOISE = 'America/Boise';

    /**
     * ### America/Cambridge Bay time zone
     * @since 1.0.0
     */
    case AMERICA_CAMBRIDGE_BAY = 'America/Cambridge_Bay';

    /**
     * ### America/Campo Grande time zone
     * @since 1.0.0
     */
    case AMERICA_CAMPO_GRANDE = 'America/Campo_Grande';

    /**
     * ### America/Cancún time zone
     * @since 1.0.0
     */
    case AMERICA_CANCUN = 'America/Cancun';

    /**
     * ### America/Caracas time zone
     * @since 1.0.0
     */
    case AMERICA_CARACAS = 'America/Caracas';

    /**
     * ### America/Cayenne time zone
     * @since 1.0.0
     */
    case AMERICA_CAYENNE = 'America/Cayenne';

    /**
     * ### America/Cayman time zone
     * @since 1.0.0
     */
    case AMERICA_CAYMAN = 'America/Cayman';

    /**
     * ### America/Chicago time zone
     * @since 1.0.0
     */
    case AMERICA_CHICAGO = 'America/Chicago';

    /**
     * ### America/Chihuahua time zone
     * @since 1.0.0
     */
    case AMERICA_CHIHUAHUA = 'America/Chihuahua';

    /**
     * ### America/Ciudad Juarez time zone
     * @since 1.0.0
     */
    case AMERICA_CIUDAD_JUAREZ = 'America/Ciudad_Juarez';

    /**
     * ### America/Costa Rica time zone
     * @since 1.0.0
     */
    case AMERICA_COSTA_RICA = 'America/Costa_Rica';


    /* * ============================================================
     * Antarctica
     * ============================================================ */

    /**
     * ### Antarctica/Casey time zone
     * @since 1.0.0
     */
    case ANTARCTICA_CASEY = 'Antarctica/Casey';

    /**
     * ### Antarctica/Davis time zone
     * @since 1.0.0
     */
    case ANTARCTICA_DAVIS = 'Antarctica/Davis';

    /**
     * ### Antarctica/DumontDUrville time zone
     * @since 1.0.0
     */
    case ANTARCTICA_DUMONT_DURVILLE = 'Antarctica/DumontDUrville';

    /**
     * ### Antarctica/Macquarie time zone
     * @since 1.0.0
     */
    case ANTARCTICA_MACQUARIE = 'Antarctica/Macquarie';

    /**
     * ### Antarctica/Mawson time zone
     * @since 1.0.0
     */
    case ANTARCTICA_MAWSON = 'Antarctica/Mawson';

    /**
     * ### Antarctica/McMurdo time zone
     * @since 1.0.0
     */
    case ANTARCTICA_MCMURDO = 'Antarctica/McMurdo';

    /**
     * ### Antarctica/Palmer time zone
     * @since 1.0.0
     */
    case ANTARCTICA_PALMER = 'Antarctica/Palmer';

    /**
     * ### Antarctica/Rothera time zone
     * @since 1.0.0
     */
    case ANTARCTICA_ROTHERA = 'Antarctica/Rothera';

    /**
     * ### Antarctica/Syowa time zone
     * @since 1.0.0
     */
    case ANTARCTICA_SYOWA = 'Antarctica/Syowa';

    /**
     * ### Antarctica/Troll time zone
     * @since 1.0.0
     */
    case ANTARCTICA_TROLL = 'Antarctica/Troll';

    /**
     * ### Antarctica/Vostok time zone
     * @since 1.0.0
     */
    case ANTARCTICA_VOSTOK = 'Antarctica/Vostok';


    /* * ============================================================
     * Arctic
     * ============================================================ */

    /**
     * ### Arctic/Longyearbyen time zone
     * @since 1.0.0
     */
    case ARCTIC_LONGYEARBYEN = 'Arctic/Longyearbyen';


    /* * ============================================================
     * Asia
     * ============================================================ */

    /**
     * ### Asia/Aden time zone
     * @since 1.0.0
     */
    case ASIA_ADEN = 'Asia/Aden';

    /**
     * ### Asia/Almaty time zone
     * @since 1.0.0
     */
    case ASIA_ALMATY = 'Asia/Almaty';

    /**
     * ### Asia/Amman time zone
     * @since 1.0.0
     */
    case ASIA_AMMAN = 'Asia/Amman';

    /**
     * ### Asia/Anadyr time zone
     * @since 1.0.0
     */
    case ASIA_ANADYR = 'Asia/Anadyr';

    /**
     * ### Asia/Aqtau time zone
     * @since 1.0.0
     */
    case ASIA_AQTAU = 'Asia/Aqtau';

    /**
     * ### Asia/Aqtobe time zone
     * @since 1.0.0
     */
    case ASIA_AQTOBE = 'Asia/Aqtobe';

    /**
     * ### Asia/Ashgabat time zone
     * @since 1.0.0
     */
    case ASIA_ASHGABAT = 'Asia/Ashgabat';

    /**
     * ### Asia/Atyrau time zone
     * @since 1.0.0
     */
    case ASIA_ATYRAU = 'Asia/Atyrau';

    /**
     * ### Asia/Baghdad time zone
     * @since 1.0.0
     */
    case ASIA_BAGHDAD = 'Asia/Baghdad';

    /**
     * ### Asia/Bahrain time zone
     * @since 1.0.0
     */
    case ASIA_BAHRAIN = 'Asia/Bahrain';

    /**
     * ### Asia/Baku time zone
     * @since 1.0.0
     */
    case ASIA_BAKU = 'Asia/Baku';

    /**
     * ### Asia/Bangkok time zone
     * @since 1.0.0
     */
    case ASIA_BANGKOK = 'Asia/Bangkok';

    /**
     * ### Asia/Barnaul time zone
     * @since 1.0.0
     */
    case ASIA_BARNAUL = 'Asia/Barnaul';

    /**
     * ### Asia/Beirut time zone
     * @since 1.0.0
     */
    case ASIA_BEIRUT = 'Asia/Beirut';

    /**
     * ### Asia/Bishkek time zone
     * @since 1.0.0
     */
    case ASIA_BISHKEK = 'Asia/Bishkek';

    /**
     * ### Asia/Brunei time zone
     * @since 1.0.0
     */
    case ASIA_BRUNEI = 'Asia/Brunei';

    /**
     * ### Asia/Chita time zone
     * @since 1.0.0
     */
    case ASIA_CHITA = 'Asia/Chita';

    /**
     * ### Asia/Colombo time zone
     * @since 1.0.0
     */
    case ASIA_COLOMBO = 'Asia/Colombo';

    /**
     * ### Asia/Damascus time zone
     * @since 1.0.0
     */
    case ASIA_DAMASCUS = 'Asia/Damascus';

    /**
     * ### Asia/Dhaka time zone
     * @since 1.0.0
     */
    case ASIA_DHAKA = 'Asia/Dhaka';

    /**
     * ### Asia/Dili time zone
     * @since 1.0.0
     */
    case ASIA_DILI = 'Asia/Dili';

    /**
     * ### Asia/Dubai time zone
     * @since 1.0.0
     */
    case ASIA_DUBAI = 'Asia/Dubai';

    /**
     * ### Asia/Dushanbe time zone
     * @since 1.0.0
     */
    case ASIA_DUSHANBE = 'Asia/Dushanbe';

    /**
     * ### Asia/Famagusta time zone
     * @since 1.0.0
     */
    case ASIA_FAMAGUSTA = 'Asia/Famagusta';

    /**
     * ### Asia/Gaza time zone
     * @since 1.0.0
     */
    case ASIA_GAZA = 'Asia/Gaza';

    /**
     * ### Asia/Hebron time zone
     * @since 1.0.0
     */
    case ASIA_HEBRON = 'Asia/Hebron';

    /**
     * ### Asia/Ho Chi Minh time zone
     * @since 1.0.0
     */
    case ASIA_HO_CHI_MINH = 'Asia/Ho_Chi_Minh';

    /**
     * ### Asia/Hong Kong time zone
     * @since 1.0.0
     */
    case ASIA_HONG_KONG = 'Asia/Hong_Kong';

    /**
     * ### Asia/Hovd time zone
     * @since 1.0.0
     */
    case ASIA_HOVD = 'Asia/Hovd';

    /**
     * ### Asia/Irkutsk time zone
     * @since 1.0.0
     */
    case ASIA_IRKUTSK = 'Asia/Irkutsk';

    /**
     * ### Asia/Jakarta time zone
     * @since 1.0.0
     */
    case ASIA_JAKARTA = 'Asia/Jakarta';

    /**
     * ### Asia/Jayapura time zone
     * @since 1.0.0
     */
    case ASIA_JAYAPURA = 'Asia/Jayapura';

    /**
     * ### Asia/Jerusalem time zone
     * @since 1.0.0
     */
    case ASIA_JERUSALEM = 'Asia/Jerusalem';

    /**
     * ### Asia/Kabul time zone
     * @since 1.0.0
     */
    case ASIA_KABUL = 'Asia/Kabul';

    /**
     * ### Asia/Kamchatka time zone
     * @since 1.0.0
     */
    case ASIA_KAMCHATKA = 'Asia/Kamchatka';

    /**
     * ### Asia/Karachi time zone
     * @since 1.0.0
     */
    case ASIA_KARACHI = 'Asia/Karachi';

    /**
     * ### Asia/Kathmandu time zone
     * @since 1.0.0
     */
    case ASIA_KATHMANDU = 'Asia/Kathmandu';

    /**
     * ### Asia/Khandyga time zone
     * @since 1.0.0
     */
    case ASIA_KHANDYGA = 'Asia/Khandyga';

    /**
     * ### Asia/Kolkata time zone
     * @since 1.0.0
     */
    case ASIA_KOLKATA = 'Asia/Kolkata';

    /**
     * ### Asia/Krasnoyarsk time zone
     * @since 1.0.0
     */
    case ASIA_KRASNOYARSK = 'Asia/Krasnoyarsk';

    /**
     * ### Asia/Kuala Lumpur time zone
     * @since 1.0.0
     */
    case ASIA_KUALA_LUMPUR = 'Asia/Kuala_Lumpur';

    /**
     * ### Asia/Kuching time zone
     * @since 1.0.0
     */
    case ASIA_KUCHING = 'Asia/Kuching';

    /**
     * ### Asia/Kuwait time zone
     * @since 1.0.0
     */
    case ASIA_KUWAIT = 'Asia/Kuwait';

    /**
     * ### Asia/Macau time zone
     * @since 1.0.0
     */
    case ASIA_MACAU = 'Asia/Macau';

    /**
     * ### Asia/Magadan time zone
     * @since 1.0.0
     */
    case ASIA_MAGADAN = 'Asia/Magadan';

    /**
     * ### Asia/Makassar time zone
     * @since 1.0.0
     */
    case ASIA_MAKASSAR = 'Asia/Makassar';

    /**
     * ### Asia/Manila time zone
     * @since 1.0.0
     */
    case ASIA_MANILA = 'Asia/Manila';

    /**
     * ### Asia/Muscat time zone
     * @since 1.0.0
     */
    case ASIA_MUSCAT = 'Asia/Muscat';


    /* * ============================================================
     * Atlantic
     * ============================================================ */

    /**
     * ### Atlantic/Azores time zone
     * @since 1.0.0
     */
    case ATLANTIC_AZORES = 'Atlantic/Azores';

    /**
     * ### Atlantic/Bermuda time zone
     * @since 1.0.0
     */
    case ATLANTIC_BERMUDA = 'Atlantic/Bermuda';

    /**
     * ### Atlantic/Canary time zone
     * @since 1.0.0
     */
    case ATLANTIC_CANARY = 'Atlantic/Canary';

    /**
     * ### Atlantic/Cape Verde time zone
     * @since 1.0.0
     */
    case ATLANTIC_CAPE_VERDE = 'Atlantic/Cape_Verde';

    /**
     * ### Atlantic/Faroe time zone
     * @since 1.0.0
     */
    case ATLANTIC_FAROE = 'Atlantic/Faroe';

    /**
     * ### Atlantic/Madeira time zone
     * @since 1.0.0
     */
    case ATLANTIC_MADEIRA = 'Atlantic/Madeira';

    /**
     * ### Atlantic/Reykjavík time zone
     * @since 1.0.0
     */
    case ATLANTIC_REYKJAVIK = 'Atlantic/Reykjavik';

    /**
     * ### Atlantic/South Georgia time zone
     * @since 1.0.0
     */
    case ATLANTIC_SOUTH_GEORGIA = 'Atlantic/South_Georgia';

    /**
     * ### Atlantic/St Helena time zone
     * @since 1.0.0
     */
    case ATLANTIC_ST_HELENA = 'Atlantic/St_Helena';

    /**
     * ### Atlantic/Stanley time zone
     * @since 1.0.0
     */
    case ATLANTIC_STANLEY = 'Atlantic/Stanley';


    /* * ============================================================
     * Australia
     * ============================================================ */

    /**
     * ### Australia/Adelaide time zone
     * @since 1.0.0
     */
    case AUSTRALIA_ADELAIDE = 'Australia/Adelaide';

    /**
     * ### Australia/Brisbane time zone
     * @since 1.0.0
     */
    case AUSTRALIA_BRISBANE = 'Australia/Brisbane';

    /**
     * ### Australia/Broken Hill time zone
     * @since 1.0.0
     */
    case AUSTRALIA_BROKEN_HILL = 'Australia/Broken_Hill';

    /**
     * ### Australia/Darwin time zone
     * @since 1.0.0
     */
    case AUSTRALIA_DARWIN = 'Australia/Darwin';

    /**
     * ### Australia/Eucla time zone
     * @since 1.0.0
     */
    case AUSTRALIA_EUCLA = 'Australia/Eucla';

    /**
     * ### Australia/Hobart time zone
     * @since 1.0.0
     */
    case AUSTRALIA_HOBART = 'Australia/Hobart';

    /**
     * ### Australia/Lindeman time zone
     * @since 1.0.0
     */
    case AUSTRALIA_LINDEMAN = 'Australia/Lindeman';

    /**
     * ### Australia/Lord Howe time zone
     * @since 1.0.0
     */
    case AUSTRALIA_LORD_HOWE = 'Australia/Lord_Howe';

    /**
     * ### Australia/Melbourne time zone
     * @since 1.0.0
     */
    case AUSTRALIA_MELBOURNE = 'Australia/Melbourne';

    /**
     * ### Australia/Perth time zone
     * @since 1.0.0
     */
    case AUSTRALIA_PERTH = 'Australia/Perth';

    /**
     * ### Australia/Sydney time zone
     * @since 1.0.0
     */
    case AUSTRALIA_SYDNEY = 'Australia/Sydney';


    /* * ============================================================
     * Europe
     * ============================================================ */

    /**
     * ### Europe Amsterdam time zone
     * @since 1.0.0
     */
    case EUROPE_AMSTERDAM = 'Europe/Amsterdam';

    /**
     * ### Europe Andorra time zone
     * @since 1.0.0
     */
    case EUROPE_ANDORRA = 'Europe/Andorra';

    /**
     * ### Europe Astrakhan time zone
     * @since 1.0.0
     */
    case EUROPE_ASTRAKHAN = 'Europe/Astrakhan';

    /**
     * ### Europe Athens time zone
     * @since 1.0.0
     */
    case EUROPE_ATHENS = 'Europe/Athens';

    /**
     * ### Europe Belgrade time zone
     * @since 1.0.0
     */
    case EUROPE_BELGRADE = 'Europe/Belgrade';

    /**
     * ### Europe Berlin time zone
     * @since 1.0.0
     */
    case EUROPE_BERLIN = 'Europe/Berlin';

    /**
     * ### Europe Bratislava time zone
     * @since 1.0.0
     */
    case EUROPE_BRATISLAVA = 'Europe/Bratislava';

    /**
     * ### Europe Brussels time zone
     * @since 1.0.0
     */
    case EUROPE_BRUSSELS = 'Europe/Brussels';

    /**
     * ### Europe Bucharest time zone
     * @since 1.0.0
     */
    case EUROPE_BUCHAREST = 'Europe/Bucharest';

    /**
     * ### Europe Budapest time zone
     * @since 1.0.0
     */
    case EUROPE_BUDAPEST = 'Europe/Budapest';

    /**
     * ### Europe Busingen time zone
     * @since 1.0.0
     */
    case EUROPE_BUSINGEN = 'Europe/Busingen';

    /**
     * ### Europe Chișinău time zone
     * @since 1.0.0
     */
    case EUROPE_CHISINAU = 'Europe/Chisinau';

    /**
     * ### Europe Copenhagen time zone
     * @since 1.0.0
     */
    case EUROPE_COPENHAGEN = 'Europe/Copenhagen';

    /**
     * ### Europe Dublin time zone
     * @since 1.0.0
     */
    case EUROPE_DUBLIN = 'Europe/Dublin';

    /**
     * ### Europe Gibraltar time zone
     * @since 1.0.0
     */
    case EUROPE_GIBRALTAR = 'Europe/Gibraltar';

    /**
     * ### Europe Guernsey time zone
     * @since 1.0.0
     */
    case EUROPE_GUERNSEY = 'Europe/Guernsey';

    /**
     * ### Europe Helsinki time zone
     * @since 1.0.0
     */
    case EUROPE_HELSINKI = 'Europe/Helsinki';

    /**
     * ### Europe Isle of Man time zone
     * @since 1.0.0
     */
    case EUROPE_ISLE_OF_MAN = 'Europe/Isle_of_Man';

    /**
     * ### Europe Istanbul time zone
     * @since 1.0.0
     */
    case EUROPE_ISTANBUL = 'Europe/Istanbul';

    /**
     * ### Europe Jersey time zone
     * @since 1.0.0
     */
    case EUROPE_JERSEY = 'Europe/Jersey';

    /**
     * ### Europe Kaliningrad time zone
     * @since 1.0.0
     */
    case EUROPE_KALININGRAD = 'Europe/Kaliningrad';

    /**
     * ### Europe Kirov time zone
     * @since 1.0.0
     */
    case EUROPE_KIROV = 'Europe/Kirov';

    /**
     * ### Europe Kyiv time zone
     * @since 1.0.0
     */
    case EUROPE_KYIV = 'Europe/Kyiv';

    /**
     * ### Europe Lisbon time zone
     * @since 1.0.0
     */
    case EUROPE_LISBON = 'Europe/Lisbon';

    /**
     * ### Europe Ljubljana time zone
     * @since 1.0.0
     */
    case EUROPE_LJUBLJANA = 'Europe/Ljubljana';

    /**
     * ### Europe London time zone
     * @since 1.0.0
     */
    case EUROPE_LONDON = 'Europe/London';

    /**
     * ### Europe Luxembourg time zone
     * @since 1.0.0
     */
    case EUROPE_LUXEMBOURG = 'Europe/Luxembourg';

    /**
     * ### Europe Madrid time zone
     * @since 1.0.0
     */
    case EUROPE_MADRID = 'Europe/Madrid';

    /**
     * ### Europe Malta time zone
     * @since 1.0.0
     */
    case EUROPE_MALTA = 'Europe/Malta';

    /**
     * ### Europe Mariehamn time zone
     * @since 1.0.0
     */
    case EUROPE_MARIEHAMN = 'Europe/Mariehamn';

    /**
     * ### Europe Minsk time zone
     * @since 1.0.0
     */
    case EUROPE_MINSK = 'Europe/Minsk';

    /**
     * ### Europe Monaco time zone
     * @since 1.0.0
     */
    case EUROPE_MONACO = 'Europe/Monaco';

    /**
     * ### Europe Moscow time zone
     * @since 1.0.0
     */
    case EUROPE_MOSCOW = 'Europe/Moscow';

    /**
     * ### Europe Oslo time zone
     * @since 1.0.0
     */
    case EUROPE_OSLO = 'Europe/Oslo';

    /**
     * ### Europe Paris time zone
     * @since 1.0.0
     */
    case EUROPE_PARIS = 'Europe/Paris';

    /**
     * ### Europe Podgorica time zone
     * @since 1.0.0
     */
    case EUROPE_PODGORICA = 'Europe/Podgorica';

    /**
     * ### Europe Prague time zone
     * @since 1.0.0
     */
    case EUROPE_PRAGUE = 'Europe/Prague';

    /**
     * ### Europe Riga time zone
     * @since 1.0.0
     */
    case EUROPE_RIGA = 'Europe/Riga';

    /**
     * ### Europe Rome time zone
     * @since 1.0.0
     */
    case EUROPE_ROME = 'Europe/Rome';

    /**
     * ### Europe Samara time zone
     * @since 1.0.0
     */
    case EUROPE_SAMARA = 'Europe/Samara';

    /**
     * ### Europe San Marino time zone
     * @since 1.0.0
     */
    case EUROPE_SAN_MARINO = 'Europe/San_Marino';

    /**
     * ### Europe Sarajevo time zone
     * @since 1.0.0
     */
    case EUROPE_SARAJEVO = 'Europe/Sarajevo';

    /**
     * ### Europe Saratov time zone
     * @since 1.0.0
     */
    case EUROPE_SARATOV = 'Europe/Saratov';

    /**
     * ### Europe Simferopol time zone
     * @since 1.0.0
     */
    case EUROPE_SIMFEROPOL = 'Europe/Simferopol';

    /**
     * ### Europe Skopje time zone
     * @since 1.0.0
     */
    case EUROPE_SKOPJE = 'Europe/Skopje';

    /**
     * ### Europe Sofia time zone
     * @since 1.0.0
     */
    case EUROPE_SOFIA = 'Europe/Sofia';

    /**
     * ### Europe Stockholm time zone
     * @since 1.0.0
     */
    case EUROPE_STOCKHOLM = 'Europe/Stockholm';

    /**
     * ### Europe Tallinn time zone
     * @since 1.0.0
     */
    case EUROPE_TALLINN = 'Europe/Tallinn';

    /**
     * ### Europe Tirane time zone
     * @since 1.0.0
     */
    case EUROPE_TIRANE = 'Europe/Tirane';

    /**
     * ### Europe Ulyanovsk time zone
     * @since 1.0.0
     */
    case EUROPE_ULYANOVSK = 'Europe/Ulyanovsk';

    /**
     * ### Europe Vaduz time zone
     * @since 1.0.0
     */
    case EUROPE_VADUZ = 'Europe/Vaduz';

    /**
     * ### Europe Vatican time zone
     * @since 1.0.0
     */
    case EUROPE_VATICAN = 'Europe/Vatican';

    /**
     * ### Europe Vienna time zone
     * @since 1.0.0
     */
    case EUROPE_VIENNA = 'Europe/Vienna';

    /**
     * ### Europe Vilnius time zone
     * @since 1.0.0
     */
    case EUROPE_VILNIUS = 'Europe/Vilnius';

    /**
     * ### Europe Volgograd time zone
     * @since 1.0.0
     */
    case EUROPE_VOLGOGRAD = 'Europe/Volgograd';

    /**
     * ### Europe Warsaw time zone
     * @since 1.0.0
     */
    case EUROPE_WARSAW = 'Europe/Warsaw';

    /**
     * ### Europe Zagreb time zone
     * @since 1.0.0
     */
    case EUROPE_ZAGREB = 'Europe/Zagreb';

    /**
     * ### Europe Zurich time zone
     * @since 1.0.0
     */
    case EUROPE_ZURICH = 'Europe/Zurich';


    /* * ============================================================
     * Indian
     * ============================================================ */

    /**
     * ### Indian/Antananarivo time zone
     * @since 1.0.0
     */
    case INDIAN_ANTANANARIVO = 'Indian/Antananarivo';

    /**
     * ### Indian/Chagos time zone
     * @since 1.0.0
     */
    case INDIAN_CHAGOS = 'Indian/Chagos';

    /**
     * ### Indian/Christmastime zone
     * @since 1.0.0
     */
    case INDIAN_CHRISTMAS = 'Indian/Christmas';

    /**
     * ### Indian/Cocos time zone
     * @since 1.0.0
     */
    case INDIAN_COCOS = 'Indian/Cocos';

    /**
     * ### Indian/Comoro time zone
     * @since 1.0.0
     */
    case INDIAN_COMORO = 'Indian/Comoro';

    /**
     * ### Indian/Kerguelen time zone
     * @since 1.0.0
     */
    case INDIAN_KERGUELEN = 'Indian/Kerguelen';

    /**
     * ### Indian/Mahe time zone
     * @since 1.0.0
     */
    case INDIAN_MAHE = 'Indian/Mahe';

    /**
     * ### Indian/Maldives time zone
     * @since 1.0.0
     */
    case INDIAN_MALDIVES = 'Indian/Maldives';

    /**
     * ### Indian/Mauritius time zone
     * @since 1.0.0
     */
    case INDIAN_MAURITIUS = 'Indian/Mauritius';

    /**
     * ### Indian/Mayotte time zone
     * @since 1.0.0
     */
    case INDIAN_MAYOTTE = 'Indian/Mayotte';

    /**
     * ### Indian/Reunion time zone
     * @since 1.0.0
     */
    case INDIAN_REUNION = 'Indian/Reunion';


    /* * ============================================================
     * Pacific
     * ============================================================ */

    /**
     * ### Pacific/Apia time zone
     * @since 1.0.0
     */
    case PACIFIC_APIA = 'Pacific/Apia';

    /**
     * ### Pacific/Auckland time zone
     * @since 1.0.0
     */
    case PACIFIC_AUCKLAND = 'Pacific/Auckland';

    /**
     * ### Pacific/Bougainville time zone
     * @since 1.0.0
     */
    case PACIFIC_BOUGAINVILLE = 'Pacific/Bougainville';

    /**
     * ### Pacific/Chatham time zone
     * @since 1.0.0
     */
    case PACIFIC_CHATHAM = 'Pacific/Chatham';

    /**
     * ### Pacific/Chuuk time zone
     * @since 1.0.0
     */
    case PACIFIC_CHUUK = 'Pacific/Chuuk';

    /**
     * ### Pacific/Easter time zone
     * @since 1.0.0
     */
    case PACIFIC_EASTER = 'Pacific/Easter';

    /**
     * ### Pacific/Efate time zone
     * @since 1.0.0
     */
    case PACIFIC_EFATE = 'Pacific/Efate';

    /**
     * ### Pacific/Fakaofo time zone
     * @since 1.0.0
     */
    case PACIFIC_FAKAOFO = 'Pacific/Fakaofo';

    /**
     * ### Pacific/Fiji time zone
     * @since 1.0.0
     */
    case PACIFIC_FIJI = 'Pacific/Fiji';

    /**
     * ### Pacific/Funafuti time zone
     * @since 1.0.0
     */
    case PACIFIC_FUNAFUTI = 'Pacific/Funafuti';

    /**
     * ### Pacific/Galapagos time zone
     * @since 1.0.0
     */
    case PACIFIC_GALAPAGOS = 'Pacific/Galapagos';

    /**
     * ### Pacific/Gambier time zone
     * @since 1.0.0
     */
    case PACIFIC_GAMBIER = 'Pacific/Gambier';

    /**
     * ### Pacific/Guadalcanal time zone
     * @since 1.0.0
     */
    case PACIFIC_GUADALCANAL = 'Pacific/Guadalcanal';

    /**
     * ### Pacific/Guam time zone
     * @since 1.0.0
     */
    case PACIFIC_GUAM = 'Pacific/Guam';

    /**
     * ### Pacific/Honolulu time zone
     * @since 1.0.0
     */
    case PACIFIC_HONOLULU = 'Pacific/Honolulu';

    /**
     * ### Pacific/Kanton time zone
     * @since 1.0.0
     */
    case PACIFIC_KANTON = 'Pacific/Kanton';

    /**
     * ### Pacific/Kiritimati time zone
     * @since 1.0.0
     */
    case PACIFIC_KIRITIMATI = 'Pacific/Kiritimati';

    /**
     * ### Pacific/Kosrae time zone
     * @since 1.0.0
     */
    case PACIFIC_KOSRAE = 'Pacific/Kosrae';

    /**
     * ### Pacific/Kwajalein time zone
     * @since 1.0.0
     */
    case PACIFIC_KWAJALEIN = 'Pacific/Kwajalein';

    /**
     * ### Pacific/Majuro time zone
     * @since 1.0.0
     */
    case PACIFIC_MAJURO = 'Pacific/Majuro';

    /**
     * ### Pacific/Marquesas time zone
     * @since 1.0.0
     */
    case PACIFIC_MARQUESAS = 'Pacific/Marquesas';

    /**
     * ### Pacific/Midway time zone
     * @since 1.0.0
     */
    case PACIFIC_MIDWAY = 'Pacific/Midway';

    /**
     * ### Pacific/Nauru time zone
     * @since 1.0.0
     */
    case PACIFIC_NAURU = 'Pacific/Nauru';

    /**
     * ### Pacific/Niue time zone
     * @since 1.0.0
     */
    case PACIFIC_NIUE = 'Pacific/Niue';

    /**
     * ### Pacific/Norfolk time zone
     * @since 1.0.0
     */
    case PACIFIC_NORFOLK = 'Pacific/Norfolk';

    /**
     * ### Pacific/Noumea time zone
     * @since 1.0.0
     */
    case PACIFIC_NOUMEA = 'Pacific/Noumea';

    /**
     * ### Pacific/Pago_Pago time zone
     * @since 1.0.0
     */
    case PACIFIC_PAGO_PAGO = 'Pacific/Pago_Pago';

    /**
     * ### Pacific/Palau time zone
     * @since 1.0.0
     */
    case PACIFIC_PALAU = 'Pacific/Palau';

    /**
     * ### Pacific/Pitcairn time zone
     * @since 1.0.0
     */
    case PACIFIC_PITCAIRN = 'Pacific/Pitcairn';

    /**
     * ### Pacific/Pohnpei time zone
     * @since 1.0.0
     */
    case PACIFIC_POHNPEI = 'Pacific/Pohnpei';

    /**
     * ### Pacific/Port_Moresby time zone
     * @since 1.0.0
     */
    case PACIFIC_PORT_MORESBY = 'Pacific/Port_Moresby';

    /**
     * ### Pacific/Rarotonga time zone
     * @since 1.0.0
     */
    case PACIFIC_RAROTONGA = 'Pacific/Rarotonga';

    /**
     * ### Pacific/Saipan time zone
     * @since 1.0.0
     */
    case PACIFIC_SAIPAN = 'Pacific/Saipan';

    /**
     * ### Pacific/Tahiti time zone
     * @since 1.0.0
     */
    case PACIFIC_TAHITI = 'Pacific/Tahiti';

    /**
     * ### Pacific/Tarawa time zone
     * @since 1.0.0
     */
    case PACIFIC_TARAWA = 'Pacific/Tarawa';

    /**
     * ### Pacific/Tongatapu time zone
     * @since 1.0.0
     */
    case PACIFIC_TONGATAPU = 'Pacific/Tongatapu';

    /**
     * ### Pacific/Wake time zone
     * @since 1.0.0
     */
    case PACIFIC_WAKE = 'Pacific/Wake';

    /**
     * ### Pacific/Wallis time zone
     * @since 1.0.0
     */
    case PACIFIC_WALLIS = 'Pacific/Wallis';


    /* * ============================================================
     * Others
     * ============================================================ */

    /**
     * ### Coordinated Universal Time zone
     * @since 1.0.0
     */
    case UTC = 'UTC';

}