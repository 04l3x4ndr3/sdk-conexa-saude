<?php

namespace O4l3x4ndr3\SdkConexa\Types;

class Evaluation
{
    public string $evaluationType;
    public ?string $evaluation;
    public ?array $details;
    public ?int $nps;
    public ?string $comment;

    public function __construct(
        string  $evaluationType,
        ?string $evaluation = null,
        ?array  $details = null,
        ?int    $nps = null,
        ?string $comment = null
    )
    {
        $this->evaluationType = $evaluationType;
        $this->evaluation = $evaluation;
        $this->details = $details;
        $this->nps = $nps;
        $this->comment = $comment;
    }

    public function getEvaluationType(): string
    {
        return $this->evaluationType;
    }

    public function setEvaluationType(string $evaluationType): Evaluation
    {
        $this->evaluationType = $evaluationType;
        return $this;
    }

    public function getEvaluation(): ?string
    {
        return $this->evaluation;
    }

    public function setEvaluation(?string $evaluation): Evaluation
    {
        $this->evaluation = $evaluation;
        return $this;
    }

    public function getDetails(): ?array
    {
        return $this->details;
    }

    public function setDetails(?array $details): Evaluation
    {
        $this->details = $details;
        return $this;
    }

    public function getNps(): ?int
    {
        return $this->nps;
    }

    public function setNps(?int $nps): Evaluation
    {
        $this->nps = $nps;
        return $this;
    }

    public function getComment(): ?string
    {
        return $this->comment;
    }

    public function setComment(?string $comment): Evaluation
    {
        $this->comment = $comment;
        return $this;
    }

    public function toArray(): array
    {
        return get_object_vars($this);
    }
}
