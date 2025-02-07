<?php

namespace O4l3x4ndr3\SdkConexa\Enum;

/**
 * Represents different types of kinship relationships.
 * Each case denotes a specific familial or relational bond.
 */
enum Kinship: string
{
    case PAI = "pai";
    case MAE = "mae";
    case CONJUGE = "conjuge";
    case FILHO = "filho";
    case ENTEADO = "enteado";
    case COMPANHEIRO = "companheiro";
    case AVOS = "avós";
    case BISAVOS = "bisavós";
    case IRMAOS = "irmãos";
    case TIOS = "tios";
    case OUTROS = "outros";
}