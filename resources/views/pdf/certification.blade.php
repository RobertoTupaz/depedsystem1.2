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
            src: url('{{ asset('fonts/oet.ttf') }}') format('truetype');
        }

        @font-face {
            font-family: 'Trajan';
            font-style: normal;
            font-weight: 400;
            src: url('{{ asset('fonts/trajan.ttf') }}') format('truetype');
        }

        @font-face {
            font-family: 'DejaVuSans';
            src: url('{{ asset('fonts/deja.ttf') }}') format('truetype');
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

<body style="font-family: Arial, sans-serif; margin-right: 40px; margin-left: 40px;">

    <div style="width: 100%; height:1300px; border: 0px; margin:0px;">
        {{-- Header --}}
        <div style="width: 100%; height:270px; border: 0px; margin:0px;">
            <div style="text-align: center;">
                <img src="{{ asset('logos/deped.png') }}" alt="Logo" style="width: 100px; height: auto;"><br>
                <span class="old-english" style="font-size: 20px">Republic of the Philippines</span><br>
                <span class="old-english" style="font-size: 30px">Department of Education</span><br>
                <span class="trajan" style="font-size: 18px">REGION X - NORTHERN MINDANAO</span><br>
                <span class="trajan" style="font-size: 18px">SCHOOLS DIVISION OF BUKIDNON</span>
                <hr style="border-color:black; border-bottom:1px">
            </div>
        </div>

        {{-- Body --}}
        <div style="width: 100%; height:830px; border: 0px; margin:0px;">
            <div>
                <div style="width: 100%; text-align: center;">
                    <strong>
                        <h1 style="margin-bottom: 0px; padding-bottom: 0px">CERTIFICATION</h1>
                    </strong>
                </div>
                <p style="line-height: 2.0; font-size:17px; text-align:justify; margin-top:6rem; text-indent:4rem">
                    This is to certify that according to records, 
                    <strong>Mr./Ms. {{$full_name}},</strong>
                    <span style="visibility: hidden;">
                        @php
                            for($i = 0; $i<$full_name_space; $i++) {
                                echo('i');
                            }
                        @endphp
                    </span>
                    who is/was employed as 
                    <span style="font-weight:bold;">{{$position}}</span>
                    <span style="visibility: hidden;">
                        @php
                            for($i = 0; $i<$position_space; $i++) {
                                echo('i');
                            }
                        @endphp
                    </span>
                    of this Division, assigned at 
                    <strong>{{$school_district}},</strong>
                    is properly cleared as to money & property accountability.
                </p>
                <p style="line-height: 2.0; font-size:17px; text-align:justify; text-indent:4rem;">
                    This certification is issued to the above-mentioned name in connection 
                    with his/her application for {{$status}}, effective September 01, 2024, 
                    per Special Order #297, s. 2024.
                </p>
                <p style="line-height: 2.0; font-size:17px; text-align:justify; text-indent:4rem;">
                    Given this 7th day of November 2024 at DepEd, Division Office, Malaybalay City.
                </p>
            </div>
            <div style="width: 100%; text-align:center; margin-top:18px; margin-top:10rem">
            <strong><span style="font-size:19px;">VICTORIA V. GAZO</span></strong><br>
                Schools Division Superintendent
            </div>
        </div>

        {{-- Footer --}}
        <div style="width: 100%; height:200px; border: 0px; margin:0px;">
            <div>
                <span style="font-size: 12px;">
                    Copy Furnished: <br>
                    Records Section <br>
                    GSIS File
                </span>
                <hr style="border-color:black; border-bottom:1px">
                <table>
                    <tr>
                        <th style="width: 12%"></th>
                        <th style="width: 12%"></th>
                        <th style="width: 12%"></th>
                        <th style="width: 64%"></th>
                    </tr>
                    <tr>
                        <td>
                            <img src="{{ asset('logos/depedBukidnon.png') }}" alt="Logo"
                                style="width: 100px; height: auto;">
                        </td>
                        <td>
                            <img src="{{ asset('logos/matatag.png') }}" alt="Logo"
                                style="width: 100px; height: auto;">
                        </td>
                        <td>
                            <img src="{{ asset('logos/bagongpilipinas.png') }}" alt="Logo"
                                style="width: 100px; height: auto;">
                        </td>
                        <td style="font-size: 12px; line-height: 2.0;">
                            <span>Address: Fortich St., Sumpong, Malaybalay City, Bukidnon</span><br>
                            <span>Telephone no: +639178423657</span><br>
                            <span>Website: <a href="https://bukidnon.deped.gov.ph">https://bukidnon.deped.gov.ph</a></span><br>
                            <span>Email Address: <a href="mailto:bukidnon@deped.gov.ph">bukidnon@deped.gov.ph</a></span>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>

</html>





