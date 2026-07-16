<?php declare(strict_types = 1);

/**
 * This file is part of the FireHub Project ecosystem
 *
 * @author Danijel Galić <danijel.galic@outlook.com>
 * @copyright 2026-present The FireHub Project - All rights reserved
 * @license https://opensource.org/license/Apache-2-0 Apache License, Version 2.0
 *
 * @php-version >=8.1
 * @package Core
 */

namespace FireHub\Core\Type\Str;

/**
 * ### Supported string encoding schemes
 *
 * Represents supported character, binary, and text encoding schemes used for converting, validating, and processing
 * string data across the FireHub ecosystem.
 *
 * This enumeration provides a type-safe representation of encoding identifiers and eliminates the need for raw
 * string encoding names throughout Core and Runtime layers.
 * @since 1.0.0
 */
enum Encoding:string {


    /* * ============================================================
     * Unicode encodings
     * ============================================================ */

    /**
     * @since 1.0.0
     */
    case UTF_8 = 'UTF-8';

    /**
     * @since 1.0.0
     */
    case UTF_16 = 'UTF-16';

    /**
     * @since 1.0.0
     */
    case UTF_16BE = 'UTF-16BE';

    /**
     * @since 1.0.0
     */
    case UTF_16LE = 'UTF-16LE';

    /**
     * @since 1.0.0
     */
    case UTF_32 = 'UTF-32';

    /**
     * @since 1.0.0
     */
    case UTF_32BE = 'UTF-32BE';

    /**
     * @since 1.0.0
     */
    case UTF_32LE = 'UTF-32LE';


    /* * ============================================================
     * UCS encodings
     * ============================================================ */

    /**
     * @since 1.0.0
     */
    case UCS_2 = 'UCS-2';

    /**
     * @since 1.0.0
     */
    case UCS_2BE = 'UCS-2BE';

    /**
     * @since 1.0.0
     */
    case UCS_2LE = 'UCS-2LE';

    /**
     * @since 1.0.0
     */
    case UCS_4 = 'UCS-4';

    /**
     * @since 1.0.0
     */
    case UCS_4BE = 'UCS-4BE';

    /**
     * @since 1.0.0
     */
    case UCS_4LE = 'UCS-4LE';


    /* * ============================================================
     * ASCII and Western European encodings
     * ============================================================ */

    /**
     * @since 1.0.0
     */
    case ASCII = 'ASCII';

    /**
     * @since 1.0.0
     */
    case ISO_8859_1 = 'ISO-8859-1';

    /**
     * @since 1.0.0
     */
    case ISO_8859_2 = 'ISO-8859-2';

    /**
     * @since 1.0.0
     */
    case ISO_8859_3 = 'ISO-8859-3';

    /**
     * @since 1.0.0
     */
    case ISO_8859_4 = 'ISO-8859-4';

    /**
     * @since 1.0.0
     */
    case ISO_8859_5 = 'ISO-8859-5';

    /**
     * @since 1.0.0
     */
    case ISO_8859_6 = 'ISO-8859-6';

    /**
     * @since 1.0.0
     */
    case ISO_8859_7 = 'ISO-8859-7';

    /**
     * @since 1.0.0
     */
    case ISO_8859_8 = 'ISO-8859-8';

    /**
     * @since 1.0.0
     */
    case ISO_8859_9 = 'ISO-8859-9';

    /**
     * @since 1.0.0
     */
    case ISO_8859_10 = 'ISO-8859-10';

    /**
     * @since 1.0.0
     */
    case ISO_8859_13 = 'ISO-8859-13';

    /**
     * @since 1.0.0
     */
    case ISO_8859_14 = 'ISO-8859-14';

    /**
     * @since 1.0.0
     */
    case ISO_8859_15 = 'ISO-8859-15';

    /**
     * @since 1.0.0
     */
    case ISO_8859_16 = 'ISO-8859-16';

    /**
     * @since 1.0.0
     */
    case WINDOWS_1251 = 'Windows-1251';

    /**
     * @since 1.0.0
     */
    case WINDOWS_1252 = 'Windows-1252';

    /**
     * @since 1.0.0
     */
    case WINDOWS_1254 = 'Windows-1254';


    /* * ============================================================
     * Japanese encodings
     * ============================================================ */

    /**
     * @since 1.0.0
     */
    case EUC_JP = 'EUC-JP';

    /**
     * @since 1.0.0
     */
    case EUCJP_WIN = 'eucJP-win';

    /**
     * @since 1.0.0
     */
    case EUC_JP_2004 = 'EUC-JP-2004';

    /**
     * @since 1.0.0
     */
    case SJIS = 'SJIS';

    /**
     * @since 1.0.0
     */
    case SJIS_WIN = 'SJIS-win';

    /**
     * @since 1.0.0
     */
    case SJIS_MAC = 'SJIS-mac';

    /**
     * @since 1.0.0
     */
    case SJIS_2004 = 'SJIS-2004';

    /**
     * @since 1.0.0
     */
    case CP932 = 'CP932';

    /**
     * @since 1.0.0
     */
    case CP51932 = 'CP51932';

    /**
     * @since 1.0.0
     */
    case JIS = 'JIS';

    /**
     * @since 1.0.0
     */
    case ISO_2022_JP = 'ISO-2022-JP';

    /**
     * @since 1.0.0
     */
    case ISO_2022_JP_MS = 'ISO-2022-JP-MS';

    /**
     * @since 1.0.0
     */
    case ISO_2022_JP_2004 = 'ISO-2022-JP-2004';

    /**
     * @since 1.0.0
     */
    case CP50220 = 'CP50220';

    /**
     * @since 1.0.0
     */
    case CP50221 = 'CP50221';

    /**
     * @since 1.0.0
     */
    case CP50222 = 'CP50222';


    /* * ============================================================
     * Chinese encodings
     * ============================================================ */

    /**
     * @since 1.0.0
     */
    case GB18030 = 'GB18030';

    /**
     * @since 1.0.0
     */
    case GB18030_2022 = 'GB18030-2022';

    /**
     * @since 1.0.0
     */
    case EUC_CN = 'EUC-CN';

    /**
     * @since 1.0.0
     */
    case CP936 = 'CP936';

    /**
     * @since 1.0.0
     */
    case HZ = 'HZ';

    /**
     * @since 1.0.0
     */
    case EUC_TW = 'EUC-TW';

    /**
     * @since 1.0.0
     */
    case BIG_5 = 'BIG-5';

    /**
     * @since 1.0.0
     */
    case CP950 = 'CP950';


    /* * ============================================================
     * Korean encodings
     * ============================================================ */

    /**
     * @since 1.0.0
     */
    case EUC_KR = 'EUC-KR';

    /**
     * @since 1.0.0
     */
    case UHC = 'UHC';

    /**
     * @since 1.0.0
     */
    case ISO_2022_KR = 'ISO-2022-KR';


    /* * ============================================================
     * Cyrillic encodings
     * ============================================================ */

    /**
     * @since 1.0.0
     */
    case CP866 = 'CP866';

    /**
     * @since 1.0.0
     */
    case KOI8_R = 'KOI8-R';

    /**
     * @since 1.0.0
     */
    case KOI8_U = 'KOI8-U';


    /* * ============================================================
     * Other legacy encodings
     * ============================================================ */

    /**
     * @since 1.0.0
     */
    case ARM_SCII_8 = 'ArmSCII-8';

    /**
     * @since 1.0.0
     */
    case CP850 = 'CP850';

}