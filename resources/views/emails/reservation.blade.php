<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New reservation received</title>
</head>
<body style="font-family: 'Arial', sans-serif; margin: 0; padding: 0; background-color: #f5f5f5; line-height: 1.6;">
    <table role="presentation" style="width: 100%; max-width: 600px; margin: 0 auto; background-color: #ffffff; border-radius: 8px; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);">
        <tr>
            <td style="padding: 20px;">
                <h1 style="color: #2d3748; font-size: 24px; font-weight: bold; text-align: center; margin-bottom: 20px;">New email of reservation</h1>
                <div class="header-container" style="display: flex; flex-direction: column; align-items: center; justify-content: center; text-align: center; padding: 5px; width: 100%;">
                    <div class="img-card" style="width: 100%; margin: 0 auto; max-width: 200px">
                        <img style="max-width: 100%; height: auto; margin: 0 auto;" src="{{ $message->embed(public_path('storage/img/logoGedur_6.png')) }}" alt="Logo centro de convenciones" style="max-width: 200px; height: auto;">
                    </div>
                </div>
                <div style="text-align: center; font-size: 24px; font-weight: bold; margin-top: 10px;">
                    Hello fron Laravel Mail
                </div>
                <div style="background-color: #edf2f7; padding: 15px; border-radius: 4px; margin-bottom: 15px;">
                    <p style="color: #4a5568; font-size: 16px; margin: 0 0 10px;">
                        <strong style="color: #2d3748;">names:</strong> {{ $reservation->names }}
                    </p>
                    <p style="color: #4a5568; font-size: 16px; margin: 0 0 10px;">
                        <strong style="color: #2d3748;">Surnames:</strong> {{ $reservation->surnames }}
                    </p>
                    <p style="color: #4a5568; font-size: 16px; margin: 0 0 10px;">
                        <strong style="color: #2d3748;">phone:</strong> {{ $reservation->country }} {{ $reservation->phone }}
                    </p>
                    <p style="color: #4a5568; font-size: 16px; margin: 0 0 10px;">
                        <strong style="color: #2d3748;">Email:</strong> {{ $reservation->email }}
                    </p>
                    <p style="color: #4a5568; font-size: 16px; margin: 0 0 10px;">
                        <strong style="color: #2d3748;">Room:</strong> {{ $reservation->room ?? 'not specified' }}
                    </p>
                    <p style="color: #4a5568; font-size: 16px; margin: 0 0 10px;">
                        <strong style="color: #2d3748;">Messaje:</strong> {{ $reservation->messaje }}
                    </p>
                </div>
                <p style="color: #718096; font-size: 14px; text-align: center; margin-top: 20px;">
                    This is a email send by laravel, thanks so much!!!
                </p>
            </td>
        </tr>
    </table>
</body>
</html>