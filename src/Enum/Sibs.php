<?php

namespace O4l3x4ndr3\SdkConexa\Enum;

/**
 * Defines the types of SIBS (Sistema de Identificação Bancária) operations available.
 * Each case represents a specific category associated with SIBS functionalities.
 */
enum Sibs: string
{
    case EXAME = "EXAME";
    case OUTROS = "OUTROS";
}
