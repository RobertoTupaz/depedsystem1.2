<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>

    <style>
        @font-face {
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 400;
            src: url('{{ public_path('fonts/oet.ttf') }}') format('truetype');
        }

        @font-face {
            font-family: 'Trajan';
            font-style: normal;
            font-weight: 400;
            src: url('{{ public_path('fonts/trajan.ttf') }}') format('truetype');
        }

        @font-face {
            font-family: 'DejaVuSans';
            src: url('{{ public_path('fonts/deja.ttf') }}') format('truetype');
        }

        .peso-symbol {
            font-family: 'DejaVuSans', sans-serif;
        }

        .old-english {
            font-family: 'Poppins', sans-serif;
        }

        .trajan {
            font-family: 'Trajan', sans-serif;
        }
    </style>
</head>

<body style="font-family: Arial, sans-serif; margin-right: 40px; margin-left: 40px; margin-top: -20px;">
    <div style="text-align: center;">
        <img src="{{ public_path('logos/deped.png') }}" alt="Logo" style="width: 80px; height: auto;"><br>
        <span class="old-english">Republic of the Philippines</span><br>
        <span class="old-english" style="font-size: 24px">Department of Education</span><br>
        <span class="trajan" style="font-size: 14px">REGION X - NORTHERN MINDANAO</span><br>
        <span class="trajan" style="font-size: 14px">SCHOOLS DIVISION OF BUKIDNON</span>
        <hr style="background-color:black;">
    </div>
    <div class="document">
        <div style="width: 100%; text-align: center;">
            <strong>
                <h2 style="margin-bottom: 0px; padding-bottom: 0px">CERTIFICATE OF EMPLOYMENT</h2>
            </strong>
        </div>
        <main>
          <p style="font-size: 16px; margin-top:4rem;">
            <strong>TO WHOM IT MAY CONCERN:</strong>
          </p>
          <p style="font-size: 14px; margin-top:3rem; text-indent:4rem; text-align:justify;">
            This is to certify that according to records in this office, 
            <strong>Mr./Ms 
                <span style="border-bottom: 1px solid black;">{{$full_name}}</span>
            </strong> is presently employed as 
            <strong style="border-bottom: 1px solid black;">TEACHER I</strong> assigned at 
            <span style="border-bottom: 1px solid black;">KALILANGAN CES</span>, District of 
            <span style="border-bottom: 1px solid black;">KALILANGAN EAST</span>.
          </p>
    
          <p style="font-size: 14px; text-indent:4rem; text-align:justify;">
            This certification is issued to 
            <strong>Mr./Ms 
                <span style="border-bottom: 1px solid black;">{{$full_name}}</span>.
            </strong> 
            for whatever purpose it may serve him/her best.
          </p>
    
          <p style="font-size: 14px; text-indent:4rem; text-align:justify;">
            Given this <span>{{$day}}</span> day of 
            <span>{{$month_year}}</span> at DepEd - Bukidnon, Division Office, 
            <span>Malaybalay City</span>.
          </p>
        </main>
    </div>
    <div style="width: 100%; text-align:center; margin-top:8rem; font-size:14px;">
        <strong>JANINE S. ORONG</strong> <br>
        HRMO II
    </div>
    <div style="margin-top: 11rem; font-size: 0.9em;">
        <span style="font-size: 10px; visibility:hidden">
            Copy Furnished: <br>
            Records Section <br>
            GSIS File
        </span>
        <hr style="background-color:black;">
        <table>
            <tr>
                <th style="width: 20%">
                </th>
                <th style="width: 80%">
                </th>
            </tr>
            <tr>
                <td>
                    <img src="{{ public_path('logos/depedbukidnon.png') }}" alt="Logo"
                        style="width: 70px; height: auto;">
                </td>
                <td>
                    <img src="{{ public_path('logos/matatag.png') }}" alt="Logo"
                        style="width: 80px; height: auto;">
                </td>
                <td>
                    <img src="{{ public_path('logos/bagongpilipinas.png') }}" alt="Logo"
                        style="width: 80px; height: auto;">
                </td>
                <td style="font-size: 10px">
                    <span>Address: Fortich St., Sumpong, Malaybalay City, Bukidnon</span><br>
                    <span>Telephone no: +639178423657</span><br>
                    <span>Website: <a href="https://bukidnon.deped.gov.ph">https://bukidnon.deped.gov.ph</a></span><br>
                    <span>Email Address: <a href="mailto:bukidnon@deped.gov.ph">bukidnon@deped.gov.ph</a></span>
                </td>
            </tr>
        </table>
    </div>
</body>

</html>