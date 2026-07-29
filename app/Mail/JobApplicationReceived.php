<?php
// app/Mail/JobApplicationReceived.php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class JobApplicationReceived extends Mailable
{
    use Queueable, SerializesModels;

    public array $data;
    public ?string $cvPath;

    public function __construct(array $data, ?string $cvPath = null)
    {
        $this->data = $data;
        $this->cvPath = $cvPath;
    }

    public function build()
    {
        $mail = $this->subject('Nueva postulación: ' . $this->data['puesto'])
            ->view('emails.job-application');

        if ($this->cvPath && file_exists($this->cvPath)) {
            $mail->attach($this->cvPath);
        }

        return $mail;
    }
}