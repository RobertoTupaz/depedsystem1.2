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
    <div>
        <div style="width: 100%; text-align: center;">
            <strong>
                <h1 style="margin-bottom: 0px; padding-bottom: 0px">CERTIFICATION</h1>
            </strong>
        </div>
        <p style="line-height: 2.0; font-size:14px; text-align:justify; margin-top:6rem; text-indent:4rem">
            This is to certify that according to records, 
            <strong>Mr./Ms. {{$full_name}}</strong>, who is/was employed as 
            <strong>{{$position}}</strong> of this Division, assigned at 
            <strong>{{$school_district}}</strong>, is properly cleared 
            as to money & property accountability.
        </p>
        <p style="line-height: 2.0; font-size:14px; text-align:justify; text-indent:4rem;">
            This certification is issued to the above-mentioned name in connection 
            with his/her application for {{$status}}, effective September 01, 2024, 
            per Special Order #297, s. 2024.
        </p>
        <p style="line-height: 2.0; font-size:14px; text-align:justify; text-indent:4rem;">
            Given this 7th day of November 2024 at DepEd, Division Office, Malaybalay City.
        </p>
    </div>
    <div style="width: 100%; text-align:center; margin-top:8rem">
        <strong>VICTORIA V. GAZO</strong> <br>
        Schools Division Superintendent
    </div>
    <div style="margin-top: 10rem; font-size: 0.9em;">
        <span style="font-size: 10px; visibility:hidden;">
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
