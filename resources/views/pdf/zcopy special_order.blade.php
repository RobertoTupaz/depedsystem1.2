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
            font-weight: bolder;
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
            font-family: 'Trajan', serif;
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
        <p style="text-align:right; font-size:14px;">{{$date}}</p>
    </div>

    <div>
        <span style="letter-spacing: 5px; font-size:1rem; font-weight:bold;">SPECIAL ORDER</span>
        <br>
        <span style="font-size: 14px">
            No. 
            <strong style="border-bottom: 2px solid black;">
                <span style="visibility: hidden">___</span>{{$order_number}}<span style="visibility: hidden">___</span>
            </strong> 
            s. <strong>{{date('Y')}}</strong>
        </span>
    </div>

    <main style="font-size: 14px; margin-top:1rem">
        <p>
            <strong>{{$full_name}}</strong><br>
            {{$position}}<br>
            {{$school}}<br>
            {{$district}}
        </p>

        <p style="margin-top: 2rem; text-indent:4rem; text-align:justify; line-height: 2.0;">
            By the authority of the secretary of the Department of Education, you are hereby separated from the
            National Municipal Rolls as 
            <strong style="border-bottom: 2px solid black;">
                {{$position}}
            </strong> with annual compensation at the rate of 
            <strong style="border-bottom: 2px solid black;">{{$spellOutCompensation}} pesos ({{$compensation}})</strong>
            effective
            <strong style="border-bottom: 2px solid black; letter-spacing: 5px;">{{$effectivity}}</strong>.
        </p>

        <p style="margin-top:2rem; ">
            <strong>REASON:</strong> <strong style="border-bottom: 2px solid black;">{{$reason}}</strong>
        </p>
    </main>

    <table style="width: 100%; font-size: 14px; margin-top:5rem">
        <tr>
            <th style="width: 25%"></th>
            <th style="width: 25%"></th>
            <th style="width: 15%"></th>
            <th style="width: 35%"></th>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td>
                <div style="width: 100%; text-align: center;">
                    <strong>VICTORIA V. GAZO</strong> <br>
                    Schools Division Superintendent
                </div>
            </td>
        </tr>
    </table>

    <div style="margin-top: 6rem; font-size: 0.9em;">
        <strong style="font-size: 14px; border-bottom: 2px solid black;">{{$code}}</strong><br>
        <span style="font-size: 11px;"><strong>Major</strong></span><br>
        <span style="font-size: 10px;">
            Copy Furnished: <br>
            Teachers File <br>
            Division HR Service File <br>
            GSIS File
        </span>
        <hr style="background-color:black; margin-top:5rem;">
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
