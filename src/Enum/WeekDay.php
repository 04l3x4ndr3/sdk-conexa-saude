<?php

namespace O4l3x4ndr3\SdkConexa\Enum;


/**
 * Represents the days of the week.
 * Each case corresponds to a specific day, typically used in contexts requiring day names in Portuguese.
 */
enum WeekDay: string
{
    case SEGUNDA = "segunda-feira";
    case TERCA = "terça-feira";
    case QUARTA = "quarta-feira";
    case QUINTA = "quinta-feira";
    case SEXTA = "sexta-feira";
    case SABADO = "sábado";
    case DOMINGO = "domingo";
}