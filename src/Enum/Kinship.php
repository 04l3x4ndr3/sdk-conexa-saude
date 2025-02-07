<?php

namespace O4l3x4ndr3\SdkConexa\Enum;

/**
 * Represents different types of kinship relationships.
 * Each case denotes a specific familial or relational bond.
 */
enum Kinship: string
{
    case PAI = 'PAI';
    case MAE = 'MAE';
    case CONJUGE = 'CONJUGE';
    case FILHO = 'FILHO';
    case ENTEADO = 'ENTEADO';
    case COMPANHEIRO = 'COMPANHEIRO';
    case AVOS = 'AVOS';
    case BISAVOS = 'BISAVOS';
    case IRMAOS = 'IRMAOS';
    case TIOS = 'TIOS';
    case OUTROS = 'OUTROS';
}