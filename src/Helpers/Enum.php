<?php

/**
 * Enum representing different types of professionals in the medical and healthcare field.
 */
enum ProfessionalType: string
{
    case NURSE = 'NURSE';
    case PSYCHOLOGIST = 'PSYCHOLOGIST';
    case PHYSIOTHERAPIST = 'PHYSIOTHERAPIST';
    case PHONOAUDIOLOGIST = 'PHONOAUDIOLOGIST';
    case NUTRITIONIST = 'NUTRITIONIST';
    case SOCIAL_ASSISTANT = 'SOCIAL_ASSISTANT';
    case DOCTOR = 'DOCTOR';
}

/**
 * Represents the various file types that can be associated with appointment documents.
 * Each case corresponds to a specific file format supported for use in appointments.
 */
enum AppointmentDocumentsType: string
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

/**
 * Defines the types of SIBS (Sistema de Identificação Bancária) operations available.
 * Each case represents a specific category associated with SIBS functionalities.
 */
enum SibsType: string
{
    case EXAME = "EXAME";
    case OUTROS = "OUTROS";
}

/**
 * Defines the set of possible genre types.
 * Each case represents a specific genre classification option.
 */
enum GenreType: string
{
    case MALE = "MALE";
    case FEMALE = "FEMALE";
    case OTHERS = "OUTROS";
    case UNINFORMED = "UNINFORMED";
}

/**
 * Enum representing the official acronyms of the federative units in Brazil.
 * Each case corresponds to the two-letter abbreviation of a Brazilian state or the Federal District.
 */
enum UFType: string
{
    case RO = "RO";
    case AC = "AC";
    case AM = "AM";
    case RR = "RR";
    case PA = "PA";
    case AP = "AP";
    case TO = "TO";
    case MA = "MA";
    case PI = "PI";
    case CE = "CE";
    case RN = "RN";
    case PB = "PB";
    case PE = "PE";
    case AL = "AL";
    case SE = "SE";
    case BA = "BA";
    case MG = "MG";
    case ES = "ES";
    case RJ = "RJ";
    case SP = "SP";
    case PR = "PR";
    case SC = "SC";
    case RS = "RS";
    case MS = "MS";
    case MT = "MT";
    case GO = "GO";
    case DF = "DF";
}

/**
 * Represents the days of the week.
 * Each case corresponds to a specific day, typically used in contexts requiring day names in Portuguese.
 */
enum WeekDayType: string
{
    case SEGUNDA = "SEGUNDA";
    case TERCA = "TERCA";
    case QUARTA = "QUARTA";
    case QUINTA = "QUINTA";
    case SEXTA = "SEXTA";
    case SABADO = "SABADO";
    case DOMINGO = "DOMINGO";
}

/**
 * Represents different types of kinship relationships.
 * Each case denotes a specific familial or relational bond.
 */
enum KinshipType: string
{
    case PAI = "PAI";
    case MAE = "MAE";
    case CONJUGE = "CONJUGE";
    case FILHO = "FILHO";
    case ENTEADO = "ENTEADO";
    case COMPANHEIRO = "COMPANHEIRO";
    case AVOS = "AVOS";
    case BISAVOS = "BISAVOS";
    case IRMAOS = "IRMAOS";
    case TIOS = "TIOS";
    case OUTROS = "OUTROS";
}