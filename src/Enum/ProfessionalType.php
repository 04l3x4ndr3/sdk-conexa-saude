<?php
declare(strict_types=1);

namespace O4l3x4ndr3\SdkConexa\Enum;

/**
 * Enum representing different types of professionals in the medical and healthcare field.
 */
enum ProfessionalType: string
{
    case NURSE = 'NURSE';
    case PSYCHOLOGIST = 'PSYCHOLOGIST';
    case PHYSIOTHERAPIST_AND_NURSE = 'PHYSIOTHERAPIST_AND_NURSE';
    case PHYSIOTHERAPIST = 'PHYSIOTHERAPIST';
    case PHONOAUDIOLOGIST = 'PHONOAUDIOLOGIST';
    case NUTRITIONIST = 'NUTRITIONIST';
    case SOCIAL_ASSISTANT = 'SOCIAL_ASSISTANT';
    case DOCTOR = 'DOCTOR';
}