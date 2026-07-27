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
     * ### UTF-8 encoding
     * @since 1.0.0
     */
    case UTF_8 = 'UTF-8';

    /**
     * ### UTF-16 encoding
     * @since 1.0.0
     */
    case UTF_16 = 'UTF-16';

    /**
     * ### UTF-16 Big Endian encoding
     * @since 1.0.0
     */
    case UTF_16BE = 'UTF-16BE';

    /**
     * ### UTF-16 Little Endian encoding
     * @since 1.0.0
     */
    case UTF_16LE = 'UTF-16LE';

    /**
     * ### UTF-32 encoding
     * @since 1.0.0
     */
    case UTF_32 = 'UTF-32';

    /**
     * ### UTF-32 Big Endian encoding
     * @since 1.0.0
     */
    case UTF_32BE = 'UTF-32BE';

    /**
     * ### UTF-32 Little Endian encoding
     * @since 1.0.0
     */
    case UTF_32LE = 'UTF-32LE';


    /* * ============================================================
     * UCS encodings
     * ============================================================ */

    /**
     * ### UCS-2 encoding
     * @since 1.0.0
     */
    case UCS_2 = 'UCS-2';

    /**
     * ### UCS-2 Big Endian encoding
     * @since 1.0.0
     */
    case UCS_2BE = 'UCS-2BE';

    /**
     * ### UCS-2 Little Endian encoding
     * @since 1.0.0
     */
    case UCS_2LE = 'UCS-2LE';

    /**
     * ### UCS-4 encoding
     * @since 1.0.0
     */
    case UCS_4 = 'UCS-4';

    /**
     * ### UCS-4 Big Endian encoding
     * @since 1.0.0
     */
    case UCS_4BE = 'UCS-4BE';

    /**
     * ### UCS-4 Little Endian encoding
     * @since 1.0.0
     */
    case UCS_4LE = 'UCS-4LE';


    /* * ============================================================
     * ASCII and Western European encodings
     * ============================================================ */

    /**
     * ### ASCII encoding
     * @since 1.0.0
     */
    case ASCII = 'ASCII';

    /**
     * ### ISO-8859-1 encoding
     * @since 1.0.0
     */
    case ISO_8859_1 = 'ISO-8859-1';

    /**
     * ### ISO-8859-2 encoding
     * @since 1.0.0
     */
    case ISO_8859_2 = 'ISO-8859-2';

    /**
     * ### ISO-8859-3 encoding
     * @since 1.0.0
     */
    case ISO_8859_3 = 'ISO-8859-3';

    /**
     * ### ISO-8859-4 encoding
     * @since 1.0.0
     */
    case ISO_8859_4 = 'ISO-8859-4';

    /**
     * ### ISO-8859-5 encoding
     * @since 1.0.0
     */
    case ISO_8859_5 = 'ISO-8859-5';

    /**
     * ### ISO-8859-6 encoding
     * @since 1.0.0
     */
    case ISO_8859_6 = 'ISO-8859-6';

    /**
     * ### ISO-8859-7 encoding
     * @since 1.0.0
     */
    case ISO_8859_7 = 'ISO-8859-7';

    /**
     * ### ISO-8859-8 encoding
     * @since 1.0.0
     */
    case ISO_8859_8 = 'ISO-8859-8';

    /**
     * ### ISO-8859-9 encoding
     * @since 1.0.0
     */
    case ISO_8859_9 = 'ISO-8859-9';

    /**
     * ### ISO-8859-10 encoding
     * @since 1.0.0
     */
    case ISO_8859_10 = 'ISO-8859-10';

    /**
     * ### ISO-8859-13 encoding
     * @since 1.0.0
     */
    case ISO_8859_13 = 'ISO-8859-13';

    /**
     * ### ISO-8859-14 encoding
     * @since 1.0.0
     */
    case ISO_8859_14 = 'ISO-8859-14';

    /**
     * ### ISO-8859-15 encoding
     * @since 1.0.0
     */
    case ISO_8859_15 = 'ISO-8859-15';

    /**
     * ### ISO-8859-16 encoding
     * @since 1.0.0
     */
    case ISO_8859_16 = 'ISO-8859-16';

    /**
     * ### Windows-1251 encoding
     * @since 1.0.0
     */
    case WINDOWS_1251 = 'Windows-1251';

    /**
     * ### Windows-1252 encoding
     * @since 1.0.0
     */
    case WINDOWS_1252 = 'Windows-1252';

    /**
     * ### Windows-1254 encoding
     * @since 1.0.0
     */
    case WINDOWS_1254 = 'Windows-1254';


    /* * ============================================================
     * Japanese encodings
     * ============================================================ */

    /**
     * ### EUC-JP encoding
     * @since 1.0.0
     */
    case EUC_JP = 'EUC-JP';

    /**
     * ### EUC-JP Windows encoding
     * @since 1.0.0
     */
    case EUCJP_WIN = 'eucJP-win';

    /**
     * ### EUC-JP 2004 encoding
     * @since 1.0.0
     */
    case EUC_JP_2004 = 'EUC-JP-2004';

    /**
     * ### Shift JIS encoding
     * @since 1.0.0
     */
    case SJIS = 'SJIS';

    /**
     * ### Shift JIS Windows encoding
     * @since 1.0.0
     */
    case SJIS_WIN = 'SJIS-win';

    /**
     * ### Shift JIS Mac encoding
     * @since 1.0.0
     */
    case SJIS_MAC = 'SJIS-mac';

    /**
     * ### Shift JIS 2004 encoding
     * @since 1.0.0
     */
    case SJIS_2004 = 'SJIS-2004';

    /**
     * ### CP932 encoding
     * @since 1.0.0
     */
    case CP932 = 'CP932';

    /**
     * ### CP51932 encoding
     * @since 1.0.0
     */
    case CP51932 = 'CP51932';

    /**
     * ### JIS encoding
     * @since 1.0.0
     */
    case JIS = 'JIS';

    /**
     * ### ISO-2022-JP encoding
     * @since 1.0.0
     */
    case ISO_2022_JP = 'ISO-2022-JP';

    /**
     * ### ISO-2022-JP Microsoft encoding
     * @since 1.0.0
     */
    case ISO_2022_JP_MS = 'ISO-2022-JP-MS';

    /**
     * ### ISO-2022-JP 2004 encoding
     * @since 1.0.0
     */
    case ISO_2022_JP_2004 = 'ISO-2022-JP-2004';

    /**
     * ### CP50220 encoding
     * @since 1.0.0
     */
    case CP50220 = 'CP50220';

    /**
     * ### CP50221 encoding
     * @since 1.0.0
     */
    case CP50221 = 'CP50221';

    /**
     * ### CP50222 encoding
     * @since 1.0.0
     */
    case CP50222 = 'CP50222';


    /* * ============================================================
     * Chinese encodings
     * ============================================================ */

    /**
     * ### GB18030 encoding
     * @since 1.0.0
     */
    case GB18030 = 'GB18030';

    /**
     * ### GB18030-2022 encoding
     * @since 1.0.0
     */
    case GB18030_2022 = 'GB18030-2022';

    /**
     * ### EUC-CN encoding
     * @since 1.0.0
     */
    case EUC_CN = 'EUC-CN';

    /**
     * ### CP936 encoding
     * @since 1.0.0
     */
    case CP936 = 'CP936';

    /**
     * ### HZ encoding
     * @since 1.0.0
     */
    case HZ = 'HZ';

    /**
     * ### EUC-TW encoding
     * @since 1.0.0
     */
    case EUC_TW = 'EUC-TW';

    /**
     * ### Big5 encoding
     * @since 1.0.0
     */
    case BIG_5 = 'BIG-5';

    /**
     * ### CP950 encoding
     * @since 1.0.0
     */
    case CP950 = 'CP950';


    /* * ============================================================
     * Korean encodings
     * ============================================================ */

    /**
     * ### EUC-KR encoding
     * @since 1.0.0
     */
    case EUC_KR = 'EUC-KR';

    /**
     * ### Unified Hangul Code encoding
     * @since 1.0.0
     */
    case UHC = 'UHC';

    /**
     * ### ISO-2022-KR encoding
     * @since 1.0.0
     */
    case ISO_2022_KR = 'ISO-2022-KR';


    /* * ============================================================
     * Cyrillic encodings
     * ============================================================ */

    /**
     * ### CP866 encoding
     * @since 1.0.0
     */
    case CP866 = 'CP866';

    /**
     * ### KOI8-R encoding
     * @since 1.0.0
     */
    case KOI8_R = 'KOI8-R';

    /**
     * ### KOI8-U encoding
     * @since 1.0.0
     */
    case KOI8_U = 'KOI8-U';


    /* * ============================================================
     * Other legacy encodings
     * ============================================================ */

    /**
     * ### ArmSCII-8 encoding
     * @since 1.0.0
     */
    case ARM_SCII_8 = 'ArmSCII-8';

    /**
     * ### CP850 encoding
     * @since 1.0.0
     */
    case CP850 = 'CP850';

}