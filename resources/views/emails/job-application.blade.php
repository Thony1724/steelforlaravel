{{-- resources/views/emails/job-application.blade.php --}}
<div style="font-family: Arial, Helvetica, sans-serif; background:#0D1B2E; padding:32px 0; margin:0;">
  <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="max-width:560px; margin:0 auto; background:#ffffff; border-radius:12px; overflow:hidden;">

    <!-- Header con logo -->
    <tr>
      <td style="background:#0D2D5E; padding:28px 32px; text-align:center;">
        <img src="{{ asset('img/logo-steelfor.png') }}" alt="STEELFOR" width="140" style="display:block; margin:0 auto 8px;" />
        <p style="color:#E8620A; font-size:12px; letter-spacing:2px; text-transform:uppercase; font-weight:700; margin:0;">
          Nueva postulación recibida
        </p>
      </td>
    </tr>

    <!-- Cuerpo -->
    <tr>
      <td style="padding:32px;">
        <p style="font-size:15px; color:#1E293B; margin:0 0 20px;">
          Se ha recibido una nueva postulación desde el sitio web:
        </p>

        <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="border-collapse:collapse;">
          <tr>
            <td style="padding:10px 0; border-bottom:1px solid #E2E8F0; font-size:13px; color:#64748B; width:140px;">Nombres</td>
            <td style="padding:10px 0; border-bottom:1px solid #E2E8F0; font-size:14px; color:#1E293B; font-weight:600;">{{ $data['nombres'] }}</td>
          </tr>
          <tr>
            <td style="padding:10px 0; border-bottom:1px solid #E2E8F0; font-size:13px; color:#64748B;">Apellidos</td>
            <td style="padding:10px 0; border-bottom:1px solid #E2E8F0; font-size:14px; color:#1E293B; font-weight:600;">{{ $data['apellidos'] }}</td>
          </tr>
          <tr>
            <td style="padding:10px 0; border-bottom:1px solid #E2E8F0; font-size:13px; color:#64748B;">Correo</td>
            <td style="padding:10px 0; border-bottom:1px solid #E2E8F0; font-size:14px; color:#1E293B;">
              <a href="mailto:{{ $data['correo'] }}" style="color:#1E293B; text-decoration:none;">{{ $data['correo'] }}</a>
            </td>
          </tr>
          <tr>
            <td style="padding:10px 0; border-bottom:1px solid #E2E8F0; font-size:13px; color:#64748B;">Celular</td>
            <td style="padding:10px 0; border-bottom:1px solid #E2E8F0; font-size:14px; color:#1E293B;">{{ $data['celular'] }}</td>
          </tr>
          <tr>
            <td style="padding:10px 0; border-bottom:1px solid #E2E8F0; font-size:13px; color:#64748B;">Puesto de interés</td>
            <td style="padding:10px 0; border-bottom:1px solid #E2E8F0; font-size:14px; color:#1E293B; font-weight:600;">{{ $data['puesto'] }}</td>
          </tr>
          <tr>
            <td style="padding:10px 0; border-bottom:1px solid #E2E8F0; font-size:13px; color:#64748B;">Experiencia</td>
            <td style="padding:10px 0; border-bottom:1px solid #E2E8F0; font-size:14px; color:#1E293B;">{{ $data['experiencia'] ?? 'No especificado' }}</td>
          </tr>
        </table>

        <p style="font-size:13px; color:#64748B; margin:20px 0 6px; text-transform:uppercase; letter-spacing:1px; font-weight:700;">
          Presentación personal
        </p>
        <div style="background:#F4F6F9; border-left:3px solid #E8620A; padding:14px 16px; border-radius:6px; font-size:14px; color:#334155; line-height:1.6;">
          {{ $data['presentacion'] ?? 'No incluyó presentación personal.' }}
        </div>

        @if($cvPath)
        <p style="font-size:13px; color:#94A3B8; margin:20px 0 0;">
          📎 El CV adjunto se encuentra en este correo.
        </p>
        @else
        <p style="font-size:13px; color:#94A3B8; margin:20px 0 0;">
          ⚠️ El postulante no adjuntó un CV.
        </p>
        @endif
      </td>
    </tr>

    <!-- Footer -->
    <tr>
      <td style="background:#F4F6F9; padding:20px 32px; text-align:center;">
        <p style="font-size:12px; color:#94A3B8; margin:0;">
          Este correo fue generado automáticamente desde el formulario de postulación de steelfor.com
        </p>
      </td>
    </tr>
  </table>
</div>