<?php

namespace O4l3x4ndr3\SdkConexa\Enum;

/**
 * Defines the set of possible genre types.
 * Each case represents a specific genre classification option.
 */
enum Genre: string
{
    case MALE = "masculino";
    case FEMALE = "feminino";
    case OTHERS = "outros";
    case UNINFORMED = "não informado";
}