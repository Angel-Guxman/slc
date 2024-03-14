<div style="padding: 2rem; background-color: #f8f8f8; font-family: Arial, sans-serif; line-height: 1.6;">
    <div style="text-align: center; margin-bottom: 2rem;">
        <img src="{{ public_path('images/logo.webp')}}" alt=""  width="30%" style="border-radius: 9999px"/>
        <h2 style="font-size: 2rem; font-weight: bold; color: #333;">Perfil del Estudiante</h2>
    </div>
    <div style="background-color: #ffffff; padding: 2rem; border-radius: 8px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
        <h3 style="font-size: 1.5rem; color: #333; margin-bottom: 0.5rem;">{{ $studentWithActivities->name_student }} {{ $studentWithActivities->lastname_student }}</h3>
        <p style="margin-bottom: 2rem; color: #666;">Información personal del estudiante.</p>

        <div style="border-top: 1px solid #eaeaea; padding-top: 1.5rem;">
            <div style="margin-bottom: 1rem;">
                <strong style="color: #333;">Email:</strong>
                <p>{{ $studentWithActivities->email_student }}</p>
            </div>
            <div style="margin-bottom: 1rem;">
                <strong style="color: #333;">Comentarios:</strong>
                <p>{{ $studentWithActivities->comments ?: 'N/A' }}</p>
            </div>
        </div>

        <div style="margin-top: 2rem;">
            <strong style="color: #333; font-size: 1.2rem; display: block; margin-bottom: 1rem;">Actividades:</strong>
            <ul style="list-style: none; padding: 0; margin: 0;">
                @foreach ($studentWithActivities->activities as $activity)
                    <li style="padding: 0.5rem 0; border-top: 1px solid #eaeaea;">
                        <span style="font-weight: bold;">{{ $activity->activity_name }}</span>
                        - {{ $activity->percentage }}%
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
