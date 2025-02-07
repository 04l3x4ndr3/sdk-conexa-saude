<?php
declare(strict_types=1);

namespace O4l3x4ndr3\SdkConexa\Enum;

/**
 * Enum representing different types of professionals in the medical and healthcare field.
 */
enum ProfessionalType: string
{
    case NURSE = 'enfermeiro(a)';
    case PSYCHOLOGIST = 'psicólogo(a)';
    case PHYSIOTHERAPIST_AND_NURSE = 'PHYSIOTHERAPIST_AND_NURSE';
    case PHYSIOTHERAPIST = 'psicoterapeuta';
    case PHONOAUDIOLOGIST = 'fonoaudiologo(a)';
    case NUTRITIONIST = 'notricionista';
    case SOCIAL_ASSISTANT = 'assistente social';
    case DOCTOR = 'médico(a)';
}