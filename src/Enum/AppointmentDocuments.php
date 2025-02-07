<?php

namespace O4l3x4ndr3\SdkConexa\Enum;

/**
 * Represents the various file types that can be associated with appointment documents.
 * Each case corresponds to a specific file format supported for use in appointments.
 */
enum AppointmentDocuments: string
{
    case PDF = "pdf";
    case PNG = "png";
    case JPG = "jpg";
    case JPEG = "jpeg";
    case XLS = "xls";
    case XLSX = "xlsx";
    case Mp3 = "mp3";
    case MP4 = "mp4";
    case MPGA = "mpga";
    case WAV = "wav";
    case FLAC = "flac";
    case M4A = "m4a";
    case OGG = "ogg";
    case ACC = "acc";
    case WMA = "wma";
    case AIFF = "aiff";
    case AMR = "amr";
}