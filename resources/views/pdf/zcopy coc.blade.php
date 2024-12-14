<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>

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
    <div style="font-size: 14px">
        <div style="width: 100%; text-align: center;">
            <strong><h2>CERTIFICATE OF EMPLOYMENT AND COMPENSATION</h2></strong>
        </div>
        <p>TO WHOM IT MAY CONCERN:</p>
        <p style="text-indent: 4rem; text-align:justify;">
            This is to certify that according to records in this office, 
            <strong>Mr./Ms. <u>{{$full_name}}</u></strong> 
            is presently employed as <u><strong>{{$position}}</strong></u> 
            assigned at <u><span>{{$school}}</span></u> 
            under the district of <u><span>{{$district}}</span>.</u>
        </p>
        <p style="text-indent: 4rem;">
            This is to further certify that he/she is receiving the following compensation:
        </p>
        <p style="text-indent: 5rem;">
            Basic Annual Compensation as of {{$date}}:
        </p>
        <table style="width: 100%">
            <tr>
                <th style="width: 50%"></th>
                <th style="width: 50%"></th>
            </tr>
            <tr>
                <td style="text-indent: 10rem">Basic Annual Salary</td>
                <td style="text-align: right; padding-right:6rem;">{{$annual_salary}}</td>
            </tr>
            <tr>
                <td style="text-indent: 10rem">ACA/ PERA</td>
                <td style="text-align: right; padding-right:6rem;">{{$aca_pera}}</td>
            </tr>
            <tr>
                <td style="text-indent: 10rem">Bonus</td>
                <td style="text-align: right; padding-right:6rem;">{{$bonus}}</td>
            </tr>
            <tr>
                <td style="text-indent: 10rem">Chalk Allowance</td>
                <td style="text-align: right; padding-right:6rem;">{{$chalk_allowance}}</td>
            </tr>
            <tr>
                <td style="text-indent: 10rem">Clothing Allowance</td>
                <td style="text-align: right; padding-right:6rem;">{{$clothing_allowance}}</td>
            </tr>
            <tr>
                <td style="text-indent: 10rem">PEI</td>
                <td style="text-align: right; padding-right:6rem;">{{$pei}}</td>
            </tr>
            <tr>
                <td style="text-indent: 10rem">Hazard Pay</td>
                <td style="text-align: right; padding-right:6rem;">{{$hazard_pay}}</td>
            </tr>
        </table>
        <div style="width: 100%; text-align: right; margin-top:2rem;">
            <strong>Total</strong>
            <span style="visibility: hidden;">_____________________</span>
            <span class="peso-symbol">₱</span> <strong>{{$total}}</strong>
            <span style="visibility: hidden;">____________</span>
        </div>
        <p style="text-indent: 4rem; margin-top:2rem; text-align:justify;">This certification is issued to 
            <strong><span>Mr./Ms. <u>CASQUITE, AILEEN S.</u></span></strong>
            for whatever purpose it may serve him/her best.
        </p>
        <p style="text-indent: 4rem; text-align:justify;">
            Given this <span>27th</span> day of <span>September 2024</span> 
            at DepEd - Bukidnon, Division Office, Malaybalay City.
        </p>
        <p style="margin-top: 4rem; text-align: center;">
            <strong>JANINE S. ORONG</strong><br>
            HRMO II
        </p>
    </div>
    <div style="margin-top: 3rem; font-size: 0.9em;">
        <span style="font-size: 10px">
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
                    <img src="{{ public_path('logos/matatag.png') }}" alt="Logo" style="width: 80px; height: auto;">
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
